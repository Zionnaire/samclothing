<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CollectionsController;
use App\Http\Controllers\UsersController;
use App\Models\User;
use Filament\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/collections/{category}', [CollectionsController::class, 'show']);

Route::get('/contact', [ContactController::class, 'contact'])->name('pages.contact');

Route::post('/contact', [ContactController::class, 'sendMessage'])->name('pages.contact.send');

// Admin auth routes 
// Route::middleware('guest:admin')->group(function () {

    // Route::get('/admins/register', [AdminController::class,'create'])->name('admins.register');
    
    // Route::get('/admins/login', [AdminController::class, 'login'])->name('admins.login');
  
  // });
  // Login routes
  Route::post('/auth/admins/login', [AdminController::class,'Adminauthenticate'])->name('admins.auth');
  Route::post('/users/login', [UsersController::class, 'authenticate'])->name('users.dashboard');

  Route::middleware('auth:admin')->group(function () {
      
    Route::get('/admins/dashboard', [AdminController::class,'dashboard'])->name('dashboard');
    Route::post('/admins/logout', [AdminController::class,'logout'])->name('admins.logout');

  
  });


// Auth routes
// Route::middleware('guest')->group(function () {

  Route::get('/register', [UsersController::class,'create']);
  
  Route::get('/login', [UsersController::class, 'login'])->name('login');

  Route::get('/admins/register', [AdminController::class,'create'])->name('admins.register');

  Route::get('/admins/login', [AdminController::class, 'login'])->name('admins.login');
  
// });

Route::middleware('auth')->group(function () {

  Route::post('/logout', [UsersController::class,'logout']);

  Route::get('/users/dashboard', [UsersController::class, 'dashboard']);

});

// Registration routes
Route::post('/admins/register', [AdminController::class, 'store'])->name('admins.register');

Route::post('/users', [UsersController::class,'store']);


