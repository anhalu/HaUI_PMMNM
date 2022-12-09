<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employees;

class EmployeesController extends Controller
{
    // const UPDATED_AT = null;
    //
    public function getDanhSach(){
    	$employees = Employees::all();
        $employees = Employees::paginate(10);
        return view('admin.nhanvien.danhsach',['employees'=>$employees]);
    }

     public function getEdit($id){
        $employees = Employees::find($id);
        return view('admin.nhanvien.edit',['employees'=>$employees]);
    }

    public function postEdit(Request $req,$id){
        $this->validate($req,
            [
                'name'=>'required|min:3|max:100',
                'email'=>'required',
                'address'=>'required',
                'position'=>'required',
                'phone'=>'required|min:10|max:15'
            ],
            [
                'name.required'=>'bạn chưa nhập tên nhân viên',
                'name.min'=>'Tên nhân viên phải ít nhất 3 ký tự',
                'name.max'=>'Tên nhân viên tối đa 100 ký tự',
                'email.required'=>'bạn chưa nhập email của nhân viên',
                'address.required'=>'bạn chưa nhập địa chỉ của nhân viên',
                'phone.required'=>'bạn chưa nhập số điện thoại của nhân viên',
                'position.required'=>'bạn chưa nhập chức vụ cho nhân viên',
                'phone.min'=>'Số điện thoại phải từ 10 đến 15 số',
                'phone.max'=>'Số điện thoại phải từ 10 đến 15 số'
            ]);
        $employees = Employees::find($id);
        $employees->name_employees = $req->name;
        $employees->email = $req->email;
        $employees->phone = $req->phone;
        $employees->address = $req->address;
        $employees->gender = $req->gender;
        $employees->position = $req->position;
        $employees->save();
        return redirect('admin/nhanvien/edit/'.$id)->with('thongbao','Sửa nhân viên thành công!!');
    }

     public function getAdd(){
     	return view('admin.nhanvien.add');
    }

    public function postAdd(Request $req){
        $this->validate($req,
            [
                'name'=>'required|min:3|max:100',
                'email'=>'required',
                'address'=>'required',
                'position'=>'required',
                'phone'=>'required|min:10|max:15'
            ],
            [
                'name.required'=>'bạn chưa nhập tên nhân viên',
                'name.min'=>'Tên nhân viên phải ít nhất 3 ký tự',
                'name.max'=>'Tên nhân viên tối đa 100 ký tự',
                'email.required'=>'bạn chưa nhập email của nhân viên',
                'address.required'=>'bạn chưa nhập địa chỉ của nhân viên',
                'phone.required'=>'bạn chưa nhập số điện thoại của nhân viên',
                'position.required'=>'bạn chưa nhập chức vụ cho nhân viên',
                'phone.min'=>'Số điện thoại phải từ 10 đến 15 số',
                'phone.max'=>'Số điện thoại phải từ 10 đến 15 số'
            ]);
        $employees = new Employees;
        $employees->name_employees = $req->name;
        $employees->email = $req->email;
        $employees->phone = $req->phone;
        $employees->address = $req->address;
        $employees->gender = $req->gender;
        $employees->position = $req->position;
        $employees->save();
        return redirect('admin/nhanvien/add')->with('thongbao','Thêm nhân viên thành công!!');
    }

    public function getDelete($id){
        $employees = Employees::find($id);
        $employees->delete();

        return redirect('admin/nhanvien/danhsach')->with('thongbao','Xóa thành công!');
    }
}
