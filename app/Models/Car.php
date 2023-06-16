<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'model',
        'company',
        'year',
        'product_id',
        'price_id',
        'currency',
        'price',
        'description',
        'is_featured',
        'is_active',
        'image',
        'payment_url'
    ];
}