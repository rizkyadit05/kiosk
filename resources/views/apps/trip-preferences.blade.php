@extends('layout/default')
@section('content')
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
						<tbody>
							<tr onclick="submit(1)">
							<form method="post" action="{{ url('post-av-trip') }}" id="form_1">
								<input type="hidden" name="_token" value="{{csrf_token()}}">
								<input type="hidden" name="idTrip" value="1">
								<input type="hidden" name="rideFlag" value="{{ $rideFlag }}">
								<td>1</td>
								<td><img alt="Down" src="{{ asset('assets/images/d.png') }}"> IDR 21.000</td>
								<td>4/6</td>
								<td><button class="btn btn-org"><b>Choose</b></button></td>
								<td class="hidden">FAKE</td>
							</form>
							</tr>	
							<tr onclick="submit(2)">
							<form method="post" action="{{ url('post-av-trip') }}" id="form_2">
								<input type="hidden" name="_token" value="{{csrf_token()}}">
								<input type="hidden" name="idTrip" value="2">
								<input type="hidden" name="rideFlag" value="{{ $rideFlag }}">
								<td>2</td>
								<td><img alt="Down" src="{{ asset('assets/images/d.png') }}"> IDR 41.000</td>
								<td>4/8</td>
								<td><button class="btn btn-org"><b>Choose</b></button></td>
								<td class="hidden">FAKE</td>
							</form>
							</tr>
							<tr onclick="submit(3)">
							<form method="post" action="{{ url('post-av-trip') }}" id="form_3">
								<input type="hidden" name="_token" value="{{csrf_token()}}">
								<input type="hidden" name="idTrip" value="2">
								<input type="hidden" name="rideFlag" value="{{ $rideFlag }}">
								<td>3</td>
								<td><img alt="Down" src="{{ asset('assets/images/d.png') }}"> IDR 41.000</td>
								<td>4/8</td>
								<td><button class="btn btn-org"><b>Choose</b></button></td>
								<td class="hidden">FAKE</td>
							</form>
							</tr>
							<tr onclick="submit(4)">
							<form method="post" action="{{ url('post-av-trip') }}" id="form_4">
								<input type="hidden" name="_token" value="{{csrf_token()}}">
								<input type="hidden" name="idTrip" value="2">
								<input type="hidden" name="rideFlag" value="{{ $rideFlag }}">
								<td>4</td>
								<td><img alt="Down" src="{{ asset('assets/images/d.png') }}"> IDR 41.000</td>
								<td>4/8</td>
								<td><button class="btn btn-org"><b>Choose</b></button></td>
								<td class="hidden">FAKE</td>
							</form>
							</tr>
							<tr onclick="submit(5)">
							<form method="post" action="{{ url('post-av-trip') }}" id="form_5">
								<input type="hidden" name="_token" value="{{csrf_token()}}">
								<input type="hidden" name="idTrip" value="2">
								<input type="hidden" name="rideFlag" value="{{ $rideFlag }}">
								<td>5</td>
								<td><img alt="Down" src="{{ asset('assets/images/d.png') }}"> IDR 41.000</td>
								<td>4/8</td>
								<td><button class="btn btn-org"><b>Choose</b></button></td>
								<td class="hidden">FAKE</td>
							</form>
							</tr>							
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
			<form method="post" action="{{ url('post-new-trip') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="tripPrice" value="30000">
				<input type="hidden" name="rideFlag" value="{{ $rideFlag }}">
				<div class="col-md-10 col-md-offset-2 margin-top-2 margin-custom-1">
					<p class="text-2 inline" style="">Shared with many others: </p> 
					<select name="sharedTripCount" class="select-style">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
				</div>
				<div class="col-md-10 col-md-offset-2 margin-top-2">
					<p class="margin-top-2 margin-custom-1"><sup class="text-2">Price</sup><b class="text-3"> IDR 30.000</b></p>
				</div>
				<div class="col-md-10 col-md-offset-2 margin-top-4">
					<button class="btn text-2 round-border margin-custom-2" style="background-color: #f2961c; width: 75%;"><b>CREATE</b></button>
				</div>			
			</form>
		</div>
	</div>
</div>
@stop
@section('script')
<script type="text/javascript">
	function submit(count){
		document.getElementById("form_"+count).submit();
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
</script>
<script type="text/javascript">
	$(document).ready(function() {
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