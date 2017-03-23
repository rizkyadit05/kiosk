@extends('layout/default')
@section('content')
<div class="row">
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
					<b><p style="font-size: 2em; margin: 0;">Pick Available Shared Trip</p></b>
					<p style="font-size: 1.5em;">Trip to same destination and same car type</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table id="tpd-table" class="table table-responsive text-center" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th class="text-center" style="padding-left: 7%;"><b>ID TRIP</b></th>
							<th class="text-center"><b>PRICE</b></th>
							<th class="text-center"><b>QUOTA</b></th>
							<th class="hidden">FAKE</th>
						</tr>
					</thead>
					<tfoot class="hidden">
						<tr>
							<th class="text-center" style="padding-left: 7%;"><b>ID TRIP</b></th>
							<th class="text-center"><b>PRICE</b></th>
							<th class="text-center"><b>QUOTA</b></th>
							<th class="hidden">FAKE</th>
						</tr>
					</tfoot>
					<tbody>
						<tr>
							<td>1</td>
							<td><img alt="Down" src="{{ asset('assets/images/d.png') }}"> IDR 21.000</td>
							<td>4/6</td>
							<td class="hidden">FAKE</td>
						</tr>
						<tr>
							<td>2</td>
							<td><img alt="Up" src="{{ asset('assets/images/u.png') }}"> IDR 15.000</td>
							<td>2/3</td>
							<td class="hidden">FAKE</td>
						 </tr>
					</tbody>
				</table>				
			</div>
		</div>
	</div>
	<div class="col-md-1"><b><p class="text-2 tp-divider">--OR--</p></b></div>
	<div class="col-md-5 bodyContent tp-2nd-box">
		<div class="row">
			<div class="col-md-12">
				<img style="width: 11%;" class="pull-left" src="{{ asset('assets/images/add.png') }}">
				<b><p class="pull-left contentHeader" style="font-size: 2em;">Host New Shared Trip</p></b>		
			</div>
		</div>
		<div class="row">
			<form method="get" action="{{ url('/') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="col-md-10 col-md-offset-2 margin-top-2 margin-custom-1">
					<p class="" style="font-size: 1.75em; display: inline;">Shared with many others: </p> 
					<select class="select-style">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
				</div>
				<div class="col-md-10 col-md-offset-2 margin-top-2">
					<p class="margin-top-2 margin-custom-1"><sup class="text-2">Price</sup><b class="text-3"> IDR 30.000</b></p>
				</div>
				<div class="col-md-10 col-md-offset-2 margin-top-2">
					<button class="btn text-3 round-border margin-custom-2" style="background-color: #f2961c; width: 75%;"><b>CREATE</b></button>
				</div>			
			</form>
		</div>
	</div>
</div>
@stop
@section('script')
<script type="text/javascript">
	$(document).ready(function() {
    $('#tpd-table').DataTable( {
        "order": [[ 3, "desc" ]]
    });

    $("label").remove();

    $('#headerMenu').html('<button onclick="window.history.back()" class="btn text-2" style=""><b>BACK</b></button><a href="#"><img style="width: 28%; margin-left: 26.5%;" src="{{ asset("assets/images/logo.png") }}"></a>');
});
</script>
@stop