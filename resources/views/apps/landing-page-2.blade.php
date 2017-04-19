<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Lets GO</title>
	<meta name="viewport" content="width=device-width">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-theme.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/landing-page-2.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/logo-nav.css') }}">
	<!-- CSS Footer -->
	<!-- <link rel="stylesheet" href="{{ asset('assets/css/footer-distributed-with-address-and-phones.css') }}"> -->
	<link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css') }}">
	<!-- <link href="{{ asset('assets/css/jquerysctipttop.css') }}" rel="stylesheet" type="text/css"> -->
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
                    <a class="nav-ri-txt" href="#"><b>Login</b></a>
                </li>
                <li>
                    <a class="nav-ri-txt" href="#"><b>Bantuan</b></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%;"> 
  <!-- Indicators -->
<!--   <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol> -->
  <div class="carousel-inner">
    <div class="item active"> <img src="{{ asset('assets/images/landing-page-2/pexels-photo.jpg') }}" style="width:100%" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <p class="text-3"><b>WE ARE THE BEST</b></p>
          <p class="text-3"><b>ONE SOLUTION</b></p>
          <hr class="caro-top-hr">
          <p class="text-1-8">Lorem lorem lorem</p>
          <p><a class="btn btn-primary" href="#" role="button"><b>GABUNG SEKARANG</b></a></p>
        </div>
      </div>
    </div>
    <div class="item"> <img src="{{ asset('assets/images/landing-page-2/pexels-photo.jpg') }}" style="width:100%" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <p class="text-3"><b>WE ARE THE BEST</b></p>
          <p class="text-3"><b>ONE SOLUTION</b></p>
          <hr class="caro-top-hr">
          <p class="text-1-8">Lorem lorem lorem</p>
          <p><a class="btn btn-primary" href="#" role="button"><b>GABUNG SEKARANG</b></a></p>
        </div>
      </div>
    </div>
    <div class="item"> <img src="{{ asset('assets/images/landing-page-2/pexels-photo.jpg') }}" style="width:100%" alt="Third slide">
      <div class="container">
        <div class="carousel-caption">
          <p class="text-3"><b>WE ARE THE BEST</b></p>
          <p class="text-3"><b>ONE SOLUTION</b></p>
          <hr class="caro-top-hr">
          <p class="text-1-8">Lorem lorem lorem</p>
          <p><a class="btn btn-primary" href="#" role="button"><b>GABUNG SEKARANG</b></a></p>
        </div>
      </div>
    </div>    
  </div>
  <a class="left carousel-control opacity-0" style="width: 5%;" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> 
  <a class="right carousel-control opacity-0" style="width: 5%;" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> 
 </div>
<div class="container-fluid">
 	<div class="row">
    <div class="col-md-5 col-md-offset-6 au">
      <p class="sec-title">TENTANG KAMI</p>
      <p class="text-3"><b>APA ITU LET'S GO</b></p>
      <hr class="au-hr">
      <br>
      <div class="what-is">
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
      </div>
    </div>
    <div class="col-md-12 float-base-top">
      <div class="row">
          <img class="fbt-float-image" src="{{ asset('assets/images/landing-page-2/pexels-photo-1.jpg') }}">
          <div class="fbt-float-box">
            <p><b>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</b></p>
          </div>
        <div class="col-md-5 col-md-offset-6 fbt-txt">
          <p class="ourMission white"><b>MISI KAMI</b></p>
          <p class="CEO white">CEO Let's GO</p>
        </div>
      </div>
    </div>
    </div>
    <div class="row">
      <div class="col-md-12 float-base-bot">  
        <div class="row fullHeight">
          <div class="col-md-1 iphone">
            <div class="inner-iphone">
              <div id="myCarousel2" class="carousel slide fullHeight"> 
                <div class="carousel-inner fullHeight">
                  <div class="item active fullHeight"> <img class="fullWidth fullHeight" src="{{ asset('assets/images/jmb-bck.jpg') }}"  alt="First slide">
                  </div>
                  <div class="item fullHeight"> <img class="fullWidth fullHeight" src="{{ asset('assets/images/jmb-bck.jpg') }}" alt="Second slide">
                  </div>
                  <div class="item fullHeight"> <img class="fullWidth fullHeight" src="{{ asset('assets/images/jmb-bck.jpg') }}" alt="Third slide">
                  </div>
                  <div class="item fullHeight"> <img class="fullWidth fullHeight" src="{{ asset('assets/images/jmb-bck.jpg') }}" alt="fourth slide">
                  </div>
                </div>
               </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6 howTo">
            <p class="howToTitle"><b>CARA</b></p>
            <p class="howToTitle"><b>MENGGUNAKAN</b></p>
            <p style="color: white; font-size: 30px;"><b>LET'S GO</b></p>
            <hr class="how-to-hr"> 
            <br>
            <a href=""><img style="width: 200px;" src="{{ asset('assets/images/landing-page-2/google-play.png') }}"></a>
            <p></p>
            <a href=""><img style="width: 200px;" src="{{ asset('assets/images/landing-page-2/app-store.png') }}"></a>          
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6 iphone-nav">
            <ul>
              <a href="#myCarousel2" data-slide-to="0"><li><p>1. Lorem</p><p>Description</p></li></a>
              <a href="#myCarousel2" data-slide-to="1"><li><p>2. Lorem</p><p>Description</p></li></a>
              <a href="#myCarousel2" data-slide-to="2"><li><p>3. Lorem</p><p>Description</p></li></a>
              <a href="#myCarousel2" data-slide-to="3"><li><p>4. Lorem</p><p>Description</p></li></a>
            </ul>
          </div>           
        </div>
      </div>      
    </div>
    <div class="row">
      <div class="text-center">
        <p class="sec-title">PROMO MENARIK SETIAP HARINYA</p>
        <p class="text-3"><b>PROMO</b></p>
      </div>
      <div class="col-md-3 promo-bot">   
        <a href="">
          <img class="img-responsive img-hover" src="{{ asset('assets/images/landing-page-2/pig.jpg') }}">
          <br>
          <div class="text-center">
            <p class="promo-bot-title"><b>LOREM IPSUM</b></p>
            <p class="promo-bot-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </a>
      </div>
      <div class="col-md-3">   
        <a href="">
          <img class="img-responsive img-hover" src="{{ asset('assets/images/landing-page-2/junk.jpeg') }}">
          <br>
          <div class="text-center">
            <p class="promo-bot-title"><b>LOREM IPSUM</b></p>
            <p class="promo-bot-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </a>  
      </div>
      <div class="col-md-3">   
        <a href="">
          <img class="img-responsive img-hover" src="{{ asset('assets/images/landing-page-2/food.jpeg') }}">
          <br>
          <div class="text-center">
            <p class="promo-bot-title"><b>LOREM IPSUM</b></p>
            <p class="promo-bot-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>          
        </a>
      </div>
      <div class="col-md-3">
        <a href="">
          <img class="img-responsive img-hover" src="{{ asset('assets/images/landing-page-2/shoes.jpg') }}">
          <br>
          <div class="text-center">
            <p class="promo-bot-title"><b>LOREM IPSUM</b></p>
            <p class="promo-bot-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>          
        </a>
      </div>            
    </div>
    <div class="com-container row">
      <div class="col-md-6 com-story-l">
        <p class="sec-title">UNTUK MENGENAL KOMUNITAS KAMI</p>
        <p class="text-3"><b>CERITA MEREKA</b></p>
        <hr class="com-hr">
        <p style="margin-bottom: 80px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <p><a class="btn btn-primary" href="#" role="button"><b>GABUNG SEKARANG</b></a></p>
      </div>
      <div class="col-md-6 com-img-container">
        <img id="com-img-bg" class="com-img-bg" src="{{ asset('assets/images/landing-page-2/3.jpg') }}">
        <div class="com-story-r">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><p>Alexander Graham Bell, <b>Penemu Telepon</b></p>
        </div>
        <div class="com-img-gal wrapper">
          <img class="com-img-gal-item margin-left-0" src="{{ asset('assets/images/landing-page-2/1.jpg') }}">
          <img class="com-img-gal-item" src="{{ asset('assets/images/landing-page-2/2.jpg') }}">
          <img class="CIG-item-active" src="{{ asset('assets/images/landing-page-2/3.jpg') }}">
          <img class="com-img-gal-item" src="{{ asset('assets/images/landing-page-2/4.jpg') }}">
          <img class="com-img-gal-item" src="{{ asset('assets/images/landing-page-2/5.jpg') }}">
        </div>
        <a href="" class="see-another"><p>LIHAT LAINNYA &nbsp; &nbsp;></p></a>
      </div>      
    </div>
    <div class="row">
      <div class="col-md-6 prc-est">
        <p class="sec-title">HARGA</p>
        <p class="text-3"><b>ESTIMASI HARGA</b></p>
        <form class="form-horizontal" action="javascript:getRoute();">
          <div class="form-group">
            <div class="col-md-12">
              <input class="landOrigins" placeholder="Ketik Lokasi Anda" type="text" id="landOrigins" value="" required="">
            </div>
          </div>
          <div class="line">
            <div class="col-md-12">
              <img style="" src="{{ asset('assets/images/line.png') }}">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <input class="landDestination" placeholder="Ketik Lokasi Tujuan Anda" type="text" id="landDestination" value="" required="">
            </div>
          </div> 
          <div class="form-group">
            <div class="col-md-12">
              <button type="submit" class="btn btn-lg btn-prc"><b>Lihat Harga</b></button>
            </div>
          </div>
          <p id="priceEstimate" class="text-3 text-center hidden"><b></b></p>
        </form>        
      </div>
      <div class="col-md-6">
        <div id="map-v2" style="height: 70vh; padding: 30px;"></div>
      </div>      
    </div>
  <footer class="row">
    <div class="col-md-2 f-s-0">
      <img class="footer-logo" src="{{ asset('assets/images/logo.png') }}">
    </div>
    <div class="col-md-2 f-s-1">
      <a href=""><p>HOME</p></a>
      <a href=""><p>BLOG</p></a>
      <a href=""><p>SYARAT &amp; KETENTUAN</p></a>
      <a href=""><p>HUBUNGI KAMI</p></a>
      <a href=""><p>TENTANG KAMI</p></a>
    </div>
    <div class="col-md-4 f-s-2">
      <p>KONTAK KAMI</p>
      <a href=""><p><i class="fa fa-map-marker"> Jalan Kenangan Nomor 77 DKI YOGYAKARTA</i></p></a>
      <a href=""><p><i class="fa fa-phone"> 021-123456</i></p></a>
      <a href=""><p><i class="fa fa-envelope"> abc@def.ghi</i></p></a>
    </div>
    <div class="col-md-2 f-s-3">
      <p>CARI KAMI DI</p>
      <a href=""><p><i class="fa fa-facebook"> FACEBOOK</i></p></a>
      <a href=""><p><i class="fa fa-twitter"> TWITTER</i></p></a>
      <a href=""><p><i class="fa fa-youtube"> YOUTUBE</i></p></a>
      <a href=""><p><i class="fa fa-instagram"> INSTAGRAM</i></p></a>
    </div>
    <div class="col-md-2 f-s-4">
      <p>DOWNLOAD</p>
      <img style="width: 100px;" src="{{ asset('assets/images/landing-page-2/google-play.png') }}">
      <p></p>
      <img style="width: 100px;" src="{{ asset('assets/images/landing-page-2/app-store.png') }}">
    </div>
  </footer>
 	</div>
<script type="text/javascript">
function initAutocomplete() {
    var uluru = {lat: -25.363, lng: 131.044};
    var map = new google.maps.Map(document.getElementById('map-v2'), {
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
    map = new google.maps.Map(document.getElementById('map-v2'), mapOptions);
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
<script type="text/javascript">
 $(function(){
   var wrapper = $(".wrapper");

   $(wrapper).on("click", ".com-img-gal-item", function(e){
      e.preventDefault();
      var imgBg = document.getElementById("com-img-bg");
      var newSrc = this.src;

      $(".CIG-item-active").addClass("com-img-gal-item");
      $(".CIG-item-active").removeClass("CIG-item-active");
      this.classList.remove("com-img-gal-item");
      this.className += " CIG-item-active";
      imgBg.src = newSrc;
   });
 });
</script>
</body>
</html>