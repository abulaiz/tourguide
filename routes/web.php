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


Auth::routes();

Route::get('/', function(){

	if(Auth::check()){
		if(Auth::user()->hasRole('admin')){
			return View('contents.admin.index');
		}
	}
	return View('contents.index');
});

Route::get('/destination', function() {
	return View('contents.destinations');
});

Route::get('/signup', function() {
	return View('contents.signup');
});


Route::post('/signup', 'Auth\CustomLoginController@custom_signup')->name('signup');

Route::get('/gift-shop', function() {
	return View('contents.giftshop');
});

Route::get('/apply-tour-guide', function() {
	return View('contents.applytourguide');
});

Route::get('/find-guide', function() {
	return View('contents.findguide');
});

Route::get('/guide-detail/{id}', function() {
	return View('contents.guidedetail');
});

Route::get('/destination-detail/{id}', function() {
	return View('contents.destinationdetail');
});
