<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //about us page
    public function about(){
        return view('/pages/about');
    }


}

