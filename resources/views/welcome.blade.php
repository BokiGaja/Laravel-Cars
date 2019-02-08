@extends('layout')

@section('title', 'Cars')
@section('head')
    Welcome {{ $name }}
    <br>
    I am {{ $age }} years old
@endsection

@section('cars-link')
    <li class="nav-item active">
        <a class="nav-link" href="cars">Cars <span class="sr-only">(current)</span></a>
    </li>
@endsection