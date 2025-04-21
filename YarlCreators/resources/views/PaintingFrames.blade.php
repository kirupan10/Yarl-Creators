@extends('layout')

@section('content')


<body>

    <!-- Featured Products Section -->
    <section class="featured-products">
        <h2 class="section-title">Painting Frames</h2>

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



@endsection


