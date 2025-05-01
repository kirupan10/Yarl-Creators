<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Inventory Item | Yarl Creators</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" type="image/png" href="{{ asset('Assets/images/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('admin_assets/css/add_inventory.css') }}" />
</head>

<body>

    <!-- Sidebar -->
    <nav class="sidebar">
        <h2>Yarl Creators</h2>
        <a href="dashboard" ><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="booking-management"><i class="fas fa-calendar-check"></i> Bookings</a>
        <a href="inventory-management" class="active"><i class="fas fa-boxes"></i> Inventory</a>
        <a href="blog-management"><i class="fas fa-blog"></i> Blog</a>
        <a href="order-management"><i class="fas fa-shopping-cart"></i> Orders</a>
        <a href="report-management"><i class="fas fa-chart-line"></i> Reports</a>
        <a href="user-management"><i class="fas fa-users"></i> Users</a>
        <a href="settings"><i class="fas fa-cog"></i> Settings</a>
        <a href="{{ route('logout') }}"><i class="fas fa-cog"></i> Logout</a>
    </nav>

    <main>

        <header>
            <h1>➕ Add New Product</h1>
        </header>

        <div class="add-container">
            <form id="addItemForm">

                <div class="image-upload" onclick="document.getElementById('itemImage').click()">
                    <img id="itemImagePreview" src="../Assets/images/placeholder.png" alt="Upload Product Image" />
                    <input type="file" id="itemImage" accept="image/*" style="display: none;"
                        onchange="previewImage(event)">
                </div>

                <div>
                    <label for="itemName">Item Name</label>
                    <input type="text" id="itemName" placeholder="Enter product name..." required />
                </div>

                <div>
                    <label for="itemCategory">Category</label>
                    <select id="itemCategory" required>
                        <option value="">Select Category</option>
                        <option value="Camera">Camera</option>
                        <option value="Lighting">Lighting</option>
                        <option value="Audio">Audio</option>
                        <option value="Accessory">Accessory</option>
                    </select>
                </div>

                <div style="display: flex; gap: 20px;">
                    <div style="flex: 1;">
                        <label for="itemStock">Stock</label>
                        <input type="number" id="itemStock" placeholder="Enter stock quantity..." min="0" required />
                    </div>
                    <div style="flex: 1;">
                        <label for="itemPrice">Price (LKR)</label>
                        <input type="number" id="itemPrice" placeholder="Enter price..." min="0" required />
                    </div>
                </div>

                <div class="buttons">
                    <button type="submit" class="save-btn">💾 Save Product</button>
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

        document.getElementById('addItemForm').addEventListener('submit', function (e) {
            e.preventDefault();
            alert('New Product Added Successfully!');
            window.location.href = 'inventory-management.html';
        });
    </script>

</body>

</html>
