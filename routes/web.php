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

//TIME ON DISTANCE CALCULATION:
Route::get('distance', 'TimeOnDistanceController@create')->name('tod');
Route::post('distance', 'TimeOnDistanceController@store')->name('tod');
//TIME ON TIME CALCULATION:
Route::get('time', 'TimeOnTimeController@create')->name('tot');
Route::post('time', 'TimeOnTimeController@store')->name('tot');
// WEATHER:
Route::get('weather', 'WeatherController@create')->name('weather');
Route::post('weather', 'WeatherController@show')->name('weather');

// SCORING:
Route::get('scores', 'PhrfScoreController@index')->name('scores');

