<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
    'title',
    'date',
    'category',
    'main_image',
    'excerpt',
    'sub_heading',
    'sub_details',
    'details',
    'gallery_images',
];

    protected $casts = [
        'additional_images' => 'array',
        'date' => 'date',
    ];
}
