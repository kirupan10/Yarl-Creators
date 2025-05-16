<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yarl Creators</title>
    <link rel="stylesheet" href="{{ asset('blog/css/blog.css') }}"  />
    <link rel="stylesheet" href="{{ asset('blog/css/nav.css') }}" />
    <link rel="stylesheet" href="{{ asset('blog/css/ScrollToTop.css') }}" />
    <link rel="stylesheet" href="{{ asset('blog/css/footer.css') }} " />
    <link rel="icon" type="image/png" href="{{ asset('blog/images/logo.png') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body>

    <!-- Blog Hero Section -->
    <section class="blog-hero">
        <h1>Insights & Inspiration</h1>
        <p>Explore our stories, updates, and the creative journeys behind our work.</p>
    </section>

    <main class="blog-main">
        <!-- Blog Posts Section -->
        <section class="blog-posts">
            <article class="blog-card">
                <img src=" {{ asset('images/wed.jpg') }}" alt="Blog Image" />
                <div class="blog-info">
                    <h2>Wedding Highlight | Vimitha & Gokulan</h2>
                    <p class="blog-meta">By Yarl Creators · March 2025 · <span>#Wedding</span></p>
                    <p class="blog-excerpt">Every moment is a memory – watch how we brought their special day to life in
                        cinematic style.</p>
                    <a href="blog-details.html?id=1" class="read-more">Read More →</a>
                </div>
            </article>

            <article class="blog-card">
                <img src=" {{ asset('images/evn.jpg') }}" alt="Blog Image" />
                <div class="blog-info">
                    <h2>Event Branding & Media Solutions</h2>
                    <p class="blog-meta">By Yarl Creators · January 2025 · <span>#Event</span></p>
                    <p class="blog-excerpt">Lights, visuals, branding – discover how we transform ordinary venues into
                        immersive brand experiences.</p>
                    <a href="blog-details.html?id=2" class="read-more">Read More →</a>
                </div>
            </article>
        </section>

        <!-- Sidebar -->
        <aside class="blog-sidebar">
            <div class="search-box">
                <input type="text" placeholder="Search blogs..." />
                <i class="fas fa-search"></i>
            </div>

            <div class="sidebar-section recent-posts">
                <h3>Recent Posts</h3>
                <ul>
                    <li>
                        <a href="blog-details.html?id=3">
                            <img src="{{ asset('images/evn.jpg') }}" alt="Tiny Toes" />
                            <div>
                                <p class="post-title">Tiny Toes, Big Smiles</p>
                                <span class="post-date">Feb 2025</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="blog-details.html?id=2">
                            <img src="{{ asset('images/evn.jpg') }}" alt="Event Branding" />
                            <div>
                                <p class="post-title">Event Branding Magic</p>
                                <span class="post-date">Jan 2025</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="blog-details.html?id=1">
                            <img src="{{ asset('images/wed.jpg') }}" alt="Wedding Highlight" />
                            <div>
                                <p class="post-title">Wedding Highlight Reel</p>
                                <span class="post-date">Mar 2025</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>


            <div class="sidebar-section">
                <h3>Categories</h3>
                <ul>
                    <li><a href="#">Photography</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Branding</a></li>
                    <li><a href="#">Video Production</a></li>
                </ul>
            </div>
        </aside>
    </main>

    <footer class="footer">
        <div class="footer-container">
            <!-- About -->
            <div class="footer-col">
                <h3>Yarl Creators</h3>
                <p>A full-service digital media production company based in Jaffna. We craft stories with creativity,
                    innovation, and passion.</p>
            </div>

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

    <!-- Scroll to Top Button -->
    <button id="scrollToTopBtn" title="Go to top">
        <i class="fas fa-arrow-up"></i>
    </button>


    <!-- Bottom Navigation -->
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

    <script defer src="./Assets/Js/script.js"></script>

</body>

</html>
