<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class WalletController extends Controller
{
    public function index()
    {
        $transactions = Wallet::where('user_id', auth()->user()->id)->get();
        $balance = User::where('id', Auth::user()->id)->first()->walletBalance();
        $amount_spent = User::where('id', Auth::user()->id)->first()->amountSpent();
        return view('wallet')->with(['transactions' => $transactions, 'balance' => $balance, 'amount_spent' => $amount_spent]);
    }

    public function fundWallet(Request $request)
    {
        $request->validate([
            'amount' => 'required|integer',
        ]);

        // $currency = $this->getCurrency($request->user()->country);

        $apiUrl = "https://api.flutterwave.com/v3/payments";
        $apiKey = env('FLUTTERWAVE_SECRET_KEY');

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

        $response = Http::retry(3)->withToken(env('FLUTTERWAVE_SECRET_KEY'), 'Bearer')
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
}
