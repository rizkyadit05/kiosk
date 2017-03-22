@extends('layout/default')
@section('content')
<div class="row">
	<div class="col-md-12">
		<b><p class="text-center bodyHead">TRIP PREFERENCES</p></b>
	</div>
	<div class="col-md-10 col-md-offset-1 bodyContent">
		<div class="row">
			<div class="col-md-12" style="">
				<img style="" class="pull-left" src="{{ asset('assets/images/people.png') }}">
				<div style="" class="pull-left contentHeader margin-left-2">
					<b><p style="font-size: 2em; margin: 0;">Pick Available Shared Trip</p></b>
					<p style="font-size: 1.5em;">Trip to same destination and same car type</p>
				</div>
			</div>
			<div class="col-md-12" style="margin-top: 2%;">
				<table id="tpd-table" class="table table-responsive text-center" cellspacing="0" width="100%">
				        <thead>
				            <tr>
								<th class="text-center" style="padding-left: 7%;"><b>ID TRIP</b></th>
								<th class="text-center"><b>PRICE</b></th>
								<th class="text-center"><b>QUOTA</b></th>
								<th class="text-left" style="padding-left: 7%;"><b>DESTINATION</b></th>
				            </tr>
				        </thead>
				        <tfoot class="hidden">
				            <tr>
								<th class="text-center" style="padding-left: 7%;"><b>ID TRIP</b></th>
								<th class="text-center"><b>PRICE</b></th>
								<th class="text-center"><b>QUOTA</b></th>
								<th class="text-left" style="padding-left: 7%;"><b>DESTINATION</b></th>
				            </tr>
				        </tfoot>
				        <tbody>
				            <tr>
								<td>1</td>
								<td><img alt="Down" src="{{ asset('assets/images/d.png') }}"> IDR 21.000</td>
								<td>4/6</td>
								<td class="text-left" style="padding-left: 7%;">Taman Nasional Ujung Kulon</td>
				            </tr>
				            <tr>
								<td>2</td>
								<td><img alt="Up" src="{{ asset('assets/images/u.png') }}"> IDR 15.000</td>
								<td>2/3</td>
								<td class="text-left" style="padding-left: 7%;">Eropa</td>
				            </tr>
				        </tbody>
				    </table>
			</div>
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

    $('#headerMenu').html('<button onclick="window.history.back()" class="btn" style="display: inline; font-size: 2em;"><b>BACK</b></button><a href="#" style="display: inline;"><img style="width: 28%; margin-left: 27%;" src="{{ asset("assets/images/logo.png") }}"></a>');
});
</script>
@stop