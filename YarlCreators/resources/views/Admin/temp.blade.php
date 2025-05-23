<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reports & Analytics | Yarl Creators</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" type="image/png" href="../Assets/images/logo.png" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="./admin_assets/css/temp.css" />
    <link rel="stylesheet" href=" {{ asset('admin_assets/css/order_management.css') }}" />
</head>

<body>

    <!-- Sidebar -->
    <nav class="sidebar">
        <h2>Yarl Creators</h2>
        <a href="dashboard" ><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="booking-management"><i class="fas fa-calendar-check"></i> Bookings</a>
        <a href="inventory-management"><i class="fas fa-boxes"></i> Inventory</a>
        <a href="blog-management"><i class="fas fa-blog"></i> Blog</a>
        <a href="order-management"><i class="fas fa-shopping-cart"></i> Orders</a>
        <a href="report-management" class="active"><i class="fas fa-chart-line"></i> Reports</a>
        <a href="user-management"><i class="fas fa-users"></i> Users</a>
        <a href="settings"><i class="fas fa-cog"></i> Settings</a>
        <a href="{{ route('logout') }}"><i class="fas fa-cog"></i> Logout</a>
    </nav>

    <!-- Main Content -->
    <main>

        <header>
            <h1>📈 Reports & Analytics</h1>
            <p>Track performance, sales, users, and activities</p>
        </header>

        <section class="summary-cards">
            <div class="card">
                <h2>LKR 2.5M</h2>
                <p>Total Revenue</p>
            </div>
            <div class="card">
                <h2>320</h2>
                <p>Total Bookings</p>
            </div>
            <div class="card">
                <h2>220</h2>
                <p>Total Orders</p>
            </div>
            <div class="card">
                <h2>75</h2>
                <p>New Users</p>
            </div>
        </section>

        <div class="filters">
            <select id="monthFilter">
                <option>April</option>
                <option>March</option>
                <option>February</option>
                <option>January</option>
            </select>
            <select id="yearFilter">
                <option>2025</option>
                <option>2024</option>
                <option>2023</option>
            </select>
            <button onclick="alert('Exporting Report...')">📄 Export Report</button>
        </div>

        <section class="charts-grid">
            <div class="chart-card">
                <h3>Revenue Trend</h3>
                <canvas id="revenueChart"></canvas>
            </div>

            <div class="chart-card">
                <h3>Service Bookings</h3>
                <canvas id="serviceChart"></canvas>
            </div>

            <div class="chart-card">
                <h3>Order Status</h3>
                <canvas id="orderStatusChart"></canvas>
            </div>
        </section>

    </main>

    <script src="./admin_assets/js/temp.js"></script>

</body>

</html>
