<?php

	/*
	|--------------------------------------------------------------------------
	| Web Routes
	|--------------------------------------------------------------------------
	|
	| Here is where you can register web routes for your application. These
	| routes are loaded by the RouteServiceProvider within a group which
	| contains the "web" middleware group. Now create something great!
	|
	*/

	Route::get('/', 'HomeController@index')->name('home');

	Route::get('/servicios','HomeController@services')->name('servicios-cliente');

	Route::get('/about', 'HomeController@about')->name('about');

	Auth::routes();

	require __DIR__ . '/modules/admin.php';

	Route::get('/userlist', 'HomeController@userlist')->name('userlist');

	Route::fallback(function () {
		return view('error');
	});


	Route::get('/payment', function () {
		return view('auth.payment');
	});
	// Esto es una ruta que tiene la funcion name esta
	// es una funcion le pone nombre a la vista

	Route::get('/shopping-cart', function () {
		return view('auth.shoppingcart');
	});

	Route::get('/report', function () {
		return view('auth.report');
	});

	Route::get('/item-list', function () {
		return route('auth.item-list');
	});
    
    

