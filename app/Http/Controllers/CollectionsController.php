<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionsController extends Controller
{
    // Collections page

    public function collections(){

        return view('collections');
    }
}
