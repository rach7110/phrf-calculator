<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeOnTime extends Model implements Phrf
{
    protected $a_factor;
    protected $b_factor;

    public function __construct($a_factor, $b_factor){
      $this->a_factor = $a_factor;
      $this->b_factor = $b_factor;
    }

    public function setAFactor($a_factor) {
      $this->a_factor = $a_factor;
    }
    public function getAFactor() {
      return $this->a_factor;
    }
    public function setBFactor($b_factor) {
      $this->b_factor = $b_factor;

    }
    public function getBFactor() {
      return $this->b_factor;
    }

    public function corrected_time() {
      $tcf = $this->a_factor / ($this->b_factor + $this->handicap);
      $corrected_time = round($this->elapsed_time * $tcf, 2);

      $this->setCorrectedTime($corrected_time);
    }
}
