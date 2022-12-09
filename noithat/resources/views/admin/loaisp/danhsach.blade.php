@extends('admin.layout.index')
@section('content')
    <section class="content-header">
      <h1>
        DANH SÁCH
        <small>Danh mục sản phẩm </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
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
                  		</div>
                  		<div class="row">
                  			<div class="col-sm-12">
                  				<!-- Task manager table -->
								<div class="panel panel-flat" style="width: 100%; border: 1px solid grey;">
									@if(session('thongbao'))
	    						<div class="alert alert-success">
	    						{{session('thongbao')}}
	    						</div>
	    							@endif
									<table class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>ID</th>
												<th>Tên Danh Mục</th>
												<th>Tên Loại Sản Phẩm</th>
												<th>Mô Tả</th>
												<th>Edit</th>
												<th>Delete</th>
											</tr>
										</thead>
										<tbody>
											@foreach($loaisp as $lsp )
											<tr>
												<td>{{$lsp->id}}</td>
												<td>{{$lsp->name}}</td>
												<td>{{$lsp->product_type->name}}</td>
												<td>{{$lsp->description}}</td>
												<td class="center"><a href="admin/loaisp/edit/{{$lsp->id}}"><i class="icon icon-pencil"></i> Edit</a></td>
												<td class="center"><a href="admin/loaisp/delete/{{$lsp->id}}"><i class="icon icon-bin"></i> Delete</a></td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
                  			</div>
                  		</div>
                  		<div class="row">
                  			<!-- <div class="col-sm-5">
                  				<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">showing 1 to 1 of 1 entries</div>
                  			</div> -->
                  			<div class="col-sm-7">{{$loaisp->links()}}</div>
                  		</div>
				
				<!-- /task manager table -->

			</div>
			<!-- /main content -->

		</div>
	</div>
</div>
</section>


@endsection