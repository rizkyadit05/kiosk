@extends('layout/default')
@section('content')
<div class="row">
  <div id="popUp" class="hidden margin-bot-0" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Success!</strong> <p id="PUText"></p>
  </div>
</div>
<div id="wrapper" class="row fullHeight">
  <div id="over_map" class="col-md-12">
    <div class="row">
      <div class="col-md-12 homeHead">
        <div class='parent'>
          <div class='buttonLWrapper'><button class="btn" id="poolpoint" onclick="poolpoint()"><b>To Pool Point</b></button></div>
          <div class='betweenWrapper'> <hr class="between"></div>
          <div class='buttonRWrapper'><button class="btn" id="anywhere" onclick="anywhere()"><b>To Anywhere</b></button></div>
        </div>
        <form method="post" action="{{ url('order') }}" id="homeForm">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <input type="hidden" id="placeLatitude" name="placeLatitude">
          <input type="hidden" id="placeLongitude" name="placeLongitude">
          <input type="hidden" id="placeName" name="placeName">
          <input type="hidden" id="placeAddress" name="placeAddress">
          <input type="hidden" id="rideFlag" name="rideFlag" value="poolpoint">
        </form>
      </div>
    </div>
   </div>
	<div class="col-md-12 fullHeight" style="padding: 0;">
		<input id="pac-input" class="controls" type="text" placeholder="Type Your Destination Here">
	    <div id="map"></div>
	</div>
</div>
@stop
@section('script')
 <script>
      $(function(){
        var invFlag = "{{ $invFlag }}";

        if(invFlag == 'ok'){
          var popUp = document.getElementById('popUp');
          var PUText = document.getElementById('PUText');

          popUp.className += " alert alert-success alert-dismissible";
          PUText.innerHTML = "Please take the ticket and complete the payment!";
          popUp.classList.remove('hidden');
        }

        else if(invFlag == 'cancel'){
          var popUp = document.getElementById('popUp');
          var PUText = document.getElementById('PUText');

          popUp.className += " alert alert-success alert-dismissible";
          PUText.innerHTML = "Order canceled, Thank You!";
          popUp.classList.remove('hidden');
        }
      });

      function poolpoint(){
      	var btn = document.getElementById("poolpoint");
      	var btn2 = document.getElementById("anywhere");
        var rideFlag = document.getElementById('rideFlag');
      	btn2.style.backgroundColor = '#acb0b7';
      	btn.style.backgroundColor = '#f2961c';
        rideFlag.value = 'poolpoint';
      }

      function anywhere(){
      	var btn = document.getElementById("poolpoint");
      	var btn2 = document.getElementById("anywhere");
        var rideFlag = document.getElementById('rideFlag');
      	btn.style.backgroundColor = '#acb0b7';
      	btn2.style.backgroundColor = '#f2961c';
        rideFlag.value = 'anywhere';
      }

      function cleanURL(link){
        console.log(link.replace(/\//g, ' '));
        return link.replace(/\//g, ' ');
      }

      function initAutocomplete() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          center: uluru,
          zoom: 13,
          mapTypeId: 'roadmap'
        });

      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

        // var infoWindow = new google.maps.InfoWindow({map: map});

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

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // var rideFlag = document.getElementById('rideFlag').value;

            $('#placeLatitude').val(place.geometry.location.lat());
            $('#placeLongitude').val(place.geometry.location.lng());
            $('#placeName').val(place.name);
            $('#placeAddress').val(place.formatted_address);

            document.getElementById("homeForm").submit();

            // window.location.href = "order/" + place.geometry.location.lat() + "/" + place.geometry.location.lng() + "/" + place.name + "/" + place.formatted_address + "/" +rideFlag;

            // Create a marker for each place.
            // markers.push(new google.maps.Marker({
            //   map: map,
            //   icon: icon,
            //   title: place.name,
            //   position: place.geometry.location
            // }));

            // if (place.geometry.viewport) {
            //   // Only geocodes have viewport.
            //   bounds.union(place.geometry.viewport);
            // } else {
            //   bounds.extend(place.geometry.location);
            // }

          });

          // map.fitBounds(bounds);

        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8gA9tWFieGusrRmLqpdDhcPwpTBiWM8M&libraries=places&callback=initAutocomplete"
         async defer></script>
@stop
  