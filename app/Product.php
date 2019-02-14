<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = "products";

    protected $fillable = [
        'name', 'price',
    ];


    public function order_products(){
        return $this->hasOne('App\OrderProducts', 'id');
    }


    public function vendor() {
        return $this->belongsTo('App\Vendor');
    }


}
