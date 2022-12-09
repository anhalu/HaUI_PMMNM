<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductType;
use App\Category;

class LoaiSpController extends Controller
{
    const UPDATED_AT = null;
    //
    public function getDanhSach(){
    	$loaisp = Category::all();
        $loaisp = Category::paginate(10);
    	return view('admin.loaisp.danhsach',['loaisp'=>$loaisp]);
    }

     public function getEdit($id){
         $theloai = ProductType::all();
         $loaisp = Category::find($id);
        return view('admin.loaisp.edit',['loaisp'=>$loaisp,'theloai'=>$theloai]);
    }

    public function postEdit(Request $req,$id){
        $this->validate($req,
            [
                'name' => 'required|unique:category,name|min:3|max:100',
                'type_products'=>'required',
                'des' => 'required|min:10|max:250' 
            ],
            [
                'name.required'=>'Bạn chưa nhập tên danh mục',
                'name.unique'=>'Tên danh mục đã tồn tại',
                'name.min'=>'tên danh mục phải có độ dài từ 3 đến 100 ký tự.',
                'name.max'=>'tên danh mục phải có độ dài từ 3 đến 100 ký tự.',
                'type_products.required'=>'Bạn chưa chọn loại sản phẩm',
                'des.required'=>'Bạn chưa nhập mô tả',
                'des.min'=>'mô tả phải có độ dài từ 10 đến 250 ký tự.',
                'des.max'=>'mô tả phải có độ dài từ 10 đến 250 ký tự.'
            ]);
        $loaisp = Category::find($id);
        $loaisp->name = $req->name;
        $loaisp->id_type = $req->type_products;
        $loaisp->description = $req->des;
        $loaisp->save();
        return redirect('admin/loaisp/edit/'.$id)->with('thongbao','Bạn đã sửa thành công!');
    }

     public function getAdd(){
        $theloai = ProductType::all();
     	return view('admin.loaisp.add',['theloai'=>$theloai]);
    }

    public function postAdd(Request $req){
    	$this->validate($req,
            [
                'name' => 'required|unique:category,name|min:3|max:100',
                'type_products'=>'required',
                'des' => 'required|min:10|max:250' 
            ],
            [
                'name.required'=>'Bạn chưa nhập tên danh mục',
                'name.unique'=>'Tên danh mục đã tồn tại',
                'name.min'=>'tên danh mục phải có độ dài từ 3 đến 100 ký tự.',
                'name.max'=>'tên danh mục phải có độ dài từ 3 đến 100 ký tự.',
                'type_products.required'=>'Bạn chưa chọn loại sản phẩm',
                'des.required'=>'Bạn chưa nhập mô tả',
                'des.min'=>'mô tả phải có độ dài từ 10 đến 250 ký tự.',
                'des.max'=>'mô tả phải có độ dài từ 10 đến 250 ký tự.'
            ]);
        $loaisp = new Category;
        $loaisp->name = $req->name;
        $loaisp->id_type = $req->type_products;
        $loaisp->description = $req->des;
        $loaisp->save();
        return redirect('admin/loaisp/add')->with('thongbao','Thêm thành công!!');
    }

    public function getDelete($id){
        $loaisp = Category::find($id);
        $loaisp->delete();

        return redirect('admin/loaisp/danhsach')->with('thongbao','Xóa thành công!');
    }
}
