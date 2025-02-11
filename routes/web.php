<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;


Route::get('/' , [FrontendController::class, 'index'])->name('Frontend-Home');
Route::get('/Checkout' , [FrontendController::class, 'CheckoutPage'])->name('Frontend-Checkoutpage');
Route::get('/About-us' , [FrontendController::class, 'AboutUs'])->name('Frontend-AboutUs');
Route::get('/Contact-us' , [FrontendController::class, 'ContactUs'])->name('Frontend-ContactUs');
Route::get('/Product-Detail' , [FrontendController::class, 'ProductDetails'])->name('Frontend-ProductDetail');
Route::get('/Cart', [FrontendController::class , 'Cart'])->name('Frontend-Cart');



//Admin Routes
Route::get('/admin', [AdminController::class , 'index'])->name('Admin');
Route::get('/Order-management' , [OrderController::class , 'index'])->name('Order-management');
