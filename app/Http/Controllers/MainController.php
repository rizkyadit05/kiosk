<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Request;

class MainController extends Controller
{
	public function order(){
		$result = Request::all();
		// print_r($result);
		return view('apps/order-trip')
			->with('latitude', $result["placeLatitude"])
			->with('longitude', $result["placeLongitude"])
			->with('title', $result["placeName"])
			->with('address', $result["placeAddress"])
			->with('ride_flag', $result["rideFlag"]);
	}

	public function post_order(){
		$result = Request::all();
		// print_r($result);
		return view('apps/trip-preferences');
	}

	public function post_av_trip(){
		$result = Request::all();
		// print_r($result);
		return view('apps/invoice');
	}

	public function post_new_trip(){
		$result = Request::all();
		// print_r($result);
		return view('apps/invoice');
	}
}
