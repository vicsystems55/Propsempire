<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from grandetest.com/theme/findhouse-html/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Oct 2020 13:14:27 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="advanced search custom, agency, agent, business, clean, corporate, directory, google maps, homes, listing, membership packages, property, real estate, real estate agent, realestate agency, realtor">
<meta name="description" content="PropsEmpire - The Next Big Thing in Real Estate Marketing..">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="{{asset('propsempire')}}/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('propsempire')}}/css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{asset('propsempire')}}/css/responsive.css">
<!-- Title -->
<title></title>

<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<meta name="csrf-token" content="{{ csrf_token() }}" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

</head>
<body  class="maxw1600 m0a">
<div class="wrapper">
<div class="preloader"></div>
	

	<div id="app">
		<!-- Main Header Nav -->
		@include('frontpage.header')

		<!-- Home Design -->
		@yield('content')


		@include('frontpage.footer')
	</div>
	
<a class="scrollToHome text-thm3" href="#"><i class="flaticon-arrows"></i></a>
</div>

<!-- Wrapper End -->
<script type="text/javascript" src="{{config('app.url')}}propsempire/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="{{config('app.url')}}propsempire/js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}propsempire/js/popper.min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}propsempire/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}propsempire/js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="{{config('app.url')}}propsempire/js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="{{config('app.url')}}propsempire/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}propsempire/js/isotop.js"></script>
<script type="text/javascript" src="{{config('app.url')}}propsempire/js/snackbar.min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}propsempire/js/simplebar.js"></script>
<script type="text/javascript" src="{{config('app.url')}}propsempire/js/parallax.js"></script>
<script type="text/javascript" src="{{config('app.url')}}propsempire/js/scrollto.js"></script>
<script type="text/javascript" src="{{config('app.url')}}propsempire/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}propsempire/js/jquery.counterup.js"></script>
<script type="text/javascript" src="{{config('app.url')}}propsempire/js/wow.min.js"></script>
<script type="text/javascript" src="{{config('app.url')}}propsempire/js/slider.js"></script>
<script type="text/javascript" src="{{config('app.url')}}propsempire/js/timepicker.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="{{config('app.url')}}propsempire/js/script.js"></script>

</body>

<!-- Mirrored from grandetest.com/theme/findhouse-html/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Oct 2020 13:14:57 GMT -->
</html>