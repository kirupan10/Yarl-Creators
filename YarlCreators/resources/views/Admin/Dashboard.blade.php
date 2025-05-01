<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard | Yarl Creators</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" type="image/png" href="{{ asset('Assets/images/logo.png') }}" />
    <link rel="stylesheet" href=" {{ asset('admin_assets/css/Dashboard.css') }}" />

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
    <!-- Main -->
    <main>
        <header>
            <h1>📊 Admin Dashboard</h1>
            <p>Welcome back, Admin! Here's your overview.</p>
        </header>

        <section class="dashboard">
            <!-- Cards -->
            <div class="cards">
                <div class="card">
                    <h3>Total Bookings</h3>
                    <p>{{ \App\Models\Booking::count() }}</p>
                </div>
                <div class="card">
                    <h3>Upcoming Events</h3>
                    <p>12</p>
                </div>
                <div class="card">
                    <h3>Revenue (This Month)</h3>
                    <p>LKR 425,000</p>
                </div>
                <div class="card">
                    <h3>Total Users</h3>
                    <p>{{ \App\Models\User::count() }}</p>
                </div>
            </div>

            <!-- Charts -->
            <div class="charts">
                <div class="card">
                    <h3>Most Booked Services</h3>
                    <canvas id="servicesChart"></canvas>
                </div>
                <div class="card">
                    <h3>Monthly Revenue Trend</h3>
                    <canvas id="revenueChart"></canvas>
                </div>
            </div>

            <!-- Calendar + Notifications -->
            <div class="charts">
                <div class="card">
                    <h3>📅 Upcoming Events Calendar</h3>
                    <div class="calendar-flex">
                        <div id="calendar"></div>
                        <div class="calendar-legend">
                            <h4>Legend</h4>
                            <div><span class="legend booked"></span>Booked</div>
                            <div><span class="legend hold"></span>Hold</div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <h3>🔔 Notifications</h3>
                    <ul>
                        <li>Backup scheduled for April 12th</li>
                        <li>New analytics report available</li>
                        <li>System maintenance completed</li>
                    </ul>
                </div>
            </div>

        </section>
    </main>

    <button id="scrollToTopBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('admin_assets/js/dashboard.js') }}"></script>

</body>

</html>
