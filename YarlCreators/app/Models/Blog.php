<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'main_title',
        'date',
        'category',
        'image',
        'excerpt',
        'sub_heading',
        'sub_details',
        'full_details',
        'additional_images',
    ];

    protected $casts = [
        'additional_images' => 'array',
        'date' => 'date',
    ];
}
