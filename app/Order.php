<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table = "orders";

    protected $fillable = [
        'status', 'client_email', 'delivery_dt',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

    public function partner() {
        return $this->hasOne(Partner::class, 'partner_id');
    }

    public function order_products() {
        return $this->belongsTo(OrderProducts::class);
    }
}


