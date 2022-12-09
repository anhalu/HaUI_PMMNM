	<header>
		<!-- top Header -->
		<!-- <div id="top-header">
			<div class="container">
				<div class="pull-left">
					<span></span>
				</div>
				<div class="pull-right">
					<ul class="header-top-links">
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">ENG <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">English (ENG)</a></li>
								<li><a href="#">Russian (Ru)</a></li>
								<li><a href="#">French (FR)</a></li>
								<li><a href="#">Spanish (Es)</a></li>
							</ul>
						</li>
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">USD <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">USD ($)</a></li>
								<li><a href="#">EUR (€)</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div> -->
		<!-- /top Header -->

		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<a class="logo" href="http://localhost/noithat/public/index">
							<img src="source/assets/img/logo.png" alt="">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Search -->
					<div class="header-search">
						<form action="{{route('search')}}" method="get">
							<input class="input search-input" type="text" name="key" placeholder="Nhập từ khóa">
							<select class="input search-categories">
								<option value="0">Tìm Kiếm</option>
								<option value="1">Theo Tên</option>
								<option value="1">Theo giá</option>
							</select>
							<button class="search-btn"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- /Search -->
				</div>
				<div class="pull-right">
					<ul class="header-btns">
						<!-- Account -->
						<li class="header-account dropdown default-dropdown" style="width: 200px;">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase">Xin chào</strong>&nbsp;&nbsp;<i class=" fa fa-caret-down"></i>
							</div>
							@if(Auth::check())
								<b class="text-uppercase" style="font-size: 15px;">{{Auth::user()->full_name}}</b>
							@else
							<a href="{{route('login')}}" class="text-uppercase" style="font-size: 12px;">Đăng Nhập</a> / <a href="{{route('sigin')}}" class="text-uppercase">Đăng Ký</a>
							@endif
							@if(Auth::check())
								@if(Auth::user()->level==1)
							<ul class="custom-menu">
								<li><a href="http://localhost/noithat/public/admin/layout/trangchu"><i class="fa fa-user-o"></i>Admin</a></li>
								<li><a href="{{route('logout')}}"><i class="fa fa-heart-o"></i>Đăng xuất</a></li>
							</ul>
								@else
								<ul class="custom-menu">
								<li><a href="{{route('logout')}}"><i class="fa fa-heart-o"></i>Đăng xuất</a></li>
								</ul>
								@endif
							@endif
						</li>
						<!-- /Account -->

						<!-- Cart -->
						<li class="header-cart dropdown default-dropdown">
							
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
									<span class="qty">
										@if(Session::has('cart'))
											{{Session('cart')->totalQty}}
										@else 0
										@endif</span>
								</div>
								<strong class="text-uppercase">giỏ hàng</strong>
								<br>
							</a>
							<div class="custom-menu">
								<div id="shopping-cart">
									<div class="shopping-cart-list">
										@if(Session::has('cart'))
										@foreach($product_cart as $product)
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="source/image/product/{{$product['item']['image']}}" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">
												@if($product['item']['promotion_price']==0)
													{{number_format($product['item']['unit_price'])}}
												@else {{number_format($product['item']['promotion_price'])}}@endif<span class="qty"> * {{$product['qty']}}</span></h3>
												<h2 class="product-name"><a href="#">{{$product['item']['name']}}</a></h2>
											</div>
											<a href="{{route('xoagiohang',$product['item']['id'])}}"><button class="cancel-btn"><i class="fa fa-trash"></i></button></a>
										</div>
										@endforeach	
										@endif	
									</div>
										@if(Session::has('cart'))
									<div class="shopping-cart-btns">
									
										<div class="cart-total text-left">Tổng tiền: <H4><span class="cart-total-value">{{number_format(Session('cart')->totalPrice)}} VND</span></H4></div>

											<div class="clearfix"></div>
										<a href="http://localhost/noithat/public/dat-hang"><button class="primary-btn">Đặt Hàng <i class="fa fa-arrow-circle-right"></i></button></a>
									</div>
										@endif
								</div>
							</div>
							
						</li>
						
						<!-- /Cart -->

						<!-- Mobile nav toggle-->
						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->

<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				<!-- category nav -->
				<div class="category-nav show-on-click">
					<span class="category-header">Danh mục<i class="fa fa-list"></i></span>
					<ul class="category-list">
						@foreach($loai_sp as $lsp)
						@if(count($lsp->category)>0)
						<li class="dropdown side-dropdown">
							<a class="dropdown-toggle" href="{{route('loaisanpham',$lsp->id)}}" data-toggle="dropdown" aria-expanded="true" >{{$lsp->name}}<i class="fa fa-angle-right"></i></a>
							<!-- data-toggle="dropdown" aria-expanded="true" -->
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											@foreach($lsp->category as $dm)
											<li><a href="{{route('danhmucsp',$dm->id)}}">{{$dm->name}}</a></li>
											@endforeach
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
								</div>
								<div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="{{route('loaisanpham',$lsp->id)}}">
											<img src="source/image/product_type/{{$lsp->image}}" alt="">
											<div class="banner-caption text-center">
												<h2 class="text-warning">{{$lsp->name}}</h2>
												<h3 class="white-color font-weak">View Detail</h3>
											</div>
										</a>
									</div>
								</div>
							</div>
						</li>
						@endif
						@endforeach
					</ul>
				</div>
				<!-- /category nav -->

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li><a href="http://localhost/noithat/public/index">Trang Chủ</a></li>
						<li><a href="http://localhost/noithat/public/san-pham-moi">HÀNG MỚI VỀ</a></li>
						<li><a href="http://localhost/noithat/public/san-pham-giam-gia">HÀNG GIẢM GIÁ</a></li>
						<li><a href="http://localhost/noithat/public/lien-he">Liên Hệ</a></li>
						<li><a href="http://localhost/noithat/public/gioi-thieu">Giới Thiệu</a></li>
						<li><a href="http://localhost/noithat/public/tin-tuc">Tin Tức</a></li>
					</ul>
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
<!-- /NAVIGATION-->