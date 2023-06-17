<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Stripe\Product;

class Checkout extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'order_id',
        'message',
        'car_id',
        'paid',
        'status',
        'checkout_id',
        'checkout_url'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
