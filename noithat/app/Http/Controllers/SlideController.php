<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class SlideController extends Controller
{
    // const UPDATED_AT = null;
    //
    public function getDanhSach(){
    	$slide = Slide::all();
        $slide = Slide::paginate(5);
        return view('admin.slide.danhsach',['slide'=>$slide]);
    }

     public function getEdit($id){
        $slide = Slide::find($id);
        return view('admin.slide.edit',['slide'=>$slide]);
    }

    public function postEdit(Request $req,$id){
        $this->validate($req,
            [
                'name'=>'required',
                'img'=>'required'
            ],
            [
                'name.required'=>'bạn chưa nhập tên slide',
                'img.required'=>'bạn chưa upload ảnh'
            ]);
        $slide = Slide::find($id);
        $slide->name = $req->name;
        $slide->image = $req->img;
        $slide->description = $req->des;
        if($req->has('link'))
            $slide->link = $req->link;
        $slide->save();
        return redirect('admin/slide/edit/'.$id)->with('thongbao','Sửa slide thành công!!');
    }

     public function getAdd(){
     	return view('admin.slide.add');
    }

    public function postAdd(Request $req){
        $this->validate($req,
            [
                'name'=>'required',
                'img'=>'required'
            ],
            [
                'name.required'=>'bạn chưa nhập tên slide',
                'img.required'=>'bạn chưa upload ảnh'
            ]);
        $slide = new Slide;
        $slide->name = $req->name;
        $slide->image = $req->img;
        $slide->description = $req->des;
        if($req->has('link'))
            $slide->link = $req->link;
        $slide->save();
        return redirect('admin/slide/add')->with('thongbao','Thêm slide thành công!!');
    }

    public function getDelete($id){
        $slide = Slide::find($id);
        $slide->delete();

        return redirect('admin/slide/danhsach')->with('thongbao','Xóa thành công!');
    }
}
