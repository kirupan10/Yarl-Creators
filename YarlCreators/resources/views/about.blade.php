@extends('layouts')

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




    <footer class="footer">
        <div class="footer-container">
            <!-- About -->
            <div class="footer-col">
                <h3>Yarl Creators</h3>
                <p>A full-service digital media production company based in Jaffna. We craft stories with creativity,
                    innovation, and passion.</p>
            </div>

            <!-- Quick Links -->
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="./aboutus.html">About Us</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="footer-col">
                <h4>Contact</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Jaffna, Sri Lanka</li>
                    <li><i class="fas fa-phone"></i> +94 77 123 4567</li>
                    <li><i class="fas fa-envelope"></i> info@yarlcreators.com</li>
                </ul>
            </div>

            <!-- Social Icons -->
            <div class="footer-col social">
                <h4>Follow Us</h4>
                <div class="social-icon">
                    <a href="https://www.facebook.com/p/Yarl-Creators-100083580871638/" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/yarl_creators/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.tiktok.com/@yarl_creators" target="_blank"><i class="fab fa-tiktok"></i></a>
                    <a href="https://www.youtube.com/channel/UC05DrDx4pGPX7_zVvxkdqJg" target="_blank"><i
                            class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 Yarl Creators. All rights reserved.</p>
        </div>
    </footer>


    <!-- Bottom Navigation -->
    <nav class="bottom-nav">
        <a href="blog.html" class="nav-item" data-page="blog">
            <i class="fas fa-blog"></i>
            <span>Blog</span>
        </a>
        <a href="shop.html" class="nav-item" data-page="shop">
            <i class="fas fa-shopping-bag"></i>
            <span>Shop</span>
        </a>
        <a href="index.html" class="nav-item" data-page="home">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
        <a href="#!" class="nav-item active" data-page="about">
            <i class="fas fa-users"></i>
            <span>About</span>
        </a>
        <a href="contact.html" class="nav-item" data-page="contact">
            <i class="fas fa-envelope"></i>
            <span>Contact</span>
        </a>
    </nav>

    <button id="scrollToTopBtn" title="Go to top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="./Assets/Js/aboutus.js"></script>
    <script src="./Assets/Js/script.js"></script>




</body>

</html>
