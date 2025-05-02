<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;

class FeatureController extends Controller
{
    // Get all Features
    public function index()
    {
        $features = Feature::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Features fetched successfully',
            'data' => $features
        ], 200);
    }
}
