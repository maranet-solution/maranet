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

    public function updateAbout(Request $request)
    {
        // update about us
        $aboutUs = About::first();
        $aboutUs->vission = $request->input('vission');
        $aboutUs->mission = $request->input('mission');
        $aboutUs->strategy = $request->input('strategy');

        $aboutUs->save();

        return redirect()->back()->with('success', 'About us updated successfully');
    }
}
