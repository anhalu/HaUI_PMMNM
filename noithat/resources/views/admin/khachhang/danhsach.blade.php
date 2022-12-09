@extends('admin.layout.index')
@section('content')
    <section class="content-header">
      <h1>
        DANH SÁCH
        <small>Khách hàng</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Khách hàng</a></li>
        <li class="active">danh sách</li>
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
									<th>Tên khách hàng</th>
									<th>giới tính</th>
									<th>Email</th>
									<th>Địa chỉ</th>
									<th>Số Điện Thoại</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								@foreach($customer as $kh )	
								<tr>
									<td>{{$kh->id}}</td>
									<td>{{$kh->name}}</td>
									<td>{{$kh->gender}}</td>
									<td>{{$kh->email}}</td>
									<td><?php echo $kh['address'];?></td>
									<td>{{$kh->phone_number}}</td>
									
									<td class="center"><a href="admin/khachhang/edit/{{$kh->id}}"><i class="icon icon-pencil"></i> Edit</a></td>
									<td class="center"><a href="admin/khachhang/delete/{{$kh->id}}"><i class="icon icon-bin"></i> Delete</a></td>
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
	      			<div class="col-sm-7">{{$customer->links()}}</div>
               </div>
				<!-- /task manager table -->

			</div>
			<!-- /main content -->

		</div>
	</div>
</div>
</section>

@endsection