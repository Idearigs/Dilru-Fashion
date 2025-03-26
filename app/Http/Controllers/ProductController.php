<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\productImage;
use App\Models\ProductSize;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
class ProductController extends Controller

{


            public function store(Request $request)
            {
                Log::info('Store function called');

                DB::beginTransaction(); // Start transaction

                try {
                    // Validate the request data
                    Log::info('Validating request data...');
                    $validatedData = $request->validate([
                        'name' => 'required|string|max:255',
                        'price' => 'required|numeric',
                        'stock' => 'required|integer',
                        'status' => 'required|string',
                        'description' => 'nullable|string',
                        'images' => 'nullable|array',
                        'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    ]);

                    Log::info('Validation successful', ['validatedData' => $validatedData]);

                    // Create the product
                    Log::info('Creating product...');
                    $product = Product::create($validatedData);

                    if (!$product) {
                        Log::error('Product creation failed.');
                        throw new \Exception('Product creation failed.');
                    }

                    Log::info('Product created successfully', ['product' => $product]);

                    // Save product images
                    if ($request->hasFile('images')) {
                        Log::info('Saving product images...');
                        foreach ($request->file('images') as $image) {
                            $path = $image->store('product_images', 'public');
                            Log::info('Image stored', ['path' => $path]);

                            $product->images()->create(['image_path' => $path]);
                        }
                    }

                    DB::commit(); // Commit transaction
                    Log::info('Transaction committed successfully.');

                    return redirect()->route('Admin')->with('success', 'Product created successfully.');
                } catch (\Exception $e) {
                    DB::rollBack(); // Rollback if error
                    Log::error('Error saving product', ['error' => $e->getMessage()]);

                    return back()->with('error', 'Error saving product: ' . $e->getMessage());
                }
            }


             public function edit($id)

                {
                    $data = Product::with('images')->find($id);

                    if (!$data) {
                        return response()->json(['status' => 'error', 'message' => 'Product not found!'], 404);
                    }

                    return response()->json(['status' => 'success', 'data' => $data]);
                }


                public function update(Request $request, $id)
                {
                    $product = Product::findOrFail($id);
                
                    // Handle image removal
                    if ($request->has('removed_images')) {
                        $removedImages = json_decode($request->removed_images, true);
                        
                        foreach ($removedImages as $imagePath) {
                            $image = ProductImage::where('image_path', $imagePath)->first();
                            if ($image) {
                                Storage::delete('public/' . $image->image_path); // Delete from storage
                                $image->delete(); // Remove from DB
                            }
                        }
                    }
                
                    // Update product details
                    $product->update([
                        'name' => $request->name,
                        'price' => $request->price,
                        'stock' => $request->stock,
                        'description' => $request->description,
                        'status' => $request->status
                    ]);
                
                    // Handle new image uploads
                    if ($request->hasFile('images')) {
                        foreach ($request->file('images') as $image) {
                            $path = $image->store('products', 'public');
                
                            ProductImage::create([
                                'product_id' => $product->id,
                                'image_path' => $path
                            ]);
                        }
                    }
                
                    return response()->json(['status' => 'success']);
                }

                public function updateStatus(Request $request, $id)
                {
                    $product = Product::find($id);

                    if (!$product) {
                        return response()->json(['status' => 'error', 'message' => 'Product not found.']);
                    }

                    // Update the product status
                    $product->status = $request->input('status');
                    $product->save();

                    return response()->json(['status' => 'success', 'message' => 'Product status updated successfully.']);
                }

                


            public function destroy($id)
                {
                    $product = Product::findOrFail($id);

                    // Get all images related to this product
                    $images = ProductImage::where('product_id', $id)->get();

                    // Delete image files from storage
                    foreach ($images as $image) {
                        // Remove the 'storage/' prefix to get the correct path
                        $filePath = str_replace('storage/', '', $image->image_path);

                        // Check if file exists before attempting to delete
                        if (Storage::disk('public')->exists($filePath)) {
                            Storage::disk('public')->delete($filePath);
                        } else {
                            // Optional: Log a message if the file was not found
                            \Log::warning('File not found: ' . $filePath);
                        }
                    }

                    // Delete image paths from product_images table
                    ProductImage::where('product_id', $id)->delete();

                    // Delete the product itself
                    $product->delete();

                    return response()->json(['success' => true]);
                }


}
