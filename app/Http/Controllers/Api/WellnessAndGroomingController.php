<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WellnessAndGrooming;
use App\Models\WellnessAndGroomingPlan;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\WellnessAndGroomingBooking;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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

    public function WellnessAndGroomingPlanStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'wellness_and_grooming_id' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $plan = WellnessAndGroomingPlan::create([
            'name' => $request->name,
            'price' => $request->price,
            'wellness_and_grooming_id' => $request->wellness_and_grooming_id,
            'description' => $request->description,
        ]);

        return response()->json(['status' => 'success', 'message' => 'Plan created successfully', 'data' => $plan], 201);
    }

    public function WellnessAndGroomingStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'experience' => 'required',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'required|string',
            'city' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Handle image uploads
        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('wellness_and_grooming', 'public');
                $imagePaths[] = $path;
            }
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 6, 
            'phone_number' => $request->phone_number,
        ]);

        $WellnessAndGrooming = WellnessAndGrooming::create([
            'name' => $request->name,
            'experience' => $request->experience,
            'description' => $request->description,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'images' => json_encode($imagePaths), // store as JSON
            'city' => $request->city,
            'address' => $request->address,
            'user_id' => $user->id
        ]);

        return response()->json(['status' => 'success', 'message' => 'Wellness And Grooming created successfully', 'data' => $WellnessAndGrooming, 'user' => $user], 201);
    }

    public function BookWellnessAndGrooming(Request $request)
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
            'wellness_and_grooming_id' => 'required|integer',
            'wellness_grooming_plan_id' => 'required|integer',
            'pet_name' => 'required|string',
            'parent_name' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'nullable|email',
            'gender' => 'required|string',
            'category_id' => 'required|integer',
            'breed_id' => 'required|integer',
            'address' => 'required',
            'booking_date' => 'required',
            'booking_time' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $WellnessAndGroomingBooking = WellnessAndGroomingBooking::create([
            'breed_id' => $request->breed_id,
            'wellness_grooming_plan_id' => $request->wellness_grooming_plan_id,
            'parent_name' => $request->parent_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'address' => $request->address,
            'pet_name' => $request->pet_name,
            'category_id' => $request->category_id,
            'gender' => $request->gender,
            'user_id' => $user->id,
            'wellness_and_grooming_id' => $request->wellness_and_grooming_id,
            'booking_date' => $request->booking_date,
            'booking_time' => $request->booking_time
        ]);

        return response()->json(['status' => 'success', 'message' => 'Wellness And Grooming Booking created successfully', 'data' => $WellnessAndGroomingBooking], 201);
    }
    
    public function GetWellnessAndGroomingPlan($wellness_and_grooming_id)
    {
        $WellnessAndGroomingPlan = WellnessAndGroomingPlan::where('wellness_and_grooming_id', $wellness_and_grooming_id)->get();

        return response()->json([
            'status' => 'success',
            'message' => 'Wellness And Grooming Plans Fetched Successfully.',
            'data' => $WellnessAndGroomingPlan,
        ]);
    }
}
