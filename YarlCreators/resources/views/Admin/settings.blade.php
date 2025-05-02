<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Settings | Yarl Creators</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" type="image/png" href="{{ asset('Assets/images/logo.png') }}" />
    <link rel="stylesheet" href=" {{ asset('admin_assets/css/settings.css') }}" />
</head>

<body>

    <!-- Sidebar -->
    <nav class="sidebar">
        <h2>Yarl Creators</h2>
        <a href="dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="booking-management"><i class="fas fa-calendar-check"></i> Bookings</a>
        <a href="inventory-management"><i class="fas fa-boxes"></i> Inventory</a>
        <a href="blog-management"><i class="fas fa-blog"></i> Blog</a>
        <a href="order-management"><i class="fas fa-shopping-cart"></i> Orders</a>
        <a href="report-management"><i class="fas fa-chart-line"></i> Reports</a>
        <a href="user-management"><i class="fas fa-users"></i> Users</a>
        <a href="settings" class="active"><i class="fas fa-cog"></i> Settings</a>
        <a href="{{ route('logout') }}"><i class="fas fa-cog"></i> Logout</a>
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
            <input type="text" id="fullName" value="{{ $user->name }}" />

            <label for="email">Email Address</label>
            <input type="email" id="email" value="{{ $user->email }}" />

            <label for="phone">Phone Number</label>
            <input type="text" id="phone" vvalue="{{ $user->phone }}" />

            <label for="address">Address</label>
            <input type="text" id="address" value="{{ $user->address }}" />

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
    <script src="{{ asset('admin_assets/js/settings.js') }}"></script>

</body>

</html>
