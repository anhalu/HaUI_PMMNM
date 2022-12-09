@extends('master')
@section('content')
	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="http://localhost/noithat/public/index">Home</a></li>
				<li class="active">sản phẩm mới nhất</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->
<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
	<!-- ASIDE -->
				<div id="aside" class="col-md-3">

					<!-- aside widget -->
					<div class="aside">
						<h3 class="aside-title">SẢN PHẨM KHÁC</h3>
						<!-- widget product -->
						@foreach($sp_khac as $spkhac)
						<div class="product product-widget" style="border-bottom: 1px solid #ccc;">
							<div class="product-thumb">
								<img src="source/image/product/{{$spkhac->image}}" alt="">
							</div>
							<div class="product-body">
								<h2 class="product-name"><a href="{{route('chitietsanpham',$spkhac->id)}}">{{$spkhac->name}}</a></h2>
								<h3 class="product-price">
										@if($spkhac->promotion_price!=0)
										<span class="product-old-price" style="font-size: 18px;">{{number_format($spkhac->promotion_price)}} VND</span><br>
										<del class="product-price" style="font-size: 10px;">{{number_format($spkhac->unit_price)}} VND</del>
										@else
										<span class="product-old-price" style="font-size: 18px;">{{number_format($spkhac->unit_price)}} VND</span><br><br>
										@endif
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o empty"></i>
								</div>
							</div>
						</div>
						@endforeach
						<!-- /widget product -->
					</div>
					<!-- /aside widget -->
				</div>
				<!-- /ASIDE -->

	<!-- MAIN -->
				<div id="main" class="col-md-9">
					<!-- store top filter -->
					<!-- /store top filter -->
					<h3 class="aside-title">SẢN PHẨM MỚI NHẤT</h3>
					<!-- STORE -->
					<div id="store">
						<!-- row -->
						<div class="row">
							@foreach($sp_new as $new)
							<!-- Product Single -->
							<div class="col-md-4 col-sm-6 col-xs-6" style="height: 500px;">
								<div class="product product-single">
									<div class="product-thumb">
										<div class="product-label">
											<span>New</span>
										</div>
										<button class="main-btn quick-view"><a href="{{route('chitietsanpham',$new->id)}}"><i class="fa fa-search-plus"></i> view detail</a></button>
										<img src="source/image/product/{{$new->image}}" alt="" height="250px">
									</div>
									<div class="product-body">
										<h3 class="product-price">
										@if($new->promotion_price!=0)
										<span class="product-old-price">{{number_format($new->promotion_price)}} VND</span><br>
										<del class="product-price" style="font-size: 10px;">{{number_format($new->unit_price)}} VND</del>
										@else
										<span class="product-old-price" style="font-size: 18px;">{{number_format($new->unit_price)}} VND</span><br><br>
										@endif
									</h3>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o empty"></i>
										</div>
										<h2 class="product-name" style="font-size: 14px;"><a href="{{route('chitietsanpham',$new->id)}}">{{$new->name}}</a></h2>
										<div class="product-btns">
											<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
											<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
											<a href="{{route('themgiohang',$new->id)}}"><button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button></a>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->
							@endforeach
						</div>
						<!-- /row -->
						<div class="row">{{$sp_new->links()}}</div>
					</div>
					<!-- /STORE -->
				</div>
				<!-- /MAIN -->
			</div>
		</div>
	</div>
@endsection