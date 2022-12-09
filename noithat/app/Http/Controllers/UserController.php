<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    // const UPDATED_AT = null;
    //
    public function getDanhSach(){
    	$user = User::all();
        $user = User::paginate(10);
        return view('admin.user.danhsach',['user'=>$user]);
    }

     public function getEdit($id){
        $user = User::find($id);
        return view('admin.user.edit',['user'=>$user]);
    }

    public function postEdit(Request $req,$id){
        $this->validate($req,
            [
                'name'=>'required|min:2',
                // 'email'=>'required|email|unique:users,email',
                // 'password'=>'required|min:6|max:32',
                // 're_password'=>'required|same:password',
                'phone'=>'required|numeric',
                'address'=>'required'
            ],
            [
                'name.required'=>'bạn chưa nhập họ tên',
                'name.min'=>'tên người dùng ít nhất 2 ký tự',
                // 'email.required'=>'bạn chưa nhập email',
                // 'email.email'=>'email không đúng định dạng',
                // 'email.unique'=>'email đã tồn tại',
                // 'password.required'=>'bạn chưa nhập mật khẩu',
                // 'password.min'=>'mật khẩu ít nhất 6 ký tự và tối đa 32 ký tự',
                // 'password.max'=>'mật khẩu ít nhất 6 ký tự và tối đa 32 ký tự',
                // 're_password.required'=>'bạn chưa nhập lại mật khẩu',
                // 're_password.same'=>'nhập lại mật khẩu không trùng với mật khẩu',
                'phone.required'=>'bạn chưa nhập số điện thoại',
                'phone.numeric'=>'nhập số điện thoại không đúng',
                'address.required'=>'bạn chưa nhập địa chỉ'
            ]);
        $user = User::find($id);
        $user->full_name = $req->name;
        // $user->email = $req->email;

        if($req->password == "on")
        {
          
          $this->validate($req,
            [
                'password'=>'required|min:6|max:32',
                're_password'=>'required|same:password'
            ],
            [
                'password.required'=>'bạn chưa nhập mật khẩu',
                'password.min'=>'mật khẩu ít nhất 6 ký tự và tối đa 32 ký tự',
                'password.max'=>'mật khẩu ít nhất 6 ký tự và tối đa 32 ký tự',
                're_password.required'=>'bạn chưa nhập lại mật khẩu',
                're_password.same'=>'nhập lại mật khẩu không trùng với mật khẩu'
            ]);  
          $user->password = bcrypt($req->password);
        }
        
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->level = $req->level;
        $user->save();
        return redirect('admin/user/edit/'.$id)->with('thongbao','Sửa người dùng thành công!!');
    }

     public function getAdd(){
     	return view('admin.user.add');
    }

    public function postAdd(Request $req){
        $this->validate($req,
            [
                'name'=>'required|min:2',
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:32',
                're_password'=>'required|same:password',
                'phone'=>'required',
                'address'=>'required'
            ],
            [
                'name.required'=>'bạn chưa nhập họ tên',
                'name.min'=>'tên người dùng ít nhất 2 ký tự',
                'email.required'=>'bạn chưa nhập email',
                'email.email'=>'email không đúng định dạng',
                'email.unique'=>'email đã tồn tại',
                'password.required'=>'bạn chưa nhập mật khẩu',
                'password.min'=>'mật khẩu ít nhất 6 ký tự và tối đa 32 ký tự',
                'password.max'=>'mật khẩu ít nhất 6 ký tự và tối đa 32 ký tự',
                're_password.required'=>'bạn chưa nhập lại mật khẩu',
                're_password.same'=>'nhập lại mật khẩu không trùng với mật khẩu',
                'phone.required'=>'bạn chưa nhập số điện thoại',
                'address.required'=>'bạn chưa nhập địa chỉ'
            ]);
        $user = new User;
        $user->full_name = $req->name;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->level = $req->level;
        $user->save();
        return redirect('admin/user/add')->with('thongbao','Thêm người dùng thành công!!');
    }

    public function getDelete($id){
        $user = User::find($id);
        $user->delete();

        return redirect('admin/user/danhsach')->with('thongbao','Xóa thành công!');
    }
}
