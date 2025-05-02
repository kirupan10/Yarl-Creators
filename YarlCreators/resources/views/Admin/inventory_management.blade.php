<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inventory Management | Yarl Creators</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/png" href="{{ asset('Assets/images/logo.png') }}" />
    <link rel="stylesheet" href=" {{ asset('admin_assets/css/inventory_management.css') }}" />

</head>

<body>

    <!-- Sidebar -->
    <nav class="sidebar">
        <h2>Yarl Creators</h2>
        <a href="dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="booking-management"><i class="fas fa-calendar-check"></i> Bookings</a>
        <a href="inventory-management" class="active"><i class="fas fa-boxes"></i> Inventory</a>
        <a href="blog-management"><i class="fas fa-blog"></i> Blog</a>
        <a href="order-management"><i class="fas fa-shopping-cart"></i> Orders</a>
        <a href="report-management"><i class="fas fa-chart-line"></i> Reports</a>
        <a href="user-management"><i class="fas fa-users"></i> Users</a>
        <a href="settings"><i class="fas fa-cog"></i> Settings</a>
        <a href="{{ route('logout') }}"><i class="fas fa-cog"></i> Logout</a>
    </nav>

    <!-- Main Content -->
    <main>
        <header class="admin-header">
            <h1>📦 Inventory Management</h1>
            <p>Track and manage all equipment and items efficiently.</p>
        </header>

        <div class="inventory-controls">
            <select id="categoryFilter">
                <option value="">All Categories</option>
                <option value="Camera">Camera</option>
                <option value="Lighting">Lighting</option>
                <option value="Audio">Audio</option>
                <option value="Accessory">Accessory</option>
            </select>

            <div class="search-box">
                <input type="text" id="inventorySearch" placeholder="Search inventory..." />
                <i class="fas fa-search"></i>
            </div>

            <button class="add-btn" onclick="goToAddPage()">➕ Add Item</button>
        </div>

        <section class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Category</th>
                        <th>Stock</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->id }} <img src="{{ asset('storage/images/' . $item->image) }}" width="50" /> {{ $item->product_name }}</td>
                        <td>{{ $item->product_category }}</td>
                        <td>{{ $item->stock }}</td>
                        <td>${{ $item->price }}</td>
                        <td class="actions">
                            <button class="edit" onclick="editItem(${index})">✎ Edit</button>
                            <button class="delete" onclick="deleteItem(${index})">🗑 Delete</button>
                          </td>
                    </tr>
                @endforeach
            </table>
            <div id="noResults" class="no-results" style="display: none;">No inventory items found.</div>
        </section>
    </main>
    <script src="{{ asset('admin_assets/js/inventory_management.js') }}"></script>

</body>

</html>
