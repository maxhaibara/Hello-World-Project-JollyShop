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

Route::get('', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('account', 'AccountController@index');
Route::get('account/balance', 'AccountController@balance');
Route::post('account', 'AccountController@update');

Route::get('items','ItemController@index');
Route::get('items/add', 'ItemController@create');
Route::get('items/{id}','ItemController@show');
Route::post('items','ItemController@store');
Route::delete('items/{id}','ItemController@destroy');

Route::get('topup', function() {
	return view('welcome');
});