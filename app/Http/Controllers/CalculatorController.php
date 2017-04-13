<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class CalculatorController extends Controller
{
    public function create() {
      return View::make('calculator');
    }
}
