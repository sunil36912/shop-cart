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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cart/{product_id}', [

'uses'=>'CartController@addProductToCart',
'as' =>'cart.add'

]);
Route::get('cartitem', [

'uses'=>'CartController@ProductInCart',
'as' =>'cart.getcart'

]);
Route::resource('/product', 'ProductController');

