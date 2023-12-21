<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CollectionsController;

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
//Get a form to create a new design
Route::get('/admins/createDesign', [DesignController::class, 'create'])->name('admins.createDesign');

//Store a new design
Route::post('/admins/createDesign', [DesignController::class,'store'])->middleware('auth:admin');

//Get a list of all designs
// Route::get('/', [DesignController::class, 'index']);

//Get a specific design
Route::get('/designs/{design}', [DesignController::class,'show'])->name('pages.show');
//Get a form to edit a design
// Route::get('/designs/{design}/edit', [DesignController::class, 'edit'])->name('admins.editDesign');



Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);
Route::get('/admins/collections', [DesignController::class, 'showAllCollections'])->name('admins.collections');

Route::get('/collections/{category}', [CollectionsController::class, 'show']);

Route::get('/contact', [ContactController::class, 'contact'])->name('pages.contact');

Route::post('/contact', [ContactController::class, 'sendMessage'])->name('pages.contact.send');

  // Login routes
  Route::post('/auth/admins/login', [AdminController::class,'Adminauthenticate'])->name('admins.auth');
  Route::post('/users/login', [UsersController::class, 'authenticate'])->name('users.dashboard');

  // Admin auth routes with middleware

  Route::middleware('auth:admin')->group(function () {
      
    Route::get('/admins/dashboard', [AdminController::class,'dashboard'])->name('dashboard');
    Route::post('/admins/logout', [AdminController::class,'logout'])->name('admins.logout');
//Get a form to Edit a Listing
Route::get('/admins/{design}/edit', [DesignController::class,'edit'])->name('pages.edit');

//Update a Listing
Route::put('/admins/{design}', [DesignController::class,'update']);

//Delete a Listing
Route::delete('/admins/{design}', [DesignController::class,'destroy']);
  });


// Auth routes

  Route::get('/register', [UsersController::class,'create']);
  
  Route::get('/login', [UsersController::class, 'login'])->name('login');

  Route::get('/admins/register', [AdminController::class,'create'])->name('admins.register');

  Route::get('/admins/login', [AdminController::class, 'login'])->name('admins.login');
  
//User Auth routes with middleware
Route::middleware('auth')->group(function () {

  Route::post('/logout', [UsersController::class,'logout']);

  Route::get('/users/dashboard', [UsersController::class, 'dashboard']);

});

// Registration routes
Route::post('/admins/register', [AdminController::class, 'store'])->name('admins.register');

Route::post('/users', [UsersController::class,'store']);

