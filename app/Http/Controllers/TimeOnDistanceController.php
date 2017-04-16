<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TimeOnDistance;

class TimeOnDistanceController extends Controller
{


  public function create() {
    return view('TimeOnDistance.create');
  }

  public function store () {
    $tod = new TimeOnDistance;

    $tod->rating = Request::get('rating');
    $tod->distance = Request::get('distance');
    $tod->elapsed_time = Request::get('elapsed_time');

    $this->$corrected_time = $tod->corrected_time();

    return view();

  }


}
