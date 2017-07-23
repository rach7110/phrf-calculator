<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeOnTime extends Model implements Phrf
{
  public $elapsed_time;
  public $a_factor;
  public $b_factor;
  public $rating;

    public function corrected_time() {
      $tcf = $this->a_factor / ($this->b_factor + $this->rating);
      $corrected_time = round($this->elapsed_time * $tcf, 2);

      return $corrected_time;
    }
}
