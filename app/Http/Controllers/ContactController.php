<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $vAR = "Hello World";
        $vAR2 = "Hello World";
        return view('contact', compact("vAR", "vAR2"));
    }
}
