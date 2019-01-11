<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="{{URL::to('front/image/favicon.png')}}" type="image/png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="{{URL::to('front/css/vendor.bundle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('front/css/style4963.css?ver=1.1')}}">
	
</head>
<body class="site-body style-v1">
    
    @include('front.partials.header')

    @yield('content')

    @include('front.partials.footer')

	<!-- Preloader !active please if you want -->
	<!-- <div id="preloader"><div id="status">&nbsp;</div></div> -->
	<!-- Preloader End -->

	<!-- JavaScript Bundle -->
	<script src="{{URL::to('front/js/jquery.bundle.js')}}"></script>
	<!-- Theme Script init() -->
	<script src="{{URL::to('front/js/script.js')}}"></script>
	<!-- End script -->
</body>
</html>