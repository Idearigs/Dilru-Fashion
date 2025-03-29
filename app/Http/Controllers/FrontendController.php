<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
class FrontendController extends Controller
{
    //

    public function index() {

        $products = Product::with('images')->get();
        return view('User.index', compact('products'));
    }


    public function ProductDetails($id){

        $relproducts = Product::with('images')->get();
        $products = Product::with('images')->findOrFail($id);
        Log::info($products);
        return view('User.Product-Details' ,compact('products' , 'relproducts'));



    }

    public function CheckoutPage(){

        return view('User.Checkout-page');

    }


    public function AboutUs(){
        return view('User.AboutUs');

    }

    public function ContactUs(){

        return view('User.ContactUs');

    }

    public function Cart(){

        return view('User.cart');

    }



    public function addToCart(Request $request, $id)
    {
        Log::info("Add to Cart initiated for Product ID: $id");
    
        // Retrieve the product by its ID
        $product = Product::find($id);
    
        if (!$product) {
            Log::error("Product not found: ID $id");
            return redirect()->route('Frontend-Home')->with('error', 'Product not found.');
        }
    
        Log::info("Product found: ", ['id' => $product->id, 'name' => $product->name, 'image' => $product->images]);
    
        // Retrieve size and quantity from the request
        $size = $request->input('size', 'Default');
        $quantity = max(1, (int) $request->input('quantity', 1));
        Log::info("Selected Size: $size, Quantity: $quantity");
    
        // Retrieve the current cart from the session
        $cart = Session::get('cart', []);
        Log::info("Current Cart: ", $cart);
    
        // Get the first image's path (if images exist)
        $imagePath = $product->images->isNotEmpty() ? $product->images->first()->image_path : 'default-image.jpg';
    
        Log::info("Product image path: $imagePath");
    
        // Check if the product with the same size is already in the cart
        $productExists = false;
        foreach ($cart as &$item) {
            if ($item['id'] == $id && $item['size'] == $size) {
                Log::info("Product already in cart. Updating quantity.", ['id' => $id, 'size' => $size, 'existing_quantity' => $item['quantity']]);
                $item['quantity'] += $quantity;
                $productExists = true;
                break;
            }
        }
    
        // If the product was not already in the cart, add it
        if (!$productExists) {
            Log::info("Adding new product to cart", ['id' => $id, 'size' => $size, 'quantity' => $quantity]);
            $cart[] = [
                'id' => $product->id,
                'name' => $product->name,
                'image' => $imagePath, // Use the $imagePath variable we prepared
                'price' => $product->price,
                'quantity' => $quantity,
                'size' => $size,
            ];
        }
    
        // Save the updated cart to the session
        Session::put('cart', $cart);
        Log::info("Updated Cart: ", Session::get('cart')); // Add this line to verify the cart content
    
        return back()->with('success', 'Product added to cart.');
    }
    
    

    
    

    public function removeFromCart($id)
    {
        $cart = Session::get('cart', []);

        // Loop through the cart and remove the item by its ID
        foreach ($cart as $key => $item) {
            if ($item['id'] == $id) {
                unset($cart[$key]);
                break;
            }
        }

        // Save the updated cart back to the session
        Session::put('cart', $cart);

        // Optionally return a success response or redirect
        return back()->with('success');
    }

    
}

