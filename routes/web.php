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

Route::get('/', 'LandingPageController@index');

Route::get('/shop', 'ShopController@index')->name('shop.index');

Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

Route::get('/cart', 'CartController@index')->name('cart.index');

Route::post('/cart', 'CartController@store')->name('cart.store');


Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');


Route::get('/payment/callback', 'PaymentController@index')->name('pay');

Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');


Route::get('/category', 'CategoryController@index')->name('category');



Route::get('/send/email', 'MailController@mail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
