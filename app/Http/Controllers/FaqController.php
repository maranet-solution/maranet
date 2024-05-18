<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function faq()
    {
        $faqs = Faq::all();
        return view('faq', compact("faqs",));
    }
} 
