<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Booking Management | Yarl Creators</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" href="../Assets/images/logo.png" type="image/png" />
    <style>
        :root {
            --primary: #EF233C;
            --primary-dark: #D90429;
            --sidebar-bg: #2B2D42;
            --text-muted: #8D99AE;
            --background: #EDF2F4;
            --white: #ffffff;
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
            color: var(--sidebar-bg);
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
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .sidebar h2 {
            color: var(--primary);
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
        }

        .sidebar a {
            text-decoration: none;
            color: var(--text-muted);
            font-size: 16px;
            padding: 12px 15px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: background 0.3s, color 0.3s;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: var(--primary);
            color: var(--white);
            box-shadow: 0 4px 10px rgba(239, 35, 60, 0.3);
        }

        /* Main Content */
        main {
            margin-left: 240px;
            padding: 20px;
            width: calc(100% - 240px);
        }

        header {
            text-align: center;
            padding: 30px;
             background: linear-gradient(135deg, var(--primary), var(--sidebar-bg));
            border-radius: 20px;
            margin-bottom: 30px;
            color: var(--white);
        }

        header h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .table-container {
            padding: 20px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            border-collapse: collapse;
            background: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        th,
        td {
            padding: 14px 16px;
            text-align: center;
            vertical-align: middle;
        }

        thead {
            background: var(--primary);
            color: var(--white);
        }

        tr:nth-child(even) {
            background: var(--background);
        }

        .profile-img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 50%;
        }

        select {
            padding: 6px 10px;
            border-radius: 8px;
            background: var(--text-muted);
            border: none;
            color: var(--white);
            font-size: 14px;
        }

        .view-btn {
            background: var(--primary);
            border: none;
            padding: 8px 14px;
            color: var(--white);
            border-radius: 8px;
            cursor: pointer;
        }

        .edit-btn {
            background: var(--primary-dark);
            border: none;
            padding: 8px 14px;
            color: var(--white);
            border-radius: 8px;
            cursor: pointer;
            margin-left: 5px;
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 999;
            padding: 20px;
        }

        .modal-content {
            background: var(--white);
            padding: 30px;
            border-radius: 15px;
            width: 100%;
            max-width: 800px;
            position: relative;
        }

        .modal-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .modal-header img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .modal-header h2 {
            color: var(--primary);
            margin: 0;
        }

        .modal-section {
            margin-bottom: 20px;
        }

        .modal-section h3 {
            font-size: 18px;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .form-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .form-grid input {
            flex: 1 1 calc(50% - 15px);
            background: var(--background);
            border: 1px solid var(--text-muted);
            padding: 12px;
            border-radius: 8px;
            color: var(--dark);
            font-size: 14px;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            background: transparent;
            border: none;
            font-size: 24px;
            color: var(--sidebar-bg);
            cursor: pointer;
        }

        @media(max-width: 768px) {
            .form-grid input {
                flex: 1 1 100%;
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

    <script>
        const bookings = [
            {
                id: 1,
                name: "John Doe",
                nic: "123456789V",
                phone: "0771234567",
                email: "john@example.com",
                address: "123 Main Street, Jaffna",
                service: "Photography",
                package: "Elite",
                date: "2025-04-25",
                profile: "../Assets/images/profile/m1.jpg",
                status: "Pending",
                payment: "Bank Transfer",
                totalAmount: "LKR 100,000",
                paidAmount: "LKR 25,000"
            }
        ];

        function renderBookings() {
            const table = document.getElementById("bookingTable");
            table.innerHTML = "";
            bookings.forEach((booking, index) => {
                table.innerHTML += `
          <tr>
            <td><img class="profile-img" src="${booking.profile}" alt="${booking.name}"></td>
            <td>${booking.name}</td>
            <td>${booking.service}</td>
            <td>${booking.package}</td>
            <td>${booking.date}</td>
            <td>
              <select onchange="changeStatus(${index}, this.value)">
                <option value="Pending" ${booking.status === "Pending" ? "selected" : ""}>Pending</option>
                <option value="Confirmed" ${booking.status === "Confirmed" ? "selected" : ""}>Confirmed</option>
                <option value="Cancelled" ${booking.status === "Cancelled" ? "selected" : ""}>Cancelled</option>
                <option value="Completed" ${booking.status === "Completed" ? "selected" : ""}>Completed</option>
              </select>
            </td>
            <td>
              <button class="view-btn" onclick="openModal(${index})">View</button>
              <button class="edit-btn" onclick="editBooking(${index})">Edit</button>
            </td>
          </tr>`;
            });
        }

        function changeStatus(index, value) {
            bookings[index].status = value;
            alert('Status changed to ' + value);
        }

        function openModal(index) {
            const booking = bookings[index];
            document.getElementById('modalProfile').src = booking.profile;
            document.getElementById('modalName').textContent = booking.name;
            document.getElementById('modalNIC').value = booking.nic;
            document.getElementById('modalPhone').value = booking.phone;
            document.getElementById('modalEmail').value = booking.email;
            document.getElementById('modalAddress').value = booking.address;
            document.getElementById('modalService').value = booking.service;
            document.getElementById('modalPackage').value = booking.package;
            document.getElementById('modalDate').value = booking.date;
            document.getElementById('modalPaymentMethod').value = booking.payment;
            document.getElementById('modalTotalAmount').value = booking.totalAmount;
            document.getElementById('modalPaidAmount').value = booking.paidAmount;
            document.getElementById('modalStatus').value = booking.status;
            document.getElementById('userModal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('userModal').style.display = 'none';
        }

        function editBooking(index) {
            const booking = bookings[index];
            window.location.href = `edit-booking.html?id=${booking.id}`;
        }

        window.onload = function () {
            renderBookings();
        }
    </script>

</body>

</html>
