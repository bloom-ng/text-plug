<?php

namespace App\Http\Controllers;

use App\Models\Config as ModelsConfig;
use App\Models\Order;
use App\Models\SmsCode;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Config;
use App\Models\Transaction;
use App\Services\VerifyPaymentService;

class DashboardController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $balance = User::where('id', $user_id)->first()->walletBalance();
        $orders = Order::all()->where('user_id', $user_id)->count();
        $amount_spent = User::where('id', $user_id)->first()->amountSpent();
        $received_codes = SmsCode::where('user_id', $user_id)->count();
        $youtube = Config::where('key', 'youtube')->first()->value ?? Config::YOUTUBE;

        $lastTwoTransactions = Transaction::where('user_id', $user_id)
            ->where(function ($query) {
                $query->where('status', Transaction::PAYMENT_PENDING)
                    ->orWhere('status', Transaction::PAYMENT_FAILED);
            })
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        $verification = new VerifyPaymentService();

        foreach ($lastTwoTransactions as $transaction) {
            $verification->verify($transaction);
        }

        return view('dashboard')->with([
            'balance' => $balance,
            'orders' => $orders,
            'amount_spent' => $amount_spent,
            'received_codes' => $received_codes,
            'youtube' => $youtube,
        ]);
    }

    public function adminIndex()
    {
        $credit = Wallet::all()->where('type', 'credit')->sum('amount');
        $debit =  Wallet::all()->where('type', 'debit')->sum('amount');
        $balance = $credit;
        $orders = Order::count();
        $amount_spent = $debit;
        $received_codes = SmsCode::count();
        $users = User::count();

        return view('admin.index')->with([
            'balance' => $balance,
            'orders' => $orders,
            'amount_spent' => $amount_spent,
            'received_codes' => $received_codes,
            'users' => $users,
        ]);
    }
}
