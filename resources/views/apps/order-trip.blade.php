@extends('layout/default')
@section('content')
<div class="row row-eq-height">
  <div class="col-md-6">
    <form method="post" class="fullHeight" action="{{ url('post-order') }}">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="hidden" id="rideFlag" name="rideFlag" value="shared">
      <div class="row orderTopMenu">
        <div class="col-md-12">
          <div class="margin-1">
            <b><p id="otmTitle">{{ $title }}</p></b>
            <p id="otmAddress">{{ $address }}</p>
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
      <div class="row orderBottomMenu">
        <div class="col-md-12">
          <input type="hidden" name="typeFlag" id="typeFlag" value="platinum">
          <input type="hidden" name="tripPrice" id="tripPrice" value="">
          <div class="col-md-4">
            <div class="platinumBox bubbleBox twoKBox" onclick="setCar('platinum')" style="border: 2px solid blue">
              <div class="platinumBoxDesc text-center">
                <b><p class="margin-bot-0">Platinum</p></b>
                <p class="margin-bot-0">(Alphard, Vellfire)</p>
                <b><p class="margin-bot-0" id="platinumPrice"></p></b>
              </div>
            </div>
            <input type="radio" id="platinumRadio" onclick="setCar('platinum')"  value="platinum" style="margin-left: 50%;" checked="">
          </div>
          <div class="col-md-4">
            <div class="goldBox bubbleBox twoKBox" onclick="setCar('gold')">
              <div class="goldBoxDesc text-center">
                <b><p class="margin-bot-0">Gold</p></b>
                <p class="margin-bot-0">(Terrios, Inova)</p>
                <b><p class="margin-bot-0" id="goldPrice"></p></b>
              </div>
            </div>
            <input type="radio" id="goldRadio" onclick="setCar('gold')" value="gold" style="margin-left: 50%;">
          </div>
          <div class="col-md-4">
            <div class="silverBox bubbleBox twoKBox" onclick="setCar('silver')">
              <div class="silverBoxDesc text-center">
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
        var pos = {lat: {{ $latitude }}, lng: {{ $longitude }}};
        var map = new google.maps.Map(document.getElementById('map'), {
          center: pos,
          zoom:17,
          mapTypeId:google.maps.MapTypeId.ROADMAP
        });

        var marker = new google.maps.Marker({
          position: pos,
          title: '{{ $title }}',
          map: map
        });
      }

      $('#headerMenu').html('<button onclick="window.history.back()" class="btn text-2" style=""><b>BACK</b></button><a href="#"><img class="headerImgBtn" src="{{ asset("assets/images/logo.png") }}"></a>');
      $('#tripPriceBtn').text($('#platinumPrice').text());

    </script>
    <script type="text/javascript">

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
          active.value = "personal";
        }

        else{
          $('.otmCircleLeft').css('background-color', '#ccc7c4');
          $('.otmCircleRight').css('background-color', 'black');
          $('#sharedTripCount').removeClass('hidden');
          $('#sharedTripCountImg').removeClass('hidden'); 
          active.value = "shared";       
        }
      }
     }

      function setCar(type){

        var typeFlag = $('#typeFlag');      

        $('.'+typeFlag.val()+'Box').css('border', '');
        document.getElementById(typeFlag.val()+'Radio').checked = false;

        if(type == 'platinum'){
           $('.platinumBox').css('border', '2px solid blue');
           document.getElementById('platinumRadio').checked = true;
           typeFlag.val(type);
           $('#tripPrice').val($('#platinumPrice').text());
           $('#tripPriceBtn').text($('#platinumPrice').text());
        }

        else if(type == 'gold'){
          $('.goldBox').css('border', '2px solid blue')
           document.getElementById('goldRadio').checked = true;
           typeFlag.val(type);
           $('#tripPrice').val($('#goldPrice').text());
           $('#tripPriceBtn').text($('#goldPrice').text());           
        }

        else if(type == 'silver'){
          $('.silverBox').css('border', '2px solid blue')
           document.getElementById('silverRadio').checked = true;
           typeFlag.val(type);
           $('#tripPrice').val($('#silverPrice').text());
           $('#tripPriceBtn').text($('#silverPrice').text());                     
        }
        console.log($('#tripPrice').val());
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8gA9tWFieGusrRmLqpdDhcPwpTBiWM8M&libraries=places&callback=initAutocomplete"
         async defer></script>
@stop
  