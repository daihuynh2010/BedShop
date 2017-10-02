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

Route::get('/', function () {
    return view('welcome');
});

//Route guest
Route::prefix('guest')->group(function() {
    Route::get('/', function() {
    	return view('guest.home');
	})->name('guest_home_route');

	Route::get('login', function(){
		return view('guest.login');
	})->name('guest_login_route');

	Route::get('register', function(){
		return view('guest.register');
	})->name('guest_register_route');

	Route::get('detail', function(){
		return view('guest.detail_sp');
	})->name('guest_detail_sp_route');
});

//Route user
Route::prefix('user')->group(function(){
	Route::get('/', function() {
    	return view('user.home');
	})->name('user_home_route');
	Route::get('detail', function(){
		return view('user.detail_sp');
	})->name('user_detail_sp_route');
});