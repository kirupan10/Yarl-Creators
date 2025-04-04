@extends('layout')

@section('content')


<body>

    <!-- Featured Products Section -->
    <section class="featured-products">
        <h2 class="section-title">Camera Accessories</h2>

        <div class="product-container">
            <!-- Product 1 -->
            <div class="product-card">
                <img src="{{ asset('images/Tripods.jpg') }}" alt="Tripods">
                <div class="product-info">
                    <h3>Tripods & Support</h3>
                    <p>Photo tripods are essential tools for serious photography and video work by amateur and professional photographers</p>
                    <button class="product-btn">Shop Now</button>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
                <img src=" {{ asset('images/bag.jpg') }}" alt="Photography Bags & Cases">
                <div class="product-info">
                    <h3>Photography Bags & Cases</h3>
                    <p>Essential for keeping the safe of photography and video Camera</p>
                    <button class="product-btn">Shop Now</button>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <img src="{{ asset('images/sdcard.jpg') }}" alt="SD Card">
                <div class="product-info">
                    <h3>Memory Cards & Accessories
                    </h3>
                    <p>Essential for storing the photography and videos with high speed</p>
                    <button class="product-btn">Shop Now</button>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card">
                <img src="{{ asset('images/battery.jpg') }}" alt="Batteries & Power">
                <div class="product-info">
                    <h3>Batteries & Power</h3>
                    <p>Essential for keep your camera alive when you taking to outdoors photography videography shoots.</p>
                    <button class="product-btn">Shop Now</button>
                </div>
            </div>
        </div>

    </section>

    <section class="featured-products">
        <h2 class="section-title">Painting Frames</h2>

        <div class="product-container">
            <!-- Product 1 -->
            <div class="product-card">
                <img src="{{ asset('images/flowers1.jpg') }}" alt="Camera Accessory">
                <div class="product-info">
                    <h3>Sleek Lacquer Frame <br> 8”x12”</h3>
                    <p>Suitable for small to medium-sized paintings.</p>
                    <button class="product-btn">Shop Now</button>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
                <img src=" {{ asset('images/portrait1.png') }}" alt="Painting Frame">
                <div class="product-info">
                    <h3>light walnut gallery frame <br> 18”x24"</h3>
                    <p>Ideal for medium-sized paintings.</p>
                    <button class="product-btn">Shop Now</button>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <img src="{{ asset('images/OIP.jpeg') }}" alt="Sketches">
                <div class="product-info">
                    <h3>Movie Poster Frame <br> 32”x44"</h3>
                    <p>Perfect for larger paintings. </p>
                    <button class="product-btn">Shop Now</button>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card">
                <img src="{{ asset('images/pano.jpg') }}" alt="Mug Printing">
                <div class="product-info">
                    <h3>Panoramic Frame <br> 16" x 40" </h3>
                    <p>wide landscape photography, artwork, or specialty prints.</p>
                    <button class="product-btn">Shop Now</button>
                </div>
            </div>
        </div>

    </section>

    <section class="featured-products">
        <h2 class="section-title">Sketches</h2>

        <div class="product-container">

            <!-- Product 3 -->
            <div class="product-card">
                <img src="{{ asset('images/SketchesFrame.png') }}" alt="Sketches">
                <div class="product-info">
                    <h3>Sketches</h3>
                    <p>Hand-drawn sketches that bring life to your artistic vision.</p>
                    <button class="product-btn">Shop Now</button>
                </div>
            </div>
        </div>

    </section>

    <section class="featured-products">
        <h2 class="section-title">Mug Printing</h2>

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



@endsection


