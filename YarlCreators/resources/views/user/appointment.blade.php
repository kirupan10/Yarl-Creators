<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    @extends('layout')
    
    <div class="container">
        <h1>Appointment Page</h1>
        <form action="{{ route('appointment') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="date">Appointment Date:</label>
                <input type="date" id="date" name="date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="time">Appointment Time:</label>
                <input type="time" id="time" name="time" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="mt-3">
        <a href="/" class="btn btn-secondary">Go to Home</a>
    </div>
</body>
</html>
