<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Booking Management | Yarl Creators</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" type="image/png" href="{{ asset('Assets/images/logo.png') }}" />
    <link rel="stylesheet" href=" {{ asset('admin_assets/css/booking_management.css') }}" />
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

    <!-- Main Content -->
    <main>
        <header>
            <h1>📅 Booking Management</h1>
            <p>View and manage all customer bookings efficiently</p>
        </header>

        <section class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Service</th>
                        <th>Package</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="bookingTable"></tbody>
            </table>
        </section>

        <!-- Modal -->
        <div id="userModal" class="modal">
            <div class="modal-content">
                <button class="close-btn" onclick="closeModal()">×</button>
                <div class="modal-header">
                    <img id="modalProfile" src="" alt="Profile Image">
                    <h2 id="modalName"></h2>
                </div>

                <div class="modal-section">
                    <h3>Customer Details</h3>
                    <div class="form-grid">
                        <input type="text" id="modalNIC" readonly placeholder="NIC">
                        <input type="text" id="modalPhone" readonly placeholder="Phone">
                        <input type="text" id="modalEmail" readonly placeholder="Email">
                        <input type="text" id="modalAddress" readonly placeholder="Address">
                    </div>
                </div>

                <div class="modal-section">
                    <h3>Booking Details</h3>
                    <div class="form-grid">
                        <input type="text" id="modalService" readonly placeholder="Service">
                        <input type="text" id="modalPackage" readonly placeholder="Package">
                        <input type="text" id="modalDate" readonly placeholder="Booking Date">
                    </div>
                </div>

                <div class="modal-section">
                    <h3>Payment Details</h3>
                    <div class="form-grid">
                        <input type="text" id="modalPaymentMethod" readonly placeholder="Payment Method">
                        <input type="text" id="modalTotalAmount" readonly placeholder="Total Amount">
                        <input type="text" id="modalPaidAmount" readonly placeholder="Paid Amount">
                        <input type="text" id="modalStatus" readonly placeholder="Status">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="./admin_assets/js/booking_management.js"></script>

</body>

</html>
