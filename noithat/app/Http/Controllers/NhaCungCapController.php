<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class NhaCungCapController extends Controller
{
    // const UPDATED_AT = null;
    //
    public function getDanhSach(){
    	$supplier = Supplier::all();
        $supplier = Supplier::paginate(5);
        return view('admin.nhacungcap.danhsach',['supplier'=>$supplier]);
    }

     public function getEdit($id){
        $supplier = Supplier::find($id);
        return view('admin.nhacungcap.edit',['supplier'=>$supplier]);
    }

    public function postEdit(Request $req,$id){
        $this->validate($req,
            [
                'name_supplier'=>'required',
                'address'=>'required',
                'phone'=>'required|min:10|max:15',
                'email'=>'required'
            ],
            [
                'name_supplier.required'=>'bạn chưa nhập tên nhà cung cấp',
                'address.required'=>'bạn chưa nhập địa chỉ nhà cung cấp',
                'phone.required'=>'bạn chưa nhập số điện thoại nhà cung cấp',
                'phone.min'=>'Số điện thoại phải từ 10 đến 15 số',
                'phone.max'=>'Số điện thoại phải từ 10 đến 15 số',
                'email.required'=>'bạn chưa nhập email nhà cung cấp'
            ]);
        $supplier = Supplier::find($id);
        $supplier->name_supplier = $req->name_supplier;
        $supplier->address = $req->address;
        $supplier->phone = $req->phone;
        $supplier->email = $req->email;
        $supplier->save();
        return redirect('admin/nhacungcap/edit/'.$id)->with('thongbao','Sửa nhà cung cấp thành công!!');
    }

     public function getAdd(){
     	return view('admin.nhacungcap.add');
    }

    public function postAdd(Request $req){
        $this->validate($req,
            [
                'name_supplier'=>'required',
                'address'=>'required',
                'phone'=>'required|min:10|max:15',
                'email'=>'required'
            ],
            [
                'name_supplier.required'=>'bạn chưa nhập tên nhà cung cấp',
                'address.required'=>'bạn chưa nhập địa chỉ nhà cung cấp',
                'phone.required'=>'bạn chưa nhập số điện thoại nhà cung cấp',
                'phone.min'=>'Số điện thoại phải từ 10 đến 15 số',
                'phone.max'=>'Số điện thoại phải từ 10 đến 15 số',
                'email.required'=>'bạn chưa nhập email nhà cung cấp'
            ]);
        $supplier = new Supplier;
        $supplier->name_supplier = $req->name_supplier;
        $supplier->address = $req->address;
        $supplier->phone = $req->phone;
        $supplier->email = $req->email;
        $supplier->save();
        return redirect('admin/nhacungcap/add')->with('thongbao','Thêm nhà cung cấp thành công!!');
    }

    public function getDelete($id){
        $supplier = Supplier::find($id);
        $supplier->delete();

        return redirect('admin/nhacungcap/danhsach')->with('thongbao','Xóa thành công!');
    }
}
