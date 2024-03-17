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
Route::get('/products', 'App\Http\Controllers\ProductController@index');
Route::get('/products/{id}/buy', 'App\Http\Controllers\ProductController@buy')->name('products.buy');
Route::post('/checkout/process', 'App\Http\Controllers\CheckoutController@process')->name('checkout.process');
Route::get('/success', function () { return view('success'); })->name('success');
