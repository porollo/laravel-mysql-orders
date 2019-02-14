<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model {

    protected $table = "vendors";

    protected $fillable = [
        'email', 'name',
    ];

    public function product(){
        return $this->hasOne('App\Product');
    }

}
