<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile | Yarl Creators</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="{{asset('images/logo.png')}}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
</head>

<body>

    <!-- Hero -->
    <section class="hero-banner">
        <div class="overlay">
            <h1>About Yarl Creators</h1>
            <p>Digital Media Production Company Based in Jaffna</p>
        </div>
    </section>

    <!-- Profile Sections -->
    <div class="profile-content">

        <!-- Edit Profile -->
        <div class="section">
            <div class="hero">
            <img id="profilePic" src="{{asset('Profile/m1.jpg')}}" alt="Profile Picture">
            <h1 id="profileName">John Doe</h1>
            <p id="profileEmail">john@example.com</p>
            <label for="uploadPhoto" class="change-photo">Change Photo</label>
            <input type="file" id="uploadPhoto" style="display:none" onchange="changePhoto(event)">
            </div>
            <h2>👤 Edit Profile</h2>
            <label>Full Name</label>
            <input type="text" id="fullName" value="John Doe">
            <label>Email Address</label>
            <input type="email" id="email" value="john@example.com">
            <label>Phone Number</label>
            <input type="text" id="phone" value="+94 76 606 0499">
            <label>Address</label>
            <input type="text" id="address" value="Jaffna, Sri Lanka">
            <button class="save-btn" onclick="saveProfile()">💾 Save Profile</button>
        </div>

        <!-- Change Password -->
        <div class="section">
            <h2>🔒 Change Password</h2>
            <label>Current Password</label>
            <input type="password" id="currentPassword">
            <label>New Password</label>
            <input type="password" id="newPassword">
            <label>Confirm New Password</label>
            <input type="password" id="confirmPassword">
            <button class="save-btn" onclick="updatePassword()">🔄 Update Password</button>
        </div>

    </div>

    <!-- Bottom Navbar -->


    <script>
        function changePhoto(event) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('profilePic').src = e.target.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        function saveProfile() {
            alert('✅ Profile Updated Successfully!');
        }

        function updatePassword() {
            alert('🔒 Password Changed Successfully!');
        }
    </script>

</body>

</html>
