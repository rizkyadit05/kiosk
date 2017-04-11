<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Lets GO</title>
	 <meta name="viewport" content="width=device-width">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-theme.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/logo-nav.css') }}">
	<!-- CSS Footer -->
	<link rel="stylesheet" href="{{ asset('assets/css/footer-distributed-with-address-and-phones.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css') }}">
	<link href="{{ asset('assets/css/jquerysctipttop.css') }}" rel="stylesheet" type="text/css">
	<!-- Javascript -->
	<script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
</head>
<body class="fullHeight" style="background-color: white;">
<nav class="navbar navbar-default	 navbar-fixed-top" role="navigation" style="background-color: white;">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img width="250" height="50"  src="{{ asset('assets/images/logo.png') }}" alt="">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="nav-ri-txt nav-ri-border" href="#"><b>Gabung dengan Let's Go</b></a>
                </li>
                <li>
                    <a class="nav-ri-txt" href="#">Login</a>
                </li>
                <li>
                    <a class="nav-ri-txt" href="#">Bantuan</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active"> <img src="http://lorempixel.com/1200/500/sports" style="width:100%" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <p class="text-4">Dapatkan voucher</p>
          <p class="text-4">IDR 100.000</p>
          <p><a class="btn btn-lg" href="#" role="button"><b>Info Lanjut</b></a></p>
        </div>
      </div>
    </div>
    <div class="item"> <img src="http://lorempixel.com/1200/500/people" style="width:100%" data-src="" alt="Second    slide">
      <div class="container">
        <div class="carousel-caption">
          <p class="text-4">Dapatkan voucher</p>
          <p class="text-4">IDR 100.000</p>
          <p><a class="btn btn-lg" href="#" role="button"><b>Info Lanjut</b></a></p>
        </div>
      </div>
    </div>
    <div class="item"> <img src="http://lorempixel.com/1200/500/abstract" style="width:100%" data-src="" alt="Third slide">
      <div class="container">
        <div class="carousel-caption">
          <p class="text-4">Dapatkan voucher</p>
          <p class="text-4">IDR 100.000</p>
          <p><a class="btn btn-lg" href="#" role="button"><b>Info Lanjut</b></a></p>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control opacity-0" style="width: 5%;" href="#myCarousel" data-slide="prev"></a> 
  <a class="right carousel-control opacity-0" style="width: 5%;" href="#myCarousel" data-slide="next"></a> 
 </div>
 <div class="container">
 	<div class="row">
 		<div class="col-md-12">
 			
 		</div>
 	</div>
 </div>
</body>
</html>