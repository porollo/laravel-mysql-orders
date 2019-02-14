<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{

    protected $table = "partners";

    protected $fillable = [
        'email', 'name',
    ];

    public function order(){
        return $this->hasOne('App\Order');
    }

}
