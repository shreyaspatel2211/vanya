<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service; 
use App\Models\InsuranceCover; 
use App\Models\Feature; 
use App\Models\Review; 
use App\Models\Faq;

class SubmitClaimController extends Controller
{
    public function index()
    {
        $services = Service::all(); // Fetch all services from the database
        $covers = InsuranceCover::all();
        $features = Feature::all();
        $reviews = Review::all();
        $faqs = Faq::all();
        return view('submit_claim', compact('services', 'covers', 'features', 'reviews', 'faqs')); // Pass services to the view
    }
}
