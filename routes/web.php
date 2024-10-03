<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;
use App\Models\Config;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Password;
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
    $globalMessage = Config::where('key', 'global_message')->first()->value ?? null;
    return view('index', compact('globalMessage'));
});

Route::get('/dashboard', function () {
    return redirect('/');
});

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [AuthController::class, 'register']);

Route::get('/forgot-password', function () {
    return view('forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', [AuthController::class, 'resetPasswordView'])->middleware('guest')->name('password.reset');

Route::post('/reset-password', [AuthController::class, 'resetPassword'])->middleware('guest')->name('password.update');

Route::get('/get-rate', [ConfigController::class, 'getRate']);

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/wallet', [WalletController::class, 'index']);
    Route::post('/fund-wallet', [WalletController::class, 'fundWallet']);
    Route::get('/fund-confirm', [WalletController::class, 'confirmFunding']);

    Route::get('/orders', [OrderController::class, 'index']);
    Route::post('/orders', [OrderController::class, 'order']);
    Route::get('/orders/{id}', [OrderController::class, 'getCode']);
    Route::post('/order/check-price', [OrderController::class, 'checkPrice']);
    Route::post('/order/check-available-number', [OrderController::class, 'checkAvailableNumber']);

    Route::get('/payments/re-verify/{transaction}', [WalletController::class, 'userReVerify']);

    Route::get('/account', function () {
        $user = auth()->user();
        return view('account', compact('user'));
    });
    Route::post('/update-password', [AuthController::class, 'updatePassword']);
    Route::post('/update-profile', [AuthController::class, 'updateProfile']);
});

// ADMIN SECTION
Route::get("/admin/login", function () {
    return view('admin_auth.login');
});
Route::post("/admin/login", [AdminAuthController::class, 'login'])->name("admin.login");

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'adminIndex'])->name('admin.dashboard');

    Route::get('/create-admins', [AdminController::class, 'create']);
    Route::post('/create-admins', [AdminController::class, 'store'])->name("create.admin");
    Route::get('/delete-admin/{admin}', [AdminController::class, 'destroy']);
    Route::get('/admins', [AdminController::class, 'index'])->name('admins');

    Route::get('/users', [UserController::class, 'index']);
    Route::get('/edit-users/{user}', [UserController::class, 'edit']);
    Route::post('/edit-users/{user}', [UserController::class, 'update']);
    Route::post('/delete-users/{user}', [UserController::class, 'destroy']);

    Route::get('/credit-users/{user}', [WalletController::class, 'adminCreditShow']);
    Route::post('/credit-users/{user}', [WalletController::class, 'adminCredit']);

    Route::post('/debit-users/{user}', [WalletController::class, 'adminDebit']);
    Route::get('/debit-users/{user}', [WalletController::class, 'adminDebitShow']);

    Route::get('/orders', [OrderController::class, 'adminIndex']);
    Route::get('/orders/{id}', [OrderController::class, 'getCode']);

    Route::get('/wallet', [WalletController::class, 'adminIndex']);

    Route::get('/settings', [ConfigController::class, 'index']);
    // Route::get('/add-settings', [ConfigController::class, 'create']);
    // Route::post('/add-settings', [ConfigController::class, 'store']);
    Route::get('/edit-settings/{config}', [ConfigController::class, 'edit']);
    Route::post('/edit-settings/{config}', [ConfigController::class, 'update']);
    // Route::post('/delete-settings/{config}', [ConfigController::class, 'destroy']);

    Route::get('/payments/re-verify/{transaction}', [WalletController::class, 'adminReVerify']);

    Route::get('/account', function () {
        $user = auth()->user();
        return view('admin.account', compact('user'));
    });
    Route::post('/update-password', [AdminAuthController::class, 'updatePassword']);
    Route::post('/update-profile', [AdminAuthController::class, 'updateProfile']);

    Route::get("/logout", [AdminAuthController::class, 'logout'])->name("logout");
});

// Cron Job Routes
Route::get('/payments/re-verify/', [WalletController::class, 'getPendings']);
Route::get('/payments/re-verify/failed', [WalletController::class, 'checkFailed']);
Route::get('/orders/re-verify', [OrderController::class, 'verifyPendingOrders']);
