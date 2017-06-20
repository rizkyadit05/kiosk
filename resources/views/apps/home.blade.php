@extends('layout/default')
@section('content')
<div class="row">
  <input type="hidden" name="questionFlag" id="questionFlag" value="none">
<!--   <div id="popUp" class="hidden margin-bot-0" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Success!</strong> <p id="PUText"></p>
  </div> -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Lets GO</h4>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
<div id="wrapper" class="row fullHeight">
  <div id="over_map" class="col-md-12">
    <div class="row">
      <div class="col-md-12 homeHead">
        <div class='parent'>
          <div class='buttonLWrapper'><div class="btn" id="poolpoint" onclick="poolpoint()"><b>To Pool Point</b><span style="font-size: 2vw; margin-left: 10%;" onclick="questionFlag('pool')" class="glyphicon glyphicon-info-sign"></span></div></div>
          <div class='betweenWrapper'> <hr class="between"></div>
          <div class='buttonRWrapper'><div class="btn" id="anywhere" onclick="anywhere()"><b>To Anywhere</b><span style="font-size: 2vw; margin-left: 10%;" onclick="questionFlag('any')" class="glyphicon glyphicon-info-sign"></span></div></div>
        </div>
        <form method="post" action="{{ url('order') }}" id="homeForm">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <input type="hidden" id="lat_awal" name="lat_awal">
          <input type="hidden" id="lng_awal" name="lng_awal">
          <input type="hidden" id="placeLatitude" name="lat_akhir">
          <input type="hidden" id="placeLongitude" name="lng_akhir">
          <input type="hidden" id="duration" name="duration">
          <input type="hidden" id="distance" name="distance">
          <input type="hidden" id="placeName" name="place_name">
          <input type="hidden" id="placeAddress" name="place_address">
          <input type="hidden" id="poolORAny" name="poolORAny" value="">
        </form>
      </div>
    </div>
   </div>
  <div class="col-md-12 fullHeight" style="padding: 0;">
    <input id="pac-input" class="controls" type="text" placeholder="Type Your Destination Here" style="z-index: 99"> 
    <div class="hidden" id="virtualKeyboard" style="position: absolute; z-index: 1; top: 50%;"></div>
    <div id="map"></div>
  </div>
</div>
@stop
@section('script')
 <script>
      $(function(){
        var invFlag = "{{ $invFlag }}";

        if(invFlag == 'ok'){
          // var popUp = document.getElementById('popUp');
          // var PUText = document.getElementById('PUText');

          // popUp.className += " alert alert-success alert-dismissible";
          // PUText.innerHTML = "Please take the ticket and complete the payment!";
          // popUp.classList.remove('hidden');
          $('.modal-body').html('<p>Thank You!</p><p>Please take the ticket and complete the payment!</p>');
          $('#myModal').modal('show');
        }

        // else if(invFlag == 'cancel'){
        //   var popUp = document.getElementById('popUp');
        //   var PUText = document.getElementById('PUText');

        //   popUp.className += " alert alert-success alert-dismissible";
        //   PUText.innerHTML = "Order canceled, Thank You!";
        //   popUp.classList.remove('hidden');
        // }

        $('#poolORAny').val('poolpoint');
      });

      $( "#pac-input" ).focusin(function() {
        $('#virtualKeyboard').removeClass('hidden');
      });

      // $( "#pac-input" ).focusout(function() {
      //   $('#virtualKeyboard').addClass('hidden');
      // });

      function questionFlag(bool){
        document.getElementById('questionFlag').value = "in use";

        if(bool == "pool"){
          $('.modal-body').html('<p>This is poolpoint</p>');
          $('#myModal').modal('show');
        }
        
        else{
          $('.modal-body').html('<p>This is anywhere</p>');
          $('#myModal').modal('show');
        }
      }

      function poolpoint(){

        var bool = document.getElementById('questionFlag').value;

        if(bool == "none"){
          var btn = document.getElementById("poolpoint");
          var btn2 = document.getElementById("anywhere");
          var poolORAny = document.getElementById('poolORAny');
          btn2.style.backgroundColor = '#acb0b7';
          btn.style.backgroundColor = '#f2961c';
          poolORAny.value = 'poolpoint';
        }

        else
          document.getElementById('questionFlag').value = "none";
      }

      function anywhere(){

        var bool = document.getElementById('questionFlag').value;

        if(bool == "none"){
          var btn = document.getElementById("poolpoint");
          var btn2 = document.getElementById("anywhere");
          var poolORAny = document.getElementById('poolORAny');
          btn.style.backgroundColor = '#acb0b7';
          btn2.style.backgroundColor = '#f2961c';
          poolORAny.value = 'anywhere';
        }

        else{
          document.getElementById('questionFlag').value = "none";
        }
      }

      function cleanURL(link){
        console.log(link.replace(/\//g, ' '));
        return link.replace(/\//g, ' ');
      }

      function getDistance(){
         var distanceService = new google.maps.DistanceMatrixService();
         var awal = new google.maps.LatLng(
              parseFloat($("#lat_awal").val()),
              parseFloat($("#lng_awal").val()) 
            );
         var akhir = new google.maps.LatLng(
              parseFloat($("#placeLatitude").val()),
              parseFloat($("#placeLongitude").val())
            );
         distanceService.getDistanceMatrix({
            origins: [awal],
            destinations: [akhir],
            travelMode: google.maps.TravelMode.WALKING,
            unitSystem: google.maps.UnitSystem.METRIC,
            durationInTraffic: true,
            avoidHighways: false,
            avoidTolls: false
        },function (response, status) {
            if (status !== google.maps.DistanceMatrixStatus.OK) {
                console.log('Error:', status);
                alert('Oops Sorry Something Wrong');
            } else {
                console.log(response);
                $("#distance").val((response.rows[0].elements[0].distance.value)/1000).show();
                $("#duration").val(Math.ceil(response.rows[0].elements[0].duration.value/60)).show();
                document.getElementById("homeForm").submit();
            }
        });
      }

      function initAutocomplete() {
        var uluru = {lat: -6.3804836, lng: 106.81549919999999};
        var map = new google.maps.Map(document.getElementById('map'), {
          center: uluru,
          zoom: 16,
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
            $('#lat_awal').val(position.coords.latitude);
            $('#lng_awal').val(position.coords.longitude);
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
        var options = {
            componentRestrictions: {country: 'id'}
        };

        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        // var searchBox = new google.maps.places.SearchBox(input);
        var searchBox = new google.maps.places.Autocomplete(input, options);
        searchBox.bindTo('bounds', map);

        // // Bias the SearchBox results towards current map's viewport.
        // map.addListener('bounds_changed', function() {
        //   searchBox.setBounds(map.getBounds());
        // });

        // var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        // searchBox.addListener('places_changed', function() {
        //   var places = searchBox.getPlaces();

        //   if (places.length == 0) {
        //     return;
        //   }

        //   // Clear out the old markers.
        //   markers.forEach(function(marker) {
        //     marker.setMap(null);
        //   });
        //   markers = [];

        //   // For each place, get the icon, name and location.
        //   var bounds = new google.maps.LatLngBounds();
        //   places.forEach(function(place) {
        //     if (!place.geometry) {
        //       console.log("Returned place contains no geometry");
        //       return;
        //     }
        //     var icon = {
        //       url: place.icon,
        //       size: new google.maps.Size(71, 71),
        //       origin: new google.maps.Point(0, 0),
        //       anchor: new google.maps.Point(17, 34),
        //       scaledSize: new google.maps.Size(25, 25)
        //     };

        //     // var rideFlag = document.getElementById('rideFlag').value;

        //     $('#placeLatitude').val(place.geometry.location.lat());
        //     $('#placeLongitude').val(place.geometry.location.lng());
        //     $('#placeName').val(place.name);
        //     $('#placeAddress').val(place.formatted_address);

        //     document.getElementById("homeForm").submit();

        //     // window.location.href = "order/" + place.geometry.location.lat() + "/" + place.geometry.location.lng() + "/" + place.name + "/" + place.formatted_address + "/" +rideFlag;

        //     // Create a marker for each place.
        //     // markers.push(new google.maps.Marker({
        //     //   map: map,
        //     //   icon: icon,
        //     //   title: place.name,
        //     //   position: place.geometry.location
        //     // }));

        //     // if (place.geometry.viewport) {
        //     //   // Only geocodes have viewport.
        //     //   bounds.union(place.geometry.viewport);
        //     // } else {
        //     //   bounds.extend(place.geometry.location);
        //     // }

        //   });

        //   // map.fitBounds(bounds);

        // });

        searchBox.addListener('place_changed', function() {

          var place = searchBox.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          $('#placeLatitude').val(place.geometry.location.lat());
          $('#placeLongitude').val(place.geometry.location.lng());
          $('#placeName').val(place.name);
          $('#placeAddress').val(place.formatted_address);
          getDistance();
          // document.getElementById("homeForm").submit();
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8gA9tWFieGusrRmLqpdDhcPwpTBiWM8M&libraries=places&callback=initAutocomplete"
         async defer></script>
@stop
