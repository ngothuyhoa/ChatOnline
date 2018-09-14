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

Route::get("home", function(){
	return view ("home.home_page.home");
	})->name('home');

Route::group(['prefix'=>'home'],function(){
	Route::get('sign_up',function(){
		return view('home.login.sign_up');
	});
	Route::get('sign_in',function(){
		return view('home.login.sign_in');
	});

	Route::group(['prefix'=>'women'],function(){
		Route::get('list','mencontroller@getlist');
		
	});
});

Route::get("admin", function(){
	return view ("admin.dashboard.content");
	})->name('admin');

Route::group(['prefix'=>'admin'],function(){
	Route::get('sign_in',function(){
		return view('admin.login.sign_in');
	});

	Route::group(['prefix'=>'table'],function(){
		Route::get('user',function(){
			return view('admin.table.user.list');
		});
		Route::get('product',function(){
			return view('admin.table.product.list');
		});
	});
});



