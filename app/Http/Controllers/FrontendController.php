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



    public function addToCart($id)
    {
        // Retrieve the product by its ID
        $product = Product::find($id);
    
        if (!$product) {
            return redirect()->route('Frontend-Home')->with('error', 'Product not found.');
        }
    
        // Retrieve the current cart from the session, if it exists, or initialize an empty array
        $cart = Session::get('cart', []);
    
        // Check if the product is already in the cart
        $existingProduct = false;
        foreach ($cart as &$item) {
            if ($item['id'] === $id) {
                // If the product exists, update the quantity
                $item['quantity'] += 1;
                $existingProduct = true;
                break;
            }
        }
    
        // If the product was not already in the cart, add it
        if (!$existingProduct) {
            $cart[] = [
                'id' => $product->id,
                'name' => $product->name,
                'image' => $product->image_path ?? 'default-image.jpg',  // Provide a fallback image
                'price' => $product->price,
                'quantity' => 1,
            ];
        }
    
        // Save the updated cart to the session
        Session::put('cart', $cart);
    
        // Redirect back to the previous page with a success message
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
        return redirect()->route('Frontend-Cart')->with('success', 'Product removed from cart.');
    }

    
}

