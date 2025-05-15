<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yarl Creators</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/Booking_event.css')}}" />
    <link rel="stylesheet" href="{{asset('css/nav.css')}}" />
    <link rel="stylesheet" href="{{asset('css/ScrollToTop.css')}}" />
    <link rel="stylesheet" href="{{asset('css/footer.css')}}" />
    <link rel="icon" type="image/png" href="../assets/images/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body>

    <section class="hero">
        <h1>Book Your Event</h1>
        <p>Plan your perfect Photography, Videography, or Documentary session with Yarl Creators</p>
    </section>

    <section>
        <h2 class="section-title">Booking Form</h2>
        <div class="form-wrapper">
            <form id="bookingForm">
                <div class="form-group">
                    <label for="service">Select Service</label>
                    <select id="service" required onchange="showPackages()">
                        <option value="">-- Choose a Service --</option>
                        <option value="Photography">Photography</option>
                        <option value="Videography">Videography</option>
                        <option value="Documentary">Documentary</option>
                    </select>
                </div>

                <div class="form-group">
                    <label style="text-align: center; display: block;">Select Your Event Date</label>
                    <div class="calendar-container">
                        <div id="calendar"></div>
                    </div>
                    <input type="hidden" id="eventDate" required />
                </div>

                <div class="legend">
                    <div><span style="background:#E53935;"></span>Booked</div>
                    <div><span style="background:#FFC107;"></span>Hold</div>
                </div>

                <div class="form-group">
                    <label for="fullName">Full Name</label>
                    <input type="text" id="fullName" required />
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" required />
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" required />
                </div>

                <div class="form-group">
                    <label for="message">Message or Requirements</label>
                    <textarea id="message" rows="3"></textarea>
                </div>

                <div class="package-group" id="packageGroup"></div>

                <button type="submit" class="submit-btn">Confirm Booking</button>
            </form>
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
        <a href="{{route('blogpage')}}" class="nav-item" data-page="blog">
            <i class="fas fa-blog"></i>
            <span>Blog</span>
        </a>
        <a href="{{route('products')}}" class="nav-item" data-page="shop">
            <i class="fas fa-shopping-bag"></i>
            <span>Shop</span>
        </a>
        <a href="/" class="nav-item active" data-page="home">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
        <a href="{{route('about')}}" class="nav-item" data-page="services">
            <i class="fas fa-users"></i>
            <span>About</span>
        </a>
        <a href="{{route('contact')}}" class="nav-item" data-page="contact">
            <i class="fas fa-envelope"></i>
            <span>Contact</span>
        </a>
    </nav>

    <!-- Scroll To Top Button -->
    <button id="scrollToTopBtn" title="Go to top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="{{asset('Js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src=" {{asset('Js/booking-event.js')}}"></script>


</body>

</html>
