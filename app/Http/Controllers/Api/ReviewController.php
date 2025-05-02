<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    // Get all Reviews
    public function index()
    {
        $reviews = Review::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Reviews fetched successfully',
            'data' => $reviews
        ], 200);
    }
}
