@extends('admin.layout.index')
@section('content')
	   <section class="content-header">
      <h1>
        Thêm
        <small>Khách hàng</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Khách hàng</a></li>
        <li class="active">Add</li>
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
            <form role="form" action="admin/khachhang/add" method="post">
            	<input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="col-sm-7">
                <div class="form-group">
                  <label>Tên khách hàng</label>
                  <input type="text" name="name" class="form-control" placeholder="Nhập tên khách hàng">
                </div>
                <div class="form-group">
                  <label>giới tính</label>
                 <select class="form-control" name="gender">
                      <option value="nam">NAM</option>
                      <option value="nữ">Nữ</option>
                  </select>
                </div>
                  <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" placeholder="Nhập email">
                </div>
                 <div class="form-group">
                  <label>Địa chỉ</label>
                  <input type="text" name="address" class="form-control" placeholder="Nhập địa chỉ">
                </div>
                 <div class="form-group">
                  <label>Số Điện Thoại</label>
                  <input type="text" name="phone_number" class="form-control" placeholder="Nhập số điện thoại">
                </div>
                 <div class="form-group">
                  <label>Ghi chú</label>
                  <textarea id="editor1" rows="20" name="note" class="form-control" placeholder="Nhập địa chỉ"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Thêm</button>
                 <button type="reset" class="btn btn-default">Làm Mới</button>
               </div>
     		</form>
     </div>
@endsection