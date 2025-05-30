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
</head>

<body>
    <div class="auth-container">
        <div class="form-box">
            <h2>Sign Up</h2>
            <form method="POST" action="{{ route('register.post') }}">
                @csrf
                <div class="input-box">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" placeholder="Full Name" required>
                </div>
                <div class="input-box">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                </div>
                <button type="submit" class="btn">Sign Up</button>
                <p class="switch-form">Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
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
</div>

    <script src="{{ asset('Assets/Js/auth.js') }}"></script>
</body>
</html>
