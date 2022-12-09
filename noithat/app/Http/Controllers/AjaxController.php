<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ProductType;
use App\Category;

class AjaxController extends Controller
{
    //
    public function getLoaiSp($id_type){
        $loaisp = Category::where('id_type',$id_type)->get();
        foreach ($loaisp as $dm) 
        {
          echo  "<option value='" . $dm->id. "'>". $dm->name ."</option>";
        }
    }
}
?>