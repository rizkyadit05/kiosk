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

//Front End Purposes

Route::get('home', function(){
	return view('apps/home');
});

Route::get('/order/{latitude}/{longitude}/{title}/{address}/{ride_flag}', 'MainController@index');

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