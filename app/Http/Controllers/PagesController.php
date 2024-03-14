<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to Blood Bridge";
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title = "About Us";
        // return view('pages.about');
        return view('pages.about')->with('title', $title);
    }
    public function contact(){
        $title = "Contact Us";
        // return view('pages.about');
        return view('pages.contact')->with('title', $title);
    }
    public function bloodCenters(){
        $title = "Blood Centers";
        // return view('pages.about');
        return view('pages.bloodCenters')->with('title', $title);
    }
    public function donors(){
        $title = "Donors";
        // return view('pages.about');
        return view('pages.donors')->with('title', $title);
    }
    public function services(){
        $title = "Services";
        // return view('pages.about');
        return view('pages.services')->with('title', $title);
    }
    public function registerPage(){
        $title = "Register";
        // return view('pages.about');
        return view('pages.registerPage')->with('title', $title);
    }
    public function loginPage(Request $request)
    {
        $title = "Login";
        // return view('pages.about');
        return view('pages.loginPage')->with('title', $title);
        
        // Validate the request...
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
