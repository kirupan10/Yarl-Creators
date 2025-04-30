<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Settings | Yarl Creators</title>
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

        header {
            background: linear-gradient(135deg, var(--primary), var(--sidebar-bg));
            padding: 50px 20px;
            text-align: center;
            border-radius: 20px;
            margin-bottom: 30px;
            color: white;
        }

        header h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        header p {
            font-size: 16px;
            color: #ccc;
        }

        .settings-section {
            background: var(--card-bg);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .settings-section h2 {
            margin-bottom: 20px;
            color: var(--primary);
            font-size: 24px;
        }

        .settings-section label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .settings-section input,
        .settings-section select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 20px;
            background: var(--background);
            color: var(--text-color);
            font-size: 16px;
        }

        .save-btn {
            background: var(--primary);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
            display: block;
            margin: 0 auto;
        }

        .save-btn:hover {
            background: #D90429;
        }

        .profile-container {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile-container img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid var(--primary);
            margin-bottom: 10px;
        }

        .profile-container input[type="file"] {
            display: none;
        }

        .upload-btn {
  background: var(--primary);
  color: white;
  padding: 8px 16px;
  border-radius: 8px;
  cursor: pointer;
  font-size: 14px;
  margin-top: 10px;
  display: inline-block;
  text-align: center;
  transition: 0.3s;
  width: 20%; /* ← important: not full width */
    margin-left: 480px; /* ← important: not full width */
}

.upload-btn:hover {
  background: #D90429;
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
        <a href="dashboard.html"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="booking-management.html"><i class="fas fa-calendar-check"></i> Bookings</a>
        <a href="inventory-management.html"><i class="fas fa-boxes"></i> Inventory</a>
        <a href="blog-management.html"><i class="fas fa-blog"></i> Blog</a>
        <a href="order-management.html"><i class="fas fa-shopping-cart"></i> Orders</a>
        <a href="report-analytics.html"><i class="fas fa-chart-line"></i> Reports</a>
        <a href="user-management.html"><i class="fas fa-users"></i> Users</a>
        <a href="settings.html" class="active"><i class="fas fa-cog"></i> Settings</a>
    </nav>

    <!-- Main Content -->
    <main>

        <header>
            <h1>⚙️ Admin Settings</h1>
            <p>Manage your profile, password and notifications easily.</p>
        </header>

        <!-- Profile Settings -->
        <section class="settings-section">
            <h2>👤 Profile Settings</h2>

            <div class="profile-container">
                <img id="profilePic" src="../Assets/images/Profile/m1.jpg" alt="Profile Picture">
            
                <div style="margin-top: 12px;">
                    <label for="uploadPhoto" class="upload-btn">📷 Change Photo</label>
                    <input type="file" id="uploadPhoto" accept="image/*" onchange="changePhoto(event)">
                </div>
            </div>


            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" value="John Doe" />

            <label for="email">Email Address</label>
            <input type="email" id="email" value="admin@yarlcreators.com" />

            <label for="phone">Phone Number</label>
            <input type="text" id="phone" value="+94 77 123 4567" />

            <label for="address">Address</label>
            <input type="text" id="address" value="123 Main Street, Jaffna" />

            <button class="save-btn">💾 Save Profile</button>
        </section>

        <!-- Password Settings -->
        <section class="settings-section">
            <h2>🔒 Change Password</h2>

            <label for="currentPassword">Current Password</label>
            <input type="password" id="currentPassword" placeholder="Enter current password" />

            <label for="newPassword">New Password</label>
            <input type="password" id="newPassword" placeholder="Enter new password" />

            <label for="confirmPassword">Confirm New Password</label>
            <input type="password" id="confirmPassword" placeholder="Confirm new password" />

            <button class="save-btn">🔄 Update Password</button>
        </section>

        <!-- Notification Settings -->
        <section class="settings-section">
            <h2>🔔 Notification Settings</h2>

            <label for="notifications">Receive Email Notifications</label>
            <select id="notifications">
                <option value="yes">Yes, send me updates</option>
                <option value="no">No, I don't want updates</option>
            </select>

            <button class="save-btn">✅ Save Notifications</button>
        </section>

    </main>

    <script>
        function changePhoto(event) {
            const reader = new FileReader();
            reader.onload = function () {
                document.getElementById('profilePic').src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

</body>

</html>