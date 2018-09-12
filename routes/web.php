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
Route::get('/parking', 'HomeController@parking')->name('parking');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/cars', 'AdminController@cars_list')->name('admin.cars');
    Route::get('/cars/add', 'AdminController@cars_add')->name('admin.cars_add');
    Route::post('/cars/add', 'AdminController@cars_add_post')->name('admin.cars_add_post');
    Route::get('/orders', 'AdminController@order_list')->name('admin.order_list');
    Route::get('/places', 'AdminController@places_list')->name('admin.places_list');
    Route::get('/places/add', 'AdminController@places_add')->name('admin.places_add');
    Route::post('/places/add', 'AdminController@places_add_post')->name('admin.places_add');

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
    Route::get('/places', 'MemberController@places')->name('places');
    Route::get('/places/add', 'MemberController@places_add')->name('places_add');
    Route::post('/places/add', 'MemberController@places_add_action')->name('places_add_action');
  });


Route::group(['prefix' => 'api',  'middleware' => 'api.token'], function()  {
    Route::get('place/list', 'ApiAccessController@places_list')->name('api.place.list');
    Route::get('cars/list', 'ApiAccessController@cars_list')->name('api.cars.list');
  });
