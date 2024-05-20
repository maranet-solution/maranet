<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plans;
use App\Models\Faq;
use App\Models\About;

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
        $aboutUs = About::first();

        return view('admin.about', compact("aboutUs"));
    }

    public function faq()
    {
        $faqs = Faq::all();
        return view('admin.faq', compact("faqs"));
    }
    public function pricing()
    {
        $plans = Plans::all();
        return view('admin.pricing', compact("plans"));
    }
}
