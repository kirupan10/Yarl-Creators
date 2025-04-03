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
    <!-- Include SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
</head>

<body>

    <section class="hero">
        <div class="top-icons">
            <a href="#" class="icon cart"><i class="fas fa-shopping-cart"></i><span class="badge">1</span></a>
            <a href="#" class="icon notification"><i class="fas fa-bell"></i><span class="badge">3</span></a>
            <a href="{{ route('login') }}" class="icon login"><i class="fas fa-user"></i></a>
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

    <!-- Featured Products Section -->
    <section class="featured-products">
        <h2 class="section-title">Featured Products</h2>

        <div class="product-container">
            <!-- Product 1 -->
            <div class="product-card">
                <img src="{{ asset('images/Acc.jpg') }}" alt="Camera Accessory">
                <div class="product-info">
                    <h3>Camera Accessories</h3>
                    <p>Essential accessories to enhance photography.</p>
                    <button class="product-btn">Shop Now</button>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
                <img src=" {{ asset('images/pai.jpg') }}" alt="Painting Frame">
                <div class="product-info">
                    <h3>Painting Frames</h3>
                    <p>Beautiful custom painting frames perfect for your artworks.</p>
                    <button class="product-btn">Shop Now</button>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <img src="{{ asset('images/Skt.jpg') }}" alt="Sketches">
                <div class="product-info">
                    <h3>Sketches</h3>
                    <p>Hand-drawn sketches that bring life to your artistic vision.</p>
                    <button class="product-btn">Shop Now</button>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card">
                <img src="{{ asset('images/mug.jpg') }}" alt="Mug Printing">
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
            <source src="{{ asset('images/304pIkbEsTRm8.mp4_10s.mp4 ') }}" type="video/mp4">
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
                    <img src="{{ asset('images/manwithcam.jpg') }}" alt="Creative Work">
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
                    <img src="{{ asset('images/cam.jpg') }}" alt="Innovation">
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
                <div class="carousel-item"><img src=" {{ asset('images/Gallery/28.jpg') }}" alt="28" /></div>
                <div class="carousel-item"><img src="{{ asset('images/Gallery/29.jpg') }}" alt="29" /></div>
                <div class="carousel-item"><img src=" {{ asset('images/Gallery/30.jpg') }}" alt="30" /></div>

                <!-- Actual 30 Images -->
                <!-- Repeat up to 30 images -->
                <div class="carousel-item"><img src=" {{ asset('images/Gallery/22.jpg') }}" alt="1" /></div>
                <div class="carousel-item"><img src=" {{ asset('images/Gallery/10.jpg') }}" alt="2" /></div>
                <div class="carousel-item"><img src=" {{ asset('images/Gallery/16.jpg') }}" alt="3" /></div>
                <!-- ... -->
                <div class="carousel-item"><img src=" {{ asset('images/Gallery/30.jpg') }}" alt="30" /></div>

                <!-- Cloned First 3 for Infinite Scroll -->
                <div class="carousel-item"><img src=" {{ asset('images/Gallery/6.jpg') }}" alt="1-clone" /></div>
                <div class="carousel-item"><img src=" {{ asset('images/Gallery/6.jpg') }}" alt="2-clone" /></div>
                <div class="carousel-item"><img src=" {{ asset('images/Gallery/6.jpg') }}" alt="3-clone" /></div>
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
                <img src=" {{ asset('images/wed.jpg') }}" alt="Wedding Highlight">
                <div class="blog-content">
                    <h3 class="blog-post-title">Wedding Highlight | Vimitha & Gokulan</h3>
                    <p class="blog-description">Every moment is a memory – watch how we brought their special day to life in style.</p>
                    <span class="blog-date">March 2025</span>
                </div>
            </a>

            <!-- Blog Post 2 -->
            <a href="blog-details.html?id=2" class="blog-card">
                <img src="{{ asset('images/evn.jpg') }}" alt="Event Setup">
                <div class="blog-content">
                    <h3 class="blog-post-title">Full Event Branding & Media Solutions</h3>
                    <p class="blog-description">From concept to execution – lights, visuals, and a powerful brand message delivered
                        seamlessly.</p>
                    <span class="blog-date">January 2025</span>
                </div>
            </a>

            <!-- Blog Post 3 -->
            <a href="blog-details.html?id=3" class="blog-card">
                <img src="{{ asset('images/bab.jpg') }}" alt="Baby Photoshoot">
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
             <div id="alertBox" style="display: none; padding: 10px; border-radius: 5px; margin-bottom: 15px;"></div>
            <form class="contact-form" action="{{ route('contact.store') }}" method="POST">
    @csrf
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
<div id="alertBox" style="display: none; padding: 10px; border-radius: 5px; margin-bottom: 15px;"></div>
@if(session('success'))
    <div class="alert alert-success" style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger" style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
        {{ session('error') }}
    </div>
@endif
<script>
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent page reload

    let formData = new FormData(this);

    fetch("{{ route('contact.store') }}", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        let alertBox = document.getElementById('alertBox');

        if (data.success) {
            alertBox.style.display = "block";
            alertBox.style.backgroundColor = "#d4edda"; // Green background
            alertBox.style.color = "#155724"; // Dark green text
            alertBox.style.border = "1px solid #c3e6cb";
            alertBox.innerHTML = "✅ Message sent successfully!";
            document.getElementById('contactForm').reset(); // Reset form after success

            // Hide alert after 5 seconds
            setTimeout(() => {
                alertBox.style.display = "none";
            }, 5000);
        } else {
            alertBox.style.display = "block";
            alertBox.style.backgroundColor = "#f8d7da"; // Red background
            alertBox.style.color = "#721c24"; // Dark red text
            alertBox.style.border = "1px solid #f5c6cb";
            alertBox.innerHTML = "❌ Something went wrong. Please try again.";
        }
    })
    .catch(error => {
        let alertBox = document.getElementById('alertBox');
        alertBox.style.display = "block";
        alertBox.style.backgroundColor = "#f8d7da";
        alertBox.style.color = "#721c24";
        alertBox.style.border = "1px solid #f5c6cb";
        alertBox.innerHTML = "❌ Unable to send message.";
    });
});
</script>

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
