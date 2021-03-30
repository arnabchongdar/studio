<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'PagesController@index');
Auth::routes();

Route::get('/customerhome', 'HomeController@customerHome');
Route::get('admin/adminHome', 'HomeController@adminHome');

Route::get('studio/studio', 'HomeController@studioHome');



Route::get('package', 'packageController@package');
Route::get('admin/package', 'packageController@package');
Route::get('admin/create', 'packageController@create');

Route::get('admin/edit', 'packageController@edit');
/*Route::POST('admin/store', 'packageController@store');
Route::get('package/edit', 'packageController@edit');
Route::POST('package/destroy', 'packageController@destroy');*/
Route::resource('packages', 'packageController');
Route::resource('cart', 'cartController');
Route::POST('addtocart{product_id}', 'cartController@addtocart');
Route::POST('quantityUpdate{product_id}', 'cartController@quantityUpdate');
Route::get('cartPage', 'cartController@cartPage');
//Route::resource('cart', 'cartController@destroy');
//Route::POST('update', 'cartController@update');

Route::get('checkout','instamojo@checkout');
Route::POST('createRequest','instamojo@createRequest');

Route::get('billing','billingController@store');
Route::get('profile','HomeController@index');
Route::resource('studio', 'HomeController');
Route::get('studioCreate','HomeController@create');
Route::resource('order', 'orderController');
Route::get('orders','orderController@index');
Route::POST('paymentUpdate{product_id}', 'orderController@update');
Route::POST('studioUpdate{product_id}', 'studio_id@Update');
Route::get('customerprofile','HomeController@customerindex');
Route::get('customeredit','HomeController@customeredit');
Route::get('studioOrders','ordersShow@index');
Route::get('customerOrders','ordersShow@customerorderindex');






