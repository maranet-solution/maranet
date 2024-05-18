<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plans as Pricing;

class PricingController extends Controller
{
    public function pricing()
    {
        $plans = Pricing::all();

        return view('pricing', compact("plans"));
    }
}
