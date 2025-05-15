<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Breeder;
use Illuminate\Support\Facades\Validator;
use App\Models\BreederAppointment;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
            'email' => 'required|email|unique:users,email',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'dob' => 'required|date',
            'pet_name' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'category_id' => 'required|integer',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Handle image uploads
        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('pet_breeder', 'public');
                $imagePaths[] = $path;
            }
        }

        $user = User::create([
            'name' => $request->parent_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 4, 
            'phone_number' => $request->phone_number,
        ]);

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
            'user_id' => $user->id
        ]);

        return response()->json(['message' => 'Breeder created successfully', 'data' => $breeder, 'user' => $user], 201);
    }

    public function BookBreederAppointment(Request $request)
    {
        $token = $request->header('Authorization');

        if (!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Token not provided'
            ], 401);
        }

        try {
            $user = JWTAuth::parseToken()->authenticate();
        } catch (TokenExpiredException $e) {
            return response()->json(['status' => 'error', 'message' => 'Token has expired'], 401);
        } catch (TokenInvalidException $e) {
            return response()->json(['status' => 'error', 'message' => 'Token is invalid'], 401);
        } catch (JWTException $e) {
            return response()->json(['status' => 'error', 'message' => 'Token error'], 401);
        }


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
            'booking_date' => 'required',
            'booking_time' => 'required'
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
            'booking_date' => $request->booking_date,
            'booking_time' => $request->booking_time
        ]);

        return response()->json(['message' => 'Breeder created successfully', 'data' => $breeder], 201);
    }
}
