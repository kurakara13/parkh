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
    return redirect('home');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/cars', 'AdminController@cars_list')->name('admin.cars');
    Route::get('/cars/add', 'AdminController@cars_add')->name('admin.cars_add');
    Route::post('/cars/add', 'AdminController@cars_add_post')->name('admin.cars_add_post');
    Route::get('/orders', 'AdminController@order_list')->name('admin.order_list');
    Route::get('/places', 'AdminController@place_list')->name('admin.place_list');
    Route::get('/places/add', 'AdminController@place_add')->name('admin.place_add');
    Route::post('/places/add', 'AdminController@place_add_post')->name('admin.place_add');

  });

Auth::routes();

Route::prefix('member')->group(function() {
    Route::get('/login', 'Auth\ClientLoginController@showLoginForm')->name('member.login');
    Route::post('/login', 'Auth\ClientLoginController@login')->name('member.login.submit');
    Route::get('/', 'MemberController@home')->name('member.dashboard');
    Route::get('/home', 'MemberController@home')->name('member.dashboard');
    Route::get('/dashboard', 'MemberController@dashboard')->name('member.dashboard');
    Route::get('/cars', 'MemberController@cars')->name('cars');
    Route::get('/cars/add', 'MemberController@cars_add')->name('cars_add');
    Route::get('/orders', 'MemberController@orders')->name('orders');
    Route::get('/place', 'MemberController@place')->name('place');
    Route::get('/place/add', 'MemberController@place_add')->name('place_add');
    Route::post('/place/add', 'MemberController@place_add_action')->name('place_add_action');
  });
