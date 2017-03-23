@extends('layout/default')
@section('content')
<div class="row">
	<div class="col-md-12" id="map">
					 
	</div>
</div>
@stop
@section('script')
<script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
 </script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8gA9tWFieGusrRmLqpdDhcPwpTBiWM8M&callback=initMap" async defer></script>
@stop