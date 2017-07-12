<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Request;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class CreateOrderController extends Controller
{
	public function join(Request $request){
		// dd($request->all());
		$input = $request->only(['order_id',
			'price_user_add',
			'price_user_total',
			'price_user_total',
			'pools_from_id',
			'pools_to_id',
			'alamat_door',
			'lat_door',
			'long_door',
			'user_id'
		]);

		// $input['user_id'] = -1;

		// dd($input);
		$client = new Client(); //GuzzleHttp\Client
		$result = $client->post('103.200.4.20:10001/orders/joinOrder', [
			'Content-Type' => 'application/x-www-form-urlencoded',
			'Token' => 'ada di sini',
		    'form_params' => $input,
		]);

		return view('apps.invoice')->with([
			'response' => json_decode($result->getBody()->getContents()),
		]);
	}

	public function create(Request $request){
		$input = $request->only([
			// 'order_id',
			'route_id',
			'car_package_id',
			// 'price_user_add',
			'price_user_total',
			'pools_from_id',
			'pools_to_id',
			'harga_awal',
			'harga_akhir',
			'harga_tambahan',
			'alamat_awal',
			'alamat_akhir',
			'alamat_door',
			'lat_door',
			'long_door',
			'lat_akhir',
			'long_akhir',
			'lat_awal',
			'long_awal',
			'distance',
			'duration',
			'number_of_shared',
			'user_id'
		]);
		// dd($input);
		// $input['user_id'] = 3;
		$client = new Client(); //GuzzleHttp\Client
		$result = $client->post('103.200.4.20:10001/orders/create', [
			'Content-Type' => 'application/x-www-form-urlencoded',
			'Token' => 'ada di sini',
		    'form_params' => $input,
		]);
		return view('apps.invoice')->with([
			'response' => json_decode($result->getBody()->getContents()),
		]);
	}
}