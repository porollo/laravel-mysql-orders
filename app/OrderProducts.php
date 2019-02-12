<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProducts extends Model
{
    protected $fillable = [
        'quantity', 'price',
    ];

    function orders(){
        $this->hasOne(Order::class);
    }

    function products(){
        $this->hasOne(Product::class);
    }
}
