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
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'HomeController@index');

Auth::routes(['verify' => true]);


Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('home', 'roomsController@showRooms')->middleware('verified');
Route::get('/roomratings/rateroom/{room}','roomratingController@rateroom')->name('roomratings.rateroom');
Route::get('/roomratings/room/{court}','roomratingController@showroomratings')->name('roomratings.showroomratings');


Route::resource('rooms', 'roomsController')->middleware('verified');


Route::resource('owners', 'ownersController');

Route::resource('users', 'usersController');

Route::resource('roomratings', 'roomratingController');