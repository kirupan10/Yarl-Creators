<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Booking | Yarl Creators</title>
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

        /* Sidebar */
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

        /* Main Content */
        main {
            margin-left: 240px;
            padding: 30px;
            width: calc(100% - 240px);
        }

        header {
            background: linear-gradient(135deg, var(--primary), var(--sidebar-bg));
            color: white;
            text-align: center;
            padding: 30px;
            border-radius: 20px;
            margin-bottom: 30px;
        }

        header h1 {
            font-size: 32px;
        }

        .edit-container {
            max-width: 850px;
            background: var(--card-bg);
            margin: 0 auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .form-grid input {
            flex: 1 1 calc(50% - 15px);
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            background: var(--background);
            font-size: 16px;
            color: var(--text-color);
        }

        .buttons {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        button {
            padding: 12px 24px;
            font-weight: bold;
            font-size: 16px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }

        .save-btn {
            background: #2ecc71;
            color: white;
        }

        .save-btn:hover {
            background: #27ae60;
        }

        .cancel-btn {
            background: #e74c3c;
            color: white;
        }

        .cancel-btn:hover {
            background: #c0392b;
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

    <!-- Main -->
    <main>

        <header>
            <h1>✏️ Edit Booking</h1>
        </header>

        <div class="edit-container">
            <form id="editForm">
                <div class="form-grid">
                    <input type="text" id="name" placeholder="Name" />
                    <input type="text" id="nic" placeholder="NIC" />
                    <input type="text" id="phone" placeholder="Phone" />
                    <input type="text" id="email" placeholder="Email" />
                    <input type="text" id="address" placeholder="Address" />
                    <input type="text" id="service" placeholder="Service" />
                    <input type="text" id="package" placeholder="Package" />
                    <input type="text" id="date" placeholder="Date" />
                    <input type="text" id="payment" placeholder="Payment Method" />
                    <input type="text" id="totalAmount" placeholder="Total Amount" />
                    <input type="text" id="paidAmount" placeholder="Paid Amount" />
                    <input type="text" id="status" placeholder="Status" />
                </div>

                <div class="buttons">
                    <button type="submit" class="save-btn">💾 Save Changes</button>
                    <button type="button" class="cancel-btn" onclick="window.history.back()">❌ Cancel</button>
                </div>
            </form>
        </div>

    </main>

    <script>
        window.onload = function () {
            document.getElementById('name').value = "John Doe";
            document.getElementById('nic').value = "123456789V";
            document.getElementById('phone').value = "0771234567";
            document.getElementById('email').value = "john@example.com";
            document.getElementById('address').value = "123 Main Street, Jaffna";
            document.getElementById('service').value = "Photography";
            document.getElementById('package').value = "Elite";
            document.getElementById('date').value = "2025-04-25";
            document.getElementById('payment').value = "Bank Transfer";
            document.getElementById('totalAmount').value = "LKR 100,000";
            document.getElementById('paidAmount').value = "LKR 25,000";
            document.getElementById('status').value = "Pending";
        };

        document.getElementById('editForm').addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Booking details updated successfully!');
            window.location.href = 'booking-management.html';
        });
    </script>

</body>

</html>
