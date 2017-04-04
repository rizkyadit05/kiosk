@extends('layout/default')
@section('content')
<div class="row">
	<div class="col-md-12">
		<b><p class="text-center bodyHead">INVOICE</p></b>
	</div>
	<div class="col-md-10 col-md-offset-1 bodyContent">
		<div class="row">
			<div class="col-md-12" style="">
				<img width="8%" style="" class="pull-left" src="{{ asset('assets/images/people.png') }}">
				<div class="pull-left contentHeader margin-top-0">
					@if($rideFlag == 'personal')
					<p class="text-1-5" style="margin: 0;">Personal</p>
					@else
					<p class="text-1-5" style="margin: 0;">Share Trip</p>
					<p class="text-1-5" style="margin: 0;">5 People </p>
					<p class="text-1-5" style="margin: 0;">#5 Entry Queue</p>
					@endif
				</div>
				<b><p class="pull-right text-2" style="display: inline;">ID TRIP 1234</p></b>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p class="text-center text-2">Jalan Siaga II,Pasar Minggu, Kota Jakarta Selatan, DKI Jakarta</p>
				<b><p class="text-center text-3-5">IDR 100.000</p></b>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 padding-btn-invoice">
				<b><p class="text-center text-2-7">PLEASE TAKE THE TICKET AND COMPLETE THE PAYMENT</p></b>
			</div>
			<form method="post" action="{{ url('post-inv-ok') }}">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="col-md-10 col-md-offset-1 layout-btn-invoice">
<!-- 					<button formaction="{{ url('post-inv-cancel') }}" class="btn confirm pull-left text-3 width-40 round-border" style="background-color: #ccc7c4;"><b>CANCEL</b></button> -->
					<button class="btn confirm text-3 width-40 round-border" style="background-color: #f2961c; margin-left: 30%;"><b>OK</b></button>
				</div>				
			</form>
		</div>
	</div>
</div>
@stop
@section('script')
<script type="text/javascript">
 $(function() {
	$('#headerMenu').html('<button onclick="window.history.back()" class="btn text-2" style=""><b>BACK</b></button><a href="#"><img class="headerImgBtn" src="{{ asset("assets/images/logo.png") }}"></a>');
    $('#tripPriceBtn').text($('#platinumPrice').text());
 });
</script>
@stop