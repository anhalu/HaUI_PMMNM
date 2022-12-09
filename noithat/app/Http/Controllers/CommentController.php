<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Comment;

class CommentController extends Controller
{
    //
    public function getDelete($id,$id_product){
        $comment = Comment::find($id);
        $comment->delete();

        return redirect('admin/sanpham/edit/'.$id_product)->with('thongbao','Xóa bình luận thành công!');
    }

    
}
