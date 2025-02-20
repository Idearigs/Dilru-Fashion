<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\productImage;
class AdminController extends Controller
{
    //

    public function index()
    {
        // Retrieve all products with their images
        $products = Product::with('images')->get();

        // Pass data to the view (make sure the variable name matches exactly)
        return view('Admin.Product-management', compact('products')); // Not 'Products'
    }

}
