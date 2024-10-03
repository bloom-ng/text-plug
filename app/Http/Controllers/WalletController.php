<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WalletController extends Controller
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = Config::where('key', 'flutterwave')->first()->value ?? env('FLUTTERWAVE_SECRET_KEY');
    }

    public function index(Request $request)
    {
        // ->where('type', '!=', Wallet::REFUND)
        $query = Wallet::where('user_id', auth()->user()->id);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('amount', 'like', "%$search%")
                    ->orWhere('type', 'like', "%$search%")
                    ->orWhere('created_at', 'like', "%$search%");
            });
        }

        $wallets = $query->latest()->paginate(10);
        $balance = User::where('id', Auth::user()->id)->first()->walletBalance();
        $amount_spent = User::where('id', Auth::user()->id)->first()->amountSpent();
        $transactions = Transaction::with('user')->where('user_id', Auth::user()->id)->where('status', '!=', Transaction::PAYMENT_SUCCESSFUL)->latest()->paginate();

        return view('wallet')->with([
            'wallets' => $wallets,
            'balance' => $balance,
            'amount_spent' => $amount_spent,
            'search' => $request->input('search'),
            'transactions' => $transactions
        ]);
    }

    public function adminIndex(Request $request)
    {
        $query = Wallet::with('user')->where('type', Wallet::CREDIT);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('amount', 'like', "%$search%")
                    ->orWhereHas('user', function ($userQuery) use ($search) {
                        $userQuery->where('name', 'like', "%$search%")
                            ->orWhere('email', 'like', "%$search%");
                    })
                    ->orWhere('created_at', 'like', "%$search%");
            });
        }

        $wallets = $query->latest()->paginate(10);
        $balance = Wallet::where('type', Wallet::CREDIT)->sum('amount');
        $amount_spent = Wallet::where('type', Wallet::DEBIT)->sum('amount');
        $transaction = Transaction::with('user')->where('status', '!=', Transaction::PAYMENT_SUCCESSFUL);

        if ($request->has('transaction_search')) {
            $search = $request->input('transaction_search');
            $transaction->where(function ($q) use ($search) {
                $q->where('amount', 'like', "%$search%")
                    ->orWhereHas('user', function ($userQuery) use ($search) {
                        $userQuery->where('name', 'like', "%$search%")
                            ->orWhere('email', 'like', "%$search%");
                    })
                    ->orWhere('created_at', 'like', "%$search%");
            });
        }
        $transactions = $transaction->latest()->paginate(10);

        return view('admin.wallets.index', compact('transactions', 'wallets', 'balance', 'amount_spent'))
            ->with('search', $request->input('search'), $request->input('transaction_search'));
    }

    public function fundWallet(Request $request)
    {
        $request->validate([
            'amount' => 'required|integer',
        ]);

        // $currency = $this->getCurrency($request->user()->country);

        $apiUrl = "https://api.flutterwave.com/v3/payments";
        $apiKey = $this->apiKey;

        do {
            $reference = uniqid('txn_', false);
        } while (Transaction::where('reference_id', $reference)->exists());

        // Create a new transaction entry
        Transaction::create([
            'reference_id' => $reference,
            'amount' => $request->amount,
            'user_id' => $request->user()->id,
            'status' => Transaction::PAYMENT_PENDING
        ]);

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
            'Content-Type' => 'application/json',
        ])->post($apiUrl, [
            "amount" => $request->amount,
            "redirect_url" => env('APP_URL') . "/user/fund-confirm",
            "currency" => "NGN",
            "tx_ref" => $reference,
            "notification_url" => "https://example.com/webhook",
            "narration" => "SharePadi Wallet Funding",
            "channels" => ["card", "bank_transfer", "pay_with_bank", "mobile_money"],
            "default_channel" => "card",
            "customizations" => [
                "title" => 'TextPlug Wallet Funding',
            ],
            "customer" => [
                "email" => $request->user()->email,
                "name" => $request->user()->name
            ],
            "merchant_bears_cost" => false
        ]);

        $responseBody = $response->json();
        if ($responseBody['status']) {
            return redirect($responseBody['data']['link']);
        } else {
            return back()->withErrors(['message' => 'Unable to initialize payment.']);
        }
    }

    public function confirmFunding(Request $request)
    {
        $transaction = Transaction::where('reference_id', $request->query('tx_ref'))->first();
        if ($request->query('status') == 'cancelled') {
            $transaction->update([
                'status' => Transaction::PAYMENT_CANCELLED
            ]);

            return redirect('/user/wallet')->with('error', 'Wallet funding cancelled');
        }

        if (!$transaction) {
            // Handle the case where the transaction is not found
            return redirect('/user/wallet')->with('error', 'Transaction not found');
        }

        $user_id = $transaction->user_id;

        $response = Http::retry(3)->withToken($this->apiKey, 'Bearer')
            ->get('https://api.flutterwave.com/v3/transactions/' . $request->query('transaction_id') . '/verify');


        if ($response->successful() && $response['data']['status'] == 'successful') {
            Wallet::create(['user_id' => $user_id, 'amount' => $transaction->amount, 'type' => Wallet::CREDIT]);

            $transaction->update([
                'status' => Transaction::PAYMENT_SUCCESSFUL
            ]);

            // Check if the transaction is already successful to avoid double processing
            if ($transaction->status == Transaction::PAYMENT_SUCCESSFUL) {
                return redirect('/user/wallet')->with('success', 'Wallet funded successfully.');
            }

            return redirect('/user/wallet')->with('success', 'Wallet funded successfully');
        } else {
            $transaction->update([
                'status' => Transaction::PAYMENT_FAILED
            ]);

            return redirect('/user/wallet')->with('error', 'Wallet funding failed');
        }
    }

    public function adminCreditShow(Request $request, User $user)
    {
        return view('admin.users.credit', compact('user'));
    }

    public function adminCredit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'user_id' => 'required|integer',
            'amount' => 'required|integer',
        ]);

        Wallet::create(['user_id' => $request->user_id, 'amount' => $request->amount, 'type' => Wallet::CREDIT]);

        return redirect('/admin/users')->with('success', 'Wallet credited successfully');
    }

    public function adminDebitShow(Request $request, User $user)
    {
        return view('admin.users.debit', compact('user'));
    }

    public function adminDebit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'user_id' => 'required|integer',
            'amount' => 'required|integer',
        ]);

        Wallet::create(['user_id' => $request->user_id, 'amount' => $request->amount, 'type' => Wallet::DEBIT]);

        return redirect('/admin/users')->with('success', 'Wallet debited successfully');
    }

    public function adminReVerify(Transaction $transaction)
    {
        $apiKey = $this->apiKey;
        $transactionReferenceId = $transaction['reference_id'];
        $url = 'https://api.flutterwave.com/v3/transactions/verify_by_reference/?tx_ref=' . $transactionReferenceId;

        $ch = curl_init($url);
        curl_setopt(
            $ch,
            CURLOPT_RETURNTRANSFER,
            true
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $apiKey
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
            'tx_ref' => $transactionReferenceId
        ]));

        $maxRetries = 3;
        $retries = 0;
        $success = false;
        $response = null;

        while (!$success && $retries < $maxRetries) {
            $response = curl_exec($ch);
            $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            if ($statusCode == 200) {
                $success = true;
            } else {
                $retries++;
                // You may want to add a delay here before retrying
            }
        }

        curl_close($ch);

        if (
            $success && json_decode($response, true)['data']['status'] == 'successful'
        ) {
            Wallet::create(['user_id' => $transaction['user_id'], 'amount' => $transaction['amount'], 'type' => Wallet::CREDIT]);

            $transaction->update([
                'status' => Transaction::PAYMENT_SUCCESSFUL
            ]);

            return redirect('/admin/wallet')->with('success', 'This payment was successful and has been verified successfully');
        } else {
            $transaction->update([
                'status' => Transaction::PAYMENT_FAILED
            ]);
            $errorMessage = json_decode($response, true)['message'] ?? 'Payment verification failed.';
            return redirect('/admin/wallet')->with('error', $errorMessage);
        }
    }

    public function userReVerify(Transaction $transaction)
    {
        $apiKey = $this->apiKey;
        $transactionReferenceId = $transaction['reference_id'];
        $url = 'https://api.flutterwave.com/v3/transactions/verify_by_reference/?tx_ref=' . $transactionReferenceId;

        $ch = curl_init($url);
        curl_setopt(
            $ch,
            CURLOPT_RETURNTRANSFER,
            true
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $apiKey
        ]);


        $maxRetries = 3;
        $retries = 0;
        $success = false;
        $response = null;

        while (!$success && $retries < $maxRetries) {
            $response = curl_exec($ch);
            $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            if ($statusCode == 200) {
                $success = true;
            } else {
                $retries++;
                // You may want to add a delay here before retrying
            }
        }

        curl_close($ch);

        if (
            $success && json_decode($response, true)['data']['status'] == 'successful'
        ) {
            // dd("got here");
            Wallet::create(['user_id' => $transaction['user_id'], 'amount' => $transaction['amount'], 'type' => Wallet::CREDIT]);

            $transaction->update([
                'status' => Transaction::PAYMENT_SUCCESSFUL
            ]);

            return redirect('/user/wallet')->with('success', 'This payment was successful and has been verified successfully');
        } else {
            $transaction->update([
                'status' => Transaction::PAYMENT_FAILED
            ]);
            $errorMessage = json_decode($response, true)['message'] ?? 'Payment verification failed.';

            return redirect('/user/wallet')->with('error', $errorMessage);
        }
    }

    private function adminVerify(Transaction $transaction)
    {
        // dump($transaction['reference_id']);
        $response = Http::retry(3, 500)->withToken($this->apiKey, 'Bearer')
            ->get('https://api.flutterwave.com/v3/transactions/verify_by_reference/', [
                'tx_ref' => $transaction['reference_id']
            ]);

        Log::info('Transaction verification attempt for ID: ' . $transaction['id'] . ' with reference ID: ' . $transaction['reference_id']);
        Log::info('Transaction response body: ' . $response->body());

        if ($response->successful() && $response['data']['status'] == 'successful') {
            Wallet::create(['user_id' => $transaction['user_id'], 'amount' => $transaction['amount'], 'type' => Wallet::CREDIT]);

            $transaction->update([
                'status' => Transaction::PAYMENT_SUCCESSFUL
            ]);

            Log::info('Transaction ID: ' . $transaction['id'] . ' verification successful');
            return;
        } elseif ($response->successful() && $response['data']['status'] == 'failed') {
            $transaction->update([
                'status' => Transaction::PAYMENT_FAILED
            ]);

            Log::error('Transaction ID: ' . $transaction['id'] . ' verification failed');
            return;
        }
    }

    public function getPendings()
    {
        ini_set('max_execution_time', 600);
        $transactions = Transaction::where('status', Transaction::PAYMENT_PENDING)->get();

        foreach ($transactions as $transaction) {
            sleep(10); // Add a 5 second delay before processing each transaction
            try {
                $this->adminVerify($transaction);
            } catch (\Exception $e) {
                if ($e->getCode() == 400 && str_contains(strtolower($e->getMessage()), 'no transaction was found')) {
                    $transaction->update([
                        'status' => Transaction::PAYMENT_FAILED
                    ]);
                    Log::error('Transaction ID: ' . $transaction['id'] . ' verification failed due to a 400 error: ' . $e->getMessage());
                }

                Log::error('Transaction ID: ' . $transaction['id'] . ' verification failed due to an error: ' . $e->getMessage());

                continue;
            }
        }

        return;
    }

    public function checkFailed()
    {
        ini_set('max_execution_time', 600);
        $transactions = Transaction::where('status', Transaction::PAYMENT_FAILED)
            ->where('created_at', '<', now()->subDays(1))
            ->latest()
            ->get();

        foreach ($transactions as $transaction) {
            sleep(10); // Add a 5 second delay before processing each transaction
            try {
                $this->adminVerify($transaction);
            } catch (\Exception $e) {
                if ($e->getCode() == 400 && str_contains(strtolower($e->getMessage()), 'no transaction was found')) {
                    $transaction->update([
                        'status' => Transaction::PAYMENT_FAILED
                    ]);
                    Log::error('Transaction ID: ' . $transaction['id'] . ' verification failed due to a 400 error: ' . $e->getMessage());
                }

                Log::error('Transaction ID: ' . $transaction['id'] . ' verification failed due to an error: ' . $e->getMessage());

                continue;
            }
        }

        return;
    }
}
