@extends('layout/default')
@section('content')
<div class="row row-eq-height">
  <div class="col-md-6">
    <form method="post" action="{{ url('post-order') }}">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <div class="row orderTopMenu">
        <div class="col-md-12">
          <div class="margin-1">
            <b><p id="otmTitle">{{ $title }}</p></b>
            <p id="otmAddress">{{ $address }}</p>
          </div>
          <div class="margin-1 margin-top-3">
            <p id="otmPrice">IDR 2000 - IDR 30000</p>
            <p id="otmDesc">(Price may vary due to personal/shared trip and type of car)</p>
          </div>
          <hr style="background-color: black; height: 4px;">
        </div>
        <div class="col-md-12">
          <div class="row margin-2">
            <div class="col-md-2 padding-0" onclick="setPerson('personal')">
              <p class="otmCircleLeftLabel">Personal</p>
              <div class="otmCircleLeft"></div>
            </div>
            <div class="col-md-8 padding-0">
              <hr class="otmBetween">
            </div>
            <input type="hidden" name="rideFlag" id="rideFlag" value="shared">
            <div class="col-md-2 padding-0" id="sharedRide" onclick="setPerson('shared')">
              <p>Shared</p>
              <div class="otmCircleRight"></div>
              <div class="margin-left-20px" style="font-size: 1.2em;">
                <b><p class="inline">5</p></b>
                <span class="inline glyphicon glyphicon-chevron-up" aria-hidden="true"></span>              
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 orderBottomMenu">
          <div class="row">
            <input type="hidden" name="typeFlag" id="typeFlag" value="platinum">
            <input type="hidden" name="tripPrice" id="tripPrice" value="">
            <div class="col-md-4">
              <div class="platinumBox bubbleBox" onclick="setCar('platinum')" style="border: 2px solid blue">
                <div class="platinumBoxDesc text-center">
                  <b><p class="margin-bot-0">Platinum</p></b>
                  <p class="margin-bot-0">(Alphard, Vellfire)</p>
                  <b><p class="margin-bot-0" id="platinumPrice">IDR 54.000</p></b>
                </div>
              </div>
              <input type="radio" id="platinumRadio" onclick="setCar('platinum')"  name="rideClass" value="platinum" style="margin-left: 50%;" checked="">
            </div>
            <div class="col-md-4">
              <div class="goldBox bubbleBox" onclick="setCar('gold')">
                <div class="goldBoxDesc text-center">
                  <b><p class="margin-bot-0">Gold</p></b>
                  <p class="margin-bot-0">(Terrios, Inova)</p>
                  <b><p class="margin-bot-0" id="goldPrice">IDR 36.000</p></b>
                </div>
              </div>
              <input type="radio" id="goldRadio" onclick="setCar('gold')" name="rideClass" value="gold" style="margin-left: 50%;">
            </div>
            <div class="col-md-4">
              <div class="silverBox bubbleBox" onclick="setCar('silver')">
                <div class="silverBoxDesc text-center">
                  <b><p class="margin-bot-0">Silver</p></b>
                  <p class="margin-bot-0">(Xenia, Ertiga)</p>
                  <b><p class="margin-bot-0" id="silverPrice">IDR 18.000</p></b>
                </div>
              </div>
              <input type="radio" id="silverRadio" onclick="setCar('silver')"  name="rideClass" value="silver" style="margin-left: 50%;">            
            </div>                    
          </div>
          <div class="row">
            <div class="col-md-12">
              <button type="submit" class="btn btn-order"><b><p id="tripPriceBtn">IDR 18.000</p></b><b><p>ORDER NOW</p></b></button>
            </div>        
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
        var pos = {lat: {{ $latitude }}, lng: {{ $longitude }}}
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

      $('#headerMenu').html('<button onclick="window.history.back()" class="btn text-2" style=""><b>BACK</b></button><a href="#"><img style="width: 28%; margin-left: 26.5%;" src="{{ asset("assets/images/logo.png") }}"></a>');
      $('#tripPriceBtn').text($('#platinumPrice').text());

    </script>
    <script type="text/javascript">
     function setPerson(active){
        var flag = $('#rideFlag').val();
        // alert(flag);

        if(active != flag){

          if(flag == 'shared'){
            $('.otmCircleLeft').css('background-color', 'black');
            $('.otmCircleRight').css('background-color', '#ccc7c4')
            $('#rideFlag').val('personal');
          }

          else{
            $('.otmCircleLeft').css('background-color', '#ccc7c4');
            $('.otmCircleRight').css('background-color', 'black');
            $('#rideFlag').val('shared');          
          }
        }
      }

      function setCar(type){

        var typeFlag = $('#typeFlag');      

        $('.'+typeFlag.val()+'Box').css('border', '0px solid blue');
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
  