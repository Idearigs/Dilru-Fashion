<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::get('/' , [FrontendController::class, 'index'])->name('Frontend-Home');
Route::get('/Checkout' , [FrontendController::class, 'CheckoutPage'])->name('Frontend-Checkoutpage');
Route::get('/About-us' , [FrontendController::class, 'AboutUs'])->name('Frontend-AboutUs');
Route::get('/Contact-us' , [FrontendController::class, 'ContactUs'])->name('Frontend-ContactUs');
Route::get('/Product-Detail/{id}' , [FrontendController::class, 'ProductDetails'])->name('Frontend-ProductDetail');
Route::get('/Cart', [FrontendController::class , 'Cart'])->name('Frontend-Cart');
// Route to add a product to the cart
Route::post('/add-to-cart/{id}', [FrontendController::class, 'addToCart'])->name('add-to-cart');
Route::get('/remove-from-cart/{id}', [FrontendController::class, 'removeFromCart'])->name('remove-from-cart');


// Admin Authentication Routes
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Protect Admin Routes with Middleware
Route::middleware(['auth'])->group(function () {
    
    // Admin Dashboard
    Route::get('/admin', [AdminController::class , 'index'])->name('Admin');

    // Product Routes
    Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
    Route::get("/products/edit/{id}" , [ProductController::class, 'edit'])->name('products.edit');
    Route::post('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}/delete', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::post('/products/update/status/{id}', [ProductController::class, 'updateStatus']);

    // User Management
    Route::get('User-manamgemnt', [UserController::class , 'index'])->name('User-management');
    Route::post('/User/add', [UserController::class , 'AddUser'])->name('add-user');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/users/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('user.delete');

    // Order Management
    Route::get('/Order-management', [OrderController::class , 'index'])->name('Order-management');

    // Temp Images
    Route::post('/upload-temp-images', [ImageController::class, 'upload']);
    Route::post('/remove-temp-image', [ImageController::class, 'remove']);

    // Sizes
    Route::get('/get-sizes', [AdminController::class , 'getSizes']);
    Route::get('/products/sizes/{productId}', [AdminController::class, 'getSizesEdit']);
});
