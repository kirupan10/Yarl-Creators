<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Blog Management | Yarl Creators</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" href="../Assets/images/logo.png" type="image/png" />

    <style>
        :root {
            --primary: #EF233C;
            --secondary: #D90429;
            --background: #EDF2F4;
            --card-bg: #ffffff;
            --text-color: #2B2D42;
            --sidebar-bg: #2B2D42;
            --sidebar-text: #EDF2F4;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            font-family: 'Poppins', sans-serif;
            background: var(--background);
            color: var(--text-color);
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 240px;
            background: var(--sidebar-bg);
            height: 100vh;
            padding: 30px 20px;
            position: fixed;
            left: 0;
            top: 0;
            display: flex;
            flex-direction: column;
            gap: 20px;
            overflow-y: auto;
        }

        .sidebar h2 {
            color: var(--primary);
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar a {
            text-decoration: none;
            color: var(--sidebar-text);
            font-size: 16px;
            padding: 12px 15px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: 0.3s;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: var(--primary);
            color: white;
        }

        /* Main Content */
        main {
            margin-left: 240px;
            padding: 30px;
            width: calc(100% - 240px);
        }

        header {
            background: linear-gradient(135deg, var(--primary), var(--sidebar-bg));
            color: #fff;
            text-align: center;
            padding: 30px;
            border-radius: 20px;
            margin-bottom: 30px;
        }

        header h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .actions-top {
            text-align: center;
            margin-bottom: 30px;
        }

        .actions-top button {
            background: var(--primary);
            border: none;
            padding: 12px 20px;
            border-radius: 10px;
            font-weight: bold;
            font-size: 16px;
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }

        .actions-top button:hover {
            background: var(--secondary);
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        .blog-card {
            background: var(--card-bg);
            border-radius: 15px;
            overflow: hidden;
            transition: 0.3s;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .blog-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .blog-card .info {
            padding: 20px;
        }

        .blog-card .info h2 {
            font-size: 20px;
            color: var(--primary);
            margin-bottom: 8px;
        }

        .blog-card .info p {
            font-size: 14px;
            color: var(--text-color);
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
            padding: 20px;
            z-index: 999;
        }

        .modal-content {
            background: var(--card-bg);
            padding: 30px;
            border-radius: 15px;
            max-width: 800px;
            width: 100%;
            overflow-y: auto;
            max-height: 90vh;
            position: relative;
            animation: zoomIn 0.4s ease;
            color: var(--text-color);
        }

        @keyframes zoomIn {
            0% {
                transform: scale(0.8);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .modal-content img {
            width: 100%;
            max-height: 250px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 20px;
        }

        .modal-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-top: 20px;
        }

        .modal-gallery img {
            width: 100%;
            height: 140px;
            object-fit: cover;
            border-radius: 10px;
        }

        .modal-content h2 {
            color: var(--primary);
            margin-bottom: 10px;
        }

        .modal-content p {
            margin-bottom: 15px;
        }

        .modal-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .modal-actions button {
            padding: 10px 20px;
            border-radius: 10px;
            border: none;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .edit-btn {
            background: #3498db;
            color: #fff;
        }

        .edit-btn:hover {
            background: #2980b9;
        }

        .delete-btn {
            background: #e74c3c;
            color: #fff;
        }

        .delete-btn:hover {
            background: #c0392b;
        }

        .close-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            background: transparent;
            border: none;
            font-size: 24px;
            color: var(--text-color);
            cursor: pointer;
        }

        @media (max-width: 768px) {
            main {
                margin-left: 0;
                width: 100%;
            }

            .sidebar {
                display: none;
            }
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <nav class="sidebar">
        <h2>Yarl Creators</h2>
        <a href="dashboard" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="booking-management"><i class="fas fa-calendar-check"></i> Bookings</a>
        <a href="inventory-management"><i class="fas fa-boxes"></i> Inventory</a>
        <a href="blog-management"><i class="fas fa-blog"></i> Blog</a>
        <a href="order-management"><i class="fas fa-shopping-cart"></i> Orders</a>
        <a href="report-management"><i class="fas fa-chart-line"></i> Reports</a>
        <a href="user-management"><i class="fas fa-users"></i> Users</a>
        <a href="settings"><i class="fas fa-cog"></i> Settings</a>
        <a href="{{ route('logout') }}"><i class="fas fa-cog"></i> Logout</a>
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
