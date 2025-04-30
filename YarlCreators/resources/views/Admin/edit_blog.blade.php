<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Blog | Yarl Creators</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" type="image/png" href="../Assets/images/logo.png" />

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

        /* Main */
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
        }

        .edit-blog-container {
            max-width: 1000px;
            margin: 0 auto;
            background: var(--card-bg);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .edit-blog-container h2 {
            text-align: center;
            color: var(--primary);
            margin-bottom: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        label {
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 5px;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: 1px solid #ccc;
            background: var(--background);
            font-size: 16px;
            color: var(--text-color);
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        .image-upload {
            background: var(--background);
            border: 2px dashed #ccc;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            cursor: pointer;
            transition: background 0.3s;
        }

        .image-upload:hover {
            background: #ddd;
        }

        .image-upload img {
            width: 100%;
            max-height: 250px;
            object-fit: cover;
            border-radius: 10px;
        }

        .gallery-upload {
            margin-top: 20px;
        }

        .gallery-preview {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }

        .gallery-preview img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
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
            font-size: 16px;
            cursor: pointer;
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

        @media(max-width: 768px) {
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

    <script>
        const existingGallery = [
            "../Assets/images/bride.jpg",
            "../Assets/images/high.jpg",
            "../Assets/images/rece.jpg"
        ];

        function loadExistingGallery() {
            const galleryPreview = document.getElementById('galleryPreview');
            existingGallery.forEach(img => {
                const imageElement = document.createElement('img');
                imageElement.src = img;
                galleryPreview.appendChild(imageElement);
            });
        }

        function previewMainImage(event) {
            const reader = new FileReader();
            reader.onload = function () {
                document.getElementById('mainImagePreview').src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }

        function previewGallery(event) {
            const galleryPreview = document.getElementById('galleryPreview');
            Array.from(event.target.files).forEach(file => {
                const reader = new FileReader();
                reader.onload = function () {
                    const img = document.createElement('img');
                    img.src = reader.result;
                    galleryPreview.appendChild(img);
                }
                reader.readAsDataURL(file);
            });
        }

        document.getElementById('editBlogForm').addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Blog updated successfully!');
            window.location.href = 'blog-management.html';
        });

        window.onload = loadExistingGallery;
    </script>

</body>

</html>
