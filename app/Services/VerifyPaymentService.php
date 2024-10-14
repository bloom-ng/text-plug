<?php

namespace App\Services;

use App\Models\Config;
use App\Models\Order;
use App\Models\SmsCode;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class VerifyPaymentService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = Config::where('key', 'flutterwave')->first()->value ?? env('FLUTTERWAVE_SECRET_KEY');
    }

    public function verify(Transaction $transaction)
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

        Log::info('Transaction verification attempt for ID: ' . $transaction['id'] . ' with reference ID: ' . $transaction['reference_id']);
        // Log::info('Transaction response body: ' . $response->body());

        if (
            $success && json_decode($response, true)['data']['status'] == 'successful'
        ) {
            DB::beginTransaction();
            try {
                $transaction->refresh();

                if ($transaction->status != Transaction::PAYMENT_SUCCESSFUL) {
                    Wallet::create(['user_id' => $transaction['user_id'], 'amount' => $transaction['amount'], 'type' => Wallet::CREDIT]);
                    $transaction->update([
                        'status' => Transaction::PAYMENT_SUCCESSFUL
                    ]);
                    Log::info('Transaction ID: ' . $transaction['id'] . ' verification successful');
                } else {
                    DB::rollBack();
                    Log::info('Transaction ID: ' . $transaction['id'] . ' verification failed. Transaction already successful.');
                }

                DB::commit();
                return;
            } catch (\Exception $e) {
                DB::rollBack();
                Log::error('Transaction ID: ' . $transaction['id'] . ' verification failed during wallet credit: ' . $e->getMessage());
                return;
            }
        } else {
            $transaction->update([
                'status' => Transaction::PAYMENT_FAILED
            ]);

            Log::error('Transaction ID: ' . $transaction['id'] . ' verification failed');
            return;
        }
    }
}
