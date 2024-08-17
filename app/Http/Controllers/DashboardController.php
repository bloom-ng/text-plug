<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $balance = User::where('id', $user_id)->first()->walletBalance();
        $orders = 0;
        $amount_spent = User::where('id', $user_id)->first()->amountSpent();
        $received_codes = 0;
        return view('dashboard')->with([
            'balance' => $balance,
            'orders' => $orders,
            'amount_spent' => $amount_spent,
            'received_codes' => $received_codes,
        ]);
    }
}
