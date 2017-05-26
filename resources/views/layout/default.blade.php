<!DOCTYPE html>
<html>
<head>
	<title>KIOSK</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-theme.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dataTables.bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js-keyboard/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js-keyboard/css/jsKeyboard.css') }}" type="text/css" media="screen"/>
	<script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/responsive.bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js-keyboard/js/jsKeyboard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js-keyboard/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/JsBarcode.all.min.js') }}" type="text/javascript"></script>
</head>
<body>
	@include('layout/header')
	<div class="container-fluid fullHeight">
		@yield('content')
	</div>
	@yield('script')
</body>
</html>