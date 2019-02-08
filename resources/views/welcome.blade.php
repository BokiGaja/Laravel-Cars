@extends('layouts.master')

@section('title', 'Cars')
@section('body')
    Welcome {{ $name }}
    <br>
    I am {{ $age }} years old
@endsection

@section('cars-link')
    <li class="nav-item active">
        <a class="nav-link" href="cars">Cars <span class="sr-only">(current)</span></a>
    </li>
@endsection