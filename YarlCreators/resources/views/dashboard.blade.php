@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h1>Welcome, {{ auth()->user()->name }}!</h1>
    <p>site under development</p>
    <a href="/" class="btn btn-primary">Go to home</a>

@endsection
