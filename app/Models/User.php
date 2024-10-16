<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Wallet;
use App\Models\Order;
use Illuminate\Auth\Passwords\CanResetPassword;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function wallets(): HasMany
    {
        return $this->hasMany(Wallet::class);
    }

    public function walletBalance()
    {
        return $this->wallets()->sum(function ($wallet) {
            if ($wallet->type == 'credit' || $wallet->type == 'refund') {
                return $wallet->amount;
            } elseif ($wallet->type == 'debit') {
                return -$wallet->amount;
            }
            return 0;
        });
    }

    public function amountSpent()
    {
        $debit = $this->wallets()->where('type', 'debit')->sum('amount');
        $refund = $this->wallets()->where('type', 'refund')->sum('amount');

        return $debit - $refund;
    }

    public function amountCredited()
    {
        $credit = $this->wallets()->where('type', 'credit')->sum('amount');

        return $credit;
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
