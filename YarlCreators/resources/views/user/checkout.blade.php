<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yarl Creators</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/ScrollToTop.css') }}" />
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

        <form action="{{ route('bookings.store') }}" method="POST" id="confirmBookingForm">
            @csrf
            <input type="hidden" name="service" id="hiddenService">
            <input type="hidden" name="date" id="hiddenDate">
            <input type="hidden" name="package" id="hiddenPackage">
            <input type="hidden" name="total" id="hiddenTotal">
            <input type="hidden" name="name" id="hiddenName">
            <input type="hidden" name="email" id="hiddenEmail">
            <input type="hidden" name="phone" id="hiddenPhone">
            <input type="hidden" name="message" id="hiddenMessage">
            <input type="hidden" name="payment" id="hiddenMessage">



        <script>
            const bookingDetails = JSON.parse(localStorage.getItem("bookingDetails"));

            if (bookingDetails) {
                document.getElementById("hiddenService").value = bookingDetails.service;
                document.getElementById("hiddenDate").value = bookingDetails.date;
                document.getElementById("hiddenPackage").value = bookingDetails.package;
                document.getElementById("hiddenTotal").value = bookingDetails.total || ''; // If you have a total
                document.getElementById("hiddenName").value = bookingDetails.name;
                document.getElementById("hiddenEmail").value = bookingDetails.email;
                document.getElementById("hiddenPhone").value = bookingDetails.phone;
                document.getElementById("hiddenMessage").value = bookingDetails.message;
                bookingDetails.payment = "Pay on Event Day"; // Default payment method

                // Also show in #summaryBox
                document.getElementById("summaryBox").innerHTML = `
                    <p><strong>Service:</strong> ${bookingDetails.service}</p>
                    <p><strong>Date:</strong> ${bookingDetails.date}</p>
                    <p><strong>Package:</strong> ${bookingDetails.package}</p>
                    <p><strong>Name:</strong> ${bookingDetails.name}</p>
                    <p><strong>Email:</strong> ${bookingDetails.email}</p>
                    <p><strong>Phone:</strong> ${bookingDetails.phone}</p>
                    <p><strong>Message:</strong> ${bookingDetails.message}</p>
                `;
            }
        </script>



        <!-- Hidden inputs to send summaryBox values to Laravel -->
        <input type="hidden" id="summaryService" name="summary_service">
        <input type="hidden" id="summaryDate" name="summary_date">
        <input type="hidden" id="summaryPackage" name="summary_package">
        <input type="hidden" id="summaryTotal" name="summary_total">

        <!-- Payment Selection -->
        <section class="payment-section card">
            <h2>Select Payment Method</h2>
            <label><input type="radio" name="payment" value="event" checked onchange="togglePaymentInputs()"> Pay on
                Event Day</label>
            <label><input type="radio" name="payment" value="bank" onchange="togglePaymentInputs()" disabled> Bank
                Transfer</label>
            <label><input type="radio" name="payment" value="card" onchange="togglePaymentInputs()" disabled> Card
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
            <button type="submit" class="submit-btn">Confirm Booking</button>
            <p class="secure-msg">🔒 Your payment is secure and encrypted</p>
        </section>

    </form>
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
                    <a href="https://www.instagram.com/yarl_creators/" target="_blank"><i
                            class="fab fa-instagram"></i></a>
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

    <script src="{{ asset('Js/script.js') }}"></script>
    <script src="{{ asset('Js/checkout.js') }}"></script>


</body>

</html>
