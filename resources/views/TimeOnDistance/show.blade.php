@extends('layouts.app')

@section('content')
  <h4>Corrected Time</h4>

  @if($tod)

    <p>Boat's Rating: {{$tod->rating}}</p>

    <p>Elapsed Time: {{$elapsed_formatted}}</p>
    <p>{{$tod->elapsed_time}} seconds</p>

    <p>Corrected Time: {{$corrected_formatted}} </p>
    <p>{{$tod->corrected_time}} seconds</p>

    <a href="{{route('tod')}}"><button class="btn btn-default">New Time On Distance</button>

  @endif

@endsection