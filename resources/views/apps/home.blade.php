@extends('layout/default')
@section('content')
<div id="wrapper" class="row">
  <div id="over_map" class="col-md-12">
    <div class="row">
      <div class="col-md-12 homeHead">
        <div class='parent'>
          <div class='buttonLWrapper'><button class="btn" id="poolpoint" onclick="poolpoint()"><b>To Pool Point</b></button></div>
          <div class='betweenWrapper'> <hr class="between"></div>
          <div class='buttonRWrapper'><button class="btn" id="anywhere" onclick="anywhere()"><b>To Anywhere</b></button></div>
          <input type="hidden" id="rideFlag" value="poolpoint">
        </div>
      </div>
    </div>
   </div>
	<div class="col-md-12" style="padding: 0;">
		<input id="pac-input" class="controls" type="text" placeholder="Type Your Destination Here">
	    <div id="map"></div>
	</div>
</div>


@stop
@section('script')
 <script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function poolpoint(){
      	var btn = document.getElementById("poolpoint");
      	var btn2 = document.getElementById("anywhere");
        var rideFlag = document.getElementById('rideFlag');
      	btn2.style.backgroundColor = '#ccc7c4';
      	btn.style.backgroundColor = '#f2961c';
        rideFlag.value = 'poolpoint';
      }

      function anywhere(){
      	var btn = document.getElementById("poolpoint");
      	var btn2 = document.getElementById("anywhere");
        var rideFlag = document.getElementById('rideFlag');
      	btn.style.backgroundColor = '#ccc7c4';
      	btn2.style.backgroundColor = '#f2961c';
        rideFlag.value = 'anywhere';
      }

      function initAutocomplete() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          center: uluru,
          zoom: 13,
          mapTypeId: 'roadmap'
        });

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

            var rideFlag = document.getElementById('rideFlag').value;
            window.location.href = "order/" + place.geometry.location.lat() + "/" + place.geometry.location.lng() + "/" + place.name + "/" + place.formatted_address + "/" +rideFlag;

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

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
  