@extends('layouts.app')

@section('page_title')
  Scores
@endsection

@section('content')
    <a href="{{route('tod')}}"><button class="btn btn-default">New Time On Distance</button>

  <a href="{{route('races.create')}}"><button type="submit" class="btn btn-primary">New Race</button></a>
@endsection
