<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price',
    ];

    public function vendor() {
        return $this->hasOne(Vendor::class);
    }

    public function order_products() {
        return $this->belongsTo(OrderProducts::class);
    }
}
