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

    <style>
        :root {
            --primary: #EF233C;
            --background: #EDF2F4;
            --card-bg: #ffffff;
            --text-color: #2B2D42;
            --sidebar-bg: #2B2D42;
            --sidebar-text: #EDF2F4;
            --sidebar-hover: #EF233C;
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
            left: 0;
            top: 0;
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

        /* Main Content */
        main {
            margin-left: 240px;
            padding: 30px;
            width: calc(100% - 240px);
        }

        header {
            background: linear-gradient(135deg, var(--primary), var(--sidebar-bg));
            padding: 40px 20px;
            border-radius: 20px;
            color: white;
            margin-bottom: 30px;
            text-align: center;
        }

        header h1 {
            font-size: 36px;
        }

        header p {
            margin-top: 10px;
            color: #ddd;
        }

        .summary-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: var(--card-bg);
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h2 {
            font-size: 28px;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .card p {
            font-size: 16px;
        }

        .filters {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .filters select,
        .filters button {
            padding: 10px 14px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            cursor: pointer;
        }

        .filters select {
            background: var(--card-bg);
            color: var(--text-color);
            border: 1px solid #ccc;
        }

        .filters button {
            background: var(--primary);
            color: white;
        }

        .charts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 20px;
        }

        .chart-card {
            background: var(--card-bg);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .chart-card h3 {
            margin-bottom: 10px;
            font-size: 20px;
            color: var(--primary);
            text-align: center;
        }

        canvas {
            width: 100% !important;
            height: 300px !important;
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

    <script>
        // Revenue Trend
        new Chart(document.getElementById('revenueChart'), {
            type: 'line',
            data: {
                labels: ['Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr'],
                datasets: [{
                    label: 'Revenue (LKR)',
                    data: [150000, 180000, 200000, 220000, 250000, 275000],
                    borderColor: '#EF233C',
                    backgroundColor: 'rgba(239,35,60,0.2)',
                    fill: true,
                    tension: 0.4
                }]
            },
            options: { responsive: true }
        });

        // Service Bookings
        new Chart(document.getElementById('serviceChart'), {
            type: 'bar',
            data: {
                labels: ['Photography', 'Videography', 'Drone', 'Editing'],
                datasets: [{
                    label: 'Bookings',
                    data: [80, 55, 30, 40],
                    backgroundColor: ['#EF233C', '#8D99AE', '#2B2D42', '#D90429'],
                    borderRadius: 8
                }]
            },
            options: { responsive: true, plugins: { legend: { display: false } } }
        });

        // Order Status
        new Chart(document.getElementById('orderStatusChart'), {
            type: 'pie',
            data: {
                labels: ['Pending', 'Processing', 'Completed', 'Cancelled'],
                datasets: [{
                    label: 'Orders',
                    data: [20, 40, 120, 40],
                    backgroundColor: ['#FFC107', '#3498db', '#2ecc71', '#e74c3c']
                }]
            },
            options: { responsive: true }
        });
    </script>

</body>

</html>
