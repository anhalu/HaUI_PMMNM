@extends('admin.layout.index')
@section('content')
<style type="text/css">
        .table h4{
          color: #660FC7;
        }
        .table tr:first-child h5{
          display: inline;
        }
        .table tr:first-child p{
          display: inline;
        }
      </style>
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-10">
        <h4><b>chi tiết hóa đơn: </b> {{$import_bill_detail->id}}</h4>
        <table class="table m-auto">
          <tr>
            <td colspan="2"><p>Mã sản phẩm: </p><h4 id="ho">{{$import_bill_detail->id_product}}</h4></td>
          </tr>
          <tr>
            <td colspan="2"><p>Tên sản phẩm: </p><h4 id="ho">{{$import_bill_detail->product->name}}</h4></td>
          </tr>
          <tr>
            <td colspan="2"><p>Nhà cung cấp</p><h4 id="diachi">{{$import_bill_detail->supplier->name}}</h4></td>
          </tr>
          <!-- <tr>
            <td colspan="2"><p>SĐT:</p><h4 id="sdt">{{$import_bill->employees->phone}}</h4></td>
          </tr>
          <tr>
            <td colspan="2"><p>Email:</p><h4 id="sdt">{{$import_bill->employees->email}}</h4></td>
          </tr> -->
        </table>
        <br>
        <table class="table table-bordered">
          <h4>Danh sách sản phẩm đã nhập</h4>
              <thead>
                <tr>
                  <th>Mã sản phẩm</th>
                  <th>Tên sản phẩm</th>
                  <th>Nhà cung cấp</th>
                  <th>ảnh sản phẩm</th>
                  <th>Đơn giá</th>
                  <th>số lượng</th>
                </tr>
              </thead>
              <tbody>
                @foreach($import_bill as $bills ) 
                <tr>
                  <td>{{$bills->id_product}}</td>
                  <td>{{$bills->product->name}}</td>
                  <td><img src="source/image/product/{{$bills->product->image}}" width="100px" height="100px"></td>
                   <td>{{$bills->supplier->name}}</td>
                  <td>{{number_format($bills->unit_price)}} VND</td>
                  <td>{{$bills->product->origin}}</td>
                  <td>{{$bills->quantity}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <h3>Tổng tiền : {{number_format($import_bill->total_price) }} VND</h3>
    </div>
  </div>
</div>
@endsection