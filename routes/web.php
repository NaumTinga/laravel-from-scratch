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


Route::get('/', 'App\Http\Controllers\MainController@index')->name('main');

Route::get('products', 'App\Http\Controllers\ProductsController@index')->name('products.index');

Route::get('products/create', 'App\Http\Controllers\ProductsController@create')->name('products.create');

Route::post('products', 'App\Http\Controllers\ProductsController@store')->name('products.store');

Route::get('products/{product}', 'App\Http\Controllers\ProductsController@show')->name('products.show');

Route::get('products/{product}/edit', 'App\Http\Controllers\ProductsController@edit')->name('products.edit');

Route::match(['put', 'patch'], 'products/{product}', 'App\Http\Controllers\ProductsController@update')->name('products.update');

Route::delete('products/{product}', 'App\Http\Controllers\ProductsController@destroy')->name('products.destroy');