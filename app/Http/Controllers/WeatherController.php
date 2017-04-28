<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\WeatherApiCallEvent;

class WeatherController extends Controller
{
    public function create () {
      return view('weather.create');
    }

    public function show (Request $request) {
      $zip = $request->input('zip');

      $weather = file_get_contents("http://api.openweathermap.org/data/2.5/weather?zip=" . $zip . ",us&units=imperial&appid=" . env('WEATHER_API_ID'));

      event(new WeatherApiCallEvent($this));

      $conditions= json_decode($weather);

      $temp = $conditions->main->temp;
      $humidity = $conditions->main->humidity;
      $wind_speed = $conditions->wind->speed;

      return view('weather.show', ['temp' => $temp, 'humidity' => $humidity, 'wind_speed' => $wind_speed]);

    }

}
