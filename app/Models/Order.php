<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
