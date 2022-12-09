<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductType;

class DanhMucController extends Controller
{
    //
    public function getDanhSach(){
    	$danhmuc = ProductType::all();
        $danhmuc = ProductType::Paginate(5);
    	return view('admin.danhmuc.danhsach',['danhmuc'=>$danhmuc]);
    }

     public function getEdit($id){
         $danhmuc = ProductType::find($id);
        return view('admin.danhmuc.edit',['danhmuc'=>$danhmuc]);
    }

    public function postEdit(Request $req,$id){
        $danhmuc = ProductType::find($id);
        $this->validate($req,
            [
                'name' => 'required|unique:type_products,name|min:3|max:100',
                'des' => 'required|min:10|max:250',
                'img' => 'required|min:1|max:100'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên danh mục',
                'name.unique'=>'Tên danh mục đã tồn tại',
            'name.min'=>'tên danh mục phải có độ dài từ 3 đến 100 ký tự.',
            'name.max'=>'tên danh mục phải có độ dài từ 3 đến 100 ký tự.',
            'des.required'=>'Bạn chưa nhập mô tả',
            'des.min'=>'mô tả phải có độ dài từ 10 đến 250 ký tự.',
            'des.max'=>'mô tả phải có độ dài từ 10 đến 250 ký tự.',
            'img.required'=>'bạn chưa chọn ảnh',
            'img.max' => 'tên file phải có độ dài từ 1 đến 100 ký tự. ',
            'img.min' => 'tên file phải có độ dài từ 1 đến 100 ký tự.'
            ]);
        $danhmuc->name = $req->name;
        $danhmuc->description = $req->des;
        $danhmuc->image = $req->img;
        $danhmuc->save();
        return redirect('admin/danhmuc/edit/'.$id)->with('thongbao','Sửa thành công!');
    }

     public function getAdd(){
     	return view('admin.danhmuc.add');
    }

    public function postAdd(Request $req){
    	$this->validate($req,
    	[
    		'name' => 'required|min:3|max:100',
    		'des' => 'required|min:10|max:250',
    		'img' => 'required|min:1|max:100'
    	],
    	[
    		'name.required'=>'Bạn chưa nhập tên danh mục',
    		'name.min'=>'tên danh mục phải có độ dài từ 3 đến 100 ký tự.',
    		'name.max'=>'tên danh mục phải có độ dài từ 3 đến 100 ký tự.',
    		'des.required'=>'Bạn chưa nhập mô tả',
    		'des.min'=>'mô tả phải có độ dài từ 10 đến 250 ký tự.',
    		'des.max'=>'mô tả phải có độ dài từ 10 đến 250 ký tự.',
    		'img.required'=>'bạn chưa chọn ảnh',
    		'img.max' => 'tên file phải có độ dài từ 1 đến 100 ký tự. ',
    		'img.min' => 'tên file phải có độ dài từ 1 đến 100 ký tự.'
    	]);

    	$danhmuc = new ProductType;
    	$danhmuc->name = $req->name;
    	$danhmuc->description = $req->des;
    	$danhmuc->image = $req->img;
    	$danhmuc->save();
    	return redirect('admin/danhmuc/add')->with('thongbao','Thêm thành công!!');
    }

    public function getDelete($id){
        $danhmuc = ProductType::find($id);
        $danhmuc->delete();

        return redirect('admin/danhmuc/danhsach')->with('thongbao','Xóa thành công!');
    }
}
