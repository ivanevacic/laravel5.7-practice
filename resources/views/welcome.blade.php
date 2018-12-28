@extends('layout')

@section('title', 'Home')

@section('content')
    <h1>My {{ $foo }} page</h1>

    @foreach($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
@endsection