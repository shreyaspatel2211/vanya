<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Breeder;
use Illuminate\Support\Facades\Validator;
use App\Models\BreederAppointment;
use Tymon\JWTAuth\Facades\JWTAuth;

class BreederController extends Controller
{
    public function getBreeders()
    {
        $breeders = Breeder::with('categories')->with('breeds')->get();

        return response()->json([
            'status' => 'success',
            'message' => 'Breeders Fetched Successfully.' ,
            'data' => $breeders,
        ]);
    }

    public function BreederStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'breed_id' => 'required|integer',
            'parent_name' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'nullable|email',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'dob' => 'required|date',
            'pet_name' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'category_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Handle image uploads
        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('breeder_images', 'public');
                $imagePaths[] = $path;
            }
        }

        $breeder = Breeder::create([
            'breed_id' => $request->breed_id,
            'parent_name' => $request->parent_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'images' => json_encode($imagePaths), // store as JSON
            'description' => $request->description,
            'dob' => $request->dob,
            'pet_name' => $request->pet_name,
            'address' => $request->address,
            'city' => $request->city,
            'category_id' => $request->category_id,
        ]);

        return response()->json(['message' => 'Breeder created successfully', 'data' => $breeder], 201);
    }

    public function BookBreederAppointment(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();

        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        $validator = Validator::make($request->all(), [
            'breeder_id' => 'required|integer',
            'breed_id' => 'required|integer',
            'pet_name' => 'required|string',
            'parent_name' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'nullable|email',
            'category_id' => 'required|integer',
            'dob' => 'required|date',
            'gender' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $breeder = BreederAppointment::create([
            'breed_id' => $request->breed_id,
            'breeder_id' => $request->breeder_id,
            'parent_name' => $request->parent_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'dob' => $request->dob,
            'pet_name' => $request->pet_name,
            'category_id' => $request->category_id,
            'gender' => $request->gender,
            'user_id' => $user->id,
        ]);

        return response()->json(['message' => 'Breeder created successfully', 'data' => $breeder], 201);
    }
}
