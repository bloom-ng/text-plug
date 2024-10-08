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
        $orders = Order::all()->count();
        $amount_spent = $debit;
        $received_codes = SmsCode::all()->count();
        $users = User::all()->count();

        return view('admin.index')->with([
            'balance' => $balance,
            'orders' => $orders,
            'amount_spent' => $amount_spent,
            'received_codes' => $received_codes,
            'users' => $users,
        ]);
    }
}
