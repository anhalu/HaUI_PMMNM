<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImportBill;
use App\ImportBillDetail;
use App\Product;
use App\Employees;
use App\Supplier;
use App\Category;
use App\ProductType;

class ImportBillController extends Controller
{
    // const UPDATED_AT = null;
    //
    public function getDanhSach(){
        $employees = Employees::all();
    	$import_bill = ImportBill::all();
        $import_bill = ImportBill::paginate(10);
        return view('admin.hoadon_nhap.danhsach',['employees'=>$employees,'import_bill'=>$import_bill]);
    }

    public function getChitiet(Request $id){
        $import_bill_detail = ImportBillDetail::where('id',$id->id)->first();
        $import_bill = ImportBill::where('id_import_bill_detail',$import_bill_detail->id)->get();
        return view('admin.hoadon_nhap.chitietdon',compact('import_bill_detail','import_bill'));
    }

    public function getBan(Request $id){
       $customer = Customer::all();
        $bill = Bill::where('status','đã xử lý')->paginate(10);
        return view('admin.hoadon_ban.giao_hang_xong',compact('bill','bill_detail'));
    }

    public function postBan(Request $id){
        $bill = Bill::find($id);
        $bill = Bill::where('id',$id->id)->first();
        $bill->status = 'đã xử lý';
        $bill->save();
        return redirect()->back()->with('thongbao','Đã giao hàng!');
    }

      public function getHuy(Request $id){
        $customer = Customer::all();
        $bill = Bill::where('status','đã hủy')->paginate(10);
        return view('admin.hoadon_ban.donhang_huy',compact('bill','bill_detail'));
    }

    public function postHuy(Request $id){
        $bill = Bill::find($id);
        $bill = Bill::where('id',$id->id)->first();
        $bill->status = 'đã hủy';
        $bill->save();
        return redirect()->back()->with('thongbao','Đã hủy hàng!');
    }
}
