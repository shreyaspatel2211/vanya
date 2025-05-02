<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service; 
use App\Models\InsuranceCover; 
use App\Models\Feature; 
use App\Models\Review; 
use App\Models\Faq;
use App\Models\Plan;
use App\Models\Breed;

class IndexController extends Controller
{
    public function index()
    {
        $services = Service::all(); // Fetch all services from the database
        $covers = InsuranceCover::all();
        $features = Feature::all();
        $reviews = Review::all();
        $faqs = Faq::all();
        $plans = Plan::all();
        $dogs = Breed::where('breed_type', 'dog')->get();
        $cats = Breed::where('breed_type', 'cat')->get();
        return view('index', compact('services', 'covers', 'features', 'reviews', 'faqs', 'plans', 'dogs', 'cats')); // Pass services to the view
    }
}
