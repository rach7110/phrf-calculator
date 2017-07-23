@extends('layouts.app')

@section('content')
  <h4>Time on Time Handicap</h4>
  <h4>Corrected Time</h4>

  @if($tot)

    <p>Boat's Rating: {{$tot->rating}}</p>

    <p>Elapsed Time: {{$elapsed_formatted}}</p>
    <p class="small">{{$tot->elapsed_time}} seconds</p>

    <p>Corrected Elapsed Time: {{$corrected_formatted}} </p>
    <p class="small">{{$corrected_time}} seconds</p>

    <a href="{{route('tot')}}"><button class="btn btn-default">New Time On Time</button>

  @endif

@endsection