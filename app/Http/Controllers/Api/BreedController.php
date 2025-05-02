<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Breed;

class BreedController extends Controller
{
    // Get all Breeds
    public function index(Request $request)
    {
        $type = $request->query('type');

        $breeds = Breed::with('category')
        ->when($type, function ($query, $type) {
            $query->whereHas('category', function ($q) use ($type) {
                $q->where('slug', $type);
            });
        })
        ->get();


        return response()->json([
            'status' => 'success',
            'message' => 'Breeds fetched successfully',
            'data' => $breeds
        ], 200);
    }
}
