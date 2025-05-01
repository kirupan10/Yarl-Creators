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
    <link rel="icon" type="image/png" href="../Assets/images/logo.png" />
    <link rel="stylesheet" href="./admin_assets/css/Dashboard.css" />

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
                    <p>184</p>
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
                    <h3>New Users</h3>
                    <p>37</p>
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
    <script>
        flatpickr("#calendar", {
            inline: true,
            onDayCreate(_, __, ___, dayElem) {
                const date = dayElem.dateObj.toISOString().split("T")[0];
                const bookedDates = ["2025-04-10", "2025-04-15"];
                const holdDates = ["2025-04-20", "2025-04-25"];

                if (bookedDates.includes(date)) {
                    dayElem.style.backgroundColor = "#EF233C";
                    dayElem.style.color = "#fff";
                    dayElem.title = "Booked";
                } else if (holdDates.includes(date)) {
                    dayElem.style.backgroundColor = "#FFD700";
                    dayElem.style.color = "#000";
                    dayElem.title = "Hold";
                }
            }
        });

        // Scroll To Top
        const scrollBtn = document.getElementById('scrollToTopBtn');
        window.onscroll = () => {
            scrollBtn.style.display = window.scrollY > 400 ? 'block' : 'none';
        };
        scrollBtn.onclick = () => window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });

        // Services Chart
        new Chart(document.getElementById('servicesChart'), {
            type: 'bar',
            data: {
                labels: ['Photography', 'Videography', 'Documentary'],
                datasets: [{
                    label: 'Bookings',
                    data: [100, 60, 24],
                    backgroundColor: ['#EF233C', '#8D99AE', '#2B2D42'],
                    borderRadius: 8
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        }
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Revenue Chart
        new Chart(document.getElementById('revenueChart'), {
            type: 'line',
            data: {
                labels: ['Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr'],
                datasets: [{
                    label: 'Revenue',
                    data: [200000, 250000, 300000, 350000, 400000, 425000],
                    borderColor: '#EF233C',
                    backgroundColor: 'rgba(239,35,60,0.2)',
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                plugins: {
                    legend: {
                        labels: {
                            color: '#2B2D42'
                        }
                    }
                },
                scales: {
                    x: {
                        ticks: {
                            color: '#2B2D42'
                        }
                    },
                    y: {
                        ticks: {
                            color: '#2B2D42'
                        }
                    }
                }
            }
        });
    </script>

</body>

</html>
