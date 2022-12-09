@extends('admin.layout.index')
@section('content')
	   <section class="content-header">
      <h1>
        DANH MỤC
        <small>{{$danhmuc->name}}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
    <br>
    <div class="box-body" style="width: 500px;">
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
            <form role="form" action="admin/danhmuc/edit/{{$danhmuc->id}}" method="post">
            	<input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                  <label>Tên Danh Mục</label>
                  <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục" value="{{$danhmuc->name}}">
                </div>
                <div class="form-group">
                  <label>Mô Tả</label>
                  <input type="text" class="form-control" name="des"  placeholder="Mô tả" value="{{$danhmuc->description}}">
                </div>
                <div class="form-group">
                  <label>ảnh</label>
                  <input type="text" name="img" value="{{$danhmuc->image}}"><input type="file" name="img" value="{{$danhmuc->image}}">
                </div>
                <button type="submit" class="btn btn-default">Sửa</button>
                 <button type="reset" class="btn btn-default">Làm Mới</button>
     		</form>
     </div>
@endsection