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

Route::get('/home', 'HomeController@index');
Route::get('admin/adminHome', 'HomeController@adminHome');

Route::get('studio/studio', 'HomeController@studioHome');


Route::get('package', 'packageController@package');
Route::get('admin/package', 'packageController@package');
Route::get('admin/create', 'packageController@create');
/*Route::POST('admin/store', 'packageController@store');
Route::get('package/edit', 'packageController@edit');
Route::POST('package/destroy', 'packageController@destroy');*/
Route::resource('packages', 'packageController');
Route::resource('cart', 'cartController');


