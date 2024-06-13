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

    public function pricing_details(Request $request){

        $plans = Pricing::find($request->id);

        // return json 

        return response()->json($plans);
    }

    

    public function update(Request $request, $id)
    {
        
        $plans = Pricing::find($id);

        // If pricing record not found, handle error
        if (!$plans) {
            return redirect("/error")->with('error', 'Pricing not found');
        }

        // Update data from form
        $plans->fill([
            'title' => $request->input('title'),
            'duration' => $request->input('duration'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'speed' => $request->input('speed'),
        ]);
        $plans->save();

        // Redirect back with success message
        return redirect("/admin/pricing?id=$id")->with('success', 'Pricing updated successfully');
    }

    public function store(Request $request){

        $plans = new Pricing();

        $plans->name = $request->input('name');
        $plans->duration = $request->input('duration');
        $plans->description = $request->input('description');
        $plans->price = $request->input('price');
        $plans->speed = $request->input('speed');
        $plans->image = "";

        $plans->save();

        return redirect("/admin/pricing")->with('success', 'Pricing created successfully');
    }
}
