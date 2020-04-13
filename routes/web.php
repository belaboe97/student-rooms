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
Auth::routes();
Route::get('/', 'owner@index');
Route::get('ownerview', 'owner@ownerview');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Auth::routes(['verify' => true]);

Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->middleware('verified');