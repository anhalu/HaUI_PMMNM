@extends('master')
@section('content')
<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="http://localhost/noithat/public/index">Home</a></li>
				<li class="active">Chi Tiết Tin Tức</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- MAIN -->
				<div id="main" class="col-md-7">
					<!-- store top filter -->
					<!-- /store top filter -->
					<h3 class="aside-title">Tin Tức</h3>
					<!-- STORE -->
					<div id="store">
						<!-- row -->
						<div class="row">
								<div class="news" style="height: ">
									<a href=""><h4>{{$tintuc->title}}</h4></a>
									<b><?php echo $tintuc['summary']; ?></b><br>
									<?php echo $tintuc['content']; ?><!-- {{$tintuc->content}} -->
									<br>
								</div>
						</div>
						<!-- /row -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /MAIN -->
				<div class="col-md-4" style="margin-left: 50px;">
					<h3 class="aside-title">Tin Tức Khác</h3>
					<div id="store">
						<!-- row -->
						<div class="row">
							<ul style="list-style-type: disc;">
								@foreach($tintuc_khac as $ttk)
									<a href="{{route('chitiettin',$ttk->id)}}"><li>{{$ttk->title}}</li></a><br>

								@endforeach
							</ul>
						</div>
						<!-- /row -->
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
			
@endsection