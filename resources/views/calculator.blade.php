@extends('layouts.app')

@section('title')
  Get Started
@endsection

@section('content')
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Time on Distance</h3>
    </div>
    <div class="panel-body">
      Description
    </div>
    <ul class="list-group">
      <li class="list-group-item">Calculator
        <form>
          <div class="control-group">
            <label for="distance">Distance</label>
            <input type="text" id="distance" class="form-control" name="distance">
            miles
          </div>
          <div class="control-group">
            <label for="rating">Rating</label>
            <input type="text" id="rating" class="form-control" name="rating">
          </div>

        </form>
      </li>
    </ul>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Time on Time</h3>
    </div>
    <div class="panel-body">
      Panel content
    </div>
  </div>

@endsection