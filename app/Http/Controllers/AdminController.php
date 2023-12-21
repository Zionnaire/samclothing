<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Design;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class AdminController extends Controller

// Here is a reference snippet of code from app/Http/Controllers/AdminsController.php:

{
      // Authenticate the admin_user
      public function Adminauthenticate(Request $request)
      {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        // dd(bcrypt($request->password));
        
// Attempt to log in the admin
        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            // Authentication passed, redirect to admin dashboard
            return redirect()->intended('/admins/dashboard');
        }

        // Authentication failed, redirect back with errors
        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }  

    //Show register/create form
    public function create(){
        return view('admins.register');
    }

    // Store a new admin_user
    public function store(Request $request){
        //Validate the form data
        $attributes = $request->validate([
            'name' =>['required', 'min:3'],
            'email' => ['required','email', Rule::unique('admins', 'email')],
            'password' => ['required','min:6', 'confirmed'],
        ]);
    
        //Hash the password
        $attributes['password'] = bcrypt($attributes['password']);
    
        //Create and save the admin_user
        $admin = Admin::create($attributes);
    
        // Login the admin_user
        auth()->login($admin);
            return redirect()->route('admins.login')->with('message', 'Admin created successfully!');
    }

       //Show Logout Form
       public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admins/login')->with('message', 'Admin logged out successfully!');
    }

   // Show Admin Login Form
   public function login()
   {
       return view('admins.login');
       }

      
       
    //Show admin Dashboard
    public function dashboard(){
        return view('admins.dashboard');
    }

}

