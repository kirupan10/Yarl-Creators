<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logo.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Yarl Creators is a video production, photography, and branding company that brings ideas to life through creative storytelling and high-quality visuals.">
    <meta name="keywords"
        content="Yarl Creators, Yarl, Creators, Video Production, Photography, Branding, Creative Storytelling, High-Quality Visuals, Jaffna, Sri Lanka">
    <meta name="author" content="Yarl Creators">
    <title>Yarl Creators</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/videoBanner.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blogs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href=" {{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css') }} ">
    <script defer src=" {{ asset('Js/script.js') }}"></script>
    <script defer src="{{ asset('Js/faq.js') }}"></script>
</head>

<body>

    <section class="hero">
        <div class="top-icons">
            <!-- Top Icons -->
            <a href="/" class="icon home"><i class="fas fa-home"></i></a>
            <a href="#" class="icon cart"><i class="fas fa-shopping-cart"></i><span class="badge">1</span></a>
            <a href="#" class="icon notification"><i class="fas fa-bell"></i><span class="badge">3</span></a>


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

        <div class="button-container">
            <button class="book-btn">Book Now <i class="fas fa-arrow-right"></i></button>
        </div>

    </section>

    <div class="container mt-4">
        @yield('content')
    </div>

</body>

</html>



