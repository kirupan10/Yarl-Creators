
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Bookings | Yarl Creators</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" href="../assets/images/logo.png" type="image/png" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/videoBanner.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blogs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <style>
        :root {
            --primary: #fca311;
            --dark: #000;
            --background: #1a1a1a;
            --glass: rgba(255, 255, 255, 0.05);
            --white: #ffffff;
            --light-gray: #e5e5e5;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background: var(--dark);
            color: var(--light-gray);
            padding: 30px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 32px;
            color: var(--primary);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: var(--glass);
            backdrop-filter: blur(12px);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        th,
        td {
            padding: 16px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        thead {
            background: var(--primary);
            color: var(--dark);
        }

        tbody tr:hover {
            background: rgba(255, 255, 255, 0.03);
        }

        .profile-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .view-btn {
            background: var(--primary);
            color: var(--dark);
            padding: 8px 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }

        .view-btn:hover {
            background: var(--white);
            color: var(--dark);
        }

        /* Modal */
.modal {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.8);
    justify-content: center;
    align-items: center;
    z-index: 999;
    padding: 20px;
}

.modal-content {
    background: var(--background);
    padding: 30px;
    border-radius: 15px;
    width: 100%;
    max-width: 800px;
    position: relative;
    color: var(--light-gray);
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.modal-header {
    text-align: center;
    margin-bottom: 20px;
}

.modal-header img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 10px;
    border: 2px solid var(--primary);
}

.modal-header h2 {
    color: var(--primary);
    margin: 0;
}

.modal-section {
    margin-bottom: 20px;
}

.modal-section h3 {
    font-size: 18px;
    color: var(--primary);
    margin-bottom: 10px;
}

.form-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.form-grid input {
    flex: 1 1 calc(50% - 15px);
    background: var(--glass);
    border: 1px solid #555;
    padding: 12px;
    border-radius: 8px;
    color: var(--light-gray);
    font-size: 14px;
}

.close-btn {
    position: absolute;
    top: 10px;
    right: 15px;
    background: transparent;
    border: none;
    font-size: 24px;
    color: var(--primary);
    cursor: pointer;
    transition: color 0.3s;
}

.close-btn:hover {
    color: var(--white);
}

@media(max-width: 768px) {
    .form-grid input {
        flex: 1 1 100%;
    }
}

    </style>
</head>

<body>

    <h1>📋 My Bookings</h1>

    <table>
        <thead>
            <tr>
                <th>Profile</th>
                <th>Name</th>
                <th>Service</th>
                <th>Package</th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bookings as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>
                        @if($booking->profile)
                            <img src="{{ asset('storage/images/' . $booking->profile) }}" width="50">
                        @else
                            N/A
                        @endif {{ $booking->name }}
                    </td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->service }} | {{ $booking->package }}</td>
                    <td>{{ $booking->date }}</td>
                    <td><strong style="color: gold;">{{ $booking->status }}</td>
                    <td><button class="view-btn" onclick="openModal(0)">View</button></td>
                </tr>
            @empty
                <tr><td colspan="12">No bookings found.</td></tr>

            @endforelse
        </tbody>
    </table>

    <!-- Modal -->
    <div id="userModal" class="modal">
        <div class="modal-content">
            <button class="close-btn" onclick="closeModal()">×</button>
            <div class="modal-header">
                <img id="modalProfile" src="" alt="Profile Image">
                <h2 id="modalName"></h2>
            </div>

            <div class="modal-section">
                <h3>Customer Details</h3>
                <div class="form-grid">
                    <input type="text" id="modalNIC" readonly placeholder="NIC">
                    <input type="text" id="modalPhone" readonly placeholder="Phone">
                    <input type="text" id="modalEmail" readonly placeholder="Email">
                    <input type="text" id="modalAddress" readonly placeholder="Address">
                </div>
            </div>

            <div class="modal-section">
                <h3>Booking Details</h3>
                <div class="form-grid">
                    <input type="text" id="modalService" readonly placeholder="Service">
                    <input type="text" id="modalPackage" readonly placeholder="Package">
                    <input type="text" id="modalDate" readonly placeholder="Booking Date">
                    <input type="text" id="modalStatus" readonly placeholder="Status">
                </div>
            </div>

            <div class="modal-section">
                <h3>Payment Details</h3>
                <div class="form-grid">
                    <input type="text" id="modalPaymentMethod" readonly placeholder="Payment Method">
                    <input type="text" id="modalTotalAmount" readonly placeholder="Total Amount">
                    <input type="text" id="modalPaidAmount" readonly placeholder="Paid Amount">
                </div>
            </div>
        </div>
    </div>

    <script>
        const bookings = [
            {
                id: 1,
                name: "John Doe",
                nic: "123456789V",
                phone: "0771234567",
                email: "john@example.com",
                address: "123 Main Street, Jaffna",
                service: "Photography",
                package: "Elite",
                date: "2025-04-25",
                profile: "../assets/images/Profile/m1.jpg",
                status: "Pending",
                payment: "Bank Transfer",
                totalAmount: "LKR 100,000",
                paidAmount: "LKR 25,000"
            }
        ];

        function openModal(index) {
            const booking = bookings[index];
            document.getElementById('modalProfile').src = booking.profile;
            document.getElementById('modalName').textContent = booking.name;
            document.getElementById('modalNIC').value = booking.nic;
            document.getElementById('modalPhone').value = booking.phone;
            document.getElementById('modalEmail').value = booking.email;
            document.getElementById('modalAddress').value = booking.address;
            document.getElementById('modalService').value = booking.service;
            document.getElementById('modalPackage').value = booking.package;
            document.getElementById('modalDate').value = booking.date;
            document.getElementById('modalPaymentMethod').value = booking.payment;
            document.getElementById('modalTotalAmount').value = booking.totalAmount;
            document.getElementById('modalPaidAmount').value = booking.paidAmount;
            document.getElementById('modalStatus').value = booking.status;
            document.getElementById('userModal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('userModal').style.display = 'none';
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
                    <li><a href="about">About Us</a></li>
                    <li><a href="profile">Profile</a></li>
                    <li><a href="booking-history">Booking History</a></li>
                    <li><a href="cart">cart</a></li>
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


<script defer src="./Assets/Js/galleryLoop.js"></script>


<!-- Scroll To Top Button -->
<button id="scrollToTopBtn" title="Go to top">
    <i class="fas fa-arrow-up"></i>
</button>


</html>
