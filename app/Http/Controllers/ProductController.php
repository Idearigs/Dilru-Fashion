<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\productImage;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{


    //
    public function store(Request $request)
    {
        // Validate request data
        $request->validate([
            'name'        => 'required|string|max:255',
            'price'       => 'required|numeric|min:0',
            'stock'       => 'required|numeric|min:0',
            'status'      => 'required|string|in:In Stock,Out of Stock,Discontinued',
            'description' => 'nullable|string',
            'images.*'    => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048' // Image validation
        ]);

        // Create a new product
        $product = Product::create([
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => $request->price,
            'status'      => $request->status,
            'stock'       => $request->stock,
        ]);

        // Handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Store image in storage/app/public/ProductIMG
                $imagePath = $image->store('product_images', 'public');

                // Save image path in product_images table
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => 'storage/' . $imagePath // Correct relative path for display
                ]);
            }
        }


        return redirect()->back()->with('success', 'Product added successfully!');
    }

            public function edit($id)
            {
                $data = Product::with('images')->find($id);

                if (!$data) {
                    return response()->json(['status' => 'error', 'message' => 'Product not found!'], 404);
                }

                return response()->json(['status' => 'success', 'data' => $data]);
            }



}
