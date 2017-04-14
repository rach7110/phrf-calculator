<?php

  abstract class PhrfHandicap {
    protected $handicap;
    protected $elapsed_time;
    protected $corrected_time;

    public function setElapsedTime($time) {
      if($time <= 0 ) {
        throw new Exception("Error Processing Request due to negative argument", 1);
      }

      $this->elapsed_time = $time;
    }

    public function getElapsedTime() {
      return $this->elapsed_time;
    }

    public function setHandicap($handicap) {
      $this->handicap = $handicap;
    }

    public function getHandicap() {
      return $this->handicap;
    }

    public function setCorrectedTime($corrected_time){
      $this->corrected_time = $corrected_time;
    }

    public function getCorrectedTime() {
      return $this->corrected_time;
    }
    
    abstract protected function corrected_time();

  }