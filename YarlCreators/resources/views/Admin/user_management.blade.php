<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Management | Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" href="../Assets/images/logo.png" />

    <style>
        :root {
            --primary: #EF233C;
            --background: #EDF2F4;
            --card-bg: #ffffff;
            --text-color: #2B2D42;
            --sidebar-bg: #2B2D42;
            --sidebar-text: #EDF2F4;
            --blue: #3498db;
            --red: #e74c3c;
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

        main {
            margin-left: 240px;
            padding: 30px;
            width: calc(100% - 240px);
        }

        .booking-banner {
            background: linear-gradient(135deg, var(--primary), var(--sidebar-bg));
            padding: 50px 20px;
            border-radius: 20px;
            text-align: center;
            margin-bottom: 30px;
            color: white;
        }

        .booking-banner h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .user-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .user-controls button {
            background: var(--primary);
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .search-box {
            display: flex;
            align-items: center;
            background: var(--card-bg);
            border-radius: 8px;
            padding: 8px 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .search-box input {
            border: none;
            background: transparent;
            outline: none;
            font-size: 16px;
            color: var(--text-color);
            padding: 8px;
        }

        .search-box i {
            font-size: 18px;
            margin-right: 8px;
            color: var(--primary);
        }

        .user-table {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: var(--card-bg);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        th,
        td {
            padding: 16px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        th {
            background: var(--primary);
            color: white;
        }

        tr:hover {
            background: #f5f5f5;
        }

        .profile-img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid var(--primary);
        }

        .action-btn {
            padding: 8px 14px;
            font-size: 14px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            margin: 0 5px;
            transition: 0.3s;
        }

        .edit-btn {
            background: var(--blue);
            color: white;
        }

        .edit-btn:hover {
            background: #2980b9;
        }

        .delete-btn {
            background: var(--red);
            color: white;
        }

        .delete-btn:hover {
            background: #c0392b;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            padding: 20px;
            z-index: 999;
        }

        .modal-content {
            background: var(--card-bg);
            padding: 30px;
            border-radius: 15px;
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        .modal-content input,
        .modal-content select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            margin: 10px 0;
            border-radius: 8px;
            background: var(--background);
            color: var(--text-color);
        }

        .modal-actions {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .modal-actions button:first-child {
            background: var(--primary);
            color: white;
        }

        .modal-actions button:last-child {
            background: var(--red);
            color: white;
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

    <script>
        const users = [
            { name: "John Doe", email: "john@example.com", role: "admin", profile: "../Assets/images/Profile/m1.jpg" },
            { name: "Jane Smith", email: "jane@example.com", role: "user", profile: "../Assets/images/Profile/m2.jpg" }
        ];

        function renderUsers() {
            const searchQuery = document.getElementById('searchUser').value.toLowerCase();
            const list = document.getElementById('userList');
            list.innerHTML = '';

            users
                .filter(user => user.name.toLowerCase().includes(searchQuery) || user.role.toLowerCase().includes(searchQuery))
                .forEach((user, index) => {
                    list.innerHTML += `
            <tr>
              <td><img class="profile-img" src="${user.profile}" alt="${user.name}"></td>
              <td>${user.name}</td>
              <td>${user.email}</td>
              <td>${user.role.charAt(0).toUpperCase() + user.role.slice(1)}</td>
              <td>
                <button class="action-btn edit-btn" onclick="editUser(${index})">✏ Edit</button>
                <button class="action-btn delete-btn" onclick="deleteUser(${index})">🗑 Delete</button>
              </td>
            </tr>
          `;
                });
        }

        function openForm() {
            document.getElementById('userModal').style.display = 'flex';
        }

        function closeForm() {
            document.getElementById('userModal').style.display = 'none';
        }

        function saveUser() {
            const name = document.getElementById('userName').value;
            const email = document.getElementById('userEmail').value;
            const role = document.getElementById('userRole').value;
            users.push({ name, email, role, profile: "../Assets/images/placeholder-profile.png" });
            closeForm();
            renderUsers();
        }

        function editUser(index) {
            const user = users[index];
            document.getElementById('formTitle').textContent = 'Edit User';
            document.getElementById('userName').value = user.name;
            document.getElementById('userEmail').value = user.email;
            document.getElementById('userRole').value = user.role;
            openForm();
        }

        function deleteUser(index) {
            if (confirm('Are you sure to delete?')) {
                users.splice(index, 1);
                renderUsers();
            }
        }

        window.onload = renderUsers;
    </script>

</body>

</html>
