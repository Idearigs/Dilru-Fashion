<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;

Route::get('/' , [FrontendController::class, 'index'])->name('Frontend-Home');
Route::get('/Checkout' , [FrontendController::class, 'CheckoutPage'])->name('Frontend-Checkoutpage');
Route::get('/About-us' , [FrontendController::class, 'AboutUs'])->name('Frontend-AboutUs');
Route::get('/Contact-us' , [FrontendController::class, 'ContactUs'])->name('Frontend-ContactUs');
Route::get('/Product-Detail' , [FrontendController::class, 'ProductDetails'])->name('Frontend-ProductDetail');
Route::get('/Cart', [FrontendController::class , 'Cart'])->name('Frontend-Cart');



//Admin Routes
Route::get('/admin', [AdminController::class , 'index'])->name('Admin');
Route::get('/Order-management' , [OrderController::class , 'index'])->name('Order-management');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get("/products/edit/{id}" , [ProductController::class, 'edit'])->name('products.edit');


//Temp images
Route::post('/upload-temp-images', [ImageController::class, 'upload']);
Route::post('/remove-temp-image', [ImageController::class, 'remove']);
