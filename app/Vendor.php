<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [
        'email', 'name',
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
