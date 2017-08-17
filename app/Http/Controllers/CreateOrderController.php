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
		// $client = new Client(); //GuzzleHttp\Client
		// $result = $client->post('103.200.4.20:10001/orders/joinOrder', [
		// 	'Content-Type' => 'application/x-www-form-urlencoded',
		// 	'Token' => 'ada di sini',
		//     'form_params' => $input,
		// ]);

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_PORT => "10001",
		  CURLOPT_URL => "http://103.200.4.20:10001/orders/joinOrder",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => http_build_query($input),
		  CURLOPT_HTTPHEADER => array(
		    "cache-control: no-cache",
		    "content-type: application/x-www-form-urlencoded",
		    // "postman-token: dd08e83f-2a76-bd84-09a8-30bbe834f02d",
		    "token: ada disini"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  echo $response;
		}

		return view('apps.invoice')->with([
			'response' => json_decode($response),
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
		// $client = new Client(); //GuzzleHttp\Client
		// // dd($input);
		// $result = $client->request('POST','http://103.200.4.20:10001/orders/create', [
		// 	'headers' => [
		// 		'User-Agent' => '',
		// 		'Content-Type' => 'application/x-www-form-urlencoded',
		// 		'Token' => 'ada di sini'
		// 	],
		//     'form_params' => $input,
		//     'debug' => true,
		// ]);
		$input['price_user_total'] = ($input['price_user_total'] == "NaN") ? '0' : $input['price_user_total'];
		// dd($input);
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_PORT => "10001",
		  CURLOPT_URL => "http://103.200.4.20:10001/orders/create",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => http_build_query($input),
		  CURLOPT_HTTPHEADER => array(
		    "cache-control: no-cache",
		    "content-type: application/x-www-form-urlencoded",
		    // "postman-token: dd08e83f-2a76-bd84-09a8-30bbe834f02d",
		    "token: ada disini"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  echo $response;
		}
		$response = json_decode($response);
		if ($response->status == -2) {
			return redirect(url('error'));
		}
		return view('apps.invoice')->with([
			'response' => $response,
		]);
	}
}