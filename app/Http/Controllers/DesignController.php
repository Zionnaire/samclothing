<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    //  Show all designs with filters and pagination
    public function index()
    {

        // Get all the designs and pass them to the view
        $designs = Design::latest()->filter(request(['search', 'tag']))->paginate(6)->withQueryString();

        // Return the view and pass in the above variable
        return view('pages.home', [
            'design' => $designs
        ]);
    }


    //Show the create design page
    public function create()
    {
        return view('admins.createDesign');
    }

    //Store the design
    public function store(Request $request)
    {
        // Validate the request
        //  dd($request->all());
        $attributes = $request->validate([
            'image' => 'required|file|image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:10'],
            'price' => ['required', 'numeric'],
            'category' => ['required'],
            'tags' => ['required'],
            'material' => ['required'],
            'color' => ['required'],
            'style' => ['required'],
        ]);

        if ($request->hasFile('image')) {
            $attributes['image'] = $request->file('image')->store('images', 'public');;
        }

        //Get the Authenticated userId for the current user
        $attributes['admin_id'] = auth()->user()->id;
        // Create the design and save it to the database

        Design::create($attributes);
        // Redirect to the home page
        return redirect('/admins/createDesign')->with('message', 'Design created successfully');
    }

    //Show the edit form
    public function edit(Design $design)
    {
        return view('pages.edit', [
            'design' => $design
        ]);
    }

    //Update the design
    public function update(Request $request, Design $design)
    {
        //Let make sure the user is the is an authorized user, the user must be admin
        if ($design->user_id != auth()->id()) {
            return redirect('/')->with('message', 'Unauthorized page');
        }
        // Validate the request
        $attributes = request()->validate([
            'image' => 'required|file|image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:10'],
            'price' => ['required', 'numeric'],
            'category' => ['required'],
            'tags' => ['required'],
        ]);
        if ($request->hasFile('image')) {
            $attributes['image'] = $request->file('image')->store('images', 'public');
        }
        // Update the design and save it to the database
        $design->update($attributes);
        // Redirect to the home page
        return redirect('/')->with('message', 'Design updated successfully');
    }


    //Delete the design
    public function destroy(Design $design)
    {
        //Let make sure the user is the is an authorized user, the user must be admin
        if ($design->admin_id != auth()->id()) {
            return redirect('/')->with('message', 'Unauthorized page');
        }
        // Delete the design and save it to the database
        $design->delete();
        // Redirect to the home page
        return redirect('/')->with('message', 'Design deleted successfully');
    }

    public function showAllCollections()
    {
        // Fetch all designs
        $designs = Design::all();
    
        // Pass designs to the view
        return view('admins.collections', ['designs' => $designs]);
    }

    //Show the design
    public function show(Design $design)
    {
        return view('pages.show', [
            'design' => $design
        ]);
    }
}
