@extends('layouts.app')

@section('content')

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Time on Time Handicap</h3>
    </div>
    <div class="panel-body">
      <h5>Description</h5>
      <p>
      In Europe, the Time on Time (TOT) scoring method is popular. The time allowance for a given race depends on the time of the race. The reasoning being that smaller boats are at a disadvantage if the race is a slow race and the time allowance doesn't change to account for the conditions of the race. This TOT method is only slightly harder to understand than TOD as the allowance at any point in the race can be affected by a change of conditions later in the race.
      </p>

      <p>
      Over the past few years, a number of PHRF fleets have started using TOT scoring. It has been found to help some when there is a very large handicap spread in a class, or if the race conditions are "abnormal". The following is a TOT conversation formula that is commonly used to convert PHRF TOD handicap into a TOT Time Correction Factor (TCF). 
      </p>

      <pre>
      TCF = A / (B + PHRF rating)
      </pre>
      <p>
      To get the corrected time, multiply the elapsed time by the TCF.
      </p>


      <!-- ELAPSED TIME -->
      @include('layouts.elapsed_time_calculator')

      <hr>
      <!-- TIME OF TIME CALCULATOR: -->
      <h5 id="time-header">STEP 2:</h5>
      <h5>Calculate Corrected Time</h5>
      <form class="form-horizontal" action="{{route('tot')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <!-- TIME -->
        <div class="form-group time">
          <label class="col-sm-2 control-label">Elapsed Time</label>
          <input type="text" class="form-control" name="hours" placeholder="00" disabled>:
          <input type="text" class="form-control" name="minutes" placeholder="00" disabled>:
          <input type="text" class="form-control" name="seconds" placeholder="00" disabled="">
          <span class="units offset">hh:mm:ss</span>
        </div>

        <input type=number id="total_seconds" name="total_seconds" hidden >

        <div class="form-group calc">
            <label class="col-sm-2 control-label" for="a-factor">A Factor</label>
            <input type="text" id="a-factor" class="form-control " name="a-factor" placeholder="A Factor" required>
        </div>

          <div class="form-group calc">
            <label class="col-sm-2 control-label" for="b-factor">B Factor</label>
            <input type="text" id="b-factor" class="form-control" name="b-factor" placeholder="B Factor" required>
          </div>

        <!-- RATING -->
        <div class="form-group calc">
          <label class="col-sm-2 control-label" for="rating">Rating</label>
            <input type="number" id="rating" class="form-control" name="rating" placeholder="108" required>
        </div>

        <div class="form-group">
          <div class="col-sm-2 col-sm-offset-2">
            <button type="submit" class="btn btn-primary">Calculate</button>
          </div>
        </div>

      </form>      

    </div>
  </div>

@endsection