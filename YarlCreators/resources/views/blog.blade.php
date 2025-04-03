@extends('layouts')
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
                <img src="./Assets/images/wed.jpg" alt="Blog Image" />
                <div class="blog-info">
                    <h2>Wedding Highlight | Vimitha & Gokulan</h2>
                    <p class="blog-meta">By Yarl Creators · March 2025 · <span>#Wedding</span></p>
                    <p class="blog-excerpt">Every moment is a memory – watch how we brought their special day to life in
                        cinematic style.</p>
                    <a href="blog-details.html?id=1" class="read-more">Read More →</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="./Assets/images/evn.jpg" alt="Blog Image" />
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
                            <img src="./Assets/images/bab.jpg" alt="Tiny Toes" />
                            <div>
                                <p class="post-title">Tiny Toes, Big Smiles</p>
                                <span class="post-date">Feb 2025</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="blog-details.html?id=2">
                            <img src="./Assets/images/evn.jpg" alt="Event Branding" />
                            <div>
                                <p class="post-title">Event Branding Magic</p>
                                <span class="post-date">Jan 2025</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="blog-details.html?id=1">
                            <img src="./Assets/images/wed.jpg" alt="Wedding Highlight" />
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

</html>
