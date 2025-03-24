<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./Assets/images/logo.png">
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
            <h2>Sign In</h2>
            <form id="signInForm">
                <div class="input-box">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" required>
                </div>
                <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" required>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox"> Remember me</label>
                    <a href="#" id="forgotPass">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Sign In</button>
                <p class="switch-form">Don't have an account? <a href="#" id="signUpLink">Sign Up</a></p>
            </form>
        </div>

        <div class="form-box hidden">
            <h2>Sign Up</h2>
            <form id="signUpForm">
                <div class="input-box">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Full Name" required>
                </div>
                <div class="input-box">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" required>
                </div>
                <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn">Sign Up</button>
                <p class="switch-form">Already have an account? <a href="#" id="signInLink">Sign In</a></p>
            </form>
        </div>

        <div class="form-box hidden">
            <h2>Forgot Password</h2>
            <form id="forgotForm">
                <div class="input-box">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Enter your email" required>
                </div>
                <button type="submit" class="btn">Reset Password</button>
                <p class="switch-form"><a href="#" id="backToSignIn">Back to Sign In</a></p>
            </form>
        </div>
    </div>

    <script src="./Assets/Js/auth.js"></script>
</body>
</html>
