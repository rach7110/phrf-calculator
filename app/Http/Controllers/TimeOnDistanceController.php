<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TimeOnDistance;

class TimeOnDistanceController extends Controller
{


  public function create() {
    return view('TimeOnDistance.create');
  }

  public function store (Request $request) {
    $tod = new TimeOnDistance;

    $tod->rating = intval($request->input('rating'));
    $tod->distance = intval($request->input('distance'));
    $tod->elapsed_time = intval($request->input('total_seconds'));

    $tod->corrected_time = $tod->corrected_time();

    return view('TimeOnDistance.show', ['tod' => $tod]);

  }


}
