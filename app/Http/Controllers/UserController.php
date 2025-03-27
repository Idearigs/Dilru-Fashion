<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function index () {

      $users = User::all();
      return view('Admin.User-management' , compact('users'));
    }

    public function AddUser(Request $request) {
        Log::info('AddUser method called'); // Log entry point
    
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|digits:10', 
            'password' => 'required|string|min:6|confirmed',
        ]);
    
        Log::info('Validation successful', $validatedData); // Log after validation
    
        // Create the user
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ]);
    
            Log::info('User created successfully', ['user_id' => $user->id]); // Log successful user creation
    
            return redirect()->back()->with('success', 'User added successfully');
    
        } catch (\Exception $e) {
            Log::error('Error creating user', ['message' => $e->getMessage()]); // Log any errors
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        // Debugging the user data
        Log::info('User data:', ['user' => $user]);

        return response()->json($user); // Return user data as JSON
    }

    public function update(Request $request)
    {
        // Log the incoming request data
        Log::info('Update request received for user ID: ' . $request->input('user_id'), [
            'request_data' => $request->all(),
        ]);

        // Get the user ID from the form submission
        $userId = $request->input('user_id');

        // Validate incoming request data
        Log::info('Validating request data for user ID: ' . $userId);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $userId,
            'phone' => 'required|string|max:15',
            'password' => 'nullable|string|min:6|confirmed', // Ensure confirmation field is validated
        ]);

        Log::info('Validation passed for user ID: ' . $userId);

        // Find the user to update
        $user = User::findOrFail($userId);

        Log::info('Found user with ID: ' . $userId);

        // Update the user details
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->phone = $validated['phone'];

        // If password is provided, update it
        if ($request->filled('password')) {
            $user->password = bcrypt($validated['password']); // Hash the new password
            Log::info('Password updated for user ID: ' . $userId);
        }

        // Save the updated user
        $user->save();

        Log::info('User ID ' . $userId . ' updated successfully');

        // Return a response (could be redirect or JSON response)
        return redirect()->route('User-management')->with('success', 'User updated successfully!');
    }


    public function destroy($id)
    {
       
    
        // Find the user by ID
        $user = User::findOrFail($id);
    
        // Delete the user
        $user->delete();
    
    
    
        // Return a JSON response indicating success
        return response()->json(['message' => 'User deleted successfully!']);
    }
    



    

    
}
