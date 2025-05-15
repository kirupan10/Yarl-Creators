<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Settings | Yarl Creators</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" type="image/png" href="{{ asset('Assets/images/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('admin_assets/css/settings.css') }}" />
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
        <a href="user-management" class="active"><i class="fas fa-users"></i> Users</a>
        <a href="settings"><i class="fas fa-cog"></i> Settings</a>
        <a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </nav>

    <!-- Main Content -->
    <main>
        <header>
            <h1>⚙️ Admin Settings</h1>
            <p>Create User/Admin Users and Manage easily.</p>
        </header>

        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Profile Settings -->
        <section class="settings-section">
            <h2>👤 Create User</h2>

            <form action="{{ route('user-store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="profile-container">
                    <img id="profilePic" src="{{ asset('Assets/images/Profile/m1.jpg') }}" alt="Profile Picture">
                    <div style="margin-top: 12px;">
                        <label for="uploadPhoto" class="upload-btn">📷 Upload Photo</label>
                        <input type="file" id="uploadPhoto" name="photo" accept="image/*"
                            onchange="changePhoto(event)">
                    </div>
                </div>

                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" name="name" required />

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required />

                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" />

                <label for="address">Address</label>
                <input type="text" id="address" name="address" />

                <label for="newPassword">New Password</label>
                <input type="password" id="newPassword" name="password" placeholder="Enter new password" required />

                <label for="confirmPassword">Confirm New Password</label>
                <input type="password" id="confirmPassword" name="password_confirmation"
                    placeholder="Confirm new password" required />

                <label for="role">User Role</label>
                <select id="role" name="role" required>
                    <option value="0">User</option>
                    <option value="1">Admin</option>
                </select>


                <button type="submit" class="save-btn">💾 Save Profile</button>
            </form>
        </section>
    </main>

    <script src="{{ asset('admin_assets/js/settings.js') }}"></script>
    <script>
        function changePhoto(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('profilePic');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>

</html>
