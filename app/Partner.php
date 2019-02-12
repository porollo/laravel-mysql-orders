<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'email', 'name',
    ];

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
