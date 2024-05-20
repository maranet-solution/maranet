<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin()
    {
        return view('admin.index');
    }

    public function about()
    {
        return view('admin.about');
    }

    public function faq()
    {
        return view('admin.faq');
    }
    public function pricing()
    {
        return view('admin.pricing');
    }
}
