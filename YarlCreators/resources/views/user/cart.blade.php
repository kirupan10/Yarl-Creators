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

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping Cart | Yarl Creators</title>
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
            padding-bottom: 100px;
            /* reserve space for sticky bar */
        }

        header {
            background: linear-gradient(135deg, var(--primary), #14213D);
            padding: 60px 20px;
            text-align: center;
            color: var(--white);
        }

        h1 {
            margin: 0;
            font-size: 38px;
            text-transform: uppercase;
        }

        .cart-container {
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
        }

        .cart-item {
            background: var(--gray);
            border-radius: 12px;
            display: flex;
            align-items: center;
            padding: 20px;
            margin-bottom: 20px;
            gap: 15px;
            position: relative;
        }

        .cart-item input[type="checkbox"] {
            transform: scale(1.4);
            accent-color: var(--primary);
        }

        .cart-item img {
            width: 90px;
            height: 90px;
            border-radius: 10px;
            object-fit: cover;
            cursor: pointer;
        }

        .details {
            flex: 1;
        }

        .details h3 {
            margin: 0;
            color: var(--white);
            cursor: pointer;
        }

        .details small {
            color: #aaa;
        }

        .qty-controls {
            margin-top: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .qty-controls button {
            width: 36px;
            height: 36px;
            border: none;
            background: var(--primary);
            color: var(--dark);
            font-size: 20px;
            font-weight: bold;
            border-radius: 50%;
            cursor: pointer;
        }

        .qty-display {
            font-size: 16px;
            font-weight: bold;
            padding: 6px 16px;
            border-radius: 20px;
            background: #2a2a2a;
        }

        .price {
            margin-top: 10px;
            font-weight: bold;
            color: var(--primary);
        }

        .item-actions {
            position: absolute;
            top: 10px;
            right: 15px;
            display: flex;
            gap: 12px;
        }

        .item-actions button {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 18px;
            color: #e5e5e5;
            transition: color 0.3s ease;
        }

        .item-actions button:hover {
            color: var(--primary);
        }

        .checkout-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: #1f1f1f;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 -4px 15px rgba(0, 0, 0, 0.6);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 30px;
            z-index: 999;
            backdrop-filter: blur(10px);
        }

        .checkout-bar strong {
            font-size: 18px;
            color: var(--light);
        }

        .checkout-btn {
            background: var(--primary);
            color: var(--dark);
            padding: 12px 26px;
            border: none;
            border-radius: 30px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 0 10px rgba(252, 163, 17, 0.3);
        }

        .checkout-btn:hover {
            background: var(--white);
            color: var(--dark);
            box-shadow: 0 0 15px rgba(252, 163, 17, 0.6);
        }

        .modal {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.85);
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .modal-content {
            background: #1a1a1a;
            padding: 30px;
            border-radius: 12px;
            width: 90%;
            max-width: 500px;
            position: relative;
            color: var(--light);
        }

        .modal-header {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .modal-header img {
            width: 100px;
            height: 100px;
            border-radius: 10px;
            object-fit: cover;
        }

        .modal-body ul {
            list-style: none;
            padding: 0;
        }

        .modal-body ul li {
            margin-bottom: 10px;
        }

        .close-modal {
            position: absolute;
            top: 10px;
            right: 20px;
            background: none;
            border: none;
            font-size: 24px;
            color: #fff;
            cursor: pointer;
        }

        @media(max-width: 768px) {
            .cart-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .checkout-bar {
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>Shopping Cart</h1>
    </header>

    <div class="cart-container" id="cartContainer"></div>

    <div class="checkout-bar">
        <strong>Total: LKR <span id="totalAmount">0</span></strong>
        <button class="checkout-btn" onclick="window.location.href='product-checkout'">Checkout</button>
    </div>

    <div id="productModal" class="modal">
        <div class="modal-content">
            <button class="close-modal" onclick="closeModal()">&times;</button>
            <div class="modal-header">
                <img id="modalImage" src="" alt="Product" />
                <div>
                    <h2 id="modalTitle"></h2>
                    <p id="modalPrice"></p>
                </div>
            </div>
            <div class="modal-body">
                <p id="modalDesc"></p>
                <ul id="modalSpecs"></ul>
            </div>
        </div>
    </div>

    <script>
        const products = [{
                id: 1,
                name: "Lighting Kit",
                image: "../assets/images/product/gd.png",
                price: 12000,
                desc: "Softbox LED studio setup",
                specs: ["LED bulbs", "Softbox included", "Portable design"],
                qty: 1,
            },
            {
                id: 2,
                name: "Magic Color Mug",
                image: "../assets/images/mug.jpg",
                price: 2200,
                desc: "Custom mug that changes color",
                specs: ["Heat sensitive", "Durable ceramic", "11oz capacity"],
                qty: 1,
            },
        ];

        function renderCart() {
            const container = document.getElementById("cartContainer");
            container.innerHTML = "";
            products.forEach((p, i) => {
                container.innerHTML += `
        <div class="cart-item">
          <div class="item-actions">
            <button onclick="toggleFavorite(${i})"><i class="fas fa-heart"></i></button>
            <button onclick="removeItem(${i})"><i class="fas fa-trash"></i></button>
          </div>
          <input type="checkbox" class="select-item" onchange="updateTotal()">
          <img src="${p.image}" onclick="openModal(${i})" />
          <div class="details">
            <h3 onclick="openModal(${i})">${p.name}</h3>
            <small>${p.desc}</small>
            <div class="qty-controls">
              <button onclick="changeQty(${i}, -1)">−</button>
              <span class="qty-display">${p.qty}</span>
              <button onclick="changeQty(${i}, 1)">+</button>
            </div>
            <div class="price">LKR ${p.price.toLocaleString()}</div>
          </div>
        </div>`;
            });
            updateTotal();
        }

        function changeQty(index, delta) {
            products[index].qty = Math.max(1, products[index].qty + delta);
            renderCart();
        }

        function removeItem(index) {
            products.splice(index, 1);
            renderCart();
        }

        function updateTotal() {
            let total = 0;
            document.querySelectorAll(".cart-item").forEach((item, i) => {
                const checked = item.querySelector(".select-item").checked;
                if (checked) total += products[i].qty * products[i].price;
            });
            document.getElementById("totalAmount").textContent = total.toLocaleString();
        }

        function checkout() {
            const selected = [...document.querySelectorAll(".select-item")].filter(c => c.checked);
            if (!selected.length) return alert("Please select at least one item.");
            alert("Proceeding to checkout...");
        }

        function openModal(index) {
            const p = products[index];
            document.getElementById("modalImage").src = p.image;
            document.getElementById("modalTitle").textContent = p.name;
            document.getElementById("modalPrice").textContent = `Price: LKR ${p.price.toLocaleString()}`;
            document.getElementById("modalDesc").textContent = p.desc;
            const specsList = document.getElementById("modalSpecs");
            specsList.innerHTML = "";
            p.specs.forEach(s => {
                const li = document.createElement("li");
                li.innerHTML =
                    `<i class='fas fa-check-circle' style='color: var(--primary); margin-right: 8px;'></i>${s}`;
                specsList.appendChild(li);
            });
            document.getElementById("productModal").style.display = "flex";
        }

        function closeModal() {
            document.getElementById("productModal").style.display = "none";
        }

        function toggleFavorite(index) {
            alert(`Marked "${products[index].name}" as favorite!`);
        }

        renderCart();
    </script>

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
        <a href="{{ route('blogpage') }}" class="nav-item" data-page="blog">
            <i class="fas fa-blog"></i>
            <span>Blog</span>
        </a>
        <a href="{{ route('products') }}" class="nav-item" data-page="shop">
            <i class="fas fa-shopping-bag"></i>
            <span>Shop</span>
        </a>
        <a href="/" class="nav-item active" data-page="home">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
        <a href="{{ route('about') }}" class="nav-item" data-page="services">
            <i class="fas fa-users"></i>
            <span>About</span>
        </a>
        <a href="{{ route('contact') }}" class="nav-item" data-page="contact">
            <i class="fas fa-envelope"></i>
            <span>Contact</span>
        </a>
    </nav>
</body>

</html>
