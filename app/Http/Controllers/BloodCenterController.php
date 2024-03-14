<?php

namespace App\Http\Controllers;

use App\Models\BloodCenter;
use Illuminate\Http\Request;

class BloodCenterController extends Controller
{
    public function register(Request $request)
    {
        // Validate the request data
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:blood_centers,email|unique:users,email',
                'address' => 'required|string|max:255',
                'city' => 'required|string|max:255',
                'postal' => 'nullable|string|max:20',
                'password' => 'required|min:8|confirmed',
                // Add more validation rules as needed
            ]);

        // Create a new user record associated with the blood center
        $user = new \App\Models\User();
        $user->username = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->save();

        // Create a new blood center record associated with the user
        $bloodCenter = new BloodCenter();
        $bloodCenter->user_id = $user->id;
        $bloodCenter->name = $validatedData['name'];
        $bloodCenter->address = $validatedData['address'];
        $bloodCenter->city = $validatedData['city'];
        $bloodCenter->postal = $validatedData['postal'];
        // Set other attributes as needed
        $bloodCenter->save();

        // Optionally, you can return a response indicating success or redirect somewhere
        return response()->json(['message' => 'Blood center registered successfully']);
    }
}
