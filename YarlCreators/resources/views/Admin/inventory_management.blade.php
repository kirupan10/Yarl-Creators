<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inventory Management | Yarl Creators</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <style>
        :root {
            --primary: #EF233C;
            --secondary: #D90429;
            --background: #EDF2F4;
            --sidebar-bg: #2B2D42;
            --text-dark: #2B2D42;
            --text-light: #FFFFFF;
            --light: #8D99AE;
            --card-bg: #FFFFFF;
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
            color: var(--text-dark);
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
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .sidebar h2 {
            color: var(--primary);
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar a {
            text-decoration: none;
            color: var(--light);
            font-size: 16px;
            padding: 12px 15px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: background 0.3s, color 0.3s;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: var(--primary);
            color: var(--text-light);
        }

        /* Main */
        main {
            margin-left: 240px;
            padding: 30px 20px;
            width: calc(100% - 240px);
        }

        .admin-header {
            background: linear-gradient(135deg, var(--primary), var(--sidebar-bg));
            color: var(--text-light);
            text-align: center;
            padding: 50px 20px;
            border-radius: 20px;
            margin-bottom: 30px;
        }

        .admin-header h1 {
            font-size: 36px;
        }

        .admin-header p {
            margin-top: 10px;
            font-size: 18px;
            color: var(--text-light);
        }

        .inventory-controls {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            padding: 20px;
            flex-wrap: wrap;
        }

        .inventory-controls select,
        .inventory-controls input {
            padding: 10px 15px;
            border-radius: 8px;
            border: 1px solid var(--light);
            background: var(--card-bg);
            color: var(--text-dark);
            font-size: 16px;
            width: 220px;
            max-width: 100%;
        }

        .search-box {
            background: var(--card-bg);
            border-radius: 10px;
            display: flex;
            align-items: center;
            padding: 10px 15px;
            width: 260px;
            border: 1px solid var(--light);
        }

        .search-box input {
            flex: 1;
            background: transparent;
            border: none;
            outline: none;
            color: var(--text-dark);
            font-size: 16px;
            padding-right: 10px;
        }

        .search-box i {
            color: var(--primary);
            font-size: 18px;
        }

        .add-btn {
            padding: 10px 20px;
            font-weight: bold;
            background: var(--primary);
            border: none;
            border-radius: 10px;
            color: var(--text-light);
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        .add-btn:hover {
            background: var(--text-light);
            color: var(--text-dark);
        }

        .table-container {
            padding: 20px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            max-width: 1100px;
            margin: 0 auto;
            border-collapse: collapse;
            background: var(--card-bg);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        th,
        td {
            padding: 14px 16px;
            text-align: left;
            vertical-align: middle;
        }

        thead {
            background: var(--primary);
            color: var(--text-light);
        }

        tr:nth-child(even) {
            background: var(--background);
        }

        .item-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .item-info img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 8px;
        }

        .actions button {
            margin-right: 5px;
            padding: 6px 12px;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
        }

        .edit {
            background: #3498db;
            color: #fff;
        }

        .delete {
            background: #e74c3c;
            color: #fff;
        }

        .no-results {
            text-align: center;
            color: var(--light);
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            main {
                margin-left: 0;
                width: 100%;
            }

            .sidebar {
                display: none;
            }

            table {
                font-size: 14px;
            }

            .item-info img {
                width: 40px;
                height: 40px;
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
