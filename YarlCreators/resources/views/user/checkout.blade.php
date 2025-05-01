<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yarl Creators</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}" />
    <link rel="stylesheet" href="{{asset('css/nav.css')}}" />
    <link rel="stylesheet" href="{{asset('css/footer.css')}}" />
    <link rel="stylesheet" href="{{asset('css/ScrollToTop.css')}}" />
    <link rel="icon" type="image/png" href="../assets/images/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

</head>

<body>

    <header class="hero-banner">
        <div class="overlay">
            <h1>Confirm Your Booking</h1>
            <p>Review your details and choose your payment option</p>
        </div>
    </header>

    <main class="checkout-container">
        <!-- Booking Summary -->
        <section class="booking-summary card">
            <h2>Booking Summary</h2>
            <div class="summary-content" id="summaryBox"></div>
        </section>

        <!-- Payment Selection -->
        <section class="payment-section card">
            <h2>Select Payment Method</h2>
            <label><input type="radio" name="payment" value="event" checked onchange="togglePaymentInputs()"> Pay on
                Event Day</label>
            <label><input type="radio" name="payment" value="bank" onchange="togglePaymentInputs()"> Bank
                Transfer</label>
            <label><input type="radio" name="payment" value="card" onchange="togglePaymentInputs()"> Card
                Payment</label>

            <div id="paymentInputs">
                <div id="bankFields" class="payment-fields hidden">
                    <input type="text" placeholder="Bank Name" />
                    <input type="text" placeholder="Transaction ID" />
                </div>
                <div id="cardFields" class="payment-fields hidden">
                    <input type="text" placeholder="Card Number" />
                    <input type="text" placeholder="Expiry Date (MM/YY)" />
                    <input type="text" placeholder="CVV" />
                </div>
            </div>
        </section>

        <!-- Coupon -->
        <section class="coupon-section card">
            <h2>Have a Coupon?</h2>
            <div class="coupon-input">
                <input type="text" id="couponCode" placeholder="Enter coupon code" />
                <button onclick="applyCoupon()">Apply</button>
            </div>
        </section>

        <!-- Final -->
        <section class="final-section card" style="margin-bottom: 25px;">
            <button onclick="finalSubmit()" class="submit-btn">Complete Booking</button>
            <p class="secure-msg">🔒 Your payment is secure and encrypted</p>
        </section>
    </main>

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

    <script src="{{asset('Js/script.js')}}"></script>
    <script src="{{asset('Js/checkout.js')}}"></script>


</body>

</html>
