<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    // public function product_type(){
    // 	return $this->belongsTo('App\ProductType','id_type','id');
    // }

    public function category(){
    	return $this->belongsTo('App\Category','id_category','id');
    }

    public function bill_detail(){
    	return $this->hasMany('App\BillDetail','id_product','id');
    }

    public function comment(){
        return $this->hasMany('App\Comment','id_product','id');
    }

    public function supplier(){
        return $this->belongsTo('App\Supplier','id_supplier','id');
    }

    public function import_bill_detail(){
        return $this->hasMany('App\ImportBillDeatil','id_import_bill_detail','id');
    }
}
