<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class MainController extends Controller
{

    public function index($latitude, $longitude, $title, $address, $ride_flag) //Untuk Index
    {
        // dd($latitude);
    	return view('apps/order-trip', compact('latitude', 'longitude', 'title', 'address', 'ride_flag'));
    }

}
