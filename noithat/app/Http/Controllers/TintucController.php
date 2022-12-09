<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class TintucController extends Controller
{
    //
    public function getDanhSach(){
    	$news = News::orderBy('id','DESC')->get();
        $news = News::paginate(10);
        return view('admin.tintuc.danhsach',['news'=>$news]);
    }

     public function getEdit($id){
        $news = News::find($id);
        return view('admin.tintuc.edit',['news'=>$news]);
    }

    public function postEdit(Request $req,$id){
      $news = News::find($id);
      $this->validate($req,
            [
                'title'=>'required|min:5',
                'summary'=>'required|min:5',
                'content'=>'required:10',
                'img'=>'required'
            ],
            [
                'title.required'=>'Bạn chưa nhập tiêu đề tin tức',
                'title.min'=>'Tiêu đề ít nhất 5 ký tự',
                'summary.required'=>'Bạn chưa nhập tóm tắt tin tức',
                'summary.min'=>'Tóm tắt ít nhất 5 ký tự',
                'content.required'=>'Bạn chưa nhập nội dung',
                'content.min'=>'Nội dung ít nhất 5 ký tự',
                'img.required'=>'Bạn chưa nhập ảnh cho tin!'
            ]);

                $news->title = $req->title;
                $news->summary = $req->summary;
                $news->content = $req->content;
                $news->image = $req->img;
                $news->save();
                return redirect('admin/tintuc/edit/' .$id)->with('thongbao','Sửa thành công!');

    }

     public function getAdd()
     {
        // $loaisp = ProductType::all();
        // $danhmuc = Category::all();
     	return view('admin.tintuc.add');
    }

    public function postAdd(Request $req)
    {
    	$this->validate($req,
            [
                'title'=>'required|min:5',
                'summary'=>'required|min:5',
                'content'=>'required:10',
                'img'=>'required'
            ],
            [
                'title.required'=>'Bạn chưa nhập tiêu đề tin tức',
                'title.min'=>'Tiêu đề ít nhất 5 ký tự',
                'summary.required'=>'Bạn chưa nhập tóm tắt tin tức',
                'summary.min'=>'Tóm tắt ít nhất 5 ký tự',
                'content.required'=>'Bạn chưa nhập nội dung',
                'content.min'=>'Nội dung ít nhất 5 ký tự',
                'img.required'=>'Bạn chưa nhập ảnh cho tin!'
            ]);
        $news = new News;
        $news->title = $req->title;
        $news->summary = $req->summary;
        $news->content = $req->content;
        $news->image = $req->img;
        $news->save();
        return redirect('admin/tintuc/add')->with('thongbao','Thêm tin thành công');

    }

    public function getDelete($id){
        $news = News::find($id);
        $news->delete();

        return redirect('admin/tintuc/danhsach')->with('thongbao','Xóa thành công!');
    }
}
