<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class OrderController extends Controller
{

    public function index($latitude,$longitude) //Untuk Index
    {
        // dd($latitude);
    	return view('apps/order-trip', compact('latitude','longitude'));
    }

}
