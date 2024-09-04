<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'admin';


    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'type',
    ];

    const SUPER_ADMIN = 1;
    const ADMIN = 2;
}
