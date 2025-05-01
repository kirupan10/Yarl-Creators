<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inventory Management | Yarl Creators</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="icon" href="../Assets/images/logo.png" type="image/png" />
    <link rel="stylesheet" href="./admin_assets/css/inventory_management.css" />
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
                <tbody id="inventoryTable"></tbody>
            </table>
            <div id="noResults" class="no-results" style="display: none;">No inventory items found.</div>
        </section>
    </main>

    <script>
        const items = [
            { name: "Canon EOS R6", category: "Camera", stock: 8, price: 380000, image: "../Assets/images/camera.png" },
            { name: "Sony A7 IV", category: "Camera", stock: 10, price: 420000, image: "../Assets/images/cam2.png" },
            { name: "DJI RS 3", category: "Stabilizer", stock: 6, price: 130000, image: "../Assets/images/rs.png" },
            { name: "Godox VL150", category: "Lighting", stock: 5, price: 65000, image: "../Assets/images/gd.png" },
            { name: "Manfrotto Tripod", category: "Accessory", stock: 12, price: 28000, image: "../Assets/images/tr.png" }
        ];

        function renderTable() {
            const search = document.getElementById("inventorySearch").value.toLowerCase();
            const category = document.getElementById("categoryFilter").value;
            const tableBody = document.getElementById("inventoryTable");
            const noResults = document.getElementById("noResults");

            const filtered = items.filter(item =>
                (item.name.toLowerCase().includes(search) || item.category.toLowerCase().includes(search)) &&
                (category === "" || item.category === category)
            );

            tableBody.innerHTML = "";

            if (filtered.length === 0) {
                noResults.style.display = "block";
            } else {
                noResults.style.display = "none";
                filtered.forEach((item, index) => {
                    const row = `
            <tr>
              <td>
                <div class="item-info">
                  <img src="${item.image}" alt="${item.name}" />
                  <span>${item.name}</span>
                </div>
              </td>
              <td>${item.category}</td>
              <td>${item.stock}</td>
              <td>LKR ${item.price.toLocaleString()}</td>
              <td class="actions">
                <button class="edit" onclick="editItem(${index})">✎ Edit</button>
                <button class="delete" onclick="deleteItem(${index})">🗑 Delete</button>
              </td>
            </tr>
          `;
                    tableBody.insertAdjacentHTML("beforeend", row);
                });
            }
        }

        function goToAddPage() {
            window.location.href = "add-inventory.html";
        }

        function editItem(index) {
            window.location.href = `edit-inventory.html?id=${index}`;
        }

        function deleteItem(index) {
            if (confirm('Are you sure you want to delete this item?')) {
                items.splice(index, 1);
                renderTable();
            }
        }

        document.getElementById("inventorySearch").addEventListener("input", renderTable);
        document.getElementById("categoryFilter").addEventListener("change", renderTable);

        window.onload = renderTable;
    </script>

</body>

</html>
