

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile | Yarl Creators</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="{{asset('images/logo.png')}}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
</head>

<body>

    <!-- Hero -->
    <section class="hero-banner">
        <div class="overlay">
            <h1>About Yarl Creators</h1>
            <p>Digital Media Production Company Based in Jaffna</p>
        </div>
    </section>

    <!-- Profile Sections -->
    <div class="profile-content">

        <!-- Edit Profile -->
        <div class="section">
            <div class="hero">
            <img id="profilePic" src="{{asset('Profile/m1.jpg')}}" alt="Profile Picture">
            <h1 id="profileName">John Doe</h1>
            <p id="profileEmail">john@example.com</p>
            <label for="uploadPhoto" class="change-photo">Change Photo</label>
            <input type="file" id="uploadPhoto" style="display:none" onchange="changePhoto(event)">
            </div>
            <h2>👤 Edit Profile</h2>
            <label>Full Name</label>
            <input type="text" id="fullName" value="John Doe">
            <label>Email Address</label>
            <input type="email" id="email" value="john@example.com">
            <label>Phone Number</label>
            <input type="text" id="phone" value="+94 76 606 0499">
            <label>Address</label>
            <input type="text" id="address" value="Jaffna, Sri Lanka">
            <button class="save-btn" onclick="saveProfile()">💾 Save Profile</button>
        </div>

        <!-- Change Password -->
        <div class="section">
            <h2>🔒 Change Password</h2>
            <label>Current Password</label>
            <input type="password" id="currentPassword">
            <label>New Password</label>
            <input type="password" id="newPassword">
            <label>Confirm New Password</label>
            <input type="password" id="confirmPassword">
            <button class="save-btn" onclick="updatePassword()">🔄 Update Password</button>
        </div>

    </div>

    <!-- Bottom Navbar -->

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


    <script>
        function changePhoto(event) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('profilePic').src = e.target.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        function saveProfile() {
            alert('✅ Profile Updated Successfully!');
        }

        function updatePassword() {
            alert('🔒 Password Changed Successfully!');
        }
    </script>

</body>

</html>
