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
  		<div class="col-md-4">
  			<div class="profile">
  				<div class="card" style="width:400px">
  					<div id="tieude"><h4>Contact Info</h4></div>
  <img class="card-img-top" src="admin_asset/assets/img/avatar5.png" alt="Card image" width="398px;">
  <div class="card-body">
  	@if(Auth::check())
    <h4 class="card-title">{{Auth::user()->full_name}}</h4>
    @endif
    <p class="card-text">Quản Trị Viên</p>
    <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
  </div>
</div>
  			</div>
  		</div>
  		<div class="col-md-6">
  			<div class="menu">
        <h3 class="text-primary pt-2 pb-0 ml-2">Thông tin tài khoản</h3>
        <table class="table m-auto">
          <tr>
          	@if(Auth::check())
            <td colspan="2"><p>Họ và tên: </p><h4 id="ho">{{Auth::user()->full_name}}</h4></td>
            @endif
          </tr>
          <tr>
          	@if(Auth::check())
            <td colspan="2"><p>Tên đăng nhập:</p><h4 id="tdn">{{Auth::user()->email}}</h4></td>
            @endif
          </tr>
          <tr>
          	@if(Auth::check())
            <td colspan="2"><p>Địa chỉ:</p><h4 id="diachi">{{Auth::user()->address}}</h4></td>
            @endif
          </tr>
          <tr>
          	@if(Auth::check())
            <td colspan="2"><p>SĐT:</p><h4 id="sdt">{{Auth::user()->phone}}</h4></td>
             @endif
          </tr>
          <tr>
            <td colspan="2"><p>Quyền:</p><h4 id="ns">Quản trị viên</h4></td>
          </tr>
        </table>
        <div class="text-center mt-1"><button class=" btn btn-success" data-toggle="modal" data-target="#myModal" onclick="hienthitdtt()">Thay đổi thông tin</button></div>
        </div>
  </div>
  <!-- PHẦN THAY ĐỔI THÔNG TIN-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
  <div style="visibility: hidden;background-color: white;width: 600px;margin: auto;border: 1px solid black;" id="tdtt">
    <form method="Post" name="form">
      <button type="button" class="close mr-2" data-dismiss="modal">&times;</button>
      <table style="width: 100%">
        <tr>
          <td colspan="2" class="text-center font-weight-bold p-3"><h3 class="text-info">Thay đổi thông tin</h3></td>
        </tr>
        <tr>
          <td>
            <div class="form-group pl-3 pr-3">
            <label>Họ:</label>
                        <input type="text" class="form-control" name="txt1" placeholder="Nhập họ">
                        </div>
          </td>
          <td>
            <div class="form-group pl-3 pr-3">
            <label>Tên:</label>
            <input type="text" class="form-control" name="txt2" placeholder="Nhập Tên">
              </div>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <div class="form-group pl-3 pr-3">
            <label>Địa chỉ:</label>
            <input type="text" name="txt4" class="form-control" placeholder="Địa chỉ">
          </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="form-group pl-3 pr-3">
            <label>SĐT:</label>
            <input type="text" name="txt5" class="form-control" placeholder="Số điện thoại">
          </div>
          </td>
          <td>
            <div class="form-group pl-3 pr-3">
            <label>Giới Tính:</label>
            <select class="form-control" name="select">
              <option>Nam</option>
              <option>Nữ</option>
            </select>
          </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="form-group pl-3 pr-3">
            <label>Ngày sinh:(dd-mm-yy)</label>
            <input type="text" name="txt6" class="form-control" placeholder="Ngày sinh">
          </div>
          </td>
          <td></td>
        </tr>                     
      </table>
    </form>
      <div class="text-center">
            <button class="btn btn-success m-3" style="width: 100px;" data-dismiss="modal" onclick="thaydoi()">Lưu</button>
          <button class="btn btn-success m-3" style="width: 100px;" data-dismiss="modal" onclick="antdtt()">Hủy</button>
      </div>
  </div>
</div>
</div>
</div>
<!--END THAY ĐỔI THÔNG TIN-->
    </div>
  </div>
<script>
  function hienthitdtt() {
    document.getElementById("tdtt").style.visibility ='visible';
  }
  function thaydoi() {
    var a=document.form.txt1.value;
    document.getElementById("ho").innerHTML=a;
    var b=document.form.txt2.value;
    document.getElementById("ten").innerHTML=b; 
    var d=document.form.txt4.value;
    document.getElementById("diachi").innerHTML=d;
    var e=document.form.txt5.value;
    document.getElementById("sdt").innerHTML=e;
    var f=document.form.txt6.value;
    document.getElementById("ns").innerHTML=f;
    var g=document.form.select.value;
    document.getElementById("gt").innerHTML=g;
    document.getElementById("tdtt").style.visibility ='hidden';
  }
</script>
@endsection