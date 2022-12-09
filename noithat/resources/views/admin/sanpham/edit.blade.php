@extends('admin.layout.index')
@section('content')
	   <section class="content-header">
      <h1>
        Sản Phẩm
        <small>{{$product->name}}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Sản phẩm</a></li>
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
            <form role="form" action="admin/sanpham/edit/{{$product->id}}" method="post" >
            	<input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="col-md-6">
                <div class="form-group">
                  <label>Tên Sản Phẩm</label>
                  <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm" value="{{$product->name}}">
                </div>
                <div class="form-group">
                  <label>Loại sản phẩm</label>
                  <select class="form-control" name="type_products" id="type_products">
                    @foreach($loaisp as $lsp)
                      <option
                      @if($product->id_type == $lsp->id)
                      {{"selected"}}
                      @endif
                       value="{{$lsp->id}}">{{$lsp->name}}</option>
                    @endforeach
                  </select>
                </div>
                 <div class="form-group">
                  <label>Danh mục sản phẩm</label>
                  <select class="form-control" name="category" id="category">
                    @foreach($danhmuc as $dm)
                      <option 
                      @if($product->id_category == $dm->id)
                      {{"selected"}}
                      @endif
                      value="{{$dm->id}}">{{$dm->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Nhà cung cấp</label>
                  <select class="form-control" name="supplier" id="supplier">
                    @foreach($nhacc as $ncc)
                      <option 
                      @if($product->id_supplier == $ncc->id)
                      {{"selected"}}
                      @endif
                      value="{{$ncc->id}}">{{$ncc->name_supplier}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Mô Tả</label>
                  <textarea id="editor1" class="form-control ckeditor" name="des" rows="3" placeholder="Mô tả" >{{$product->description}}</textarea>
                </div>
                  </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Thông số sản phẩm</label>
                  <textarea name="parameter" rows="2" class="form-control" placeholder="Nhập thông số"> {{$product->Parameter}}</textarea>
                </div>
                <div class="form-group">
                  <label>Xuất xứ</label>
                  <textarea name="origin" class="form-control" rows="2" placeholder="Nhập xuất xứ">
          		{{$product->origin}}
                  </textarea>
                </div>
              
                <div class="form-group">
                  <label>Chất liệu</label>
                  <textarea name="material" class="form-control" rows="2" placeholder="Nhập chất liệu">{{$product->material}}</textarea>
                </div>
                <div class="form-group">
                  <label>giá gốc</label>
                  <input type="text" name="unit_price" class="form-control" placeholder="Nhập giá gốc" value="{{$product->unit_price}}">
                </div>
                <div class="form-group">
                  <label>giá khuyến mãi</label>
                  <input type="text" name="promotion_price" class="form-control" placeholder="Nhập giá khuyến mãi" value="{{$product->promotion_price}}">
                </div>
                <div class="form-group">
                  <label>ảnh sản phẩm</label>
                  <img src="source/image/product/{{$product->image}}" width="100px" height="100px">
                  <input type="file" name="img" value="{{$product->image}}">
                </div>
                <div class="form-group">
                  <label>Đơn vị</label>
                  <input type="text" name="unit" class="form-control" placeholder="Nhập đơn vị" value="{{$product->unit}}">
                </div>
                <div class="form-group">
                  <label>Mới</label>
                 <select class="form-control" name="new">
                 	<option value="0" @if($product->new == 0) {{"selected"}} @endif /> Không</option>
                    <option value="1" @if($product->new == 1) {{"selected"}} @endif /> Mới</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-default">Edit</button>
                 <button type="reset" class="btn btn-default">Làm Mới</button>
            </div>   
     		</form>
     </div>
      <section class="content-header">
      <h1>
        DANH SÁCH
        <small>Bình luận </small>
      </h1>
    </section>
    <br>
      <!-- Main content -->
      <!-- <div class="content-wrapper"> -->
        <section class="content">
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                      <!-- <div class="row">
                        <div class="col-sm-6">
                          <div class="dataTables_length" id="example1_length">
                            <label>show <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                              <option value="10">10</option>
                              <option value="15">15</option>
                              <option value="20">20</option>
                            </select> entries
                          </label>
                          </div>
                        </div> -->
                        <div class="col-sm-6">
                          <div id="example1_filter" class="dataTables_filter">
                            <label>Search
                              <input type="Search" class="form-control input-sm" name="" placeholder aria-controls="example1">
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
        <!-- Task manager table -->
        <div class="panel panel-flat" style="width: 100%; border: 1px solid grey;">
          <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Người dùng</th>
                  <th>Nội dung</th>
                  <th>ngày đăng</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($product->comment as $cm )
                <tr style="border: 1px">
                  <td>{{$cm->id}}</td>
                  <td>{{$cm->user->full_name}}</td>
                  <td>{{$cm->content}}</td>
                  <td>{{$cm->created_at}}</td>
                  <td class="center"><a href="admin/comment/delete/{{$cm->id}}/{{$product->id}}"><i class="icon icon-bin"></i> Delete</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
        <!-- /task manager table -->

   </div>
      <!-- /main content -->

    </div>
  </div>
</div>
</section>
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