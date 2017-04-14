<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeOnDistance extends Model
{
    protected $distance;
    
    public function __construct($distance){
      $this->distance = $distance;
    }

    public function setDistance($distance) {
      if($distance <= 0 ) {
        throw new Exception("Error Processing Request due to negative argument", 1);
      }

      $this->distance = $distance;
    }

    public function getDistance() {
      return $this->distance;
    }

    public function corrected_time() {
      $time = $this->elapsed_time;
      $handicap = $this->handicap;
      $distance = $this->distance;

      $corrected_time = round($time - ($handicap * $distance), 2);

      $this->setCorrectedTime($corrected_time);
    }
}
