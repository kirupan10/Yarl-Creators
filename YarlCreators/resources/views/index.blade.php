<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./Assets/images/logo.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Yarl Creators is a video production, photography, and branding company that brings ideas to life through creative storytelling and high-quality visuals.">
    <meta name="keywords"
        content="Yarl Creators, Yarl, Creators, Video Production, Photography, Branding, Creative Storytelling, High-Quality Visuals, Jaffna, Sri Lanka">
    <meta name="author" content="Yarl Creators">
    <title>Yarl Creators</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/videoBanner.css') }}">
    <link rel="stylesheet" href="./Assets/css/about.css">
    <link rel="stylesheet" href="./Assets/css/Gallery.css">
    <link rel="stylesheet" href="./Assets/css/blogs.css">
    <link rel="stylesheet" href="./Assets/css/contact.css">
    <link rel="stylesheet" href="./Assets/css/faq.css">
    <link rel="stylesheet" href="./Assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script defer src="./Assets/Js/script.js"></script>
    <script defer src="./Assets/Js/faq.js"></script>
</head>

<body>

    <section class="hero">
        <div class="top-icons">
            <a href="#" class="icon cart"><i class="fas fa-shopping-cart"></i><span class="badge">1</span></a>
            <a href="#" class="icon notification"><i class="fas fa-bell"></i><span class="badge">3</span></a>
            <a href="./auth.html" class="icon login"><i class="fas fa-user"></i></a>
        </div>

        <div class="logo">
            <img src="./Assets/images/logo.png" alt="Yarl Creators Logo">
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
        <img src="./Assets/images/Camera.png" alt="Camera" class="hero-image">
    </section>

    <!-- Featured Products Section -->
    <section class="featured-products">
        <h2 class="section-title">Featured Products</h2>

        <div class="product-container">
            <!-- Product 1 -->
            <div class="product-card">
                <img src="./Assets/images/Acc.jpg" alt="Camera Accessory">
                <div class="product-info">
                    <h3>Camera Accessories</h3>
                    <p>Essential accessories to enhance photography.</p>
                    <button class="product-btn">Shop Now</button>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
                <img src="./Assets/images/pai.jpg" alt="Painting Frame">
                <div class="product-info">
                    <h3>Painting Frames</h3>
                    <p>Beautiful custom painting frames perfect for your artworks.</p>
                    <button class="product-btn">Shop Now</button>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <img src="./Assets/images/Skt.jpg" alt="Sketches">
                <div class="product-info">
                    <h3>Sketches</h3>
                    <p>Hand-drawn sketches that bring life to your artistic vision.</p>
                    <button class="product-btn">Shop Now</button>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card">
                <img src="./Assets/images/mug.jpg" alt="Mug Printing">
                <div class="product-info">
                    <h3>Mug Printing</h3>
                    <p>Custom printed mugs, perfect for gifts and branding.</p>
                    <button class="product-btn">Shop Now</button>
                </div>
            </div>
        </div>

        <!-- Show More Button -->
        <div class="show-more-container">
            <a href="all-products.html" class="show-more-btn">Show More</a>
        </div>
    </section>

    <section class="video-banner">
        <!-- Background Video -->
        <video autoplay muted loop playsinline class="video-bg">
            <source src="./Assets/images/304pIkbEsTRm8.mp4_10s.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Tint Overlay -->
        <div class="video-overlay"></div>

        <!-- Content on Top of Tint -->
        <div class="video-content">
            <h1 class="banner-title">CREATING STORIES THAT MATTER</h1>
            <p class="banner-description">Your vision, our creativity – making every moment timeless.</p>
            <button class="banner-btn">Explore Now <i class="fas fa-arrow-right"></i></button>
        </div>
    </section>

    <section class="about-section">
        <h2 class="about-title">Who We Are</h2>

        <div class="about-container">
            <!-- First Row: Image Left, Text Right -->
            <div class="about-row">
                <div class="about-image">
                    <img src="./Assets/images/manwithcam.jpg" alt="Creative Work">
                </div>
                <div class="about-text">
                    <h3>Our Passion for Creativity</h3>
                    <p>At Yarl Creators, we transform ideas into visual masterpieces. Our expertise in video production,
                        photography, and branding ensures stunning content that captivates audiences.</p>
                </div>
            </div>

            <!-- Second Row: Image Right, Text Left -->
            <div class="about-row">
                <div class="about-text">
                    <h3>Driven by Innovation</h3>
                    <p>We blend technology with creativity to craft compelling narratives. Every project is designed with
                        precision, passion, and a touch of artistry.</p>
                </div>
                <div class="about-image">
                    <img src="./Assets/images/cam.jpg" alt="Innovation">
                </div>
            </div>
        </div>
    </section>

<section class="center-carousel">
    <h2 class="carousel-heading">Our Creative Work</h2>

    <div class="carousel-container">
        <button class="carousel-btn prev">&#10094;</button>

        <div class="carousel-frame">
            <div class="carousel-track" id="carousel-track">
                <!-- Cloned Last 3 for Infinite Scroll -->
                <div class="carousel-item"><img src="./Assets/images/Gallery/28.jpg" alt="28" /></div>
                <div class="carousel-item"><img src="./Assets/images/Gallery/29.jpg" alt="29" /></div>
                <div class="carousel-item"><img src="./Assets/images/Gallery/30.jpg" alt="30" /></div>

                <!-- Actual 30 Images -->
                <!-- Repeat up to 30 images -->
                <div class="carousel-item"><img src="./Assets/images/Gallery/22.jpg" alt="1" /></div>
                <div class="carousel-item"><img src="./Assets/images/Gallery/10.jpg" alt="2" /></div>
                <div class="carousel-item"><img src="./Assets/images/Gallery/16.jpg" alt="3" /></div>
                <!-- ... -->
                <div class="carousel-item"><img src="./Assets/images/Gallery/30.jpg" alt="30" /></div>

                <!-- Cloned First 3 for Infinite Scroll -->
                <div class="carousel-item"><img src="./Assets/images/Gallery/6.jpg" alt="1-clone" /></div>
                <div class="carousel-item"><img src="./Assets/images/Gallery/7.jpg" alt="2-clone" /></div>
                <div class="carousel-item"><img src="./Assets/images/Gallery/8.jpg" alt="3-clone" /></div>
            </div>
        </div>

        <button class="carousel-btn next">&#10095;</button>
    </div>
</section>

    <section class="blog-section">
        <h2 class="blog-title">Recent Blog Posts</h2>

        <div class="blog-container">
            <!-- Blog Post 1 -->
            <a href="blog-details.html?id=1" class="blog-card">
                <img src="./Assets/images/wed.jpg" alt="Wedding Highlight">
                <div class="blog-content">
                    <h3 class="blog-post-title">Wedding Highlight | Vimitha & Gokulan</h3>
                    <p class="blog-description">Every moment is a memory – watch how we brought their special day to life in style.</p>
                    <span class="blog-date">March 2025</span>
                </div>
            </a>

            <!-- Blog Post 2 -->
            <a href="blog-details.html?id=2" class="blog-card">
                <img src="./Assets/images/evn.jpg" alt="Event Setup">
                <div class="blog-content">
                    <h3 class="blog-post-title">Full Event Branding & Media Solutions</h3>
                    <p class="blog-description">From concept to execution – lights, visuals, and a powerful brand message delivered
                        seamlessly.</p>
                    <span class="blog-date">January 2025</span>
                </div>
            </a>

            <!-- Blog Post 3 -->
            <a href="blog-details.html?id=3" class="blog-card">
                <img src="./Assets/images/bab.jpg" alt="Baby Photoshoot">
                <div class="blog-content">
                    <h3 class="blog-post-title">Tiny Toes, Big Smiles</h3>
                    <p class="blog-description">A heartwarming baby shoot filled with innocence, color, and beautiful giggles.</p>
                    <span class="blog-date">February 2025</span>
                </div>
            </a>
        </div>

        <!-- See More Button -->
        <div class="see-more-container">
            <a href="blog.html" class="see-more-btn">See More</a>
        </div>
    </section>

    <section class="contact-section">
        <h2 class="contact-title">Get In Touch</h2>
        <p class="contact-subtitle">Let’s connect and create something amazing together.</p>

        <div class="contact-content">
            <!-- Contact Info -->
            <div class="contact-info">
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <h4>Location</h4>
                    <p>Jaffna, Sri Lanka</p>
                </div>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <h4>Email</h4>
                    <p>yarlcreators0@gmail.com</p>
                </div>
                <div class="info-item">
                    <i class="fas fa-phone-alt"></i>
                    <h4>Phone</h4>
                    <p>+94 76 606 0499</p>
                </div>
            </div>

            <!-- Contact Form -->
            <form class="contact-form">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Full Name" required />
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email Address" required />
                </div>
                <div class="form-group">
                    <input type="text" name="subject" placeholder="Subject" required />
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                </div>
                <button type="submit" class="contact-btn">Send Message</button>
            </form>
        </div>
    </section>

    <section class="faq-section">
        <h2 class="faq-title">Frequently Asked Questions</h2>

        <div class="faq-container">
            <!-- FAQ Item 1 -->
            <div class="faq-item">
                <button class="faq-question">What services does Yarl Creators offer?</button>
                <div class="faq-answer">
                    <p>We offer video production, photography, digital marketing, branding, and creative content development
                        tailored to your needs.</p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item">
                <button class="faq-question">Where is Yarl Creators located?</button>
                <div class="faq-answer">
                    <p>We are based in Jaffna, Sri Lanka, and provide services across the country and internationally.</p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item">
                <button class="faq-question">Do you handle corporate projects?</button>
                <div class="faq-answer">
                    <p>Yes! We work with businesses of all sizes to create professional videos, branding campaigns, and
                        more.</p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-item">
                <button class="faq-question">How can I request a quote or consultation?</button>
                <div class="faq-answer">
                    <p>You can fill out the contact form on our website or reach us directly via phone or email to schedule
                        a free consultation.</p>
                </div>
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
                    <li><a href="/">Home</a></li>
                    <li><a href="#about">About Us</a></li>
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
        <a href="gallery.html" class="nav-item" data-page="gallery">
            <i class="fas fa-images"></i>
            <span>Gallery</span>
        </a>
        <a href="shop.html" class="nav-item" data-page="shop">
            <i class="fas fa-shopping-bag"></i>
            <span>Shop</span>
        </a>
        <a href="index.html" class="nav-item active" data-page="home">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
        <a href="services.html" class="nav-item" data-page="services">
            <i class="fas fa-concierge-bell"></i>
            <span>Services</span>
        </a>
        <a href="contact.html" class="nav-item" data-page="contact">
            <i class="fas fa-envelope"></i>
            <span>Contact</span>
        </a>
    </nav>


    <script defer src="./Assets/Js/galleryLoop.js"></script>


    <!-- Scroll To Top Button -->
    <button id="scrollToTopBtn" title="Go to top">
        <i class="fas fa-arrow-up"></i>
    </button>

</body>

</html>
