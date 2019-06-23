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

Route::get('/', 'ShopController@index')->name('index');
Route::post('addproducts','ShopController@addproducts')->name('addproducts');
Route::get('result','ShopController@search')->name('result');
Route::get('products/{id}', 'ShopController@find')->name('find');

Route::get('comments', 'CommentsController@index');
