@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h1>Welcome, {{ auth()->user()->name }}!</h1>
@endsection
