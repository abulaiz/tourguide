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
	return View('contents.index');
})->name('landing_page');

Route::get('/destination', function() {
	return View('contents.destinations');
});

Route::get('/signup', function() {
	return View('contents.signup');
});

Route::post('/signup', 'Auth\CustomLoginController@custom_signup')->name('signup');
