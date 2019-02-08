@extends('layout')

@section('head')
        Car: {{ $car->title }}
        <br>
        Producer: {{ $car->producer }}
        <br>
        Number of doors: {{ $car->number_of_doors }}
        <br>
@endsection

@section('cars-link')
    <li class="nav-item active">
        <a class="nav-link" href="#" onclick="history.go(-1)">Cars <span class="sr-only">(current)</span></a>
    </li>
@endsection