@extends('layout/default')
@section('content')
<div class="row row-eq-height">
  <div class="col-md-6">
    <form method="post" class="fullHeight" action="{{ url('post-order') }}">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="hidden" id="rideFlag" name="rideFlag" value="shared">
      <input type="hidden" id="lat_awal" name="lat_awal" value="{{ $result['lat_awal'] or ''}}">
          <input type="hidden" id="lng_awal" name="lng_awal" value="{{ $result['lng_awal'] or ''}}">
          <input type="hidden" id="lat_akhir" name="lat_akhir" value="{{ $result['lat_akhir'] or ''}}">
          <input type="hidden" id="lng_akhir" name="lng_akhir" value="{{ $result['lng_akhir'] or ''}}">
          <input type="hidden" id="duration" name="duration" value="{{ $result['duration'] or ''}}">
          <input type="hidden" id="distance" name="distance" value="{{ $result['distance'] or '' }}">
          <input type="hidden" id="placeName" name="place_name" value="{{ $result['place_name'] or '' }}">
          <input type="hidden" id="placeAddress" name="place_address" value="{{ $result['place_address'] or '' }}">
          <input type="hidden" name="pool_name" id="pool_name">
          <input type="hidden" name="pool_address" id="pool_address">
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
      <div class="row orderBottomMenu" id="tab_personal">
        <div class="col-md-12">
          <input type="hidden" name="typeFlag" id="typeFlag" value="platinum">
          <input type="hidden" name="tripPrice" id="tripPrice" value="">
          <div class="package">
            
          </div>
          <div class="col-md-4">
            <div class="packageBox bubbleBox twoKBox" id="platinumBox" onclick="setCar('platinum')" style="border: 2px solid blue; 
              background-color: #8891aa;">
              <div class="packageBoxDesc text-center" id="platinumBoxDesc">
                <img class="img-responsive" src="{{ asset('assets/images/SUV.png') }}" style="height: 70%; margin-left: 25%;">
                <b><p class="margin-bot-0">Platinum</p></b>
                <p class="margin-bot-0">(Alphard, Vellfire)</p>
                <b><p class="margin-bot-0" id="platinumPrice"></p></b>
              </div>
            </div>
            <input type="radio" id="platinumRadio" onclick="setCar('platinum')"  value="platinum" style="margin-left: 50%;" checked="">
          </div>
          <div class="col-md-4">
            <div class="packageBox bubbleBox twoKBox" id="goldBox" onclick="setCar('gold')" style="background-color: #f9bb00;">
              <div class="packageBoxDesc text-center" id="goldBoxDesc">
                <img class="img-responsive" src="{{ asset('assets/images/minivan.png') }}" style="height: 70%; margin-left: 25%;">
                <b><p class="margin-bot-0">Gold</p></b>
                <p class="margin-bot-0">(Terrios, Inova)</p>
                <b><p class="margin-bot-0" id="goldPrice"></p></b>
              </div>
            </div>
            <input type="radio" id="goldRadio" onclick="setCar('gold')" value="gold" style="margin-left: 50%;">
          </div>
          <div class="col-md-4">
            <div class="packageBox bubbleBox twoKBox" id="silverBox" onclick="setCar('silver')" style="background-color: #e8e5de;">
              <div class="packageBoxDesc text-center">
                <img class="img-responsive" src="{{ asset('assets/images/city-car.png') }}" style="height: 70%; margin-left: 25%;">
                <b><p class="margin-bot-0">Silver</p></b>
                <p class="margin-bot-0">(Xenia, Ertiga)</p>
                <b><p class="margin-bot-0" id="silverPrice"></p></b>
              </div>
            </div>
            <input type="radio" id="silverRadio" onclick="setCar('silver')" value="silver" style="margin-left: 50%;">            
            </div>                    
          <div class="col-md-12">
            <button type="submit" class="btn btn-order"><b><p id="tripPriceBtn"></p></b><b><p>ORDER NOW</p></b></button>
          </div>        
        </div>
      </div>
      <!-- Tab Shared -->
      <div class="row orderBottomMenu hidden" id="tab_shared">
        <div class="col-md-12">
          <input type="hidden" name="typeFlag" id="typeFlag" value="platinum">
          <input type="hidden" name="tripPrice" id="tripPrice" value="">
          <div class="package">
            
          </div>
          <div class="col-md-4">
            <div class="packageBox bubbleBox twoKBox" id="platinumBox" onclick="setCar('platinum')" style="border: 2px solid blue; 
              background-color: #8891aa;">
              <div class="packageBoxDesc text-center" id="platinumBoxDesc">
                <img class="img-responsive" src="{{ asset('assets/images/SUV.png') }}" style="height: 70%; margin-left: 25%;">
                <b><p class="margin-bot-0">Platinum</p></b>
                <p class="margin-bot-0">(Alphard, Vellfire)</p>
                <b><p class="margin-bot-0" id="platinumPrice"></p></b>
              </div>
            </div>
            <input type="radio" id="platinumRadio" onclick="setCar('platinum')"  value="platinum" style="margin-left: 50%;" checked="">
          </div>
          <div class="col-md-4">
            <div class="packageBox bubbleBox twoKBox" id="goldBox" onclick="setCar('gold')" style="background-color: #f9bb00;">
              <div class="packageBoxDesc text-center" id="goldBoxDesc">
                <img class="img-responsive" src="{{ asset('assets/images/minivan.png') }}" style="height: 70%; margin-left: 25%;">
                <b><p class="margin-bot-0">Gold</p></b>
                <p class="margin-bot-0">(Terrios, Inova)</p>
                <b><p class="margin-bot-0" id="goldPrice"></p></b>
              </div>
            </div>
            <input type="radio" id="goldRadio" onclick="setCar('gold')" value="gold" style="margin-left: 50%;">
          </div>
          <div class="col-md-4">
            <div class="packageBox bubbleBox twoKBox" id="silverBox" onclick="setCar('silver')" style="background-color: #e8e5de;">
              <div class="packageBoxDesc text-center">
                <img class="img-responsive" src="{{ asset('assets/images/city-car.png') }}" style="height: 70%; margin-left: 25%;">
                <b><p class="margin-bot-0">Silver</p></b>
                <p class="margin-bot-0">(Xenia, Ertiga)</p>
                <b><p class="margin-bot-0" id="silverPrice"></p></b>
              </div>
            </div>
            <input type="radio" id="silverRadio" onclick="setCar('silver')" value="silver" style="margin-left: 50%;">            
            </div>                    
          <div class="col-md-12">
            <button type="submit" class="btn btn-order"><b><p id="tripPriceBtn"></p></b><b><p>ORDER NOW</p></b></button>
          </div>        
        </div>
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
    function renderPackage(data){
      html = '<div class="col-md-4"> \
            <div class="platinumBox bubbleBox twoKBox" onclick="setCar(\''+ data.nama_package +'\')" style="border: 2px solid blue"> \
              <div class="platinumBoxDesc text-center">\
                <b><p class="margin-bot-0">'+ data.nama_package +'</p></b>\
                <p class="margin-bot-0">(Alphard, Vellfire)</p>\
                <b><p class="margin-bot-0" id="platinumPrice"></p></b>\
              </div>\
            </div>\
            <input type="radio" id="platinumRadio" onclick="setCar(\''+ data.nama_package +'\')"  value="'+ data.nama_package +'" style="margin-left: 50%;" checked>\
          </div>'
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
        },
        success:function(res) {
              console.log(res.data);
              $('#pool_name').val(res.data[0].pools.pool_to_nama);
              $('#pool_address').val(res.data[0].pools.pool_to_alamat);
          }
        // context: document.body
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

        //This line of codes below, are used to change format of number to price format
        var otmPrice = document.getElementById('otmPrice');
        var platinumPrice = document.getElementById('platinumPrice');
        var goldPrice = document.getElementById('goldPrice');
        var silverPrice = document.getElementById('silverPrice');
        var tripPriceBtn = document.getElementById('tripPriceBtn');
        //Throw your php variable below
        var otmPricePHP = '1000';
        var otmPricePHP2 = '56000';
        var platinumPricePHP = '56000';
        var goldPricePHP = '36000';
        var silverPricePHP = '16000';

        otmPricePHP = otmPricePHP.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.");
        otmPricePHP2 = otmPricePHP2.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.");
        platinumPricePHP = platinumPricePHP.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.");
        goldPricePHP = goldPricePHP.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.");
        silverPricePHP = silverPricePHP.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.");
        // alert(otmPrice.innerHTML);
        otmPrice.innerHTML = "IDR " + otmPricePHP + " - " + "IDR " + otmPricePHP2;
        platinumPrice.innerHTML = "IDR " + platinumPricePHP;
        goldPrice.innerHTML = "IDR " + goldPricePHP;
        silverPrice.innerHTML = "IDR " + silverPricePHP;
        tripPriceBtn.innerHTML = "IDR " + platinumPricePHP;
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
        document.getElementById(typeFlag.val()+'Radio').checked = false;

         $('#'+type+'Box').css('border', '2px solid blue');
         document.getElementById(type+'Radio').checked = true;
         typeFlag.val(type);
         $('#tripPrice').val($('#'+type+'Price').text());
         $('#tripPriceBtn').text($('#'+type+'Price').text());

        console.log($('#tripPrice').val());
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8gA9tWFieGusrRmLqpdDhcPwpTBiWM8M&libraries=places&callback=initAutocomplete"
         async defer></script>
@stop
  