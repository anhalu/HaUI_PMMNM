<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use App\ProductType;
use App\Cart;
use App\Customer;
use App\Bill;
use App\BillDetail;
use App\User;
use App\Category;
use App\News;
use App\Supplier;
use Auth;
use Hash;
use Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public  function getIndex(){
        $loaisp = ProductType::all();
        $danhmuc = Category::all();
        $sanpham = Product::all();
        $customer = Customer::all();
        $bill = Bill::all();
        $bill1 = Bill::where('status','đang xử lý')->get();
        $bill2 = Bill::where('status','đã xử lý')->get();
        $bill3 = Bill::where('status','đã hủy')->get();
        $bill_detail = BillDetail::all();
        $user = User::all();
        $supplier = Supplier::all();
    	return view('admin.layout.trangchu',compact('customer','sanpham','user','supplier','loaisp','danhmuc','bill','bill1','bill2','bill3'));
    }

    public function getProfile(){
        $user = User::all();
        return view('admin.layout.profile',compact('user'));
    }

    
    // public function getLogin(){
    //     return view('page.dangnhap');
    // }

    // public function getSigin(){
    //     return view('page.dangky');
    // }

    // public function postSigin(Request $req){
    //     $this->validate($req,
    //         [
    //             'email'=>'required|email|unique:users,email',
    //             'password'=>'required|min:6|max:20',
    //             'fullname'=>'required',
    //             're_password'=>'required|same:password'
    //         ],
    //         [
    //             'email.required'=>'Vui lòng nhập email',
    //             'email.email'=>'email không đúng định dạng',
    //             'email.unique'=>'email đã được sử dụng',
    //             'password.required'=>'Vui lòng nhập mật khẩu',
    //             're_password.same'=>'mật khẩu nhập lại không trùng',
    //             'password.min'=>'mật khẩu ít nhất 6 ký tự'
    //         ]);
    //     $user = new User();
    //     $user->full_name = $req->fullname;
    //     $user->email = $req->email;
    //     $user->password = Hash::make($req->password);
    //     $user->phone = $req->phone;
    //     $user->address = $req->address;
    //     // $user->level = $req->level;
    //     $user->save();
    //     return redirect()->back()->with('thanhcong','Đăng ký tài khoản thành công!!');
    // }

    // public function postLogin(Request $req){
    //     $this->validate($req,
    //         [
    //             'email'=>'required|email',
    //             'password'=>'required|min:6|max:20'
    //         ],
    //         [
    //             'email.required'=>'Vui lòng nhập email',
    //             'email.email'=>'Email không đúng định dạng',
    //             'password.required'=>'Vui lòng nhập mật khẩu',
    //             'password.min'=>'Mật khẩu ít nhất 6 ký tự',
    //             'password.max'=>'mật khẩu tối đa 20 ký tự'
    //         ]
    //     );
    //     $credentials = array('email'=>$req->email,'password'=>$req->password);
    //     if(Auth::attempt($credentials)){
    //         if (Auth::user()->level==1) {
    //             return redirect('admin/sanpham/danhsach');
    //         }
    //         else
    //         return redirect('index');
    //     }else{
    //         return redirect()->back()->with(['flag'=>'danger','message'=>'Tài Khoản Hoặc Mật Khẩu Không Đúng!!']);
    //     }
    // }

    // public function postLogout(){
    //     Auth::logout();
    //     return redirect()->route('trang-chu');
    // }

    // public function getSearch(Request $req){
    //     $product = Product::where('name','like','%'.$req->key.'%')
    //                         ->orWhere('unit_price',$req->key)
    //                         ->get();
    //     return view('page.search',compact('product'));
    // }
}
