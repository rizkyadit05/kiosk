<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'MainController@home');

Route::post('order', 'MainController@order');
Route::post('post-order', 'MainController@post_order');
Route::post('post-av-trip', 'MainController@post_av_trip');
Route::post('post-new-trip', 'MainController@post_new_trip');
Route::post('post-inv-ok', 'MainController@post_inv_ok');
// Route::post('post-inv-cancel', 'MainController@post_inv_cancel');

//Front End Purposes

// Route::get('/order/{latitude}/{longitude}/{title}/{address}/{ride_flag}', 'MainController@index');

// Route::get('order', function(){
// 	return view('apps/order-trip');
// });

Route::get('trip-preferences', function(){
	return view('apps/trip-preferences');
});

Route::get('trip-preferences-detail', function(){
	return view('apps/trip-preferences-detail');
});

Route::get('invoice', function(){
	return view('apps/invoice');
});