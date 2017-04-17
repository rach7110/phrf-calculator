<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function create () {
      return view('weather.create');
    }

    public function show (Request $request) {
      $zip = $request->input('zip');

      $weather_string = file_get_contents("http://api.openweathermap.org/data/2.5/weather?zip=" . $zip . ",us&units=imperial&appid=b28a4ed98cc99bf9618c6e8349ac831d");

      $conditions= json_decode($weather_string);

      $temp = $conditions->main->temp;
      $humidity = $conditions->main->humidity;
      $wind_speed = $conditions->wind->speed;

      return view('weather.show', ['temp' => $temp, 'humidity' => $humidity, 'wind_speed' => $wind_speed]);

    }

}
