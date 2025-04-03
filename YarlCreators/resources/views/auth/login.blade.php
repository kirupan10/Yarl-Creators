<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Yarl Creators is a video production, photography, and branding company that brings ideas to life through creative storytelling and high-quality visuals.">
    <meta name="keywords" content="Yarl Creators, Yarl, Creators, Video Production, Photography, Branding, Creative Storytelling, High-Quality Visuals, Jaffna, Sri Lanka">
    <meta name="author" content="Yarl Creators">
    <title>Yarl Creators</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<section class="hero">
        <div class="top-icons">
            <!-- Top Icons -->
            <a href="/" class="icon home"><i class="fas fa-home"></i></a>


            @if (Auth::check())
                <!-- User is logged in, show user profile or logout icon -->
                <a href="{{ route('profile') }}" class="icon login"><i class="fas fa-user"></i></a>
                <a href="{{ route('logout') }}" class="icon logout"><i class="fas fa-sign-out-alt"></i></a>
            @else
                <!-- User is not logged in, show login icon -->
                <a href="{{ route('login') }}" class="icon login"><i class="fas fa-sign-in-alt"></i></a>
            @endif

        </div>

        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Yarl Creators Logo">
        </div>
        <div class="hero-text">
            <h1 class="big-text">YARL</h1>
            <span class="small-text">CREATORS</span>
        </div>
        <p class="hero-description">
            Yarl Creators is a digital media production company.<br>
            We specialize in video production and digital marketing.<br>
            Powered by a network of creative and innovative storytellers.
        </p>

        <!-- Social Icons -->
        <div class="social-icons">
            <a href="https://www.facebook.com/p/Yarl-Creators-100083580871638/" target="_blank"><i
                    class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/yarl_creators/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.tiktok.com/@yarl_creators" target="_blank"><i class="fab fa-tiktok"></i></a>
            <a href="https://www.youtube.com/channel/UC05DrDx4pGPX7_zVvxkdqJg" target="_blank"><i
                    class="fab fa-youtube"></i></a>
        </div>

    </section>

<body>
    <div class="auth-container">
        <div class="form-box">
            <h2>Login</h2>
            <form method="POST" action="{{ route('login.post') }}">
                @csrf
                <div class="input-box">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                    <a href="">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>

                <p class="switch-form">Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>
            </form>
        </div>

        <div class="form-box hidden">
            <h2>Forgot Password</h2>
            <form method="POST" action="">
                @csrf
                <div class="input-box">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>
                <button type="submit" class="btn">Reset Password</button>
                <p class="switch-form"><a href="{{ route('login') }}">Back to Sign In</a></p>
            </form>
        </div>
    </div>

    <script src="{{ asset('Assets/Js/auth.js') }}"></script>
</body>
</html>
