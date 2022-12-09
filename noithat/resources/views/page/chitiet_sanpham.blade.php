	@extends('master')
	@section('content')
		<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="http://localhost/noithat/public/index">Home</a></li>
				<li>Loại sản phẩm</li>
				<li class="active">Chi Tiết Sản Phẩm</li>
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
				<!--  Product Details -->
				<div class="product product-details clearfix">
					<div class="col-md-6">
						<div id="product-main-view">
							<div class="product-view">
								<img src="source/image/product/{{$sanpham->image}}" alt="">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="product-body">
							<div class="product-label">
								<span>New</span>
								<span class="sale">-20%</span>
							</div>
							<h2 class="product-name">{{$sanpham->name}}</h2>
							<h3 class="product-price">@if($sanpham->promotion_price!=0)
										<span class="product-old-price" style="font-size: 18px;">{{number_format($sanpham->promotion_price)}} VND</span><br>
										<del class="product-price" style="font-size: 10px;">{{number_format($sanpham->unit_price)}} VND</del>
										@else
										<span class="product-old-price" style="font-size: 18px;">{{number_format($sanpham->unit_price)}} VND</span><br><br>
										@endif</h3>
							<div>
								<b>Xếp Hạng&nbsp&nbsp&nbsp</b>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o empty"></i>
								</div>
							</div>
							<p><strong>Mô Tả:</strong></p>
							<p>{{$sanpham->description}}</p>

							<div class="product-btns">
								<div class="qty-input">
									<span class="text-uppercase">Số Lượng: </span>
									<select class="wc-select" name="color">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								</div>
								<a href="{{route('themgiohang',$sanpham->id)}}"><button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button></a>
								<div class="pull-right">
									<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
									<button class="main-btn icon-btn"><i class="fa fa-share-alt"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="product-tab">
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Thông Số</a></li>
								<li><a data-toggle="tab" href="#tab2">Xuất Xứ</a></li>
								<li><a data-toggle="tab" href="#tab3">Chất Liệu</a></li>
								<li><a data-toggle="tab" href="#tab4">Đánh giá</a></li>
							</ul>
							<div class="tab-content">
								<div id="tab1" class="tab-pane fade in active">
									<p>{{$sanpham->Parameter}}</p>
								</div>
								<div id="tab2" class="tab-pane fade in active">
									<p>{{$sanpham->origin}}</p>
								</div>
								<div id="tab3" class="tab-pane fade in active">
									<p>{{$sanpham->material}}</p>
								</div>
								<div id="tab4" class="tab-pane fade in">

									<div class="row">
										<div class="col-md-6">
											<div class="product-reviews">
												
												@foreach($comment as $cmt)
												<div class="single-review">
													<div class="review-heading">
														<div><a href="#"><i class="fa fa-user-o"></i> {{$cmt->user->name}}</a></div>
														<div><a href="#"><i class="fa fa-clock-o"></i> {{$cmt->create_at}}</a></div>
														<div class="review-rating pull-right">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o empty"></i>
														</div>
													</div>
													<div class="review-body">
														<p>{{$cmt->content}}</p>
													</div>
												</div>
												@endforeach
												<ul class="reviews-pages">
													<li class="active">1</li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="col-md-6">
											<h4 class="text-uppercase">Viết đánh giá của bạn</h4>
											<p>Đại chỉ email của bạn sẽ được công bố.</p>
											<form class="review-form" method="">
												<div class="form-group">
													@if(Auth::check())
													<input class="input" name="name" type="text" placeholder="Your Name" value="{{Auth::user()->full_name}}" />
													@endif
												</div>
												<div class="form-group">
													@if(Auth::check())
													<input class="input" type="email" name="email" placeholder="Email Address" value="{{Auth::user()->email}}" />
													@endif
												</div>
												<div class="form-group">
													<textarea class="input" name="content" placeholder="Your review"></textarea>
												</div>
												<div class="form-group">
													<div class="input-rating">
														<strong class="text-uppercase">Your Rating: </strong>
														<div class="stars">
															<input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
															<input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
															<input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
															<input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
															<input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
														</div>
													</div>
												</div>
												<button class="primary-btn">Submit</button>
											</form>
										</div>
									</div>



								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- /Product Details -->
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
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">SẢN PHẨM TƯƠNG TỰ</h2>
					</div>
				</div>
				<!-- section title -->
				@foreach($sp_tuongtu as $sptt)
				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<button class="main-btn quick-view"><a href="{{route('chitietsanpham',$sptt->id)}}"><i class="fa fa-search-plus"></i> view detail</a></button>
							<img src="source/image/product/{{$sptt->image}}" alt="" style="height: 250px;">
						</div>
						<div class="product-body">
							<h3 class="product-price">
										@if($sptt->promotion_price!=0)
										<span class="product-old-price">{{number_format($sptt->promotion_price)}} VND</span><br>
										<del class="product-price" style="font-size: 10px;">{{number_format($sptt->unit_price)}} VND</del>
										@else
										<span class="product-old-price" style="font-size: 18px;">{{number_format($sptt->unit_price)}} VND</span><br><br>
										@endif
									</h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="{{route('chitietsanpham',$sptt->id)}}">{{$sptt->name}}</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<a href="{{route('themgiohang',$sptt->id)}}"><button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->
				@endforeach
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	@endsection