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
   	Route::get('/',  function(){
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

	Route::get('forgot-pass', function(){
		return view('guest.forgot_pass');
	})->name('guest_forgot_pass_route');
});

//Route user
Route::prefix('user')->group(function(){
	Route::get('/', function() {
    	return view('user.home');
	})->name('user_home_route');

	Route::get('detail', function(){
		return view('user.detail_sp');
	})->name('user_detail_sp_route');

	Route::get('buy', function(){
		return view('user.buy_sp');
	})->name('user_buy_sp_route');

	Route::get('info', function(){
		return view('user.information');
	})->name('user_info_route');

	Route::get('list-order', function(){
		return view('user.list_order');
	})->name('user_list_order_route');

	Route::get('list-like', function(){
		return view('user.list_like');
	})->name('user_list_like_route');
	
	Route::get('list-comment', function(){
		return view('user.list_comment');
	})->name('user_list_comment_route');

	Route::get('change-pass', function(){
		return view('user.change_password');
	})->name('user_change_pass_route');

	Route::get('change-info', function(){
		return view('user.change_info');
	})->name('user_change_info_route');

	Route::get('follow-order', function(){
		return view('user.follow_order');
	})->name('user_follow_order_route');
});

//Route Admin
Route::prefix('admin')->group(function(){
	Route::get('/', function(){
		return view('admin.home');
	})->name('admin_home');
});
//Route Manage
Route::prefix('manage')->group(function(){
	Route::get('/', function(){
		return view('manage.new_order');
	})->name('manage_new_order');

	Route::get('pay-order', function(){
		return view('manage.pay_order');
	})->name('manage_pay_order');

	Route::get('statistical-order', function(){
		return view('manage.statistical_order');
	})->name('manage_statistical_order');

	Route::get('product', function(){
		return view('manage.list_product');
	})->name('manage_list_product');

	Route::get('add-product', function(){
		return view('manage.add_product');
	})->name('manage_add_product');
});