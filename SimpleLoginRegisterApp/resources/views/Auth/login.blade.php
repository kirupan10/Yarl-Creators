@extends('layout')

@section('content')

<div class="auth-container">
    <div class="form-box">
        <h2>Sign In</h2>
        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>

@endsection
