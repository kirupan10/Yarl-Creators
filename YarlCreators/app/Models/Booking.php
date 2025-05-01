<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile',
        'name',
        'email',
        'phone',
        'message',
        'service',
        'package',
        'date',
        'status',
        'payment',
    ];
}
