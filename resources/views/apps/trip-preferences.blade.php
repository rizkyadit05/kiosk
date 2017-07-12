@extends('layout/default')
@section('content')
{{-- {{dd(Request::all())}} --}}
<?php 
	$request = Request::all();
?>
<div class="modal fade" id="phone" role="dialog">
  <div class="modal-dialog" role="document">
      	<form id="create_order" action="{{ url('join') }}" method="POST">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Lets GO - Please Insert Your Phone Number</h4>
      </div>
      <div class="modal-body clearfix">
      		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type='hidden' name='rideFlag' value='{{ $rideFlag }}'>
	  		<input type='hidden' name='pools_from_id' value='{{ $request['pools_from_id'] }}'>
			<input type='hidden' name='pools_to_id' value='{{ $request['pools_to_id'] }}'>

			<input type='hidden' name='lat_door' value='{{ $request['lat_door'] }}'>
			<input type='hidden' name='long_door' value='{{ $request['long_door'] }}'>
			<input type='hidden' name='alamat_door' value='{{ $request['alamat_door'] }}'>
			<!-- -->
			<input type='hidden' name='route_id' value='{{ $request['route_id'] }}'>

			<input type='hidden' name='lat_awal' value='{{ $request['lat_awal'] }}'>
			<input type='hidden' name='long_awal' value='{{ $request['lng_awal'] }}'>
			<input type='hidden' name='alamat_awal' value='{{ $request['alamat_door'] }}'>

			<input type='hidden' name='lat_akhir' value='{{ $request['lat_akhir'] }}'>
			<input type='hidden' name='long_akhir' value='{{ $request['lng_akhir'] }}'>
			<input type='hidden' name='alamat_akhir' value='{{ $request['place_address'] }}'>

			<input type='hidden' name='harga_awal'  value='{{ $request['harga'] or '0' }}'>
			<input type='hidden' name='harga_akhir' id="harga_akhir" value='{{ $request['harga_final'] or '0' }}'>
			<input type='hidden' name='harga_tambahan' id="harga_tambahan" value='{{ $request['harga_extra'] or '0' }}'>

			<input type='hidden' name='distance' value='{{ $request['distance'] }}'>
			<input type='hidden' name='duration' value='{{ $request['duration'] }}'>

			<input type='hidden' name='car_package_id' value='{{ $request['package'] }}'>

			<input type='hidden' name='number_of_shared' id="number_of_shared" value="{{ $request['sharedTripCount'] or 0 }}">

			<input type='hidden' name='order_id' id="order_id">
			<input type='hidden' name='price_user_add' id="price_user_add">
			<input type='hidden' name='price_user_total' id="price_user_total">
			<input type='hidden' name='user_id' id="user_id" value="0">
	      <div class="col-md-12">
	      	<div class="form-group">
		      	<input type="text" id='phone_input' class="form-control" placeholder="Insert Your Phone Number">
		    </div>
	      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal">Close</button>
        <a href="#" id="create_order_btn" class="btn btn-primary" onclick="submit_btn()">Create</a>
      </div>
  	</form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="row">
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

<div class="col-md-12">
	<b><p class="text-center bodyHead">TRIP PREFERENCES</p></b>
</div>
</div>
<div class="row">
	<div class="col-md-5 bodyContent tp-1st-box">
		<div class="row">
			<div class="col-md-12">
				<img style="width: 11%;" class="pull-left" src="{{ asset('assets/images/people.png') }}">
				<div style="" class="pull-left contentHeader margin-left-2">
					<b><p style="font-size: 2vw; margin: 0;">Pick Available Shared Trip</p></b>
					<p style="font-size: 1.5vw;">Trip to same destination and same car type</p>
				</div>
				<span style="font-size: 3vw; margin-left: 0%;" onclick="questionFlag('lCard')" class="pull-right glyphicon glyphicon-info-sign"></span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table id="tpd-table" class="table text-center" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th class="text-center" style="padding-left: 7%;"><b>ID</b></th>
								<th class="text-center"><b>PRICE</b></th>
								<th class="text-center"><b>QUOTA</b></th>
								<th class="text-center" id="choose"><b>Action</b></th>
								<th class="hidden">FAKE</th>
							</tr>
						</thead>
						<tfoot class="hidden">
							<tr>
								<th class="text-center" style="padding-left: 7%;"><b>ID TRIP</b></th>
								<th class="text-center"><b>PRICE</b></th>
								<th class="text-center"><b>QUOTA</b></th>
								<th class="text-center"><b>Action</b></th>
								<th class="hidden">FAKE</th>
							</tr>
						</tfoot>
						<tbody id="avaliableList">											
						</tbody>
					</table>		
				</div>			
			</div>
		</div>
	</div>
	<div class="col-md-1"><b><p class="text-2 tp-divider">--OR--</p></b></div>
	<div class="col-md-5 bodyContent tp-2nd-box">
		<div class="row">
			<div class="col-md-12">
				<img style="width: 11%;" class="pull-left" src="{{ asset('assets/images/add.png') }}">
				<b><p class="pull-left contentHeader" style="font-size: 2vw;">Host New Shared Trip</p></b>
				<span style="font-size: 3vw; margin-left: 0%;" onclick="questionFlag('rCard')" class="pull-right glyphicon glyphicon-info-sign"></span>		
			</div>
		</div>
		<div class="row">
			{{-- <form method="post" action="{{ url('post-new-trip') }}"> --}}
				{{-- <input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="tripPrice" value="30000">
				<input type="hidden" name="rideFlag" value="{{ $rideFlag }}"> --}}
				<div class="col-md-10 col-md-offset-2 margin-top-2 margin-custom-1">
				@if($rideFlag != 'personal')
					<p class="text-2 inline" style="">Shared with many others: </p> 
					<select name="sharedTripCount" class="select-style" id="sharedTripCount">
					@for($i = 1; $i <= 5; $i++)
						<option value="{{ $i }}" @if($i == ($request['sharedTripCount'] )) selected @endif>{{ $i }}</option>
					@endfor
					</select>
				@else
					<input type="hidden" name="sharedTripCount" value="0">
				@endif
				</div>
				<div class="col-md-10 col-md-offset-2 margin-top-2">
					<p class="margin-top-2 margin-custom-1"><sup class="text-2">Price</sup><b class="text-3" id="price_create"> IDR {{ $request['tripPrice'] }}</b></p>
				</div>
				<div class="col-md-10 col-md-offset-2 margin-top-4">
					<button class="btn text-2 round-border margin-custom-2" style="background-color: #f2961c; width: 75%;" onclick="create()"><b>CREATE</b></button>
				</div>			
			{{-- </form> --}}
		</div>
	</div>
</div>
@stop
@section('script')
<script type="text/javascript">

	var csrf_token = "{{csrf_token()}}";

	function submit_btn(){
		console.log($('#phone_input').val());
		$.ajax({
	        url: "http://103.200.4.20:10001/users/checkPhoneNumber",
	        method:"POST",
	        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
	        crossDomain:true,
	        xhrFields: {
	            // withCredentials: true
	        },
	        async:false,
	        data: {
	          nohp:$('#phone_input').val(),
	        },
	        success:function(res) {
	              console.log(res.data);
	              $('#user_id').val(res.data[0].id);
	              $('#create_order').submit();
	          }
	    });
	}

	function submit(count){
		$('#order_id').val($('#order_id_'+count).val());
		$('#price_user_add').val($('#price_user_add_'+count).val());
		$('#price_user_total').val($('#price_user_total_'+count).val());
		$('#create_order').attr('action',"{{ url('join') }}");
		$('#create_order_btn').text("Join");
		$('#phone').modal('show');
		// document.getElementById("form_"+count).submit();
	}

	function create(){
		$('#create_order').attr('action',"{{ url('create') }}");
		$('#create_order_btn').text("Create");
		var price = parseInt($('#harga_akhir').val() / $('#sharedTripCount :selected').val()) + parseInt($('#harga_tambahan').val());
		// console.log(($('#harga_akhir').val() / $('#sharedTripCount :selected').val()));
		$('#price_user_total').val(price);
		$('#price_user_add').val($('#harga_tambahan').val());
		$('#phone').modal('show');
	}

	function questionFlag(bool){

		if(bool == 'lCard'){
			$('.modal-body').html('<p>Available Shared Trip</p>');
			$('#myModal').modal('show');
		}

		else{
			$('.modal-body').html('<p>Host New Shared Trip</p>');
			$('#myModal').modal('show');
		}
	}

	function renderList(value){
		var price = Math.ceil(((value.harga_akhir/1000) / value.number_of_shared) *1000) + parseInt($('#harga_tambahan').val());
		return "<tr onclick='submit("+ value.id +")'>"+				
					"<td>"+ value.id+"</td>"+
					"<td>"+price+"</td>"+
					"<td>"+ value.filled_seat+"/"+ value.number_of_shared+"</td>"+
					"<td><button class='btn btn-org'><b>Choose</b></button></td>"+
					"<td class='hidden'>"+				
					"<form method='post' action='{{ url('join') }}' id='form_"+ value.id+"'>\
						<input type='hidden' id='order_id_"+ value.id+"' value='"+ value.id+"'>\
						<input type='hidden' id='price_user_add_"+ value.id+"' value='"+$('#harga_tambahan').val()+"'>\
						<input type='hidden' id='price_user_total_"+ value.id+"' value='"+price+"'>\
					</form>"+
					"FAKE</td>"+
				"</tr>";
	}
	function availableTrip(){
		$.ajax({
        url: "http://103.200.4.20:10001/orders/availableSharedTrip",
        method:"POST",
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        crossDomain:true,
        xhrFields: {
            withCredentials: true
        },
        async:false,
        // dataType: 'json',
        data: {
          pools_from_id:{{ $request['pools_from_id'] or '' }},
          pools_to_id:{{ $request['pools_to_id'] or '' }},
        },
        success:function(res) {
              console.log(res.data);
              $.each(res.data, function(key,value){
                $('#avaliableList').append(renderList(value));
              });
          }
        // context: document.body
      });
	}

	$('#sharedTripCount').change(function(e){
		var price = Math.ceil((($('#harga_akhir').val()/1000) / $('#sharedTripCount :selected').val()) * 1000) + parseInt($('#harga_tambahan').val());
		$('#price_user_total').val(price);
		$('#price_create').text("IDR "+price);
		$('#number_of_shared').val($('#sharedTripCount :selected').val());
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {

	availableTrip();

    $('#tpd-table').DataTable( {
        "order": [[ 3, "desc" ]],
        "aLengthMenu": [[5, 50, 75, -1], [25, 50, 75, "All"]],
    	"pageLength": 5,
    	"columnDefs": [
		   { "orderable": false, "targets": 3 }
		 ]
    });

    $("#choose").removeClass("sorting_desc");

    $("label").remove();

    $('#headerMenu').html('<button onclick="window.history.back()" class="btn text-2" style=""><b>BACK</b></button><a href="#"><img class="headerImgBtn" src="{{ asset("assets/images/logo.png") }}"></a>');
});
</script>
@stop