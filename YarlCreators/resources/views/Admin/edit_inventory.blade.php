<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Inventory Item | Yarl Creators</title>
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
            font-size: 32px;
        }

        .edit-container {
            max-width: 850px;
            background: var(--card-bg);
            margin: 0 auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            color: var(--primary);
        }

        input,
        select {
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            background: var(--background);
            font-size: 16px;
            color: var(--text-color);
            width: 100%;
        }

        .image-upload {
            background: var(--background);
            border: 2px dashed #ccc;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            cursor: pointer;
            transition: background 0.3s;
            overflow: hidden;
        }

        .image-upload:hover {
            background: #ddd;
        }

        .image-upload img {
            width: auto;
            height: 250px;
            max-width: 100%;
            object-fit: cover;
            border-radius: 10px;
            display: block;
            margin: 0 auto;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
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
        <a href="dashboard.html"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="booking-management.html"><i class="fas fa-calendar-check"></i> Bookings</a>
        <a href="inventory-management.html" class="active"><i class="fas fa-boxes"></i> Inventory</a>
        <a href="blog-management.html"><i class="fas fa-blog"></i> Blog</a>
        <a href="order-management.html"><i class="fas fa-shopping-cart"></i> Orders</a>
        <a href="report-analytics.html"><i class="fas fa-chart-line"></i> Reports</a>
        <a href="user-management.html"><i class="fas fa-users"></i> Users</a>
        <a href="settings.html"><i class="fas fa-cog"></i> Settings</a>
    </nav>

    <main>

        <header>
            <h1>✏️ Edit Inventory Item</h1>
        </header>

        <div class="edit-container">

            <form id="editItemForm">

                <div class="image-upload" onclick="document.getElementById('itemImage').click()">
                    <img id="itemImagePreview" src="../Assets/images/camera.png" alt="Item Image" />
                    <input type="file" id="itemImage" accept="image/*" style="display: none;"
                        onchange="previewImage(event)">
                </div>

                <div>
                    <label for="itemName">Item Name</label>
                    <input type="text" id="itemName" value="Canon EOS R6" />
                </div>

                <div>
                    <label for="itemCategory">Category</label>
                    <select id="itemCategory">
                        <option value="Camera" selected>Camera</option>
                        <option value="Lighting">Lighting</option>
                        <option value="Audio">Audio</option>
                        <option value="Accessory">Accessory</option>
                    </select>
                </div>

                <div style="display: flex; gap: 20px;">
                    <div style="flex: 1;">
                        <label for="itemStock">Stock</label>
                        <input type="number" id="itemStock" value="8" min="0" />
                    </div>
                    <div style="flex: 1;">
                        <label for="itemPrice">Price (LKR)</label>
                        <input type="number" id="itemPrice" value="380000" min="0" />
                    </div>
                </div>

                <div class="buttons">
                    <button type="submit" class="save-btn">💾 Save Changes</button>
                    <button type="button" onclick="window.history.back()" class="cancel-btn">❌ Cancel</button>
                </div>

            </form>

        </div>

    </main>

    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function () {
                document.getElementById('itemImagePreview').src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }

        document.getElementById('editItemForm').addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Item updated successfully!');
            window.location.href = 'inventory-management.html'; // Redirect after save
        });
    </script>

</body>

</html>