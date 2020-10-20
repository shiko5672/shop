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

Route::get(' /index.html','App\Http\Controllers\ShopController@home');
Route::get(' /shop.html', 'App\Http\Controllers\ShopController@shop');
Route::get(' /blog.html', 'App\Http\Controllers\ShopController@blog');
Route::get(' /contact.html', 'App\Http\Controllers\ShopController@contact');
Route::get(' /about.html', 'App\Http\Controllers\ShopController@about');
Route::get(' /checkout.html', 'App\Http\Controllers\ShopController@checkout');
Route::get(' /shop-details.html', 'App\Http\Controllers\ShopController@details');
Route::get(' /shopping-cart.html', 'App\Http\Controllers\ShopController@cart');


Route::get(' /sign-up', 'App\Http\Controllers\ShopController@signup');
Route::post(' /users.signup', 'App\Http\Controllers\CrudController@store')->name('users.signup');



Route::get(' /login.html', 'App\Http\Controllers\ShopController@login');
Route::post('/users.login','App\Http\Controllers\CrudController@check')->name('users.login');
