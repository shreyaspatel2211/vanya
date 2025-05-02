<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InsuranceCover;

class InsuranceCoverController extends Controller
{
    // Get all insurances
    public function index()
    {
        $insurances = InsuranceCover::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Insurance Covers fetched successfully',
            'data' => $insurances
        ], 200);
    }
}
