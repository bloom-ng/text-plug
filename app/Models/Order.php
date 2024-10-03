<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'server',
        'order_id',
        'country',
        'service',
        'phone_number',
        'status',
        'price',
        'response',
    ];

    const ORDER_PENDING = 'pending';
    const ORDER_DONE = 'done';
    const ORDER_FAILED = 'failed';
    const ORDER_CANCELLED = 'cancelled';
    const ORDER_REFUNDED = 'refunded';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
