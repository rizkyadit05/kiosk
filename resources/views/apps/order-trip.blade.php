@extends('layout/default')
@section('content')
{{-- {{dd(Request::all())}} --}}

<div class="row row-eq-height">
  <div class="col-md-6">
    <?php 
      $request = Request::all();
      // dd($request);
    ?>
    <form method="post" class="fullHeight" action="{{ url('post-order') }}">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="hidden" id="rideFlag" name="rideFlag" value="shared">
      <input type="hidden" name="type" id="rideType" value="{{ $request['poolORAny'] }}">
      <input type="hidden" id="lat_awal" name="lat_awal" value="{{ $result['lat_awal'] or ''}}">
          <input type="hidden" id="lng_awal" name="lng_awal" value="{{ $result['lng_awal'] or ''}}">
          <input type="hidden" id="lat_akhir" name="lat_akhir" value="{{ $result['lat_akhir'] or ''}}">
          <input type="hidden" id="lng_akhir" name="lng_akhir" value="{{ $result['lng_akhir'] or ''}}">
          <input type="hidden" id="duration" name="duration" value="{{ $result['duration'] or ''}}">
          <input type="hidden" id="distance" name="distance" value="{{ $result['distance'] or '' }}">
          <input type="hidden" id="placeName" name="place_name" value="{{ $result['place_name'] or '' }}">
          <input type="hidden" id="placeAddress" name="place_address" value="{{ $result['place_address'] or '' }}">
          <input type="hidden" name="city_id" id="city_id">
          <input type="hidden" name="pool_name" id="pool_name">
          <input type="hidden" name="pool_address" id="pool_address">
          <input type="hidden" name="pools_from_id" id="pools_from_id">
          <input type="hidden" name="pools_to_id" id="pools_to_id">
          <input type="hidden" name="lat_door" id="lat_door">
          <input type="hidden" name="long_door" id="lng_door">
          <input type="hidden" name="notes_door" id="notes_door">
          <input type="hidden" name="alamat_door" id="alamat_door">
          <input type="hidden" name="route_id" id="route_id">
          <input type="hidden" name="harga" id="harga">
          <input type="hidden" name="harga_final" id="harga_final">
          <input type="hidden" name="harga_extra" id="harga_extra">
      <div class="row orderTopMenu">
        <div class="col-md-12">
          <div class="margin-1">
            <b><p id="otmTitle"></p></b>
            <p id="otmAddress">Address Pool</p>
          </div>
          <div class="margin-1 margin-top-3">
            <p id="otmPrice"></p>
            <p id="otmDesc">(Price may vary due to personal/shared trip and type of car)</p>
          </div>
          <hr style="background-color: black; height: 4px;">
        </div>
        <div class="col-md-12" style="padding-left: 20%; padding-right: 20%; margin-bottom: 5%;">
          <div class="row">
            <div class="col-md-2 padding-0" onclick="setRide('personal')">
              <p class="otmCircleLeftLabel" style="">Personal Trip</p>
              <div class="otmCircleLeft"></div>
            </div>
            <div class="col-md-7 padding-0">
              <hr class="otmBetween">
            </div>
            <div class="col-md-3 padding-0" id="sharedRide" onclick="setRide('shared')"">
              <p class="otmCircleRightLabel" style="">Shared Trip</p>
              <div class="otmCircleRight"></div>
              <div class="margin-left-20px" style="font-size: 1.2em; z-index: 1; position: relative;">
                <select style="font-size: 1.5vw;" name="sharedTripCount" id="sharedTripCount" class="orderSO">
                  <option value="5">5</option>
                  <option value="4">4</option>
                  <option value="3">3</option>
                  <option value="2">2</option>
                  <option value="1">1</option>
                </select>
<!--                 <span style="font-size: 1.5vw;" id="sharedTripCountImg" class="inline glyphicon glyphicon-chevron-up" aria-hidden="true"></span>   -->          
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Tab Personal -->
      <input type="hidden" name="tripPrice" id="tripPrice" value="">
      <div class="row orderBottomMenu" id="tab_personal">
        <div class="col-md-12">
          <input type="hidden" name="typeFlag" id="typeFlag" value="platinum">
          {{-- <input type="hidden" name="tripPrice" id="tripPrice" value=""> --}}
          <div class="package">            
          </div>
          <div class="row" id='privatePackage'>            
          </div>
                 
        </div>
      </div>
      <!-- Tab Shared -->
      <div class="row orderBottomMenu hidden" id="tab_shared">
        <div class="col-md-12">
          <input type="hidden" name="typeFlag" id="typeFlag" value="platinum">
          <div class="package">            
          </div>
          <div class="row" id="sharedPackage"></div>
          <div class="col-md-12">
          </div>        
        </div>
      </div>
      <div class="col-md-12">
        <button type="submit" class="btn btn-order"><b><p id="tripPriceBtn"></p></b><b><p>ORDER NOW</p></b></button>
      </div> 
      </form>
  </div>
  <div class="col-md-6 padding-0">
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
      //

      function initAutocomplete() {
        var pos = {lat: parseFloat($('#lat_akhir').val()), lng: parseFloat($('#lng_akhir').val())}
        var map = new google.maps.Map(document.getElementById('map'), {
          center: pos,
          zoom:17,
          mapTypeId:google.maps.MapTypeId.ROADMAP
        });

        var marker = new google.maps.Marker({
          position: pos,
          title: '',
          map: map
        });
      }

      $('#headerMenu').html('<button onclick="window.history.back()" class="btn text-2" style=""><b>BACK</b></button><a href="#"><img class="headerImgBtn" src="{{ asset("assets/images/logo.png") }}"></a>');
      $('#tripPriceBtn').text($('#platinumPrice').text());

    </script>
    <script type="text/javascript">
    var route, city;

    function renderPackage(value, price){
      var random = (Math.floor(Math.random() * 100 ) + 1).toString();
      return "<div class='col-md-4'> \
            <input type='hidden' id='harga_awal_" + value.nama_package+random +"' value='"+value.harga+"'>\
            <input type='hidden' id='harga_akhir_" + value.nama_package+random +"' value='"+value.harga_final+"'>\
            <input type='hidden' id='harga_extra_" + value.nama_package+random +"' value='"+value.harga_extra+"'>\
            <div class='packageBox bubbleBox twoKBox' id='" + value.nama_package + random  +"Box' onclick=\"setCar('" + value.nama_package + random +"')\" style=' \
              background-color: " + value.warna_package +"; min-height: 200px;'> \
              <div class='packageBoxDesc text-center' id='" + value.nama_package +"BoxDesc'> \
                <img class='img-responsive' src='" + value.image_package +"' style='margin-left: 25%;max-width:100px;'>\
                <b><p class='margin-bot-0'>" + value.nama_package +"</p></b>\
                <p class='margin-bot-0'>(" + value.example_package +")</p>\
                <b><p class='margin-bot-0' id='" + value.nama_package+random +"Price'>" + price +"</p></b>\
              </div>\
            </div>\
            <input type='radio' id='" + value.nama_package+random +"Radio' name='package' onclick=\"setCar('" + value.nama_package+random +"')\"  value='" + value.car_package_id +"' style='margin-left: 50%;'>\
          </div>";
    }
    function estimate(){
      $.ajax({
        url: "http://103.200.4.20:10001/orders/estimatePoolsAndPrivate",
        method:"POST",
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        crossDomain:true,
        xhrFields: {
            withCredentials: true
        },
        // dataType: 'json',
        data: {
          distance:$('#distance').val(),
          duration:$('#duration').val(),
          lat_awal:$('#lat_awal').val(),
          long_awal:$('#lng_awal').val(),
          lat_akhir:$('#lat_akhir').val(),
          long_akhir:$('#lng_akhir').val()
          // lat_akhir:-6.448576,
          // long_akhir:106.802576
        },
        success:function(res) {
              console.log(res.data);
              if(res.status == -31){
                alert('No Pool Found');
                window.location.replace("{{ url('/home') }}");
              }else{
                $('#pool_name').val(res.data[0].pools.pool_to_nama);
                $('#otmTitle').text(res.data[0].pools.pool_to_nama);
                $('#pool_address').val(res.data[0].pools.pool_to_alamat);
                $('#otmAddress').text(res.data[0].pools.pool_to_alamat);
                $('#pools_from_id').val(res.data[0].pools.pool_from_id);
                $('#pools_to_id').val(res.data[0].pools.pool_to_id);
                $('#alamat_door').val(res.data[0].pools.pool_from_alamat);
                $('#lat_door').val(res.data[0].pools.pool_from_lat);
                $('#lng_door').val(res.data[0].pools.pool_from_long);
                $('#route_id').val(res.data[0].pools.route_id);
                $('#harga').val(res.data[0].pools.harga);
                $('#harga_final').val(res.data[0].pools.harga_final);
                $('#harga_extra').val(res.data[0].pools.harga_extra);
                $('#city_id').val(res.data[0].pools.city_id);
                $.each(res.data[0].prices_private, function(key,value){
                  $('#privatePackage').append(renderPackage(value,(value.harga_final + value.harga_extra)));
                });
                route = res.data[0].pools.route_id;
                city = res.data[0].pools.city_id;
                if($('#rideType').val() == 'anywhere'){
                  estimateShareAnywhere(city);
                }else{
                  estimateSharePool(route, city);
                  console.log('pool');
                }
              }
              
          }
        // context: document.body
      });
    }

    function estimateSharePool(route,city){
      $.ajax({
        url: "http://103.200.4.20:10001/orders/estimateSharedPools",
        method:"POST",
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        crossDomain:true,
        xhrFields: {
            withCredentials: true
        },
        // dataType: 'json',
        data: {
          route_id: route,
          city_id: city
        },
        success:function(res) {
              console.log(res.data);
              // $('#pool_name').val(res.data[0].pools.pool_to_nama);
              // $('#pool_address').val(res.data[0].pools.pool_to_alamat);

              $.each(res.data[0].prices_shared_pool, function(key,value){
                var harga = Math.ceil((((value.harga_final / 1000) / $('#sharedTripCount').val()) * 1000) + value.harga_extra);
                $('#sharedPackage').append(renderPackage(value,harga));
              });
          }
        // context: document.body
      });
    }

    function estimateShareAnywhere(city){
      $.ajax({
        url: "http://103.200.4.20:10001/orders/estimateSharedLocation",
        method:"POST",
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        crossDomain:true,
        xhrFields: {
            withCredentials: true
        },
        // dataType: 'json',
        data: {
          lat_awal : $('#lat_awal').val(),
          long_awal : $('#lng_awal').val(),
          lat_akhir : $('#lat_akhir').val(),
          long_akhir : $('#lng_akhir').val(),
          city_id : city
        },
        success:function(res) {
              console.log(res.data);
              $.each(res.data[0].prices_shared_location, function(key,value){
                $('#sharedPackage').append(renderPackage(value,(value.harga_final / $('#sharedTripCount').val()) + value.harga_extra));
              });
          }
      });
    }

     $(function(){
        var active = document.getElementById('rideFlag').value;
        // alert(active);

        if(active == 'personal'){
          $('.otmCircleLeft').css('background-color', 'black');
          $('.otmCircleRight').css('background-color', '#ccc7c4')
          $('#sharedTripCount').addClass('hidden');
          $('#sharedTripCountImg').addClass('hidden');
        }

        else{
          $('.otmCircleLeft').css('background-color', '#ccc7c4');
          $('.otmCircleRight').css('background-color', 'black');        
        }
        estimate();
      });

     function setRide(selected){
      
      var active = document.getElementById('rideFlag');
      // console.log(flag.value + " " + selected);
      if(selected != active.value){
        if(selected == 'personal'){
          $('.otmCircleLeft').css('background-color', 'black');
          $('.otmCircleRight').css('background-color', '#ccc7c4')
          $('#sharedTripCount').addClass('hidden');
          $('#sharedTripCountImg').addClass('hidden');
          $('#tab_shared').addClass('hidden');
          $('#tab_personal').removeClass('hidden');
          active.value = "personal";
        }

        else{
          $('.otmCircleLeft').css('background-color', '#ccc7c4');
          $('.otmCircleRight').css('background-color', 'black');
          $('#sharedTripCount').removeClass('hidden');
          $('#sharedTripCountImg').removeClass('hidden'); 
          $('#tab_personal').addClass('hidden');
          $('#tab_shared').removeClass('hidden');
          active.value = "shared";       
        }
      }
     }

      function setCar(type){

        var typeFlag = $('#typeFlag');      

        $('#'+typeFlag.val()+'Box').css('border', '');
        // document.getElementById(typeFlag.val()+'Radio').checked = false;

         $('#'+type+'Box').css('border', '2px solid blue');
         document.getElementById(type+'Radio').checked = true;
         typeFlag.val(type);
         $('#tripPrice').val($('#'+type+'Price').text());
         $('#tripPriceBtn').text($('#'+type+'Price').text());
         $('#harga').val($('#harga_awal_'+type).val());
         $('#harga_final').val($('#harga_akhir_'+type).val());
         $('#harga_extra').val($('#harga_extra_'+type).val());

        console.log($('#tripPrice').val());
      }

      $('#sharedTripCount').change(function(event){
          $('#sharedPackage').html('');
           if($('#rideType').val() == 'anywhere'){
            estimateShareAnywhere(city);
           }
           else{
            estimateSharePool(route, city);
           }
      });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8gA9tWFieGusrRmLqpdDhcPwpTBiWM8M&libraries=places&callback=initAutocomplete"
         async defer></script>
@stop
  