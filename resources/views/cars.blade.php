@extends('layout')

@section('head')
    @foreach($cars as $car)
        Car: {{ $car->title }}
        <a href="cars/{{ $car->id }}">More info</a>
        <br>
    @endforeach
@endsection

@section('cars-link')
    <li class="nav-item active">
        <a class="nav-link" href="cars">Cars <span class="sr-only">(current)</span></a>
    </li>
@endsection