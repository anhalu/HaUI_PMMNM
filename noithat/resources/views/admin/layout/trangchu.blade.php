@extends('admin.layout.index')
@section('content')
 <section class="content-header">
      <h1>
        TỔNG QUAN
        <small>Chương trình </small>
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
	     <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{count($sanpham)}}</h3>

              <p>Sản Phẩm</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="admin/sanpham/danhsach" class="small-box-footer">Xem chi tiết <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{count($loaisp)}}</h3>

              <p>Loại sản phẩm</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="admin/danhmuc/danhsach" class="small-box-footer">Xem chi tiết <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
         <!-- ./col -->
        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{count($danhmuc)}}</h3>

              <p>Danh mục sản phẩm</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="admin/loaisp/danhsach" class="small-box-footer">Xem chi tiết <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{count($customer)}}</h3>

              <p>Khách Hàng</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
            <a href="admin/khachhang/danhsach" class="small-box-footer">Xem chi tiết <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>{{count($user)}}</h3>

              <p>Người dùng</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="admin/user/danhsach" class="small-box-footer">Xem chi tiết <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{count($supplier)}}</h3>

              <p>Nhà cung cấp</p>
            </div>
            <div class="icon">
              <i class="ion ion-asterisk"></i>
            </div>
            <a href="admin/nhacungcap/danhsach" class="small-box-footer">Xem chi tiết <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
       
      </div>
      <!-- /.row -->
       <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Monthly Recap Report</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-wrench"></i></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>doanh thu: 1 April, 2019 - 30 May, 2019</strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="salesChart" style="height: 180px;"></canvas>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Hóa Đơn bán</strong>
                  </p>

                  <div class="progress-group">
                    <span class="progress-text">Tổng hóa đơn bán</span>
                    <span class="progress-number">{{count($bill)}}</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width: {{count($bill)}}%"></div>
                    </div>
                  </div>
                 
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Hóa đơn đã xử lý</span>
                    <span class="progress-number">{{count($bill2)}}</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green" style="width: {{count($bill2)}}%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Hóa đơn đang chờ xử lý</span>
                    <span class="progress-number">{{count($bill1)}}</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-yellow" style="width: {{count($bill1)}}%"></div>
                    </div>
                  </div>
                   <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Hóa đơn đã hủy</span>
                    <span class="progress-number">{{count($bill3)}}</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red" style="width: {{count($bill3)}}%"></div>
                    </div>
                  </div>

                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                    <h5 class="description-header">$35,210.43</h5>
                    <span class="description-text">TỔNG DOANH THU</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                    <h5 class="description-header">$10,390.90</h5>
                    <span class="description-text">TỔNG CHI TIÊU</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                    <h5 class="description-header">$24,813.53</h5>
                    <span class="description-text">TỔNG LỢI NHUẬN</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                    <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                    <h5 class="description-header">1200</h5>
                    <span class="description-text">GOAL COMPLETIONS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
  </section>
@endsection