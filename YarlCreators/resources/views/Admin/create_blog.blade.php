<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create New Blog | Yarl Creators</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" href="../Assets/images/logo.png" type="image/png" />
    <link rel="stylesheet" href="./admin_assets/css/create_blog.css" />
</head>

<body>

    <!-- Sidebar -->
    <nav class="sidebar">
        <h2>Yarl Creators</h2>
        <a href="dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="booking-management" class="active"><i class="fas fa-calendar-check"></i> Bookings</a>
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
            <h1>✍️ Create New Blog</h1>
        </header>

        <form id="newBlogForm">
            <label for="title">Main Blog Title</label>
            <input type="text" id="title" required placeholder="Enter blog title">

            <label for="date">Date</label>
            <input type="date" id="date" required>

            <label for="category">Category</label>
            <select id="category" required>
                <option value="">Select Category</option>
                <option value="Wedding">Wedding</option>
                <option value="Event">Event</option>
                <option value="Photography">Photography</option>
                <option value="Video Production">Video Production</option>
                <option value="Branding">Branding</option>
            </select>

            <div class="image-upload">
                <p>Main Image</p>
                <label for="mainImage">📷 Choose Main Image</label>
                <input type="file" id="mainImage" accept="image/*" required>
            </div>

            <label for="excerpt">Short Description (Excerpt)</label>
            <textarea id="excerpt" required placeholder="Write a short description..."></textarea>

            <label for="subHeading">Sub Heading</label>
            <input type="text" id="subHeading" placeholder="Enter a sub heading (optional)">

            <label for="subDetails">Sub Details</label>
            <textarea id="subDetails" placeholder="Write subheading related details (optional)"></textarea>

            <label for="details">Full Blog Details</label>
            <textarea id="details" required placeholder="Write full blog content..."></textarea>

            <div class="image-upload">
                <p>Additional Gallery Images</p>
                <label for="galleryImages">📷 Choose Gallery Images</label>
                <input type="file" id="galleryImages" accept="image/*" multiple>
            </div>

            <div class="buttons">
                <button type="submit" class="save-btn">✅ Save Blog</button>
                <button type="button" class="cancel-btn" onclick="window.location.href='blog-management.html'">❌
                    Cancel</button>
            </div>
        </form>

    </main>

    <script>
        document.getElementById('newBlogForm').addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Blog Saved Successfully!');
            window.location.href = 'blog-management.html'; // After saving, go back to blog list
        });
    </script>

</body>

</html>
