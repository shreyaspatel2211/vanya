<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\InsuranceCover; 
use App\Models\Feature; 
use App\Models\Review; 
use App\Models\Faq;
use App\Models\Plan;
use App\Models\Category;
use App\Models\Breed;

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
        $categorySlug = 'dog';
        if($service->service_name == 'CAT INSURANCE') {
            $categorySlug = 'cat';
        } else if($service->service_name == 'DOG INSURANCE'){
            $categorySlug = 'dog';
        } else {
            $categorySlug = 'companion-pet';
        }
        $getCategory = Category::where('slug', $categorySlug)->first();
        $getBreed = [];
        if(!empty($getCategory)) {
           $getBreed =  Breed::where('category_id', $getCategory->id)->get();
        }

        return view('service_detail', compact('service', 'covers', 'features', 'reviews', 'faqs', 'plans', 'getBreed'));
    }
}
