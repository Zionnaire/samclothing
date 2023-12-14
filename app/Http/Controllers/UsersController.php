<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Design;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UsersController extends Controller
{
    //Show register/create form
    public function create(){
        return view('users.register');

    }

    //Show User Dashboard
public function dashboard(){
    return view('users.dashboard');
}

//Show Admin Dashboard
public function adminDashboard(){
    return view('admin.dashboard');
}

    //Store a new user
    public function store(Request $request){
        //Validate the form data
        $attributes = $request->validate([
            'name' =>['required', 'min:3'],
            'email' => ['required','email', Rule::unique('users', 'email')],
            'password' => ['required','min:6', 'confirmed'],
        ]);

        //Hash the password
        $attributes['password'] = bcrypt( $attributes['password']);
        //Create and save the user
$user = User::create( $attributes);
// Login the user
auth()->login($user);
return redirect('/users/dashboard')->with('message', 'User created successfully!');
       
    }

    //Show Logout Form
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'User logged out successfully!');
    }

    //Show Login Form
    public function login(){
        return view('users.login');
    }

    //Authenticate the user
    public function authenticate(Request $request){
        //Validate the form data
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required','min:6'],
        ]);
        $user = User::where('email', $credentials['email'])->first();

       // Check if admin
//   if($admin) {
//     // Authenticate against admin model
//     if(auth()->guard('admin')->attempt($credentials)) {
//       // Login successful
//       return redirect()->intended('/admins/dashboard'); 
//     }
    
//   }
  // Otherwise check if regular user
if($user) {
    // Authenticate against user model
    if(auth()->guard('web')->attempt($credentials)) {
      // Login successful  
      return redirect()->intended('/users/dashboard');
    }
  }
        //Attempt to log the user in
        else{
            return back()->withErrors([
                'email' => 'Invalid credentials'
            ])->onlyInput('email');
        }
      
}

 //Show Relationships between User and Designs
 public function userDesigns(): HasMany{
    return $this->hasMany(Design::class);
 }

}