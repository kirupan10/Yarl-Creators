<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Management | Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" href="../Assets/images/logo.png" />
    <link rel="stylesheet" href="./admin_assets/css/user_management.css" />
</head>

<body>

    <nav class="sidebar">
        <h2>Yarl Creators</h2>
        <a href="dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="booking-management"><i class="fas fa-calendar-check"></i> Bookings</a>
        <a href="inventory-management"><i class="fas fa-boxes"></i> Inventory</a>
        <a href="blog-management"><i class="fas fa-blog"></i> Blog</a>
        <a href="order-management"><i class="fas fa-shopping-cart"></i> Orders</a>
        <a href="report-management"><i class="fas fa-chart-line"></i> Reports</a>
        <a href="user-management" class="active"><i class="fas fa-users"></i> Users</a>
        <a href="settings"><i class="fas fa-cog"></i> Settings</a>
        <a href="{{ route('logout') }}"><i class="fas fa-cog"></i> Logout</a>
    </nav>

    <main>

        <section class="booking-banner">
            <h1>👥 User Management</h1>
            <p>Manage users, assign roles, and control access levels.</p>
        </section>

        <div class="user-controls">
            <button onclick="openForm()">➕ Add New User</button>
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" id="searchUser" placeholder="Search by name or role" onkeyup="renderUsers()" />
            </div>
        </div>

        <section class="user-table">
            <table>
                <thead>
                    <tr>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="userList"></tbody>
            </table>
        </section>

        <div class="modal" id="userModal">
            <div class="modal-content">
                <h2 id="formTitle">Add User</h2>
                <input type="text" id="userName" placeholder="Full Name" />
                <input type="email" id="userEmail" placeholder="Email" />
                <select id="userRole">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                <div class="modal-actions">
                    <button class="action-btn edit-btn" onclick="saveUser()">💾 Save</button>
                    <button class="action-btn delete-btn" onclick="closeForm()">❌ Cancel</button>
                </div>

            </div>
        </div>

    </main>

    <script src="./admin_assets/js/user_management.js"></script>

</body>

</html>
