<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PetDate;

class PetDateController extends Controller
{
    public function getPetDate()
    {
        $PetDate = PetDate::with('users')->with('breeds')->with('categories')->get();

        return response()->json([
            'status' => 'success',
            'message' => 'Pet Date Fetched Successfully.',
            'data' => $PetDate,
        ]);
    }
}
