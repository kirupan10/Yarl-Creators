<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Blog | Yarl Creators</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" type="image/png" href="../Assets/images/logo.png" />
    <link rel="stylesheet" href=" {{ asset('admin_assets/css/edit_blog.css') }}" />
</head>

<body>

    <!-- Sidebar -->
    <nav class="sidebar">
        <h2>Yarl Creators</h2>
        <a href="dashboard" ><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="booking-management"><i class="fas fa-calendar-check"></i> Bookings</a>
        <a href="inventory-management"><i class="fas fa-boxes"></i> Inventory</a>
        <a href="blog-management" class="active"><i class="fas fa-blog"></i> Blog</a>
        <a href="order-management"><i class="fas fa-shopping-cart"></i> Orders</a>
        <a href="report-management"><i class="fas fa-chart-line"></i> Reports</a>
        <a href="user-management"><i class="fas fa-users"></i> Users</a>
        <a href="settings"><i class="fas fa-cog"></i> Settings</a>
        <a href="{{ route('logout') }}"><i class="fas fa-cog"></i> Logout</a>
    </nav>

    <main>

        <header>
            <h1>✍️ Edit Blog</h1>
        </header>

        <div class="edit-blog-container">
            <form id="editBlogForm">
                <div class="image-upload" onclick="document.getElementById('mainImage').click()">
                    <img id="mainImagePreview" src="../Assets/images/wed.jpg" alt="Main Blog Image" />
                    <input type="file" id="mainImage" accept="image/*" style="display: none"
                        onchange="previewMainImage(event)" />
                </div>

                <label for="title">Blog Title</label>
                <input type="text" id="title" value="Wedding Highlight | Vimitha & Gokulan" />

                <div style="display: flex; gap: 20px;">
                    <div style="flex: 1;">
                        <label for="date">Date</label>
                        <input type="date" id="date" value="2025-03-01" />
                    </div>
                    <div style="flex: 1;">
                        <label for="category">Category</label>
                        <select id="category">
                            <option value="Wedding">Wedding</option>
                            <option value="Event">Event</option>
                            <option value="Photography">Photography</option>
                            <option value="Video Production">Video Production</option>
                        </select>
                    </div>
                </div>

                <label for="shortDesc">Short Excerpt</label>
                <textarea
                    id="shortDesc">Every moment is a memory – watch how we brought their special day to life.</textarea>

                <label for="heading1">Heading 1</label>
                <input type="text" id="heading1" value="✨ Behind the Scenes Magic" />

                <label for="content1">Paragraph 1</label>
                <textarea
                    id="content1">Our team used state-of-the-art cameras, drones, and lighting setups to ensure every shot was magical.</textarea>

                <div class="gallery-upload">
                    <label for="gallery">Gallery Images</label>
                    <input type="file" id="gallery" accept="image/*" multiple onchange="previewGallery(event)" />
                    <div class="gallery-preview" id="galleryPreview"></div>
                </div>

                <div class="buttons">
                    <button type="submit" class="save-btn">💾 Save Changes</button>
                    <button type="button" class="cancel-btn" onclick="window.history.back()">❌ Cancel</button>
                </div>
            </form>
        </div>

    </main>

    <script src="./admin_assets/js/edit_blog.js"></script>

</body>

</html>
