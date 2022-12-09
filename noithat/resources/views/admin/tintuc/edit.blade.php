@extends('admin.layout.index')
@section('content')
	   <section class="content-header">
      <h1>
        DANH SÁCH
        <small>Sửa Tin Tức</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
    <br>
    <div class="box-body" style="width: 1500px;">
	    	@if(count($errors)>0)
	    		<div class="alert alert-danger">
	    			@foreach($errors->all() as $err)
	    				{{$err}}<br>
	    			@endforeach
	    		</div>
	    	@endif

	    	@if(session('thongbao'))
	    		<div class="alert alert-success">
	    			{{session('thongbao')}}
	    		</div>
	    	@endif
            <form role="form" action="admin/tintuc/edit/{{$news->id}}" method="post" >
            	<input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="col-sm-7">
                <div class="form-group">
                  <label>Tiêu đề</label>
                  <textarea id="demo1" class="form-control " name="title" rows="2" placeholder="Tiêu Đề">{{$news->title}}</textarea>
              	</div>
              	 <div class="form-group">
                  <label>Tóm tắt</label>
                  <textarea id="demo" class="form-control ckeditor" name="summary" rows="2" placeholder="Tóm tắt">{{$news->summary}}</textarea>
              	</div>
                <div class="form-group">
                  <label>Nội Dung</label>
                  <textarea id="editor1" class="form-control ckeditor" name="content" rows="5" placeholder="Nội dung">{{$news->content}}</textarea>
                </div>
                <div class="form-group">
                  <label>ảnh</label>
                   <input type="text" name="img" value="{{$news->image}}"><input type="file" name="img" value="{{$news->image}}">
                </div>
                <button type="submit" class="btn btn-default">Sửa</button>
                 <button type="reset" class="btn btn-default">Làm Mới</button>
               </div>
     		</form>
     </div>
@endsection