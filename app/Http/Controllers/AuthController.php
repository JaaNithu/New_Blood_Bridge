<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function verifyEmail()
    {
        return view('auth.verify-email');
    }

}
