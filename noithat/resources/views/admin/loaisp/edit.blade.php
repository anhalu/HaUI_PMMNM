@extends('admin.layout.index')
@section('content')
	   <section class="content-header">
      <h1>
        SỬA DANH MỤC
        <small>{{$loaisp->name}}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Danh mục sản phẩm</a></li>
        <li class="active">Edit</li>
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
            <form role="form" action="admin/loaisp/edit/{{$loaisp->id}}" method="post">
            	<input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                  <label>Tên Danh Mục</label>
                  <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục" value="{{$loaisp->name}}">
                </div>
                <div class="form-group">
                  <label>Loại sản phẩm</label>
                  <select class="form-control" name="type_products">
                    @foreach($theloai as $tl)
                      <option
                      @if($loaisp->id_type == $tl->id)
                        {{"selected"}}
                      @endif
                      value="{{$tl->id}}">{{$tl->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Mô Tả</label>
                  <input type="text" class="form-control" name="des" value="{{$loaisp->description}}" placeholder="Mô tả"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Sửa</button>
                 <button type="reset" class="btn btn-default">Làm Mới</button>
     		</form>
     </div>
@endsection