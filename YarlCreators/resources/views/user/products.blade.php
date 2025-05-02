@extends('layout')

@section('content')
<style>
    :root {
        --primary: #fca311;
        --dark: #000000;
        --light: #e5e5e5;
        --glass: rgba(255, 255, 255, 0.05);
        --white: #ffffff;
    }

    body {
        background: var(--dark);
        color: var(--light);
        font-family: 'Poppins', sans-serif;

    }

    h1,
    h2 {
        text-align: center;
        color: var(--primary);
        margin-bottom: 25px;
    }

    .category-section {
        margin-bottom: 70px;
        padding: 40px 30px;
    }

    .product-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        justify-items: center;
    }

    .product-card {
        background: var(--glass);
        backdrop-filter: blur(12px);
        border-radius: 15px;
        padding: 20px;
        width: 100%;
        max-width: 270px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        text-align: center;
        transition: transform 0.3s ease;
    }

    .product-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 25px rgba(252, 163, 17, 0.3);
        cursor: pointer;
    }

    .product-card img {
width: 100%;
height: 180px;
object-fit:contain;
border-radius: 12px;
}


    .product-info {
        margin-top: 15px;
    }

    .product-info h3 {
        color: var(--white);
        font-size: 18px;
        margin-bottom: 5px;
    }

    .product-info p {
        font-size: 13px;
        color: var(--light);
        margin-bottom: 10px;
    }

    .product-info .price {
        font-weight: bold;
        color: var(--white);
        margin-bottom: 12px;
    }

    .add-to-cart-btn {
        background: var(--primary);
        color: var(--dark);
        border: none;
        padding: 10px 18px;
        border-radius: 25px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .add-to-cart-btn:hover {
        background: var(--white);
        color: var(--dark);
        box-shadow: 0 0 15px var(--primary);
    }

    @media (max-width: 1200px) {
        .product-container {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 768px) {
        .product-container {
            grid-template-columns: repeat(2, 1fr);
        }

        .product-card {
            max-width: 100%;
        }
    }

    @media (max-width: 500px) {
        .product-container {
            grid-template-columns: 1fr;
        }
    }

    .product-hero {
width: 90%;
margin: 8rem auto 0;
height: 400px;
background: linear-gradient(135deg, #FCA311, #14213D);
border-radius: 20px;
box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
position: relative;
overflow: hidden;
display: flex;
align-items: center;
justify-content: center;
text-align: center;
}

.product-hero-overlay {
padding: 40px;
z-index: 2;
}

.product-hero h1 {
font-size: 64px;
color: #ffffff;
text-transform: uppercase;
letter-spacing: 5px;
margin-bottom: 15px;
}

.product-hero p {
font-size: 18px;
color: #E5E5E5;
font-weight: 400;
max-width: 700px;
margin: 0 auto;
}

.category-section h2 {
margin-top: 50px;
font-size: 32px;
font-weight: 600;
color: #FCA311;
text-align: center;
margin-bottom: 40px;
position: relative;
text-transform: uppercase;
letter-spacing: 1.5px;
}

.category-section h2::after {
content: "";
position: absolute;
bottom: -10px;
left: 50%;
transform: translateX(-50%);
width: 60px;
height: 3px;
background: #FCA311;
box-shadow: 0 0 8px #FCA311, 0 0 15px rgba(252, 163, 17, 0.5);
border-radius: 50px;
}

.modal {
position: fixed;
inset: 0;
background: rgba(0, 0, 0, 0.85);
display: none;
align-items: center;
justify-content: center;
z-index: 9999;
padding: 20px;
}

.modal-content {
background: #111;
color: #e5e5e5;
border-radius: 15px;
max-width: 700px;
width: 100%;
padding: 30px;
position: relative;
box-shadow: 0 8px 30px rgba(252, 163, 17, 0.3);
}

.modal-header {
display: flex;
align-items: center;
gap: 20px;
border-bottom: 1px solid #333;
padding-bottom: 20px;
}

.modal-header img {
width: 120px;
height: 120px;
border-radius: 12px;
object-fit: cover;
}

.modal-body {
padding-top: 20px;
}

.modal-body p {
font-size: 15px;
line-height: 1.6;
margin-bottom: 15px;
}

#modalSpecs {
list-style: none;
padding-left: 0;
margin-bottom: 20px;
}

#modalSpecs li {
margin-bottom: 10px;
font-size: 14px;
}

#modalSpecs li i {
color: #fca311;
margin-right: 10px;
}

.close-modal {
position: absolute;
top: 15px;
right: 20px;
font-size: 24px;
background: none;
border: none;
color: #fff;
cursor: pointer;
transition: 0.2s;
}

.close-modal:hover {
color: #fca311;
}

.modal-cart {
background: #fca311;
color: #000;
padding: 10px 25px;
border-radius: 25px;
font-weight: bold;
border: none;
cursor: pointer;
transition: all 0.3s ease-in-out;
}

.modal-cart:hover {
background: #fff;
color: #000;
box-shadow: 0 0 15px rgba(252, 163, 17, 0.5);
}

.floating-cart {
position: fixed;
top: 30px;
right: 30px;
width: 55px;
height: 55px;
background: #fca311;
color: #000;
border-radius: 50%;
display: none;
justify-content: center;
align-items: center;
font-size: 24px;
z-index: 999;
box-shadow: 0 0 15px rgba(252, 163, 17, 0.6);
animation: bounce 0.8s ease-in-out infinite;
text-decoration: none;
transition: transform 0.2s ease;
}

.floating-cart:hover {
transform: scale(1.1);
}

.cart-count {
position: absolute;
top: -5px;
right: -5px;
background: #fff;
color: #000;
width: 18px;
height: 18px;
font-size: 12px;
border-radius: 50%;
display: flex;
align-items: center;
justify-content: center;
}

@keyframes bounce {
0%, 100% { transform: translateY(0); }
50% { transform: translateY(-6px); }
}


</style>

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
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
                <img src=" {{ asset('images/bag.jpg') }}" alt="Photography Bags & Cases">
                <div class="product-info">
                    <h3>Photography Bags & Cases</h3>
                    <p>Essential for keeping the safe of photography and video Camera</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <img src="{{ asset('images/sdcard.jpg') }}" alt="SD Card">
                <div class="product-info">
                    <h3>Memory Cards & Accessories
                    </h3>
                    <p>Essential for storing the photography and videos with high speed</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card">
                <img src="{{ asset('images/battery.jpg') }}" alt="Batteries & Power">
                <div class="product-info">
                    <h3>Batteries & Power</h3>
                    <p>Essential for keep your camera alive when you taking to outdoors photography videography shoots.</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
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
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
                <img src=" {{ asset('images/portrait1.png') }}" alt="Painting Frame">
                <div class="product-info">
                    <h3>light walnut gallery frame <br> 18”x24"</h3>
                    <p>Ideal for medium-sized paintings.</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <img src="{{ asset('images/OIP.jpeg') }}" alt="Sketches">
                <div class="product-info">
                    <h3>Movie Poster Frame <br> 32”x44"</h3>
                    <p>Perfect for larger paintings. </p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card">
                <img src="{{ asset('images/pano.jpg') }}" alt="Mug Printing">
                <div class="product-info">
                    <h3>Panoramic Frame <br> 16" x 40" </h3>
                    <p>wide landscape photography, artwork, or specialty prints.</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
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
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
            </div>
        </div>

    </section>

    <section class="featured-products">
        <h2 class="section-title">Mug Printing</h2>

        <div class="product-container">

            <!-- Product 2 -->
            <div class="product-card">
                <img src=" {{ asset('images/do.jpeg') }}" alt="Painting Frame">
                <div class="product-info">
                    <h3>Demitasse cup <br> 90–120 m</h3>
                    <p>Similar to an espresso cup, but slightly larger.</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card">
                <img src="{{ asset('images/coffee.jpg') }}" alt="Mug Printing">
                <div class="product-info">
                    <h3>Coffee cup <br> 240–355ml </h3>
                    <p>Medium to large cups used for serving coffee or other hot beverages.</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/mag.jpeg') }}" alt="Mug Printing">
                <div class="product-info">
                    <h3>Mug <br> 300–590 ml</h3>
                    <p>Large cups with handles, often serving coffee, tea, or other hot beverages.</p>
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/trumler.png') }}" alt="Mug Printing">
                <div class="product-info">
                    <h3>Tumbler <br> 300–710 ml</h3>
                    <p>Tall, thin cups without handles, often used to serve water or cold beverages.</p>
                    <button class="add-to-cart-btn">Add to Cart</button> 
                </div>
            </div>


        </div>




    </section>

    <a href="cart" id="floatingCart" class="floating-cart" title="Go to Cart">
        <i class="fas fa-shopping-cart"></i>
        <span class="cart-count" id="cartCount">1</span>
    </a>

    <script>
        // Simulate cart count
        let cartCount = 0;

        function addToCart() {
            cartCount++;
            const cartBtn = document.getElementById("floatingCart");
            const cartCountSpan = document.getElementById("cartCount");

            cartCountSpan.textContent = cartCount;
            cartBtn.style.display = "flex";

            // Temporary animation bounce trigger
            cartBtn.style.animation = "none";
            void cartBtn.offsetWidth; // Trigger reflow
            cartBtn.style.animation = "bounce 0.8s ease-in-out infinite";
        }

        // Add listener to all .add-to-cart-btn
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll(".add-to-cart-btn").forEach(btn => {
                btn.addEventListener("click", function (event) {
                    event.stopPropagation(); // prevent modal
                    addToCart();
                });
            });
        });
    </script>

@endsection


