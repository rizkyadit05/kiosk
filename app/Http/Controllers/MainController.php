<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Request;

class MainController extends Controller
{
	public function home(){
		return view('apps/home')
			->with('invFlag', 'none');
	}

	public function order(){
		$result = Request::all();
		// print_r($result);
		return view('apps/order-trip')
			->with('latitude', $result["placeLatitude"])
			->with('longitude', $result["placeLongitude"])
			->with('title', $result["placeName"])
			->with('address', $result["placeAddress"]);
	}

	public function post_order(){
		$result = Request::all();
		// print_r($result);
		return view('apps/trip-preferences')
			->with('rideFlag' ,$result["rideFlag"]);
	}

	public function post_av_trip(){
		$result = Request::all();
		// print_r($result);
		return view('apps/invoice')
			->with('rideFlag' ,$result["rideFlag"]);
	}

	public function post_new_trip(){
		$result = Request::all();
		// print_r($result);
		return view('apps/invoice')
			->with('rideFlag' ,$result["rideFlag"]);
	}

	public function post_inv_ok(){
		return view('apps/home')
			->with('invFlag', 'ok');
	}

	public function post_inv_cancel(){
		return view('apps/home')
			->with('invFlag', 'cancel');
	}

	public function landing_page(){
		return view('apps/landing-page');
	}
}
