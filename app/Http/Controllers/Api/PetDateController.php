<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PetDate;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\PetDateMatch;

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

    public function addPetForDate(Request $request){
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
            'pet_name' => 'required|string',
            'parent_name' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'nullable|email',
            'gender' => 'required|string',
            'category_id' => 'required|integer',
            'breed_id' => 'required|integer',
            'dob' => 'required',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Handle image uploads
        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('pet_date', 'public');
                $imagePaths[] = $path;
            }
        }

        $PetDate = PetDate::create([
            'breed_id' => $request->breed_id,
            'parent_name' => $request->parent_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'address' => $request->address,
            'pet_name' => $request->pet_name,
            'category_id' => $request->category_id,
            'gender' => $request->gender,
            'user_id' => $user->id,
            'images' => json_encode($imagePaths),
        ]);

        return response()->json(['status' => 'success', 'message' => 'Your Pet is ready for Date!', 'data' => $PetDate], 201);
    }

    public function petMatch(Request $request){
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
            'user_who_get_like_id' => 'required|integer',
            'pet_date_who_liked_id' => 'required|integer',
            'pet_date_who_get_like_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $PetDate = PetDateMatch::create([
            'user_who_liked_id' => $user->id,
            'user_who_get_like_id' => $request->user_who_get_like_id,
            'pet_date_who_liked_id' => $request->pet_date_who_liked_id,
            'pet_date_who_get_like_id' => $request->pet_date_who_get_like_id
        ]);

        return response()->json(['status' => 'success', 'message' => 'You liked it!', 'data' => $PetDate], 201);
    }

    public function checkLikeStatus(Request $request)
    {
        $request->validate([
            'pet1_id' => 'required|integer',
            'pet2_id' => 'required|integer',
        ]);

        $pet1 = $request->pet1_id;
        $pet2 = $request->pet2_id;

        // Check if pet1 liked pet2
        $pet1LikedPet2 = PetDateMatch::where('pet_date_who_liked_id', $pet1)
            ->where('pet_date_who_get_like_id', $pet2)
            ->exists();

        // Check if pet2 liked pet1
        $pet2LikedPet1 = PetDateMatch::where('pet_date_who_liked_id', $pet2)
            ->where('pet_date_who_get_like_id', $pet1)
            ->exists();

        if ($pet1LikedPet2 && $pet2LikedPet1) {
            $status = 'matched';
        } elseif ($pet1LikedPet2) {
            $status = 'pet1_liked_pet2';
        } elseif ($pet2LikedPet1) {
            $status = 'pet2_liked_pet1';
        } else {
            $status = 'no_interaction';
        }

        return response()->json([
            'status' => $status,
            'pet1_id' => $pet1,
            'pet2_id' => $pet2,
        ]);
    }
}
