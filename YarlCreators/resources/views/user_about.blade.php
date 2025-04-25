@section('title', 'About Us - Yarl Creators')

<link rel="stylesheet" href=" {{ asset('css/aboutus.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/css/ScrollToTop.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

@extends('user_layout')
@section('content')
<body>

    <!-- About Hero Banner -->
    <section class="about-banner">
        <div class="overlay">
            <h1>About Yarl Creators</h1>
            <p>Digital Media Production Company Based in Jaffna</p>
        </div>
    </section>


    <!-- About Section -->
    <section class="about-section">
        <div class="about-text">
            <h2>Who We Are</h2>
            <p>
                We are a full-service media production house focused on video production, photography, branding, and
                digital
                marketing. Our creative team transforms your ideas into compelling stories that resonate with your
                audience.
            </p>
        </div>

        <!-- Our Values -->
        <div class="about-values">
            <div class="value-box">
                <i class="fas fa-video"></i>
                <h3>Creative Production</h3>
                <p>From storyboarding to final edits, we deliver stunning visual content that speaks volumes.</p>
            </div>
            <div class="value-box">
                <i class="fas fa-bullhorn"></i>
                <h3>Branding</h3>
                <p>We help build strong, recognizable brands that leave a lasting impression.</p>
            </div>
            <div class="value-box">
                <i class="fas fa-lightbulb"></i>
                <h3>Innovation</h3>
                <p>Blending technology with creativity to deliver one-of-a-kind experiences.</p>
            </div>
        </div>
    </section>

    <section class="video-banner">
        <!-- Background Video -->
        <video class="video-bg" autoplay muted loop playsinline>
            <source src="./Assets/images/abc.mp4" type="video/mp4" />
            Your browser does not support the video tag.
        </video>

        <!-- Tint Overlay -->
        <div class="video-overlay"></div>

        <!-- Content -->
        <div class="video-content">
            <h1 class="banner-title">Our Work Speaks for Itself</h1>
            <p class="banner-description">Your vision, our creativity – making every moment timeless.</p>
            <a href="https://www.youtube.com/@yarlcreators6818" target="_blank" class="highlight-btn">
                Watch Our Story <i class="fas fa-play"></i>
            </a>
        </div>
    </section>




    <section class="mission-vision">
        <h2>Our Mission & Our Vission</h2>
        <div class="mission-vision-container">

            <div class="mv-box">
                <h3>Our Mission</h3>
                <p>To empower individuals and businesses through creative digital storytelling, delivering impactful visuals
                    that inspire and engage.</p>
            </div>
            <div class="mv-box">
                <h3>Our Vision</h3>
                <p>To become the leading digital media company in Sri Lanka, known for innovation, authenticity, and
                    excellence in visual production.</p>
            </div>
        </div>
    </section>

<section class="stats-section" id="stats">
    <div class="container">
        <h2 class="stats-heading">Our Achievements</h2>
        <div class="stats-wrapper">
            <div class="stat-block">
                <span class="stat-number" data-target="250">0</span>
                <p>Projects Completed</p>
            </div>
            <div class="stat-block">
                <span class="stat-number" data-target="150">0</span>
                <p>Happy Clients</p>
            </div>
            <div class="stat-block">
                <span class="stat-number" data-target="10">0</span>
                <p>Years of Experience</p>
            </div>
            <div class="stat-block">
                <span class="stat-number" data-target="50">0</span>
                <p>Brands Collaborated</p>
            </div>
        </div>
    </div>
</section>

    <!-- Meet the Team Section -->
    <section class="team-section">
        <h2 class="team-title">Meet the Team</h2>

        <div class="team-container">
            <div class="team-member">
                <img src="./Assets/images/Profile/m1.jpg" alt="Team Member 1" />
                <h3>Vimitha Jeyaraj</h3>
                <p>Founder & Creative Director</p>
            </div>
            <div class="team-member">
                <img src="./Assets/images/Profile/m2.jpg" alt="Team Member 2" />
                <h3>Gokulan Raj</h3>
                <p>Lead Videographer</p>
            </div>
            <div class="team-member">
                <img src="./Assets/images/Profile/f1.jpg" alt="Team Member 3" />
                <h3>Nivetha K.</h3>
                <p>Photographer & Editor</p>
            </div>
            <div class="team-member">
                <img src="./Assets/images/Profile/m3.jpg" alt="Team Member 4" />
                <h3>Sajith S.</h3>
                <p>Brand Strategist</p>
            </div>
        </div>
    </section>

    <section class="testimonial-section">
        <h2 class="testimonial-heading">What Our Clients Say</h2>

        <div class="testimonial-slider">
            <div class="testimonial-track">
                <div class="testimonial-card">
                    <img src="./Assets/images/Profile/f1.jpg" alt="Client" class="client-img" />
                    <p class="testimonial-text">“Working with Yarl Creators was a game-changer. Their visuals gave our brand
                        a new life, and our customers noticed the difference instantly.”</p>
                    <div class="stars">★★★★★</div>
                </div>
                <div class="testimonial-card">
                    <img src="./Assets/images/Profile/m1.jpg" alt="Client" class="client-img" />
                    <p class="testimonial-text">“We entrusted Yarl Creators with our full product launch visuals, and they
                        delivered more than we expected – fast, creative, and professional.”</p>
                    <div class="stars">★★★★★</div>
                </div>
                <div class="testimonial-card">
                    <img src="./Assets/images/Profile/m3.jpg" alt="Client" class="client-img" />
                    <p class="testimonial-text">“From concept to delivery, their team was with us every step of the way.
                        Exceptional creativity and flawless execution.”</p>
                    <div class="stars">★★★★</div>
                </div>
                <div class="testimonial-card">
                    <img src="./Assets/images/Profile/m2.jpg" alt="Client" class="client-img" />
                    <p class="testimonial-text">“We needed a branding partner who understood our vision. Yarl Creators
                        delivered beyond our expectations with compelling content.”</p>
                    <div class="stars">★★★★★</div>
                </div>
                <div class="testimonial-card">
                    <img src="./Assets/images/Profile/m1.jpg" alt="Client" class="client-img" />
                    <p class="testimonial-text">“Their videos and photography helped us stand out in a competitive market.
                        The response from our audience has been phenomenal.”</p>
                    <div class="stars">★★★★</div>
                </div>
            </div>
        </div>
    </section>

    <section class="choose-us-section">
        <h2 class="choose-us-heading">Why Choose Yarl Creators?</h2>
        <div class="choose-us-container">
            <div class="choose-box">
                <i class="fas fa-video"></i>
                <h4>Visual Experts</h4>
                <p>Cinematic videos and stunning photos that tell powerful stories.</p>
            </div>
            <div class="choose-box">
                <i class="fas fa-bullhorn"></i>
                <h4>Bold Branding</h4>
                <p>Creative branding that builds strong, memorable identities.</p>
            </div>
            <div class="choose-box">
                <i class="fas fa-handshake"></i>
                <h4>Client-Focused</h4>
                <p>We listen, collaborate, and deliver what your brand truly needs.</p>
            </div>
            <div class="choose-box">
                <i class="fas fa-rocket"></i>
                <h4>Driven by Ideas</h4>
                <p>Fresh concepts, modern tools, and passion in every project.</p>
            </div>
        </div>
    </section>




@endsection
