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
//Route Angular API
Route::prefix('angular')->group(function() {
	Route::get('list-sanpham', 'SanPhamController@getList' );
	Route::get('list-loai_sp', 'LoaiSP_Controller@getList' );
	Route::get('list-sanpham-by-loai/{loai}', 'SanPhamController@getSPByLoai' );
	Route::get('detail-sanpham/{id}', 'SanPhamController@detailSP' );
	Route::post('binh-luan','SanPhamController@binhluanSP');
	Route::post('danh-gia','SanPhamController@danhgiaSP');
	Route::post('thichsp','SanPhamController@thichSP');
	Route::post('register-user','UserController@register');
	Route::post('login-user','UserController@login');
	Route::get('hoa-don/{user}', 'HoaDonController@getList' );
	Route::post('hoa-don', 'HoaDonController@addHoaDon' );
	Route::post('thanh-toan', 'HoaDonController@ThanhtoanHoaDon' );
	Route::post('remove-hoadon','HoaDonController@removeSPinHoaDon');
	Route::get('info-user/{user}','UserController@getUser');
	Route::post('update-info/{user}','UserController@update');
	Route::post('change-pass/{user}','UserController@change_pass');
	Route::post('password/email','Auth\ForgotPasswordController@sendResetLinkEmail');
	Route::post('password/reset', 'UserController@resetPass');
	Route::get('user-list','UserController@getList');
	Route::get('delete-user/{user}','UserController@deleteUser');
	Route::get('hodon-danhsach-moi','HoaDonController@getListNew');
	Route::get('hoadon-get/{id}','HoaDonController@getHoaDon');
	Route::get('hoadon-xacnhan/{id}','HoaDonController@confirmHoaDon');
	Route::get('hoadon-xoa/{id}','HoaDonController@deleteHoaDon');
	Route::get('hoadon-danhsach-dangchuyen','HoaDonController@getListDangChuyen');
	Route::get('hoadon-thanhtoan/{id}','HoaDonController@ketthucHoaDon');
	Route::get('hoadon-list-all','HoaDonController@getListAll');
	Route::get('delete-sanpham/{id}','SanPhamController@deleteSP');
	Route::post('add-sanpham','SanPhamController@themSP');
	Route::post('edit-sanpham/{id}','SanPhamController@editSP');	
	Route::post('add-list-sanpham','SanPhamController@AddList')->name('post_list_sanpham');	
	Route::post('submit-list-sanpham','SanPhamController@postSubmitsanphamList')->name('submit_list_sanpham');	
});
//Route guest
Route::prefix('guest')->group(function() {
   	Route::get('/',  'SanPhamController@getListGuest')->name('guest_home_route');

	Route::get('search/{loai}',  'SanPhamController@getSPByLoaiGuest')->name('guest_home_search_route');

	Route::get('detail/{id}', 'SanPhamController@detailSPGuest')->name('guest_detail_sp_route');

	Route::get('forgot-password', function(){
		return view('guest.password.forgot_pass');
	})->name('guest_forgot_pass_route');

	Route::get('reset-password/{token}',function(){
		return view('guest.password.reset');
	})->name('guest_reset_pass_route');
});

Route::get('login', function(){
	return view('guest.login');
})->name('guest_login_route');
Route::get('logout','UserController@logout')->name('logout');
Route::get('register', function(){
	return view('guest.register');
})->name('guest_register_route');
Route::get('redirect/{social}', 'FacebookController@redirect')->name('login_facebook');
Route::get('callback/{social}', 'FacebookController@callback');


Route::group(['middleware' => 'user'], function(){
		//Route user
		Route::prefix('user')->group(function(){
			Route::get('/', 'SanPhamController@getListUser')->name('user_home_route');

			Route::get('detail/{id}', 'SanPhamController@detailSPUser')->name('user_detail_sp_route');

			Route::get('search/{loai}',  'SanPhamController@getSPByLoaiUser')->name('user_home_search_route');

			Route::get('buy', function(){
				return view('user.buy_sp');
			})->name('user_buy_sp_route');

			Route::get('info', function(){
				return view('user.infomations.information');
			})->name('user_info_route');

			Route::get('list-order', function(){
				return view('user.infomations.list_order');
			})->name('user_list_order_route');

			Route::get('list-like', function(){
				return view('user.infomations.list_like');
			})->name('user_list_like_route');
			
			Route::get('list-comment', function(){
				return view('user.infomations.list_comment');
			})->name('user_list_comment_route');

			Route::get('change-pass', function(){
				return view('user.infomations.change_password');
			})->name('user_change_pass_route');

			Route::get('change-info', function(){
				return view('user.infomations.change_info');
			})->name('user_change_info_route');

			Route::get('follow-order', function(){
				return view('user.infomations.follow_order');
			})->name('user_follow_order_route');

			Route::get('logout', 'Auth\LoginController@logout')->name('logout');
		});
});

Route::group(['middleware' => 'manager'], function(){
	//Route Manage
	Route::prefix('manage')->group(function(){
		Route::get('/', 'HoaDonController@getListNew')->name('manage_new_order');

		Route::get('pay-order', 'HoaDonController@getListDangChuyen')->name('manage_pay_order');

		Route::get('statistical-order', 'HoaDonController@getListAll')->name('manage_statistical_order');

		Route::get('product', 'SanPhamController@getListManage')->name('manage_list_product');

		Route::get('add-product', function(){
			return view('manage.add_product');
		})->name('manage_add_product');

		Route::get('add-list-product', function(){
			return view('manage.add_list_product');
		})->name('manage_add_list_product');

		Route::get('edit-product',function(){
			return view('manage.edit_product');
		})->name('manage_edit_product');

		Route::get('export-sanpham','SanPhamController@exportList')->name('export_list_sp');
		Route::get('export-hoadon','HoaDonController@exportList')->name('export_list_hoadon');
	});
	//export excel
	
});

Route::group(['middleware' => 'admin'], function(){
	//Route Admin
	Route::prefix('admin')->group(function(){
		Route::get('/', 'UserController@getListuser');
		// Route::get('/admin', 'UserController@getListuser');
	});
});