<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GetQuote;
use Illuminate\Support\Facades\Validator;

class GetAQuoteController extends Controller
{
    // Get A Quote form submit API
    public function submit(Request $request)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'category' => 'required|string',
            'breed' => 'required',
            'age' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
                'data' => null
            ], 422);
        }

        // Store the getQuote message
        $getQuote = GetQuote::create([
            'name' => $request->name,
            'email' => $request->email,
            'category' => $request->category,
            'breed' => $request->breed,
            'age' => $request->age
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Message sent successfully',
            'data' => [
                'getQuote' => $getQuote
            ]
        ], 201);
    }
}
