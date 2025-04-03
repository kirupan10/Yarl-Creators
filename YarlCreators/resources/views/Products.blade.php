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

    </section>

    <section class="featured-products">

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



@endsection


