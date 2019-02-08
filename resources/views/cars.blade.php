@extends('layout')

@section('head')
    @foreach($cars as $car)
        Car: {{ $car->title }}
        <a href="cars/{{ $car->id }}">More info</a>
        <br>
    @endforeach
@endsection