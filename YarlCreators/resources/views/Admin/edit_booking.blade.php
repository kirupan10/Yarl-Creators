<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Booking | Yarl Creators</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" type="image/png" href="../Assets/images/logo.png" />

    <link rel="stylesheet" href="./admin_assets/css/edit_booking.css" />
</head>

<body>

    <!-- Sidebar -->
    <nav class="sidebar">
        <h2>Yarl Creators</h2>
        <a href="dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="booking-management" class="active"><i class="fas fa-calendar-check"></i> Bookings</a>
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

    <script src="./admin_assets/js/edit_booking.js"></script>

</body>

</html>
