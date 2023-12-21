<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class HomeController extends Controller
{
    //Show the home page
   public function index(){
    
       // Get all the designs and pass them to the view
       $designs = Design::latest()->filter(request(['search', 'tag']))->paginate(6)->withQueryString();

       // Return the view and pass in the above variable
       return view('pages.home', [
          'designs' => $designs
       ]);
   }


   //Show the create design page
   public function create(){
    return view('pages.createDesign');
   }

   //Store the design
   public function store(Request $request){
    // Validate the request
       $attributes = request()->validate([
           'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           'title' =>['required', 'min:3'],
           'description' => ['required','min:10'],
           'price' => ['required', 'numeric'],
           'category' => ['required'],
           'tags' => ['required'],
       ]);
if($request->hasFile('image')){
    $attributes['image'] = $request->file('image')->store('images', 'public');;
    }

    //Get the Authenticated userId for the current user
    $attributes['user_id'] = auth()->user()->id;
    // Create the design and save it to the database
    Design::create($attributes);
    // Redirect to the home page
    return redirect('/')->with('message', 'Design created successfully');     
}

//Show the edit form
public function edit(Design $design){
    return view('pages.edit', [
        'design' => $design
    ]);
}

//Update the design
public function update(Request $request, Design $design){
    //Let make sure the user is the is an authorized user, the user must be admin
if($design->user_id != auth()->id()){
    return redirect('/')->with('message', 'Unauthorized page');
}
    // Validate the request
    $attributes = request()->validate([
        'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'title' =>['required', 'min:3'],
        'description' => ['required','min:10'],
        'price' => ['required', 'numeric'],
        'category' => ['required'],
        'tags' => ['required'],
    ]);
    if($request->hasFile('image')){
        $attributes['image'] = $request->file('image')->store('images', 'public');
    }
    // Update the design and save it to the database
    $design->update($attributes);
    // Redirect to the home page
    return redirect('/')->with('message', 'Design updated successfully');
}


//Delete the design
public function destroy(Design $design){
    //Let make sure the user is the is an authorized user, the user must be admin
if($design->user_id != auth()->id()){
    return redirect('/')->with('message', 'Unauthorized page');
}
    // Delete the design and save it to the database
    $design->delete();
    // Redirect to the home page
    return redirect('/')->with('message', 'Design deleted successfully');
}

//

//Show the design
public function show(Design $design){
    return view('pages.show', [
        'design' => $design
    ]);
}


}
