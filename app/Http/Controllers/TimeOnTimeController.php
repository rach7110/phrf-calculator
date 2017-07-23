<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TimeOnTime as TOT;

class TimeOnTimeController extends Controller
{
    public function create () 
    {
        return view('TimeOnTime.create');
    }   

    public function store (Request $request) 
    {
        $tot = new TOT;
        $tot->elapsed_time = intval($request->input('total_seconds'));
        $tot->a_factor = intval($request->input('a-factor'));
        $tot->b_factor = intval($request->input('b-factor'));
        $tot->rating = intval($request->input('rating'));

        $corrected_time = $tot->corrected_time();

        $elapsed_time_formatted = gmdate("H:i:s", $tot->elapsed_time);
        $corrected_time_formatted = gmdate("H:i:s", $corrected_time);

        return view('TimeOnTime.show', [
            'tot' => $tot, 
            'corrected_time' => $corrected_time, 
            'corrected_formatted' => $corrected_time_formatted, 
            'elapsed_formatted' => $elapsed_time_formatted
            ]);
    }
}
