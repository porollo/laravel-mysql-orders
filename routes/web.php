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

Route::get('/', 'WeatherController@index');
Route::get('/orders', 'OrdersController@index');
Route::get('/orders-edit', 'OrdersEditController@index');
Route::get('edit/{id}','OrdersEditController@show');
Route::post('edit/{id}','OrdersEditController@edit');
Route::get('/products', 'ProductsController@index');

Auth::routes();



