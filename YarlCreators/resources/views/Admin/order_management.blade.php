<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Management | Yarl Creators</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" type="image/png" href="../Assets/images/logo.png" />
    <link rel="stylesheet" href="./admin_assets/css/order_management.css" />
</head>

<body>

    <nav class="sidebar">
        <h2>Yarl Creators</h2>
        <a href="dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="booking-management"><i class="fas fa-calendar-check"></i> Bookings</a>
        <a href="inventory-management"><i class="fas fa-boxes"></i> Inventory</a>
        <a href="blog-management"><i class="fas fa-blog"></i> Blog</a>
        <a href="order-management" class="active"><i class="fas fa-shopping-cart"></i> Orders</a>
        <a href="report-management"><i class="fas fa-chart-line"></i> Reports</a>
        <a href="user-management"><i class="fas fa-users"></i> Users</a>
        <a href="settings"><i class="fas fa-cog"></i> Settings</a>
        <a href="{{ route('logout') }}"><i class="fas fa-cog"></i> Logout</a>
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
