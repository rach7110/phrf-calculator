@extends('layouts.app')

@section('title')
@endsection

@section('content')

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Time on Distance Handicap</h3>
    </div>
    <div class="panel-body">
      <h5>Description</h5>
      <p>
      The vast majority of handicap racing in North America is scored by the Time on Distance (TOD) method. A fixed time allowance, based on the length of the course, is used to compute the corrected time. And advantage of TOD is it is simple and you can tell exactly where you stand at any point in the race.
      </p>

      <!-- ELAPSED TIME -->
      @include('layouts.elapsed_time_calculator')

      <!-- TIME OF DISTANCE CALCULATOR: -->
      <hr>
      <h5 id="time-header">STEP 2:</h5>
      <h5>Calculate Corrected Time</h5>
      <form class="form-horizontal" action="{{route('tod')}}" method="post">
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

        <!-- DISTANCE -->
        <div class="form-group calc">
          <label class="col-sm-2 control-label" for="distance">Distance</label>
          <!-- <div class="col-sm-3"> -->
            <input type="number" id="distance" class="form-control " name="distance" placeholder="9.5" min=0 required>
            <span class="units offset">miles</span>
          <!-- </div> -->
        </div>
        <!-- RATING -->
        <div class="form-group calc">
          <label class="col-sm-2 control-label" for="rating">Rating</label>
          <!-- <div class="col-sm-3"> -->
            <input type="number" id="rating" class="form-control" name="rating" placeholder="108" required>
          <!-- </div> -->
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