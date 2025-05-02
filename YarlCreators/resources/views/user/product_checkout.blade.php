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
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout | Yarl Creators</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
        :root {
            --primary: #fca311;
            --dark: #0d0d0d;
            --gray: #1f1f1f;
            --light: #e5e5e5;
            --white: #fff;
        }

        * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            margin: 0;
            background: var(--dark);
            color: var(--light);
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: var(--primary);
            margin-bottom: 40px;
        }

        .checkout-container {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            max-width: 1200px;
            margin: auto;
        }

        .form-section,
        .summary-section {
            flex: 1;
            background: var(--gray);
            padding: 30px;
            border-radius: 15px;
        }

        .form-section h2,
        .summary-section h2 {
            color: var(--primary);
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px 15px;
            border: none;
            border-radius: 8px;
            background: #2b2b2b;
            color: var(--light);
        }

        .address-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .coupon-group {
            display: flex;
            gap: 10px;
        }

        .coupon-group input {
            flex: 1;
        }

        .verify-btn {
            background: var(--primary);
            border: none;
            color: #000;
            padding: 10px 18px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
        }

        .verify-btn:hover {
            background: var(--white);
            color: var(--dark);
            box-shadow: 0 0 12px var(--primary);
        }

        .order-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #444;
            padding: 15px 0;
        }

        .order-item-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .order-item-left img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 10px;
        }

        .item-info h4 {
            margin: 0;
            font-size: 16px;
        }

        .item-info small {
            color: #aaa;
        }

        .order-summary {
            margin-top: 20px;
            font-size: 16px;
        }

        .order-summary p {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
        }

        .total {
            font-size: 18px;
            font-weight: bold;
            border-top: 1px solid #555;
            padding-top: 10px;
            margin-top: 10px;
        }

        .place-order-btn {
            margin-top: 30px;
            width: 100%;
            padding: 14px;
            font-size: 16px;
            background: var(--primary);
            border: none;
            border-radius: 10px;
            font-weight: bold;
            color: #000;
            cursor: pointer;
        }

        .place-order-btn:hover {
            background: var(--white);
            color: var(--dark);
            box-shadow: 0 0 12px var(--primary);
        }

        @media (max-width: 768px) {
            .checkout-container {
                flex-direction: column;
            }

            .address-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <h1>Checkout</h1>

    <div class="checkout-container">
        <div class="form-section">
            <h2>Billing Details</h2>

            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" placeholder="Your Name" />
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" placeholder="example@email.com" />
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" placeholder="+94 77xxxxxxx" />
            </div>

            <div class="form-group">
                <label for="street">Street Address</label>
                <input type="text" id="street" placeholder="123 Main St" />
            </div>

            <div class="address-grid">
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" id="city" placeholder="Jaffna" />
                </div>
                <div class="form-group">
                    <label for="state">State/Province</label>
                    <input type="text" id="state" placeholder="Northern" />
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" id="country" placeholder="Sri Lanka" />
                </div>
                <div class="form-group">
                    <label for="zip">Zip/Postal Code</label>
                    <input type="text" id="zip" placeholder="40000" />
                </div>
            </div>

            <div class="form-group">
                <label for="coupon">Have a Coupon?</label>
                <div class="coupon-group">
                    <input type="text" id="coupon" placeholder="Enter coupon code" />
                    <button class="verify-btn" onclick="verifyCoupon()">Verify</button>
                </div>
            </div>

            <div class="form-group">
                <label for="payment">Payment Method</label>
                <select id="payment">
                    <option>Cash on Delivery</option>
                    <option>Credit/Debit Card</option>
                    <option>Bank Transfer</option>
                </select>
            </div>
        </div>

        <div class="summary-section">
            <h2>Order Summary</h2>

            <div class="order-item">
                <div class="order-item-left">
                    <img src="../assets/images/product/gd.png" alt="Lighting Kit" />
                    <div class="item-info">
                        <h4>Lighting Kit</h4>
                        <small>Qty: 1</small>
                    </div>
                </div>
                <div class="price">LKR 12,000</div>
            </div>

            <div class="order-item">
                <div class="order-item-left">
                    <img src="../assets/images/mug.jpg" alt="Magic Mug" />
                    <div class="item-info">
                        <h4>Magic Mug</h4>
                        <small>Qty: 2</small>
                    </div>
                </div>
                <div class="price">LKR 4,400</div>
            </div>

            <div class="order-summary">
                <p><span>Subtotal</span><span>LKR 16,400</span></p>
                <p><span>Discount</span><span id="discount">LKR 0</span></p>
                <p class="total"><span>Total</span><span id="totalAmount">LKR 16,400</span></p>
            </div>

            <button class="place-order-btn">Place Order</button>
        </div>
    </div>

    <script>
        function verifyCoupon() {
            const coupon = document.getElementById("coupon").value.trim().toUpperCase();
            const discountTag = document.getElementById("discount");
            const totalTag = document.getElementById("totalAmount");

            if (coupon === "YARL10") {
                discountTag.textContent = "LKR 1,640";
                totalTag.textContent = "LKR 14,760";
                alert("Coupon applied successfully!");
            } else {
                discountTag.textContent = "LKR 0";
                totalTag.textContent = "LKR 16,400";
                alert("Invalid coupon code!");
            }
        }
    </script>
</body>

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
    <a href="{{route('blog')}}" class="nav-item" data-page="blog">
        <i class="fas fa-blog"></i>
        <span>Blog</span>
    </a>
    <a href="{{route('gallery')}}" class="nav-item" data-page="shop">
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


<script defer src="./Assets/Js/galleryLoop.js"></script>


<!-- Scroll To Top Button -->
<button id="scrollToTopBtn" title="Go to top">
    <i class="fas fa-arrow-up"></i>
</button>

</body>

</html>
