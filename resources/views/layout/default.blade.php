<!DOCTYPE html>
<html>
<head>
	<title>KIOSK</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-theme.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dataTables.bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.bootstrap.min.css') }}">
	<script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/responsive.bootstrap.min.js') }}" type="text/javascript"></script>
</head>
<body>
	@include('layout/header')
	<div class="container-fluid">
		@yield('content')
	</div>
	@yield('script')
</body>
</html>