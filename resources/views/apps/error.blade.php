@extends('layout/default')
@section('content')
{{-- {{dd(Request::all())}} --}}
<?php 
	$request = Request::all();
?>
<div class="col-md-12">
	<b><p class="text-center bodyHead">MAAF</p></b>
</div>
<div class="row">
	<div class="col-md-11 bodyContent tp-1st-box text-center">
		<h1>Permintaan anda tidak dapat di proses saat ini</h1>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
	$('#headerMenu').html('<a href="{{ url('/home') }}" class="btn text-2" style=""><b>BACK</b></a><a href="{{ url('/home') }}"><img class="headerImgBtn" src="{{ asset("assets/images/logo.png") }}"></a>');
</script>
@endsection