<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class ServicesController extends Controller
{
    public function services()
    {
        // get first 8
        $faqs = Faq::take(8)->get()->toArray(); // Get first 8 FAQs and convert to array

        $half = floor(count($faqs) / 2);

        $faqs = array_slice($faqs, 0, $half);
        $faqs2 = array_slice($faqs, $half);

        return view('services', compact("faqs", "faqs2"));
    }
}
