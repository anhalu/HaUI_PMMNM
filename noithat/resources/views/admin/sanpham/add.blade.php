@extends('admin.layout.index')
@section('content')
	   <section class="content-header">
      <h1>
        DANH SÁCH
        <small>Thêm Sản Phẩm</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Sản phẩm</a></li>
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
            <form role="form" action="admin/sanpham/add" method="post" >
            	<input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="col-md-6">
                <div class="form-group">
                  <label>Tên Sản Phẩm</label>
                  <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group">
                  <label>Loại sản phẩm</label>
                  <select class="form-control" name="type_products" id="type_products">
                    @foreach($loaisp as $lsp)
                      <option value="{{$lsp->id}}">{{$lsp->name}}</option>
                    @endforeach
                  </select>
                </div>
                 <div class="form-group">
                  <label>Danh mục sản phẩm</label>
                  <select class="form-control" name="category" id="category">
                    @foreach($danhmuc as $dm)
                      <option value="{{$dm->id}}">{{$dm->name}}</option>
                    @endforeach
                  </select>
                </div>
                 <div class="form-group">
                  <label>Nhà cung cấp</label>
                  <select class="form-control" name="supplier" id="supplier">
                    @foreach($nhacc as $ncc)
                      <option value="{{$ncc->id}}">{{$ncc->name_supplier}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Mô Tả</label>
                  <textarea id="editor1" class="form-control ckeditor" name="des" rows="3" placeholder="Mô tả"></textarea>
                </div>
                  </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Thông số sản phẩm</label>
                  <input type="text" name="parameter" class="form-control" placeholder="Nhập thông số">
                </div>
                <div class="form-group">
                  <label>Xuất xứ</label>
                  <input type="text" name="origin" class="form-control" placeholder="Nhập xuất xứ">
                </div>
              
                <div class="form-group">
                  <label>Chất liệu</label>
                  <input type="text" name="material" class="form-control" placeholder="Nhập chất liệu">
                </div>
                <div class="form-group">
                  <label>giá gốc</label>
                  <input type="text" name="unit_price" class="form-control" placeholder="Nhập giá gốc">
                </div>
                <div class="form-group">
                  <label>giá khuyến mãi</label>
                  <input type="text" name="promotion_price" class="form-control" placeholder="Nhập giá khuyến mãi">
                </div>
                <div class="form-group">
                  <label>ảnh sản phẩm</label>
                  <input type="file" name="img">
                </div>
                <div class="form-group">
                  <label>Đơn vị</label>
                  <input type="text" name="unit" class="form-control" placeholder="Nhập đơn vị">
                </div>
                <div class="form-group">
                  <label>Mới</label>
                 <select class="form-control" name="new">
                      <option value="0">Không</option>
                      <option value="1">Mới</option>
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