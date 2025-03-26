<?php

namespace App\Http\Controllers;


use App\Models\product;

use App\Models\ProductSize;
use App\Models\Size;
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

    public function getSizes(){
        $sizes = Size::all();
        return response()->json($sizes);
    }

    public function getSizesEdit($productId)
    {
        // Fetch sizes with their names by joining the sizes table
        $sizes = ProductSize::where('product_id', $productId)
            ->join('sizes', 'product_size.size_id', '=', 'sizes.id')
            ->select('product_size.*', 'sizes.name as size_name') // Include size name
            ->get();

        return response()->json([
            'status' => 'success',
            'sizes' => $sizes,
        ]);
    }


}
