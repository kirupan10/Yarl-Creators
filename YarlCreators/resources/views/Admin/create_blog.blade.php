<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create New Blog | Yarl Creators</title>
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
            top: 0;
            left: 0;
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
            color: white;
            text-align: center;
            padding: 30px;
            border-radius: 20px;
            margin-bottom: 30px;
        }

        header h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        form {
            max-width: 850px;
            background: var(--card-bg);
            margin: 0 auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        form label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--primary);
        }

        form input,
        form textarea,
        form select {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background: var(--background);
            color: var(--text-color);
            font-size: 16px;
            margin-bottom: 20px;
        }

        form textarea {
            min-height: 120px;
            resize: vertical;
        }

        .image-upload {
            background: var(--background);
            padding: 20px;
            border: 1px dashed #ccc;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
        }

        .image-upload input[type="file"] {
            display: none;
        }

        .image-upload label {
            display: inline-block;
            padding: 10px 20px;
            background: var(--primary);
            color: white;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 10px;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .buttons button {
            padding: 12px 24px;
            border: none;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        .save-btn {
            background: #2ecc71;
            color: white;
        }

        .save-btn:hover {
            background: #27ae60;
        }

        .cancel-btn {
            background: #e74c3c;
            color: white;
        }

        .cancel-btn:hover {
            background: #c0392b;
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
