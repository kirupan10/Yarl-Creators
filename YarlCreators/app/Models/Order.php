<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name', 'email', 'phone', 'street_address', 'city',
        'state', 'country', 'zip', 'coupon', 'payment_method', 'item', 'total',
    ];
}
