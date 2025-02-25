<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\InsuranceCover; 
use App\Models\Feature; 
use App\Models\Review; 
use App\Models\Faq;
use App\Models\Plan;

class ServiceController extends Controller
{
    public function show($id)
    {
        $service = Service::findOrFail($id);
        $covers = InsuranceCover::all();
        $features = Feature::all();
        $reviews = Review::all();
        $faqs = Faq::all();
        $plans = Plan::all();
        return view('service_detail', compact('service', 'covers', 'features', 'reviews', 'faqs', 'plans'));
    }
}
