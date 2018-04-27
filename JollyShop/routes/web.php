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

Route::get('account/', 'AccountController@show');

Route::get('items',function() {
	return redirect('items/view');
});
Route::get('items/view','ItemController@index');
Route::get('items/add', 'ItemController@create');
Route::post('items/view','ItemController@store');

Route::get('topup', function() {
	return view('welcome');
});