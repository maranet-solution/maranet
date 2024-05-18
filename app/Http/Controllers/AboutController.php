<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function about()
    {
        // get first about us
        $aboutUs = About::first();
        return view('about', compact("aboutUs"));
    }
}
