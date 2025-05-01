<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yarl Creators</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/booking.css')}}" />
    <link rel="stylesheet" href="{{asset('css/nav.css')}}" />
    <link rel="stylesheet" href="{{asset('css/footer.css')}}" />
    <link rel="stylesheet" href="{{asset('css/ScrollToTop.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="icon" type="image/png" href="../assets/images/logo.png" />
</head>

<body>

    <!-- Hero Banner -->
    <section class="about-banner booking-banner">
        <div class="overlay">
            <h1>Book Your Event</h1>
            <p>Photography, Videography & Documentary Services by Yarl Creators</p>
        </div>
    </section>

    <!-- Services -->
    <section class="featured-products">
        <h2 class="section-title">Our Event Services</h2>
        <div class="product-container">
            <div class="product-card">
                <img src="../assets/images/Acc.jpg" alt="Photography">
                <h3>Photography</h3>
                <p>Capture timeless memories with our professional photography.</p>
            </div>
            <div class="product-card">
                <img src="../assets/images/pai.jpg" alt="Videography">
                <h3>Videography</h3>
                <p>Tell your story with cinematic visual experiences.</p>
            </div>
            <div class="product-card">
                <img src="../assets/images/Skt.jpg" alt="Documentary">
                <h3>Documentary</h3>
                <p>Bring ideas to life with impactful narratives and visuals.</p>
            </div>
        </div>
        <div style="text-align:center; margin-top: 30px;">
            <a href="booking-event" class="product-btn">Book Now</a>
        </div>
    </section>

    <!-- Booking Process -->
    <section class="featured-products">
        <h2 class="section-title">Our Booking Process</h2>
        <div class="product-container">
            <div class="product-card animated-step">
                <i class="fas fa-list-check fa-3x" style="color:#FCA311; margin-bottom:15px;"></i>
                <h3>Choose Service</h3>
                <p>Select what suits your event: Photography, Videography, or more.</p>
            </div>
            <div class="product-card animated-step">
                <i class="fas fa-calendar-alt fa-3x" style="color:#FCA311; margin-bottom:15px;"></i>
                <h3>Pick a Date</h3>
                <p>Check live calendar and choose a convenient time slot.</p>
            </div>
            <div class="product-card animated-step">
                <i class="fas fa-user-edit fa-3x" style="color:#FCA311; margin-bottom:15px;"></i>
                <h3>Submit Details</h3>
                <p>Let us know your event info so we can personalize our service.</p>
            </div>
            <div class="product-card animated-step">
                <i class="fas fa-check-circle fa-3x" style="color:#FCA311; margin-bottom:15px;"></i>
                <h3>Get Confirmation</h3>
                <p>You’ll receive a confirmation and we’ll begin crafting your story!</p>
            </div>
        </div>
    </section>

    <!-- Portfolio Preview -->
    <section class="featured-products">
        <h2 class="section-title">Our Creative Work</h2>
        <div class="product-container">
            <div class="product-card"><img src="../assets/images/Gallery/22.jpg" alt="Gallery 1"></div>
            <div class="product-card"><img src="../assets/images/Gallery/10.jpg" alt="Gallery 2"></div>
            <div class="product-card"><img src="../assets/images/Gallery/16.jpg" alt="Gallery 3"></div>
            <div class="product-card"><img src="../assets/images/Gallery/6.jpg" alt="Gallery 4"></div>
        </div>
        <div style="text-align:center; margin-top: 20px;">
            <a href="gallery.html" class="product-btn">View Full Gallery</a>
        </div>
    </section>

<!-- Event Tips -->
<section class="featured-products" style="margin-bottom: 100px;">
    <h2 class="section-title">Tips for a Perfect Event</h2>

    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 40px;">

        <!-- Do's Column -->
        <div
            style="flex: 1; min-width: 300px; max-width: 500px; background: rgba(76, 175, 80, 0.08); border: 1px solid #4CAF50; border-radius: 15px; padding: 30px; backdrop-filter: blur(10px); box-shadow: 0 4px 20px rgba(76, 175, 80, 0.2);">
            <div style="text-align: center; margin-bottom: 20px;">
                <i class="fas fa-circle-check fa-3x" style="color: #4CAF50;"></i>
                <h3 style="margin-top: 15px; color: #4CAF50;">Do’s</h3>
            </div>
            <ul style="list-style: none; padding: 0; font-size: 16px; line-height: 2; color: #ccc;">
                <li><i class="fas fa-check-circle" style="color:#4CAF50; margin-right:10px;"></i> Plan ahead and book
                    early</li>
                <li><i class="fas fa-check-circle" style="color:#4CAF50; margin-right:10px;"></i> Communicate your
                    vision</li>
                <li><i class="fas fa-check-circle" style="color:#4CAF50; margin-right:10px;"></i> Keep your team
                    informed</li>
                <li><i class="fas fa-check-circle" style="color:#4CAF50; margin-right:10px;"></i> Stay relaxed on the
                    day</li>
            </ul>
        </div>

        <!-- Don'ts Column -->
        <div
            style="flex: 1; min-width: 300px; max-width: 500px; background: rgba(229, 57, 53, 0.08); border: 1px solid #E53935; border-radius: 15px; padding: 30px; backdrop-filter: blur(10px); box-shadow: 0 4px 20px rgba(229, 57, 53, 0.2);">
            <div style="text-align: center; margin-bottom: 20px;">
                <i class="fas fa-circle-xmark fa-3x" style="color: #E53935;"></i>
                <h3 style="margin-top: 15px; color: #E53935;">Don'ts</h3>
            </div>
            <ul style="list-style: none; padding: 0; font-size: 16px; line-height: 2; color: #ccc;">
                <li><i class="fas fa-times-circle" style="color:#E53935; margin-right:10px;"></i> Wait till the last
                    minute</li>
                <li><i class="fas fa-times-circle" style="color:#E53935; margin-right:10px;"></i> Overbook multiple
                    vendors</li>
                <li><i class="fas fa-times-circle" style="color:#E53935; margin-right:10px;"></i> Ignore setup needs
                </li>
                <li><i class="fas fa-times-circle" style="color:#E53935; margin-right:10px;"></i> Forget device charging
                </li>
            </ul>
        </div>

    </div>
</section>



        </div>
    </section>


    <!-- Map / Service Area -->
    <section class="featured-products">
        <h2 class="section-title">Where We Operate</h2>
        <div class="product-container">
            <div class="product-card" style="width: 100%; padding: 0;">
                <iframe style="width:100%; height:300px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126595.72716363662!2d80.00877409999999!3d9.661498299999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afe55e6e614df35%3A0xd3a254b7a86c731c!2sJaffna!5e0!3m2!1sen!2slk!4v1712202160629!5m2!1sen!2slk"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <p style="text-align:center; margin-top: 15px;">Serving all across Sri Lanka</p>
    </section>

    <!-- Final CTA -->
    <section class="featured-products" style="text-align: center;">
        <h2 class="section-title">Ready to Make Your Event Unforgettable?</h2>
        <p style="color: #ccc;">Our team is just a click away. Book your creative journey today.</p>
        <a href="booking-event.html" class="product-btn">Start Booking</a>
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
                    <li><a href="index.html">Home</a></li>
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

    <nav class="bottom-nav">
        <a href="blog.html" class="nav-item" data-page="blog">
            <i class="fas fa-blog"></i>
            <span>Blog</span>
        </a>
        <a href="shop.html" class="nav-item" data-page="shop">
            <i class="fas fa-shopping-bag"></i>
            <span>Shop</span>
        </a>
        <a href="Home.html" class="nav-item active" data-page="home">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
        <a href="aboutus.html" class="nav-item" data-page="services">
            <i class="fas fa-users"></i>
            <span>About</span>
        </a>
        <a href="contact.html" class="nav-item" data-page="contact">
            <i class="fas fa-envelope"></i>
            <span>Contact</span>
        </a>
    </nav>

    <!-- Scroll To Top Button -->
    <button id="scrollToTopBtn" title="Go to top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="../assets/Js/script.js"></script>
</body>

</html>
