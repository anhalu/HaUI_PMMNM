<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    // const UPDATED_AT = null;
    //
    public function getDanhSach(){
    	$customer = Customer::all();
        $customer = Customer::paginate(10);
        return view('admin.khachhang.danhsach',['customer'=>$customer]);
    }

     public function getEdit($id){
        $customer = Customer::find($id);
        return view('admin.khachhang.edit',['customer'=>$customer]);
    }

    public function postEdit(Request $req,$id){
        $this->validate($req,
            [
                'name'=>'required|min:3|max:100',
                'email'=>'required',
                'address'=>'required',
                'phone_number'=>'required|min:10|max:15'
                
            ],
            [
                'name.required'=>'bạn chưa nhập tên khách hàng',
                'name.min'=>'Tên khách hàng phải ít nhất 3 ký tự',
                'name.max'=>'Tên khách hàng tối đa 100 ký tự',
                'email.required'=>'bạn chưa nhập email của khách hàng',
                'address.required'=>'bạn chưa nhập địa chỉ của khách hàng',
                'phone_number.required'=>'bạn chưa nhập số điện thoại của khách hàng',
                'phone_number.min'=>'Số điện thoại phải từ 10 đến 15 số',
                'phone_number.max'=>'Số điện thoại phải từ 10 đến 15 số'
                
            ]);
        $customer = Customer::find($id);
        $customer->name = $req->name;
        $customer->gender = $req->gender;
        $customer->email = $req->email;
        $customer->address = $req->address;
        $customer->phone_number = $req->phone_number;
        $customer->note = $req->note;
        $customer->save();
        return redirect('admin/khachhang/edit/'.$id)->with('thongbao','Sửa khách hàng thành công!!');
    }

     public function getAdd(){
     	return view('admin.khachhang.add');
    }

    public function postAdd(Request $req){
        $this->validate($req,
            [
                'name'=>'required|min:3|max:100',
                'email'=>'required',
                'address'=>'required',
                'phone_number'=>'required|min:10|max:15'
            ],
            [
                'name.required'=>'bạn chưa nhập tên khách hàng',
                'name.min'=>'Tên khách hàng phải ít nhất 3 ký tự',
                'name.max'=>'Tên khách hàng tối đa 100 ký tự',
                'email.required'=>'bạn chưa nhập email của khách hàng',
                'address.required'=>'bạn chưa nhập địa chỉ của khách hàng',
                'phone_number.required'=>'bạn chưa nhập số điện thoại của khách hàng',
                'phone_number.min'=>'Số điện thoại phải từ 10 đến 15 số',
                'phone_number.max'=>'Số điện thoại phải từ 10 đến 15 số'
            ]);
        $customer = new Customer;
        $customer->name = $req->name;
        $customer->gender = $req->gender;
        $customer->email = $req->email;
        $customer->address = $req->address;
        $customer->phone_number = $req->phone_number;
        $customer->note = $req->note;
        $customer->save();
        return redirect('admin/khachhang/add')->with('thongbao','Thêm khách hàng thành công!!');
    }

    public function getDelete($id){
        $customer = Customer::find($id);
        $customer->delete();

        return redirect('admin/khachhang/danhsach')->with('thongbao','Xóa thành công!');
    }
}
