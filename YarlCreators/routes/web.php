<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PaintingFramesController;
use App\Http\Controllers\SketchesController;
use App\Http\Controllers\MugPrintingController;

// Public Routes
Route::get('/', function () {
    return view('index');
});

// Auth Routes - User
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Registration Routes
Route::get('/admin/register', [AuthController::class, 'showAdminRegistrationForm'])->name('admin.register');
Route::post('/admin/register', [AuthController::class, 'postAdminRegistration'])->name('admin.register.post');

// Admin Login Routes
Route::get('/admin/login', [AuthController::class, 'admin_login'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'AdminpostLogin'])->name('admin.login.post');

// Admin Dashboard Route
Route::get('/admin/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');



// Static/User Pages
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blogview', [BlogController::class, 'user_blog_view'])->name('blogview');
Route::get('/blogpage', [BlogController::class, 'user_page_view'])->name('blogpage');

Route::get('/CameraAccessories', [ProductController::class, 'CameraAccessories'])->name('CameraAccessories');
Route::get('/PaintingFrames', [PaintingFramesController::class, 'index'])->name('PaintingFrames');
Route::get('/Sketches', [SketchesController::class, 'index'])->name('Sketches');
Route::get('/MugPrinting', [MugPrintingController::class, 'index'])->name('MugPrinting');
Route::get('/about', [UserDashboardController::class, 'user_about_view'])->name('about');
Route::get('/service', [UserDashboardController::class, 'index'])->name('service');
Route::get('/gallery', [UserDashboardController::class, 'user_gallery_view'])->name('gallery');
Route::get('/contact', [UserDashboardController::class, 'user_contact_view'])->name('contact');
Route::post('/contact', [UserDashboardController::class, 'contact_store'])->name('contact.store');

// Authenticated Routes
Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.delete');
    Route::get('/admin_profile', [ProfileController::class, 'admin_profile_view'])->name('admin_profile');

    // Products
    Route::get('/admin_products', [ProductController::class, 'admin_products_view'])->name('admin_products');
    Route::get('/user_products', [ProductController::class, 'user_products_view'])->name('user_products');
    Route::get('/products', [ProductController::class, 'user_product_view'])->name('products');
    Route::get('/product-checkout', [ProductController::class, 'product_checkout_view'])->name('product-checkout');

    // Orders
    Route::get('/orders', [DashboardController::class, 'orders_view'])->name('orders');
    Route::post('/order', [OrderController::class, 'store'])->name('order.store');
    Route::get('/order-management', [OrderController::class, 'order_management_view'])->name('order-management');

    // Users
    Route::get('/users', [DashboardController::class, 'users_view'])->name('users');
    Route::get('/user-management', [UserController::class, 'user_management_view'])->name('user-management');

    // Blogs
    Route::get('/admin_blogs', [BlogController::class, 'view'])->name('admin_blogs');
    Route::get('/create-blog', [BlogController::class, 'create_blog'])->name('create-blog');
    Route::get('/blog-management', [BlogController::class, 'blog_management_view'])->name('blog-management');

    // Bookings
    Route::get('/booking', [BookingController::class, 'user_booking_view'])->name('booking');
    Route::get('/booking-event', [BookingController::class, 'booking_event_view'])->name('booking-event');
    Route::get('/booking-management', [BookingController::class, 'booking_management_view'])->name('booking-management');
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
    Route::get('/booking-history', [BookingController::class, 'user_booking_history'])->name('booking-history');
    Route::get('/checkout', [BookingController::class, 'checkout_view'])->name('checkout');

    // Inventory
    Route::get('/inventory-management', [InventoryController::class, 'inventory_management_view'])->name('inventory-management');
    Route::get('/add-inventory', [InventoryController::class, 'add_inventory'])->name('add-inventory');
    Route::post('/add-inventory', [InventoryController::class, 'store'])->name('inventory.store');

    // Settings and Reports
    Route::get('/settings', [DashboardController::class, 'setting_view'])->name('setting');
    Route::get('/report-management', [ReportController::class, 'report_management_view'])->name('report-management');

    // Cart
    Route::get('/cart', [UserDashboardController::class, 'user_cart_view'])->name('cart');

    // Feedback
    Route::get('/feedback', [DashboardController::class, 'feedback_view'])->name('feedback');


});// For web routes
Route::middleware(['auth'])->group(function () {
    Route::get('/user-create', [UserController::class, 'user_create'])->name('user-create');
    Route::post('/user-store', [UserController::class, 'store'])->name('user-store');
});

Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');

