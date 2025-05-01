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
