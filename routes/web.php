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

Route::get('/', 'owner@index');
Route::get('ownerview', 'owner@ownerview');



Auth::routes(['verify' => true]);


Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'roomsController@showRooms')->middleware('verified');
Route::get('/student-rooms', 'roomsController@showRooms');
Route::resource('rooms', 'roomsController');
Route::resource('tasks', 'TaskController');
Route::get('roomrep','roomsController@index');
Route::get('/apirooms','roomsController@api');
Route::get('rooms',function(){
    return App\room::all();});