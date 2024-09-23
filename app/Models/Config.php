<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'name',
    ];

    const RATE = 1650;
    const MINIMUMBALANCEUSD = 2;
    const YOUTUBE = 'https://www.youtube.com/';
}
