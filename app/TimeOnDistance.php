<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeOnDistance extends Model implements Phrf
{
    // protected $fillable = ['distance', 'rating', 'time_elapsed', 'corrected_time'];
    
    public $elapsed_time;
    public $distance;
    public $rating;

    public function corrected_time() {
      $distance = $this->distance;
      $handicap = $this->rating;
      $time = $this->elapsed_time;

      return $corrected_time = round($time - ($handicap * $distance), 2);

    }
}
