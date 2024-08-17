<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WalletController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [AuthController::class, 'register']);

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/wallet', [WalletController::class, 'index']);
    Route::post('/fund-wallet', [WalletController::class, 'fundWallet']);
    Route::get('/fund-confirm', [WalletController::class, 'confirmFunding']);

    Route::get('/orders', [OrderController::class, 'index']);

    Route::get('/account', function () {
        return view('account');
    });
    Route::post('/update-password', [AuthController::class, 'updatePassword']);
    Route::post('/update-profile', [AuthController::class, 'updateProfile']);
});
