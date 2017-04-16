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

Route::get('distance', 'TimeOnDistanceController@create')->name('tod');
Route::post('distance', 'TimeOnDistanceController@store')->name('tod');

Route::get('time', 'TimeOnTimeController@create')->name('tot');
Route::post('time', 'TimeOnTimeController@create')->name('tot');