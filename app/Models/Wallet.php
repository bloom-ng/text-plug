<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'type',
    ];

    const CREDIT = 'credit';
    const DEBIT = 'debit';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
