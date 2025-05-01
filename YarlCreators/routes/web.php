<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController
;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthController;


use App\Http\Controllers\DashboardController;


use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\BookingController;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\InventoryController;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// User Routes

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'postRegistration'])->name('register.post');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blogpage', [BlogController::class, 'index'])->name('blog');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/contact', [UserDashboardController::class, 'contact_store'])->name('contact.store');




Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.delete');

Route::get('/admin_products',[ProductController::class,'admin_products_view'])->name('admin_products');
Route::get('/user_products',[ProductController::class,'user_products_view'])->name('user_products');

Route::get('/CameraAccessories', [ProductController::class, 'CameraAccessories'])->name('CameraAccessories'); //CameraAccessories return view
Route::get('/PaintingFrames', [PaintingFramesController::class, 'index'])->name('PaintingFrames'); //painting frames
Route::get('/Sketches', [SketchesController::class, 'index'])->name('Sketches');
Route::get('/MugPrinting', [MugPrintingController::class, 'index'])->name('MugPrinting');
Route::get('/about', [UserDashboardController::class, 'user_about_view'])->name('about');
Route::get('/service',[UserDashboardController::class, 'index'])->name('service');
Route::get('/gallery', [UserDashboardController::class, 'user_gallery_view'])->name('gallery');
Route::get('/product', [ProductController::class, 'user_product_view'])->name('product');

Route::get('/blogview', [BlogController::class, 'user_blog_view'])->name('blogview');
Route::get('/blogpage', [BlogController::class, 'user_page_view'])->name('blogpage');

Route::get('/contact', [UserDashboardController::class, 'user_contact_view'])->name('contact');

//Admin Routes

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); //admin dashboard route
});

Route::middleware(['auth'])->group(function () {
    Route::get('/orders', [DashboardController::class, 'orders_view'])->name('orders'); //admin orders.view route
});

Route::middleware(['auth'])->group(function () {
    Route::get('/users', [DashboardController::class, 'users.view'])->name('users'); //admin users.view route
});

Route::middleware(['auth'])->group(function () {
    Route::get('/Products', [ProductController::class, 'view'])->name('Products');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin_blogs', [BlogController::class, 'view'])->name('admin_blogs');
});

Route::middleware(['auth'])->group(function () { //feedback route
    Route::get('/feedback', [DashboardController::class, 'feedback_view'])->name('feedback');
});


Route::middleware(['auth'])->group(function () { //feedback route
    Route::get('/admin_blogs', [DashboardController::class, 'admin_blogs_view'])->name('admin_blogs');
});

Route::middleware(['auth'])->group(function () { //feedback route
    Route::get('/admin_profile', [ProfileController::class, 'admin_profile_view'])->name('admin_profile');
});


Route::get('/admin_login', [AuthController::class, 'admin_login'])->name('admin_login');

Route::post('/login', [AuthController::class, 'postLogin'])->name('login.post');


Route::middleware(['auth'])->group(function () { //feedback route
    Route::get('/booking-management', [BookingController::class, 'booking_management_view'])->name('booking-management');
});

Route::middleware(['auth'])->group(function () { //feedback route
    Route::get('/inventory-management', [InventoryController::class, 'inventory_management_view'])->name('inventory-management');
});

Route::middleware(['auth'])->group(function () { //feedback route
    Route::get('/blog-management', [BlogController::class, 'blog_management_view'])->name('blog-management');
});


Route::middleware(['auth'])->group(function () { //feedback route
    Route::get('/order-management', [OrderController::class, 'order_management_view'])->name('order-management');
});

Route::middleware(['auth'])->group(function () { //feedback route
    Route::get('/user-management', [userController::class, 'user_management_view'])->name('user-management');
});

Route::middleware(['auth'])->group(function () { //feedback route
    Route::get('/settings', [DashboardController::class, 'setting_view'])->name('setting');
});

Route::middleware(['auth'])->group(function () { //feedback route
    Route::get('/report-management', [ReportController::class, 'report_management_view'])->name('report-management');
});

Route::middleware(['auth'])->group(function () { //feedback route
    Route::get('/booking', [BookingController::class, 'user_booking_view'])->name('booking');
});

Route::middleware(['auth'])->group(function () { //feedback route
    Route::get('/booking-event', [BookingController::class, 'booking_event_view'])->name('booking-event');
});

Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

Route::middleware(['auth'])->group(function () { //feedback route
    Route::get('/checkout', [BookingController::class, 'checkout_view'])->name('checkout');
});

Route::middleware(['auth'])->group(function () { //feedback route
    Route::get('/booking-history', [BookingController::class, 'user_booking_history'])->name('booking-history');
});

Route::middleware(['auth'])->group(function () { //feedback route
    Route::get('/create-blog', [BlogController::class, 'create_blog'])->name('create-blog');
});


