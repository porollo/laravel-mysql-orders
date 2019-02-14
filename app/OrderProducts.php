<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProducts extends Model
{

    protected $table = "order_products";

    protected $fillable = [
        'quantity', 'price',
    ];

    public function order() {
        return $this->belongsTo('App\Order', 'order_id');
    }

    public function product() {
        return $this->belongsTo('App\Product', 'product_id');
    }


}
