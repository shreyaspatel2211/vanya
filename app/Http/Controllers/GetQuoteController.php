<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service; 
use App\Models\InsuranceCover; 
use App\Models\Feature; 
use App\Models\Review; 
use App\Models\Faq;
use App\Models\GetQuote;
use Illuminate\Support\Facades\Mail;
use App\Mail\GetQuoteMail;
use App\Models\Category;
use App\Models\Breed;

class GetQuoteController extends Controller
{
    public function index()
    {
        $services = Service::all(); // Fetch all services from the database
        $covers = InsuranceCover::all();
        $features = Feature::all();
        $reviews = Review::all();
        $faqs = Faq::all();
        $getCategory = Category::where('slug', 'dog')->first();
        $getBreed = [];
        if(!empty($getCategory)) {
           $getBreed =  Breed::where('category_id', $getCategory->id)->get();
        }
        return view('get_quote', compact('services', 'covers', 'features', 'reviews', 'faqs', 'getBreed')); // Pass services to the view
    }

    public function submit(Request $request)
    {
        // Validate form inputs
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'category' => 'required|string',
            'breed'    => 'required|string',
            'age'      => 'required|string',
        ]);

        // Store form data in the database
        $getquote = GetQuote::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'category' => $request->category,
            'breed'    => $request->breed,
            'age'      => $request->age,
        ]);
            
        // Mail::to('shreyas.vikartr@gmail.com')->send(new GetQuoteMail($getquote->toArray()));

        // Redirect back with success message
        return back()->with('success', 'Your quote request has been submitted successfully!');
    }

    public function getBreed(Request $request) {
        $category = $request->category;
        $getCategory = Category::where('slug', $category)->first();
        $getBreed = [];
        if(!empty($getCategory)) {
           $getBreed =  Breed::where('category_id', $getCategory->id)->get();
        }
        return response()->json(['status'=> 'success', 'data' => $getBreed]);
    }
    
}
