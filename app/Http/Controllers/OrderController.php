<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    //

    public function index() {
        return view('Admin.Order-management');
    }


    public function store(Request $request)
    {
        // Log the incoming request data
        Log::info('Received checkout request data:', $request->all());

        // Validate incoming request data
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'town' => 'required|string|max:255',
            'postcode' => 'required|string|max:255',
            'street_address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'order_notes' => 'nullable|string',
            'cart' => 'required|string', // Changed from array to string
        ]);

        Log::info('Validation passed. Data:', $validated);

        try {
            // Decode the cart JSON
            $cart = json_decode($validated['cart'], true);
            
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception('Invalid cart data: ' . json_last_error_msg());
            }

            Log::info('Decoded cart data:', $cart);

            // Create the order
            $order = Order::create([
                'full_name' => $validated['full_name'],
                'last_name' => $validated['last_name'],
                'country' => $validated['country'],
                'town' => $validated['town'],
                'postcode' => $validated['postcode'],
                'street_address' => $validated['street_address'],
                'phone' => $validated['phone'],
                'email' => $validated['email'],
                'status' => 'pending',
                'additional_note' => $validated['order_notes'],
                'total_amount' => $this->calculateTotal($cart), // Add total amount
            ]);

            Log::info('Order created successfully. Order ID:', ['order_id' => $order->id]);

            // Store order details
            foreach ($cart as $item) {
                OrderDetails::create([
                    'order_id' => $order->id,
                    'product_id' => $item['id'],
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                    'size' => $item['size'] ?? null, // Include size if available
                ]);
                Log::info('Order detail added:', [
                    'product_id' => $item['id'],
                    'quantity' => $item['quantity'],
                    'price' => $item['price']
                ]);
            }

            // Clear the cart session after storing the order
            Session::forget('cart');
            Log::info('Cart session cleared.');

            // Redirect to success page with order details
            return redirect()->route('checkout.success')->with([
                'order_id' => $order->id,
                'success' => 'Your order has been placed successfully!'
            ]);

        } catch (\Exception $e) {
            Log::error('Error during order processing: ' . $e->getMessage(), [
                'exception' => $e,
                'trace' => $e->getTraceAsString()
            ]);
            
            return back()->withInput()->withErrors([
                'error' => 'There was an error processing your order. Please try again.'
            ]);
        }
    }

    protected function calculateTotal($cartItems)
    {
        return array_reduce($cartItems, function($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);
    }
}
