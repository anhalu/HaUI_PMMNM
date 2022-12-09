@extends('admin.layout.index')
@section('content')
	   <section class="content-header">
      <h1>
        Sửa
        <small>{{$supplier->name_supplier}}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Slide</a></li>
        <li class="active">Edit</li>
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
         <form role="form" action="admin/nhacungcap/edit/{{$supplier->id}}" method="post">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="col-sm-7">
                <div class="form-group">
                  <label>Tên Nhà cung cấp</label>
                  <input type="text" name="name_supplier" class="form-control" placeholder="Nhập tên danh mục" value="{{$supplier->name_supplier}}">
                </div>
                 <div class="form-group">
                  <label>Địa chỉ</label>
                  <textarea rows="20" id="editor1" name="address" class="form-control" placeholder="Nhập địa chỉ" ><?php echo $supplier['address']; ?></textarea>
                </div>
                 <div class="form-group">
                  <label>Số Điện Thoại</label>
                  <input type="text" name="phone" class="form-control" placeholder="Nhập số điện thoại" value="{{$supplier->phone}}">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" placeholder="Nhập email" value="{{$supplier->email}}">
                </div>
                <button type="submit" class="btn btn-default">Sửa</button>
                 <button type="reset" class="btn btn-default">Làm Mới</button>
               </div>
        </form>
     </div>
@endsection