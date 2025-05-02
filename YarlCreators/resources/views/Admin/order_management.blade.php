<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Management | Yarl Creators</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" type="image/png" href="{{ asset('Assets/images/logo.png') }}" />
    <link rel="stylesheet" href=" {{ asset('admin_assets/css/order_management.css') }}" />

</head>

<body>

    <nav class="sidebar">
        <h2>Yarl Creators</h2>
        <a href="dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="booking-management"><i class="fas fa-calendar-check"></i> Bookings</a>
        <a href="inventory-management"><i class="fas fa-boxes"></i> Inventory</a>
        <a href="blog-management"><i class="fas fa-blog"></i> Blog</a>
        <a href="order-management" class="active"><i class="fas fa-shopping-cart"></i> Orders</a>
        <a href="report-management"><i class="fas fa-chart-line"></i> Reports</a>
        <a href="user-management"><i class="fas fa-users"></i> Users</a>
        <a href="settings"><i class="fas fa-cog"></i> Settings</a>
        <a href="{{ route('logout') }}"><i class="fas fa-cog"></i> Logout</a>
    </nav>

    <main>
        <section class="order-banner">
            <h1>🛒 Order Management</h1>
            <p>Manage customer orders, statuses, and sales records.</p>
        </section>

        <div class="filters">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" placeholder="Search orders..." />
            </div>
        </div>

        <section class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Order #</th>
                        <th>Customer</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Product</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Change Status</th>
                    </tr>
                </thead>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->full_name }}</td>
                        <td>{{ $order->street_address }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->item }}</td>
                        <td>{{ $order->created_at }}</td>
                        <td>${{ $order->total }}</td>
                        <td>Pending</td>
                        <td>{{ ucfirst($order->payment_method) }}</td>
                    </tr>
                @endforeach
            </table>
            <div id="noResults" class="no-results" style="display: none;">No orders found.</div>
        </section>
    </main>
    <script src="{{ asset('admin_assets/js/order_management.js') }}"></script>


</body>

</html>
