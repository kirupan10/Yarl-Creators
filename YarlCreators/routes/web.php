<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaintingFramesController;
use App\Http\Controllers\SketchesController;




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

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('registration', [AuthController::class, 'registration'])->name('register');

Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');

Route::get('dashboard', [AuthController::class, 'dashboard']);

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store'); //hiruthikan

Route::get('/products', function () {
    return view('products');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.delete');

Route::get('/products',[ProductController::class,'index'])->name('products');

Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
Route::post('/products/store',[ProductController::class,'store'])->name('products.store');
Route::get('/products/{id}/edit',[ProductController::class,'edit'])->name('products.edit');
Route::post('/products/{id}/update',[ProductController::class,'update'])->name('products.update');
Route::get('/products/{id}/delete',[ProductController::class,'destroy'])->name('products.delete');
Route::get('/products/{id}',[ProductController::class,'show'])->name('products.show');
Route::get('/products/{id}/delete',[ProductController::class,'destroy'])->name('products.delete');
Route::get('/products/{id}/delete',[ProductController::class,'destroy'])->name('products.delete');
Route::get('/products/{id}/delete',[ProductController::class,'destroy'])->name('products.delete');



//Route::get('/products', [ProductController::class, 'index'])->name('products');


Route::get('/CameraAccessories', [ProductController::class, 'CameraAccessories'])->name('CameraAccessories'); //CameraAccessories return view
Route::get('/PaintingFrames', [PaintingFramesController::class, 'index'])->name('PaintingFrames'); //painting frames

Route::get('/Sketches', [SketchesController::class, 'index'])->name('Sketches');
