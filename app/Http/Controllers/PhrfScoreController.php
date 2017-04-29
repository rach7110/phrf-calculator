<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhrfScoreController extends Controller
{
    public function index() 
    {
      return view('PhrfScore.index');
    }
}
