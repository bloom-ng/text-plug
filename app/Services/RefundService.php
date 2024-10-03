<?php

namespace App\Services;

use App\Models\Config;
use App\Models\User;
use App\Models\Order;
use App\Models\Wallet;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RefundService
{
    protected $rate;

    public function __construct()
    {
        $this->rate = Config::where('key', 'rate')->value('value') ??  Config::RATE;
    }

    public function processRefunds()
    {
        // Step 1: Get all users with their orders
        $users = User::has('orders')->with(['orders' => function ($query) {
            $query->where('status', 'refunded');
        }, 'wallets' => function ($query) {
            $query->where('type', 'refunded');
        }])->get();

        // Step 2: Loop through each user
        foreach ($users as $user) {
            // Get all orders with status refunded for the user
            $refundedOrders = $user->orders->where('status', Order::ORDER_REFUNDED);

            // Get all wallet transactions with type refunded for the user
            $walletRefunds = $user->wallets->where('type', Wallet::REFUND);

            // Calculate the total order refund and total wallet refund
            $totalOrderRefunds = $refundedOrders->sum('price') * $this->rate; // Assuming refund_amount is the field in the Order model
            $totalWalletRefunds = $walletRefunds->sum('amount'); // Assuming amount is the field in the Wallet model

            // Step 3: If order refunds are greater than wallet refunds
            if ($totalOrderRefunds > $totalWalletRefunds) {
                // Calculate the difference
                $difference = $totalOrderRefunds - $totalWalletRefunds;

                // Step 4: Create wallet refund transactions to match the difference
                $this->createWalletRefund($user, $difference);
            }
        }
    }

    // Helper function to create wallet refunds
    protected function createWalletRefund(User $user, $amount)
    {
        // Create a wallet refund transaction for the user
        Wallet::create([
            'user_id' => $user->id,
            'amount' => $amount,
            'type' => Wallet::REFUND,
        ]);

        // Log the refund creation
        Log::info("Created wallet refund for user {$user->id} for the amount of {$amount}");
    }
}
