<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


Route::get('/' , [FrontendController::class, 'index'])->name('Frontend-Home');
Route::get('/Checkout' , [FrontendController::class, 'CheckoutPage'])->name('Frontend-Checkoutpage');
Route::get('/About-us' , [FrontendController::class, 'AboutUs'])->name('Frontend-AboutUs');
Route::get('/contact-us' , [FrontendController::class, 'ContactUs'])->name('Frontend-ContactUs');
Route::get('/Product-Detail' , [FrontendController::class, 'ProductDetails'])->name('Frontend-ProductDetail');
Route::get('/cart', [FrontendController::class , 'Cart'])->name('Frontend-Cart');
