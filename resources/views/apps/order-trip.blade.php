@extends('layout/default')
@section('content')
<input type="hidden" id="latvalue" value="{{ $latitude }}">
<input type="hidden" id="lonvalue" value="{{ $longitude }}">
<div id="wrapper" class="row">
	<div class="col-md-12">
	 <div id="map"></div>
	</div>

	<div id="over_map">
	 <div id="order">
    <form action="{{ url('trip-preferences') }}">
     <h2 id="pooldest">Pool Pasar Minggu</h2>
     <h3 id="destination">Kota Jakarta Selatan, DKI Jakarta</h3>
     <h2 id="pricerange">IDR 18.000 - IDR 270.000 </h2>
     <h4>(Price may vary due to personal/shared trip and type of car)</h4>
     <hr id="lineorder">
     <div class="col-md-3">
      <h4 align="middle">Personal</h4>
      <img onclick="javascipt:person()" id="personal" width="90" height="90" src="{{ asset("assets/images/single-person.png") }}">
     </div>
     <div class="col-md-6">
      <hr id="lineperson">
     </div>
     <div class="col-md-3">
      <h4 align="middle">Shared</h4>
      <img onclick="javascript:share()" id="shared" width="90" height="90" src="{{ asset("assets/images/people.png") }}">
      <h3 align="middle" style="font-weight: bold;">5^</h3>
     </div>
     <div class="col-md-4">
       <a class="btn" id="platinum" onclick="car('platinum','IDR 54.000')">Platinum
       <h5 class="cartype">(Alphard, Vellfire)</h5>
       <h5 class="carprice">IDR 54.000</h5>
       <input id="radioplatinum" type="radio" name="car" value="0">
       </a class="btn">
     </div>
     <div class="col-md-4">
       <a class="btn" id="gold" onclick="car('gold','IDR 36.000')">Gold
       <h5 class="cartype">(Terrios, Inova)</h5>
       <h5 class="carprice">IDR 36.000</h5>
       <input id="radiogold" type="radio" name="car" value="1">
       </a class="btn">
     </div>
     <div class="col-md-4">
       <a class="btn" id="silver" onclick="car('silver','IDR 18.000')">Silver
       <h5 class="cartype">(Xenia, Ertiga)</h5>
       <h5 class="carprice">IDR 18.000</h5>
       <input id="radiosilver" type="radio" name="car" value="2" checked="">
       </a class="btn">
     </div>
     <button id="btnordernow" type="submit">
       <h4 id="orderprice">IDR 18.000</h4>
       <h4 id="ordernow">ORDER NOW</h4>
     </button>
     </form>
   </div>	
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

      function person(){
        var btn = document.getElementById("personal");
        var btn2 = document.getElementById("shared");
        btn.style.opacity = '1';
        btn2.style.opacity = '0.3';
      }

      function share(){
        var btn = document.getElementById("personal");
        var btn2 = document.getElementById("shared");
        btn2.style.opacity = '1';
        btn.style.opacity = '0.3';
      }

      function car(value,price){
        var btn = document.getElementById("radioplatinum");
        var btn2 = document.getElementById("radiogold");
        var btn3 = document.getElementById("radiosilver");
        var a = document.getElementById("platinum");
        var a2 = document.getElementById("gold");
        var a3 = document.getElementById("silver");
        var btn4 = document.getElementById("orderprice");
        btn.removeAttribute("checked");
        btn2.removeAttribute("checked");
        btn3.removeAttribute("checked");
        a.style.borderColor = 'white';
        a2.style.borderColor = 'white';
        a3.style.borderColor = 'white';
        var select = document.getElementById('radio' + value);
        select.setAttribute("checked", "");
        var btnselect = document.getElementById(value);
        btnselect.style.borderColor = '#1171b9';
        btn4.innerHTML = price;
      }

      function initAutocomplete() {
        var latvalue = document.getElementById("latvalue").value;
        var lonvalue = document.getElementById("lonvalue").value;
        var map = new google.maps.Map(document.getElementById('map'), {
          center:new google.maps.LatLng(latvalue, lonvalue),
          zoom:17,
          mapTypeId:google.maps.MapTypeId.ROADMAP
        });

      }

      $('#headerMenu').html('<button onclick="window.history.back()" class="btn text-2" style=""><b>BACK</b></button><a href="#"><img style="width: 28%; margin-left: 26.5%;" src="{{ asset("assets/images/logo.png") }}"></a>');

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8gA9tWFieGusrRmLqpdDhcPwpTBiWM8M&libraries=places&callback=initAutocomplete"
         async defer></script>
@stop
  