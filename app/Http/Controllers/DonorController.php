<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function register(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'blood_group' => 'required|string|max:10',
            'age' => 'required|integer|min:18',
            'email' => 'required|email|unique:users,email',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'password' => 'required|min:8|confirmed',
            // Add more validation rules as needed
        ]);

        // Create a new user record associated with the donor
        $user = new \App\Models\User();
        $user->firstname = $validatedData['firstname'];
        $user->lastname = $validatedData['lastname'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->save();

        // Create a new donor record associated with the user
        $donor = new Donor();
        $donor->user_id = $user->id;
        $donor->name = $validatedData['firstname'] . ' ' . $validatedData['lastname'];
        $donor->blood_group = $validatedData['blood_group'];
        $donor->age = $validatedData['age'];
        $donor->address = $validatedData['address'];
        $donor->city = $validatedData['city'];
        // Set other attributes as needed
        $donor->save();

        // Optionally, you can return a response indicating success or redirect somewhere
        return response()->json(['message' => 'Donor registered successfully']);
    }
}
