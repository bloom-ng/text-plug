<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'reference_id',
        'amount',
        'status',
    ];

    const PAYMENT_PENDING = 'pending';
    const PAYMENT_FAILED = 'failed';
    const PAYMENT_SUCCESSFUL = 'successful';
}
