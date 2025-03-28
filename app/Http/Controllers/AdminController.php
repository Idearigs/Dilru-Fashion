<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
  

    public function index()
    {
        // Retrieve all products with their images
        $products = Product::with('images')->get();

        // Pass data to the view
        return view('Admin.Product-management', compact('products'));
    }
}
