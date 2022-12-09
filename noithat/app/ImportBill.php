<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImportBill extends Model
{
    protected $table = "import_bill";

    public function import_bill_detail(){
    	return $this->belongsTo('App\ImportBillDeatil','id_import_bill_detail','id');
    }

    public function employees(){
    	return $this->belongsTo('App\Employees','id_employees','id');
    }
}
