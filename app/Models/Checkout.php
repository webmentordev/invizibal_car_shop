<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;;

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
        'checkout_url',
        'shipping',
        'quantity',
        'sub_total'
    ];

    public function car(){
        return $this->belongsTo(Car::class);
    }
}
