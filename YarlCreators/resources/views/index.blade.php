@extends('layout')

@section('content')

    <body>

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
                        <button class="product-btn" onclick="window.location='{{ route('CameraAccessories') }}'" style="text-decoration: none;">Shop Now</button>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card">
                    <img src=" {{ asset('images/pai.jpg') }}" alt="Painting Frame">
                    <div class="product-info">
                        <h3>Painting Frames</h3>
                        <p>Beautiful custom painting frames perfect for your artworks.</p>
                        <button class="product-btn" onclick="window.location='{{ route('PaintingFrames') }}'" style="text-decoration: none;">Shop Now</button>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card">
                    <img src="{{ asset('images/Skt.jpg') }}" alt="Sketches">
                    <div class="product-info">
                        <h3>Sketches</h3>
                        <p>Hand-drawn sketches that bring life to your artistic vision.</p>
                        <button class="product-btn" onclick="window.location='{{ route('Sketches') }}'" style="text-decoration: none;">Shop Now</button>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="product-card">
                    <img src="{{ asset('images/mug.jpg') }}" alt="Mug Printing">
                    <div class="product-info">
                        <h3>Mug Printing</h3>
                        <p>Custom printed mugs, perfect for gifts and branding.</p>
                        <button class="product-btn" onclick="window.location='{{ route('MugPrinting') }}'" style="text-decoration: none;">Shop Now</button>
                    </div>
                </div>
            </div>

            <!-- Show More Button -->
            <div class="show-more-container">
                <a href="{{ route('products') }}" class="show-more-btn">Show More</a>
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
                    <div class="about-button">
                        <a href="/" class="btn">Learn More About Us</a>
                    </div>
                </div>

                <!-- Second Row: Image Right, Text Left -->
                <div class="about-row">
                    <div class="about-text">
                        <h3>Driven by Innovation</h3>
                        <p>We blend technology with creativity to craft compelling narratives. Every project is designed
                            with
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
                        <div class="carousel-item"><img src=" {{ asset('images/Gallery/30.jpg') }}" alt="30" />
                        </div>

                        <!-- Actual 30 Images -->
                        <!-- Repeat up to 30 images -->
                        <div class="carousel-item"><img src=" {{ asset('images/Gallery/22.jpg') }}" alt="1" />
                        </div>
                        <div class="carousel-item"><img src=" {{ asset('images/Gallery/10.jpg') }}" alt="2" />
                        </div>
                        <div class="carousel-item"><img src=" {{ asset('images/Gallery/16.jpg') }}" alt="3" />
                        </div>
                        <!-- ... -->
                        <div class="carousel-item"><img src=" {{ asset('images/Gallery/30.jpg') }}" alt="30" />
                        </div>

                        <!-- Cloned First 3 for Infinite Scroll -->
                        <div class="carousel-item"><img src=" {{ asset('images/Gallery/6.jpg') }}" alt="1-clone" />
                        </div>
                        <div class="carousel-item"><img src=" {{ asset('images/Gallery/6.jpg') }}" alt="2-clone" />
                        </div>
                        <div class="carousel-item"><img src=" {{ asset('images/Gallery/6.jpg') }}" alt="3-clone" />
                        </div>
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
                        <p class="blog-description">Every moment is a memory – watch how we brought their special day to
                            life in style.</p>
                        <span class="blog-date">March 2025</span>
                    </div>
                </a>

                <!-- Blog Post 2 -->
                <a href="blog-details.html?id=2" class="blog-card">
                    <img src="{{ asset('images/evn.jpg') }}" alt="Event Setup">
                    <div class="blog-content">
                        <h3 class="blog-post-title">Full Event Branding & Media Solutions</h3>
                        <p class="blog-description">From concept to execution – lights, visuals, and a powerful brand
                            message delivered
                            seamlessly.</p>
                        <span class="blog-date">January 2025</span>
                    </div>
                </a>

                <!-- Blog Post 3 -->
                <a href="blog-details.html?id=3" class="blog-card">
                    <img src="{{ asset('images/bab.jpg') }}" alt="Baby Photoshoot">
                    <div class="blog-content">
                        <h3 class="blog-post-title">Tiny Toes, Big Smiles</h3>
                        <p class="blog-description">A heartwarming baby shoot filled with innocence, color, and beautiful
                            giggles.</p>
                        <span class="blog-date">February 2025</span>
                    </div>
                </a>
            </div>

            <!-- See More Button -->
            <div class="see-more-container">
                <a href="{{ route('blog') }}" class="see-more-btn">See More</a>
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
            document.addEventListener("DOMContentLoaded", function() {
                document.getElementById('contactForm').addEventListener('submit', function(event) {
                    event.preventDefault(); // Prevent default form submission

                    let form = this;
                    let formData = new FormData(form);
                    let alertBox = document.getElementById('alertBox');

                    fetch(form.action, {
                        method: "POST",
                        headers: {
                            "X-Requested-With": "XMLHttpRequest",
                            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                        },
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        alertBox.style.display = "block";
                        if (data.success) {
                            alertBox.style.backgroundColor = "#d4edda"; // Green background
                            alertBox.style.color = "#155724"; // Dark green text
                            alertBox.style.border = "1px solid #c3e6cb";
                            alertBox.innerHTML = "✅ Message sent successfully!";
                            form.reset(); // Reset form after success
                        } else {
                            alertBox.style.backgroundColor = "#f8d7da"; // Red background
                            alertBox.style.color = "#721c24"; // Dark red text
                            alertBox.style.border = "1px solid #f5c6cb";
                            alertBox.innerHTML = "❌ Something went wrong. Please try again.";
                        }
                        setTimeout(() => alertBox.style.display = "none", 5000);
                    })
                    .catch(error => {
                        alertBox.style.display = "block";
                        alertBox.style.backgroundColor = "#f8d7da";
                        alertBox.style.color = "#721c24";
                        alertBox.style.border = "1px solid #f5c6cb";
                        alertBox.innerHTML = "❌ Unable to send message.";
                    });
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
                        <p>We offer video production, photography, digital marketing, branding, and creative content
                            development
                            tailored to your needs.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item">
                    <button class="faq-question">Where is Yarl Creators located?</button>
                    <div class="faq-answer">
                        <p>We are based in Jaffna, Sri Lanka, and provide services across the country and internationally.
                        </p>
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
                        <p>You can fill out the contact form on our website or reach us directly via phone or email to
                            schedule
                            a free consultation.</p>
                    </div>
                </div>
            </div>
        </section>



    </body>
@endsection
