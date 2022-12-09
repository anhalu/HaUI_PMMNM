@extends('master')
@section('content')
<style type="text/css">

.login-container .page-container {
  padding-top: 40px;
  position: static;
  border: 1px solid #ccc;
}
.login-container .page-container .login-form {
  width: 320px;
}
.login-container .page-container .login-form .thumb {
  margin: 0 auto 20px auto;
}
.login-container .page-container .login-form,
.login-container .page-container .registration-form {
  margin: 0 auto 20px auto;
}
@media (max-width: 480px) {
  .login-container .page-container .login-form,
  .login-container .page-container .registration-form {
    width: 100%;
  }
}
.login-container .page-container .nav-tabs.nav-justified {
  margin-bottom: 0;
}
.login-container .page-container .nav-tabs.nav-justified > li > a {
  border-top: 0!important;
  padding-left: 15px;
  padding-right: 15px;
  background-color: #f5f5f5;
}
.login-container .page-container .nav-tabs.nav-justified > li:first-child > a {
  border-left: 0;
  border-radius: 3px 0 0 0;
}
.login-container .page-container .nav-tabs.nav-justified > li:last-child > a {
  border-right: 0;
  border-radius: 0 3px 0 0;
}
.login-container .page-container .nav-tabs.nav-justified > li.active > a {
  background-color: transparent;
}
@media (max-width: 768px) {
  .login-container .page-container .nav-tabs.nav-justified {
    padding: 0;
    border-width: 0 0 1px 0;
    border-radius: 0;
  }
  .login-container .page-container .nav-tabs.nav-justified:before {
    content: none;
  }
  .login-container .page-container .nav-tabs.nav-justified > li > a {
    border-width: 0!important;
  }
}
.login-container .footer {
  left: 0;
  right: 0;
}
@media (max-width: 768px) {
  .login-options,
  .login-options .text-right {
    text-align: center;
  }
}
.icon-object {
  border-radius: 50%;
  text-align: center;
  margin: 10px;
  border-width: 3px;
  border-style: solid;
  padding: 20px;
  display: inline-block;
}
.icon-object > i {
  font-size: 32px;
  top: 0;
}
</style>
<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="http://localhost/noithat/public/index">Home</a></li>
				<li class="active"><a href="http://localhost/noithat/public/dang-nhap">ĐĂNG NHẬP TÀI KHOẢN</a></li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->
<div class="login-container">
	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Simple login form -->
					<form action="{{route('login')}}" method="post">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="panel panel-body login-form" style="border: 1px solid #ccc;width: 400px;
    margin: auto; height: 500px; margin-top: 20px;">
								@if(Session::has('flag'))
						<div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
					@endif
							<div class="text-center">
								<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
								<h5 class="content-group">Đăng Nhập Tài Khoản Của Bạn</h5> <small class="display-block">Nhập Thông Tin Đăng Nhập Của Bạn ở Dưới Đây</small>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<label class="">Email</label>
								<input type="email" name="email" class="form-control" placeholder="Username">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>
							<br>
							<div class="form-group has-feedback has-feedback-left">
								<label>Password</label>
								<input type="password" name="password" class="form-control" placeholder="Password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>
							<br>
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">sign in<i class="icon-circle-right2 position-right"></i></button>
							</div>

							<div class="text-center">
								<a href="login_password_recover.html">Forgot password?</a>
							</div>
						</div>
					</form>
					<!-- /simple login form -->


					<!-- Footer -->
					<div class="footer text-muted text-center">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
</div>
@endsection