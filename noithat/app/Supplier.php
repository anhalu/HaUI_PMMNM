<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $table = "supplier";

    public function product(){
        return $this->hasMany('App\Product','id_supplier','id');
    }
}
