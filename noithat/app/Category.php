<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";

    public function product(){
    	return $this->hasMany('App\Product','id_category','id');
    }

    public function product_type(){
    	return $this->belongsTo('App\ProductType','id_type','id');
    }
}
