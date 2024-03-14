<?php

namespace App\Http\Controllers;

//use App\Http\Request;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Donor;
use App\Models\BloodCenter;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'username' => 'required|max:255|min:2',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
            'terms' => 'required'
        ]);
        $user = User::create($attributes);

        // Check if it's a donor or a blood center registration
        if ($request->has('is_donor')) {
            $donorAttributes = $request->validate([
                // Define donor attributes here
            ]);

            $donor = new Donor($donorAttributes);
            $user->donor()->save($donor);
        } else {
            $bloodCenterAttributes = $request->validate([
                // Define blood center attributes here
            ]);

            $bloodCenter = new BloodCenter($bloodCenterAttributes);
            $user->bloodCenter()->save($bloodCenter);
        }

        auth()->login($user);

        return redirect('/dashboard');
    }
}