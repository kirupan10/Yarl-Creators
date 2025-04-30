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

    <style>
        :root {
            --primary: #EF233C;
            --secondary: #D90429;
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

        /* Main */
        main {
            margin-left: 240px;
            padding: 30px;
            width: calc(100% - 240px);
        }

        header {
            background: linear-gradient(135deg, var(--primary), var(--sidebar-bg));
            color: #fff;
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            margin-bottom: 30px;
        }

        header h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        /* Dashboard Layout */
        .dashboard {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .cards,
        .charts {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
        }

        .card {
            background: var(--card-bg);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .card h3 {
            margin-bottom: 10px;
            color: var(--primary);
            font-size: 20px;
        }

        .card p,
        .card ul {
            font-size: 16px;
            color: var(--text-color);
        }

        .card canvas {
            margin-top: 20px;
            width: 100%;
            height: 250px;
        }

        /* Calendar + Legend Layout */
        .calendar-flex {
            display: flex;
            gap: 30px;
            align-items: flex-start;
            flex-wrap: wrap;
            justify-content: center;
        }

        #calendar {
            max-width: 300px;
        }

        .calendar-legend {
            display: flex;
            flex-direction: column;
            gap: 10px;
            font-size: 14px;
            color: var(--text-color);
        }

        .calendar-legend div {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .legend {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            display: inline-block;
        }

        .legend.booked {
            background: #EF233C;
        }

        .legend.hold {
            background: #FFD700;
        }

        .legend.available {
            background: #2ED573;
        }

        /* Scroll to Top Button */
        #scrollToTopBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: var(--primary);
            color: white;
            border: none;
            padding: 12px 14px;
            border-radius: 50%;
            font-size: 20px;
            cursor: pointer;
            display: none;
            z-index: 999;
        }

        #scrollToTopBtn:hover {
            background: var(--secondary);
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
        <a href="report-analytics"><i class="fas fa-chart-line"></i> Reports</a>
        <a href="user-management"><i class="fas fa-users"></i> Users</a>
        <a href="settings"><i class="fas fa-cog"></i> Settings</a>
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
        scrollBtn.onclick = () => window.scrollTo({ top: 0, behavior: 'smooth' });

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
                plugins: { legend: { display: false } },
                scales: { x: { grid: { display: false } }, y: { beginAtZero: true } }
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
                plugins: { legend: { labels: { color: '#2B2D42' } } },
                scales: {
                    x: { ticks: { color: '#2B2D42' } },
                    y: { ticks: { color: '#2B2D42' } }
                }
            }
        });
    </script>

</body>

</html>
