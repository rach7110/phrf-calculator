<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeOnTimeController extends Controller
{
  public function create () {
    return view('TimeOnTime.create');
  }

  public function store () {
  }
}
