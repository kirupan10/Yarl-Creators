<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Blog Management | Yarl Creators</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" href="../Assets/images/logo.png" type="image/png" />
    <link rel="stylesheet" href="./admin_assets/css/blog_management.css" />

</head>

<body>

    <!-- Sidebar -->
    <nav class="sidebar">
        <h2>Yarl Creators</h2>
        <a href="dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="booking-management"><i class="fas fa-calendar-check"></i> Bookings</a>
        <a href="inventory-management"><i class="fas fa-boxes"></i> Inventory</a>
        <a href="blog-management" class="active"><i class="fas fa-blog"></i> Blog</a>
        <a href="order-management"><i class="fas fa-shopping-cart"></i> Orders</a>
        <a href="report-management"><i class="fas fa-chart-line"></i> Reports</a>
        <a href="user-management"><i class="fas fa-users"></i> Users</a>
        <a href="settings"><i class="fas fa-cog"></i> Settings</a>
        <a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
    </nav>

    <!-- Main -->
    <main>
        <header>
    <h1>📚 Admin Blog Management</h1>
    <p>Create, view, and manage all blog posts efficiently.</p>
</header>


        <div class="actions-top">
            <button onclick="window.location.href='create-blog.html'">➕ New Blog</button>
        </div>

        <section class="blog-grid" id="blogList">
            <!-- Dynamic blogs will load here -->
        </section>

        <!-- Modal -->
        <div id="blogModal" class="modal">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal()">×</button>
                <img id="modalImage" src="" alt="Blog Main Image">
                <h2 id="modalTitle"></h2>
                <p id="modalMeta"></p>
                <p id="modalExcerpt"></p>

                <div class="modal-gallery" id="modalGallery"></div>

                <div class="modal-actions">
                    <button class="edit-btn" onclick="goToEditPage()">✏ Edit</button>
                    <button class="delete-btn" onclick="alert('Delete Blog')">🗑 Delete</button>
                </div>
            </div>
        </div>

    </main>

    <script>
        const blogs = [
            {
                id: 1,
                title: "Wedding Highlight | Vimitha & Gokulan",
                date: "March 2025",
                category: "Wedding",
                image: "../Assets/images/wed.jpg",
                excerpt: "Every moment is a memory – watch how we brought their special day to life.",
                gallery: ["../Assets/images/bride.jpg", "../Assets/images/high.jpg", "../Assets/images/rece.jpg"]
            },
            {
                id: 2,
                title: "Event Branding & Media Solutions",
                date: "January 2025",
                category: "Event",
                image: "../Assets/images/evn.jpg",
                excerpt: "Lights, visuals, branding – we transform venues into experiences.",
                gallery: ["../Assets/images/event1.jpg", "../Assets/images/event2.jpg", "../Assets/images/event3.jpg"]
            },
            {
                id: 3,
                title: "Tiny Toes, Big Smiles",
                date: "February 2025",
                category: "Photography",
                image: "../Assets/images/bab.jpg",
                excerpt: "Capturing the beautiful innocence of little ones.",
                gallery: ["../Assets/images/baby1.jpg", "../Assets/images/baby2.jpg", "../Assets/images/baby3.jpg"]
            }
        ];

        let selectedBlogId = null;

        function renderBlogs() {
            const blogList = document.getElementById("blogList");
            blogList.innerHTML = "";
            blogs.forEach((blog, index) => {
                blogList.innerHTML += `
        <div class="blog-card" onclick="openModal(${index})">
          <img src="${blog.image}" alt="${blog.title}">
          <div class="info">
            <h2>${blog.title}</h2>
            <p>By Yarl Creators · ${blog.date} · #${blog.category}</p>
          </div>
        </div>
      `;
            });
        }

        function openModal(index) {
            const blog = blogs[index];
            selectedBlogId = blog.id;
            document.getElementById('modalImage').src = blog.image;
            document.getElementById('modalTitle').textContent = blog.title;
            document.getElementById('modalMeta').textContent = `By Yarl Creators · ${blog.date} · #${blog.category}`;
            document.getElementById('modalExcerpt').textContent = blog.excerpt;
            const gallery = document.getElementById('modalGallery');
            gallery.innerHTML = blog.gallery.map(img => `<img src="${img}" alt="Gallery Image">`).join('');
            document.getElementById('blogModal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('blogModal').style.display = 'none';
        }

        function goToEditPage() {
            if (selectedBlogId !== null) {
                window.location.href = `edit-blog.html?id=${selectedBlogId}`;
            }
        }

        window.onload = renderBlogs;
    </script>

</body>

</html>
