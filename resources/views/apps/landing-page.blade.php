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
 <div class="container-fluid">
	 <div class="row" style="margin-top: 3%; margin-bottom: 3%;">
	 	<h1 class="text-center" style="color: #202b5c; margin-bottom: 5%;">APA ITU LET'S GO</h1>
	 	<div class="col-md-6">
	 		<img class="" style="width: 50%; margin-left: 20%;" src="{{ asset('assets/images/taxi-cab.png') }}">
	 	</div>
	 	<div class="col-md-6 whatIS">
 			"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
	 	</div>
	 </div>
	 <div class="row" style="background-color: #f2f3f3;">
	 	<div class="col-md-6" style="padding: 1%;">
			<div id="myCarousel2" class="carousel slide" data-ride="carousel"> 
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel2" data-slide-to="1"></li>
			    <li data-target="#myCarousel2" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="item active"> <img src="http://lorempixel.com/1200/900/sports" style="width:70%; margin: auto;" alt="First slide">
<!-- 			      <div class="container">
			        <div class="carousel-caption">
			          <h1>Slide 1</h1>
			          <p>Aenean a rutrum nulla. Vestibulum a arcu at nisi tristique pretium.</p>
			        </div>
			      </div> -->
			    </div>
			    <div class="item"> <img src="http://lorempixel.com/1200/900/people" style="width:70%; margin: auto;" data-src="" alt="Second    slide">
<!-- 			      <div class="container">
			        <div class="carousel-caption">
			          <h1>Slide 2</h1>
			          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae egestas purus. </p>
			        </div>
			      </div> -->
			    </div>
			    <div class="item"> <img src="http://lorempixel.com/1200/900/abstract" style="width:70%; margin: auto;" data-src="" alt="Third slide">
	<!-- 		      <div class="container">
			        <div class="carousel-caption">
			          <h1>Slide 3</h1>
			          <p>Donec sit amet mi imperdiet mauris viverra accumsan ut at libero.</p>
			        </div>
			      </div> -->
			    </div>
			  </div>
			  <a class="left carousel-control caro-custom" href="#myCarousel2" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control caro-custom" href="#myCarousel2" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> 
			 </div>
	 	</div>
	 	<div class="col-md-6" style="padding: 5%;">
	 		<ul class="howTO" style="">
	 			<li>1. Lorem lorem lorem</li>
	 			<li>2. Lorem lorem lorem</li>
	 			<li>3. Lorem lorem lorem</li>
	 			<li>4. Lorem lorem lorem</li>
	 			<li>5. Lorem lorem lorem</li>
	 		</ul>
	 	</div>
	 </div>
	 <div class="row" style="margin-top: 3%; margin-bottom: 3%;">
	  <div class="col-md-4">
	    <div class="">
	      <a href="#">
	        <img src="{{ asset('assets/images/nature.jpg') }}" alt="Nature" style="width:200px">
	        <div class="caption">
	          <p class="text-center text-2" style="color: #00579b;">Lorem ipsum...</p>
	          <p class="text-justify" style="color: #000000;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	        </div>
	      </a>
	    </div>
	  </div>
	  <div class="col-md-4">
	    <div class="">
	      <a href="#">
	        <img src="{{ asset('assets/images/nature.jpg') }}" alt="Nature" style="width:100%">
	        <div class="caption">
	          <p class="text-center text-2" style="color: #00579b">Lorem ipsum...</p>
	          <p class="text-justify" style="color: #000000;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	        </div>
	      </a>
	    </div>
	  </div>
	  <div class="col-md-4">
	    <div class="">
	      <a href="#">
	        <img src="{{ asset('assets/images/nature.jpg') }}" alt="Nature" style="width:100%">
	        <div class="caption">
	          <p class="text-center text-2" style="color: #00579b">Lorem ipsum...</p>
	          <p class="text-justify" style="color: #000000;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	        </div>
	      </a>
	    </div>
	  </div>
	</div>
</div>
<div class="jumbotron">
	<div class="container cnt-jmb">
	  <h1>John Titor</h1>
	  <p>Lorem lorem lorem lorem</p>
	  <p><a class="btn btn-lg" href="#" role="button" style="color: #000000; font-size: 2vw;"><b>Baca Cerita</b>   <span class="glyphicon glyphicon-chevron-right"></span></a></p>		
	</div>
</div>
<div class="container-fluid">
	<div class="row" style="background-color: #f2f3f3;">
		<div class="col-md-6">
			<h1 class="text-center" style="color: #202b5c; margin-bottom: 5%;">ESTIMASI HARGA</h1>
			<form class="form-horizontal" action="javascript:getRoute();">
				<div class="form-group">
					<div class="col-md-11 col-md-offset-1">
						<input class="landOrigins" placeholder="Ketik Lokasi Anda" type="text" id="landOrigins" value="" required="">
					</div>
				</div>
				<div class="line">
					<div class="col-md-12">
						<img style="" src="{{ asset('assets/images/line.png') }}">
					</div>
				</div>
		        <div class="form-group">
		        	<div class="col-md-11 col-md-offset-1">
		        		<input class="landDestination" placeholder="Ketik Lokasi Tujuan Anda" type="text" id="landDestination" value="" required="">
		        	</div>
		        </div> 
		        <div class="form-group">
			        <div class="col-md-12">
			        	<button type="submit" class="btn btn-lg btn-jmb"><b>Lihat Harga</b></button>
			        </div>
		        </div>
		        <p id="priceEstimate" class="text-3 text-center hidden"><b></b></p>
			</form>
		</div>
		<div class="col-md-6" style="height: 50vh; padding: 30px;">
			<div id="mapLand"></div>
		</div>
	</div>
	<div class="row">
<footer class="footer-distributed col-md-12">

	<div class="footer-left">

		<img style="width: 50%;" src="{{ asset('assets/images/logo.png') }}">

		<p class="footer-links">
			<a href="#">Home</a>
			·
			<a href="#">Blog</a>
			·
			<a href="#">Syarat &amp; Ketentuan</a>
			·
			<a href="#">Kebijakan Privasi</a>
			·
			<a href="#">Hubungi Kami</a>
			·
			<a href="#">Tentang Kami</a>
		</p>
	</div>

	<div class="footer-center">

		<div>
			<i class="fa fa-map-marker"></i>
			<p><span>21 Revolution Street</span> Depok, Indonesia</p>
		</div>

		<div>
			<i class="fa fa-phone"></i>
			<p>+1 555 123456</p>
		</div>

		<div>
			<i class="fa fa-envelope"></i>
			<p><a href="mailto:support@company.com">support@company.com</a></p>
		</div>

	</div>

	<div class="footer-right">

		<p style="margin-left: 15px;">Download</p>
		<a href="#"><img class="gPlay" style="" src="{{ asset('assets/images/gplay.png') }}"></a>
		

		<div class="footer-icons" style="margin-left: 15px;">
			<p class="margin-bot-3">Cari Kami di</p><br>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-youtube"></i></a>
		</div>

	</div>

</footer>		
	</div>
<div class="row" style="background-color: #000000;">
	<div class="col-md-12">
		<p class="text-2 text-center" style="color: #ffffff;"><b>Copyright &copy; 2017 Let's Go Inc. All rights reserved.</b></p>
	</div>
</div>
</div>
<script type="text/javascript">
function initAutocomplete() {
    var uluru = {lat: -25.363, lng: 131.044};
    var map = new google.maps.Map(document.getElementById('mapLand'), {
      center: uluru,
      zoom:17
    });

// Try HTML5 geolocation.
if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(function(position) {
    var pos = {
      lat: position.coords.latitude,
      lng: position.coords.longitude
    };
    
    // infoWindow.setPosition(pos);
    // infoWindow.setContent('Location found.');\
    var marker = new google.maps.Marker({
      position: pos,
      map: map
    });
    
    map.setCenter(pos);
  }, function() {
    handleLocationError(true, map.getCenter());
  });
} else {
  // Browser doesn't support Geolocation
  handleLocationError(false, map.getCenter());
}
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8gA9tWFieGusrRmLqpdDhcPwpTBiWM8M&js?sensor=false&libraries=places&callback=initAutocomplete"></script>
<script type="text/javascript">
var source, destination;
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
google.maps.event.addDomListener(window, 'load', function () {
    new google.maps.places.SearchBox(document.getElementById('landOrigins'));
    new google.maps.places.SearchBox(document.getElementById('landDestination'));
    directionsDisplay = new google.maps.DirectionsRenderer({ 'draggable': true });
});

function getRoute() {
	$('#priceEstimate').addClass('hidden');

    var uluru = {lat: -25.363, lng: 131.044};
    var mapOptions = {
        zoom: 7,
        center: uluru
    };
    map = new google.maps.Map(document.getElementById('mapLand'), mapOptions);
    directionsDisplay.setMap(map);


    //*********DIRECTIONS AND ROUTE**********************//
    source = document.getElementById("landOrigins").value;
    destination = document.getElementById("landDestination").value;

    var request = {
        origin: source,
        destination: destination,
        travelMode: google.maps.TravelMode.DRIVING
    };
    directionsService.route(request, function (response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
        }
    });
    //*********DISTANCE AND DURATION**********************//
    var service = new google.maps.DistanceMatrixService();
    service.getDistanceMatrix({
        origins: [source],
        destinations: [destination],
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.METRIC,
        avoidHighways: false,
        avoidTolls: false
    }, function (response, status) {
        if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
            var distance = response.rows[0].elements[0].distance.value;
            var duration = response.rows[0].elements[0].duration.value;

            $('#priceEstimate b').text("IDR "+distance);
            $('#priceEstimate').removeClass("hidden");
        } else {
            alert("Unable to find the distance via road.");
        }
    });
}
</script>		
</body>
</html>