<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    // Get all Categories
    public function index()
    {
        $categories = Category::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Categories fetched successfully',
            'data' => $categories
        ], 200);
    }
}
