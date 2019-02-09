<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderEdit extends Model
{

    protected $table = "orders_edit";

    protected $fillable = [
        'client_email', 'partner_name', 'products', 'order_status', 'order_cost', 'order_save_status',
    ];

}
