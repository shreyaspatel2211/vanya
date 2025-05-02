<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WellnessAndGrooming;

class WellnessAndGroomingController extends Controller
{
    public function getWellnessAndGrooming()
    {
        $WellnessAndGrooming = WellnessAndGrooming::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Wellness And Grooming Fetched Successfully.',
            'data' => $WellnessAndGrooming,
        ]);
    }
}
