<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Management | Yarl Creators</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" type="image/png" href="../Assets/images/logo.png" />

    <style>
        :root {
            --primary: #EF233C;
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
            color: #ffffff;
        }

        main {
            margin-left: 240px;
            padding: 30px;
            width: calc(100% - 240px);
        }

        .order-banner {
            background: linear-gradient(135deg, var(--primary), var(--sidebar-bg));
            padding: 50px 20px;
            border-radius: 20px;
            text-align: center;
            margin-bottom: 30px;
            color: white;
        }

        .order-banner h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .filters {
            margin-bottom: 20px;
            display: flex;
            justify-content: flex-end;
        }

        .search-box {
            display: flex;
            align-items: center;
            background: var(--card-bg);
            padding: 10px 15px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .search-box input {
            border: none;
            background: transparent;
            outline: none;
            font-size: 16px;
            color: var(--text-color);
            padding: 8px;
        }

        .search-box i {
            font-size: 18px;
            color: var(--primary);
            margin-right: 8px;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            max-width: 1100px;
            margin: 0 auto;
            border-collapse: collapse;
            background: var(--card-bg);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        th,
        td {
            padding: 14px 16px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        th {
            background: var(--primary);
            color: white;
        }

        tr:hover {
            background: #f5f5f5;
        }

        .status-badge {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: bold;
            display: inline-block;
        }

        .Pending {
            background: #FFC107;
            color: #000;
        }

        .Processing {
            background: #3498db;
            color: #fff;
        }

        .Completed {
            background: #2ecc71;
            color: #fff;
        }

        .Cancelled {
            background: #e74c3c;
            color: #fff;
        }

        .status-dropdown {
            background: #222;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 8px;
            font-size: 14px;
            width: 140px;
        }

        .no-results {
            text-align: center;
            color: #aaa;
            padding: 20px;
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
        }
    </style>
</head>

<body>

    <nav class="sidebar">
        <h2>Yarl Creators</h2>
        <a href="dashboard.html"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="booking-management.html"><i class="fas fa-calendar-check"></i> Bookings</a>
        <a href="inventory-management.html"><i class="fas fa-boxes"></i> Inventory</a>
        <a href="blog-management.html"><i class="fas fa-blog"></i> Blog</a>
        <a href="order-management.html" class="active"><i class="fas fa-shopping-cart"></i> Orders</a>
        <a href="report-analytics.html"><i class="fas fa-chart-line"></i> Reports</a>
        <a href="user-management.html"><i class="fas fa-users"></i> Users</a>
        <a href="settings.html"><i class="fas fa-cog"></i> Settings</a>
    </nav>

    <main>
        <section class="order-banner">
            <h1>🛒 Order Management</h1>
            <p>Manage customer orders, statuses, and sales records.</p>
        </section>

        <div class="filters">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" placeholder="Search orders..." />
            </div>
        </div>

        <section class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Order #</th>
                        <th>Customer</th>
                        <th>Product</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Change Status</th>
                    </tr>
                </thead>
                <tbody id="orderTable"></tbody>
            </table>
            <div id="noResults" class="no-results" style="display: none;">No orders found.</div>
        </section>
    </main>

    <script>
        const orders = [
            { id: 1001, customer: 'John Doe', product: 'Canon EOS R6', date: '2025-04-10', total: 425000, status: 'Pending' },
            { id: 1002, customer: 'Jane Smith', product: 'DJI RS 3', date: '2025-04-12', total: 130000, status: 'Processing' },
            { id: 1003, customer: 'Ravi Kumar', product: 'Sony A7 IV', date: '2025-04-14', total: 420000, status: 'Completed' },
            { id: 1004, customer: 'Sara Khan', product: 'Manfrotto Tripod', date: '2025-04-16', total: 28000, status: 'Cancelled' }
        ];

        function renderOrders() {
            const search = document.getElementById("searchInput").value.toLowerCase();
            const tableBody = document.getElementById("orderTable");
            const noResults = document.getElementById("noResults");

            const filtered = orders.filter(o =>
                o.customer.toLowerCase().includes(search) ||
                o.product.toLowerCase().includes(search) ||
                o.status.toLowerCase().includes(search)
            );

            tableBody.innerHTML = "";

            if (filtered.length === 0) {
                noResults.style.display = "block";
            } else {
                noResults.style.display = "none";
                filtered.forEach((o, index) => {
                    const row = `
            <tr>
              <td>${o.id}</td>
              <td>${o.customer}</td>
              <td>${o.product}</td>
              <td>${o.date}</td>
              <td>LKR ${o.total.toLocaleString()}</td>
              <td><span class="status-badge ${o.status}">${o.status}</span></td>
              <td>
                <select onchange="changeStatus(${index}, this)" class="status-dropdown">
                  <option value="Pending" ${o.status === "Pending" ? "selected" : ""}>Pending</option>
                  <option value="Processing" ${o.status === "Processing" ? "selected" : ""}>Processing</option>
                  <option value="Completed" ${o.status === "Completed" ? "selected" : ""}>Completed</option>
                  <option value="Cancelled" ${o.status === "Cancelled" ? "selected" : ""}>Cancelled</option>
                </select>
              </td>
            </tr>
          `;
                    tableBody.insertAdjacentHTML("beforeend", row);
                });
            }
        }

        function changeStatus(index, selectElement) {
            orders[index].status = selectElement.value;
            renderOrders();
        }

        document.getElementById("searchInput").addEventListener("input", renderOrders);
        window.onload = renderOrders;
    </script>

</body>

</html>