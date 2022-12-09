@extends('master')
@section('content')
	<!-- HOME -->
	<div id="home">
		<!-- container -->
		<div class="container">
			<!-- home wrap -->
			<div class="home-wrap">
				<!-- home slick -->
				<div id="home-slick">
					<!-- banner -->
					@foreach($slide as $sl)
					<a href="{{$sl->link}}">
					<div class="banner banner-1">
						
						<img src="source/image/slide/{{$sl->image}}" alt="">
						<div class="banner-caption text-center">
							<h1 style="color: #fff;">{{$sl->name}}</h1>
							<!-- <h3 class="white-color font-weak">Up to 50% Discount</h3>
							<button class="primary-btn">Shop Now</button> -->
						</div>
					
					</div>
					</a>
					@endforeach
					<!-- /banner -->
				</div>
				<!-- /home slick -->
			</div>
			<!-- /home wrap -->
		</div>
		<!-- /container -->
	</div>
	<!-- /HOME -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- banner -->
				@foreach($loaisp as $lsp)
				<div class="col-md-3 col-sm-6">
					<a class="banner banner-1" href="{{route('loaisanpham',$lsp->id)}}">
						<img src="source/image/product_type/{{$lsp->image}}" alt="">
						<div class="banner-caption text-center">
							<h3 class="primary-color">{{$lsp->name}}</h2>
						</div>
					</a>
				</div>
				@endforeach
				<!-- /banner -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section-title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Sản Phẩm Mới</h2>
						<div class="pull-right">
							<div class="product-slick-dots-1 custom-dots"></div>
						</div>
					</div>
				</div>
				<!-- /section-title -->

				<!-- banner -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="banner banner-2">
						<img src="source/image/product/new.jpg" alt="" height="450px;">
						<div class="banner-caption">
							<h2 class="white-color">NEW<br>COLLECTION</h2>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>
				</div>
				<!-- /banner -->

				<!-- Product Slick -->
				<div class="col-md-9 col-sm-6 col-xs-6">
					<div class="row">
						<div id="product-slick-1" class="product-slick">
							
							<!-- Product Single -->
							@foreach($new_product as $new)
							<div class="product product-single">
								<div class="product-thumb" style="height: 250px;">
									<div class="product-label">
										<span>New</span>
									</div>
									<button class="main-btn quick-view"><a href="{{route('chitietsanpham',$new->id)}}"><i class="fa fa-search-plus"></i> view detail</a></button>
									<img src="source/image/product/{{$new->image}}" alt="" height="240px" width="100%">
								</div>
								<div class="product-body">
									<h3 class="product-price">
										@if($new->promotion_price==0)
										<span class="product-old-price">{{number_format($new->unit_price)}} VND</span>
										@else
										<del class="product-price" style="font-size: 12px;">{{number_format($new->unit_price)}} VND</del>
										<span class="product-old-price" style="font-size: 14px;">{{number_format($new->promotion_price)}} VND</span>
										@endif
									</h3>
									<!-- <div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o empty"></i>
									</div> -->
									<h2 class="product-name" style="font-size: 14px;"><a href="{{route('chitietsanpham',$new->id)}}">{{$new->name}}</a></h2>
									<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<a href="{{route('themgiohang',$new->id)}}"><button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button></a>
									</div>
								</div>
							</div>
							@endforeach
							<!-- /Product Single -->
							
						</div>
					</div>
				</div>
				<!-- /Product Slick -->
			</div>
			<!-- /row -->
			<!-- section -->
	<div class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- banner -->
				<div class="col-md-8">
					<div class="banner banner-1">
						<img src="source/image/slide/veneto_web-01.jpg" alt="">
						<div class="banner-caption text-center">
							<h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
							<a href="http://localhost/noithat/public/san-pham-giam-gia"><button class="primary-btn">Shop Now</button></a>
						</div>
					</div>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="http://localhost/noithat/public/san-pham-moi">
						<img src="source/image/slide/banner5.jpg" alt="">
						<div class="banner-caption text-center">
							<!-- <h2 class="white-color">NEW COLLECTION</h2> -->
						</div>
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="http://localhost/noithat/public/san-pham-moi">
						<img src="source/image/slide/dan11.jpg" alt="">
						<div class="banner-caption text-center">
							<h2 class="white-color">NEW COLLECTION</h2>
						</div>
					</a>
				</div>
				<!-- /banner -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Sản phẩm khuyến mãi</h2>
						<div class="pull-right">
							<div class="product-slick-dots-2 custom-dots">
							</div>
						</div>
					</div>
				</div>
				<!-- section title -->

				<!-- banner -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="banner banner-2">
						<img src="source/image/product/promotion.jpg" alt="" height="450px;">
						<div class="banner-caption">
							<h2 class="white-color">PROMOTION PRODUCTS</h2>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>
				</div>
				<!-- /banner -->
				<!-- Product Slick -->
				<div class="col-md-9 col-sm-6 col-xs-6">
					<div class="row">
						<div id="product-slick-2" class="product-slick">
							@foreach($sanpham_khuyenmai as $spkm)
							<!-- Product Single -->
							<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<span class="sale">SALE</span>
									</div>
									<button class="main-btn quick-view"><a href="{{route('chitietsanpham',$spkm->id)}}"><i class="fa fa-search-plus"></i> view detail</a></button>
									<img src="source/image/product/{{$spkm->image}}" alt="" style="height: 250px;">
								</div>
								<div class="product-body">
									<span class="product-old-price" style="font-size: 15px;">{{number_format($spkm->promotion_price)}} VND</span>
									<del class="product-price" style="font-size: 12px;">{{number_format($spkm->unit_price)}} VND</del>
									<!-- <div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o empty"></i>
									</div> -->
									<br>
									<br>
									<h2 class="product-name" style="font-size: 14px;"><a href="{{route('chitietsanpham',$spkm->id)}}">{{$spkm->name}}</a></h2>
									<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<a href="{{route('themgiohang',$spkm->id)}}"><button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button></a>
									</div>
								</div>
							</div>
							<!-- /Product Single -->
							@endforeach

						</div>
					</div>
				</div>
				<!-- /Product Slick -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

@endsection