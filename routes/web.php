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

Route::get('/index/{category_id?}', 'Admin\ShopController@index')->name('index.show');
Route::get('/fish', 'Admin\ShopController@fish');
Route::get('/articles', 'Admin\ShopController@articles');
Route::get('/layouts', 'Admin\ShopController@layouts');

Route::get('/', 'Admin\ShopController@category');

Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/mycart','Admin\ShopController@myCart');
    Route::post('/mycart', 'Admin\ShopController@addMycart');
    Route::post('/cartdelete','Admin\ShopController@deleteCart');
    Route::post('/checkout', 'Admin\ShopController@checkout');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
