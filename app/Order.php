<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table = "orders";

    protected $fillable = [
        'status', 'client_email', 'delivery_dt',
    ];

    public function order_product()
    {
        return $this->hasOne('App\OrderProducts', 'id');
    }




    public function partner() {
        return $this->belongsTo('App\Partner');
    }






}


