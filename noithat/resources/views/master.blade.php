<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>E-SHOP - Nội thất cao cấp</title>
	<base href="{{asset('')}}">
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="source/assets/css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="source/assets/css/slick.css" />
	<link type="text/css" rel="stylesheet" href="source/assets/css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="source/assets/css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="source/assets/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="source/assets/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link href="admin_asset/assets/css/colors.css" rel="stylesheet" type="text/css">
		<link href="admin_asset/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
</head>
<body>

	@include('header')
	<div class="rev-slider">
		@yield('content')
	</div> <!-- .container -->
	@include('footer')
	


	<!-- include js files -->
	<!-- jQuery Plugins -->
	<script src="source/assets/js/jquery.min.js"></script>
	<script src="source/assets/js/bootstrap.min.js"></script>
	<script src="source/assets/js/slick.min.js"></script>
	<script src="source/assets/js/nouislider.min.js"></script>
	<script src="source/assets/js/jquery.zoom.min.js"></script>
	<script src="source/assets/js/main.js"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
	
</body>
</html>
