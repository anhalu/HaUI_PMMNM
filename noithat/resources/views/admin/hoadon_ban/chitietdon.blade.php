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
        <h4><b>chi tiết hóa đơn: </b> {{$bill->id}}</h4>
        <table class="table m-auto">
          <tr>
            <td colspan="2"><p>Họ và tên khách hàng: </p><h4 id="ho">{{$bill->customer->name}}</h4></td>
          </tr>
          <tr>
            <td colspan="2"><p>Địa chỉ:</p><h4 id="diachi">{{$bill->customer->address}}</h4></td>
          </tr>
          <tr>
            <td colspan="2"><p>SĐT:</p><h4 id="sdt">{{$bill->customer->phone_number}}</h4></td>
          </tr>
          <tr>
            <td colspan="2"><p>Email:</p><h4 id="sdt">{{$bill->customer->email}}</h4></td>
          </tr>
        </table>
        <br>
        <table class="table table-bordered">
          <h4>Danh sách sản phẩm đã mua</h4>
              <thead>
                <tr>
                  <th>Mã sản phẩm</th>
                  <th>Tên sản phẩm</th>
                  <th>ảnh sản phẩm</th>
                  <th>Đơn giá</th>
                  <th>Xuất xứ</th>
                  <th>Số lượng</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach($bill_detail as $bills ) 
                <tr>
                  <td>{{$bills->id_product}}</td>
                  <td>{{$bills->product->name}}</td>
                  <td><img src="source/image/product/{{$bills->product->image}}" width="100px" height="100px"></td>
                  <td>{{number_format($bills->unit_price)}} VND</td>
                  <td>{{$bills->product->origin}}</td>
                  <td>{{$bills->quantity}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <h3>Tổng tiền : {{number_format($bill->total)}} VND</h3>
    </div>
  </div>
</div>
@endsection