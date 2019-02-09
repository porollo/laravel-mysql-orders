<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table = "orders";

    protected $fillable = [
        'partner_name', 'order_cost', 'order_name', 'order_status',
    ];

}
