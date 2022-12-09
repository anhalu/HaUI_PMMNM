<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang Quản Trị</title>
	<base href="{{asset('')}}">
	<!-- Global stylesheets -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	
	<link href="admin_asset/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="admin_asset/assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="admin_asset/assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="admin_asset/assets/css/colors.css" rel="stylesheet" type="text/css"> -->
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<!-- <script type="text/javascript" src="admin_asset/assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="admin_asset/assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="admin_asset/assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="admin_asset/assets/js/plugins/loaders/blockui.min.js"></script> -->
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<!-- <script type="text/javascript" src="admin_asset/assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="admin_asset/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="admin_asset/assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="admin_asset/assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="admin_asset/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="admin_asset/assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="admin_asset/assets/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="admin_asset/assets/js/core/app.js"></script>
	<script type="text/javascript" src="admin_asset/assets/js/pages/dashboard.js"></script> -->
	<!-- /theme JS files -->
	  <link rel="stylesheet" href="admin_asset/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin_asset/assets/bower_components/bootstrap/dist/js/bootstrap.min.js">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin_asset/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="admin_asset/assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin_asset/assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="admin_asset/assets/dist/css/dinhdangadmin.css">
  <link rel="stylesheet" href="admin_asset/assets/dist/css/skins/_all-skins.min.css">
  <link href="admin_asset/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


</head>

<body class="hold-transition skin-blue sidebar-mini">
		@include('admin.layout.header')

			<!-- Main sidebar -->
			@include('admin.layout.menu')
			<!-- /main sidebar -->

		<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section> -->

    <!-- Main content -->
    <section class="content container-fluid">

      @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
			
	@include('admin.layout.footer')
<!-- jQuery 3 -->
<script src="admin_asset/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="admin_asset/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="admin_asset/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="admin_asset/assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="admin_asset/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin_asset/assets/dist/js/demo.js"></script>
<script type="text/javascript" language="javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	CKEDITOR.replace( 'editor1', {
        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } );
</script>
	@yield('script')
</body>
</html>
