@extends('layouts.app')

@section('content')

  <form action="{{route('weather')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="number" placeholder="Zip code" name="zip" required>
    <input class="btn btn-primary" type="submit" value="Current Weather">
  </form>

@endsection