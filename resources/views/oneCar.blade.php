@extends('layout')

@section('head')
        Car: {{ $car->title }}
        Producer: {{ $car->producer }}
        Number of doors: {{ $car->number_of_doors }}
        <br>
@endsection