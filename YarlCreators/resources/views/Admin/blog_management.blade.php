<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Blog Management | Yarl Creators</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" type="image/png" href="{{ asset('Assets/images/logo.png') }}" />
    <link rel="stylesheet" href=" {{ asset('admin_assets/css/blog_management.css') }}" />

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

    <script src="./admin_assets/js/blog_management.js"></script>

</body>

</html>
