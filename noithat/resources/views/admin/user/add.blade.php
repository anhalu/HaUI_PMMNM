@extends('admin.layout.index')
@section('content')
	   <section class="content-header">
      <h1>
        Người Dùng
        <small>Thêm người dùng</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>user</a></li>
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
            <form role="form" action="admin/user/add" method="post" >
            	<input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="col-md-5">
                <div class="form-group">
                  <label>Họ Tên Người Dùng</label>
                  <input type="text" name="name" class="form-control" placeholder="Nhập tên người dùng">
                </div>
               <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Nhập địa chỉ eamil">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu">
                </div>
                <div class="form-group">
                  <label>Re Password</label>
                  <input type="password" name="re_password" class="form-control" placeholder="Nhập lại mật khẩu">
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                  <label>Số điện thoại</label>
                  <input type="text" name="phone" class="form-control" placeholder="Nhập số điện thoại">
                </div>
                <div class="form-group">
                  <label>Địa chỉ</label>
                  <input type="text" name="address" class="form-control" placeholder="Nhập địa chỉ">
                </div>
                <div class="form-group">
                  <label>Quyền</label>
                 <select class="form-control" name="level">
                      <option value="0">Người dùng thường</option>
                      <option value="1">Admin</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-default">Thêm</button>
                 <button type="reset" class="btn btn-default">Làm Mới</button>
            </div>   
     		</form>
     </div>
@endsection
@section('script')
	<script>
		$(document).ready(function(){
			$("#type_products").change(function(){
				var id_type = $(this).val();
				$.get("admin/ajax/loaisp/"+id_type,function(data){
					$("#category").html(data);
				});
			});
		});
	</script>
@endsection