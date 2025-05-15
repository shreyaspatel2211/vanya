<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PetHostel;
use App\Models\PetHostelPlan;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\PetHostelBooking;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class PetHostelController extends Controller
{
    public function getPetHostels()
    {
        $PetHostel = PetHostel::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Pet Hostel Fetched Successfully.',
            'data' => $PetHostel,
        ]);
    }

    public function HostelPlanStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'pet_hostel_id' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $plan = PetHostelPlan::create([
            'name' => $request->name,
            'price' => $request->price,
            'pet_hostel_id' => $request->pet_hostel_id,
            'description' => $request->description,
        ]);

        return response()->json(['status' => 'success', 'message' => 'Plan created successfully', 'data' => $plan], 201);
    }

    public function HostelStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'pick_up_time' => 'required',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'drop_time' => 'required',
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
                $path = $image->store('pet_hostel', 'public');
                $imagePaths[] = $path;
            }
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 5, 
            'phone_number' => $request->phone_number,
        ]);

        $hostel = PetHostel::create([
            'name' => $request->name,
            'description' => $request->description,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'images' => json_encode($imagePaths), // store as JSON
            'pick_up_time' => $request->pick_up_time,
            'drop_time' => $request->drop_time,
            'city' => $request->city,
            'address' => $request->address,
            'user_id' => $user->id,
        ]);

        return response()->json(['status' => 'success', 'message' => 'Hostel created successfully', 'data' => $hostel, 'user' => $user], 201);
    }

    public function BookHostel(Request $request)
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
            'pet_hostel_plan_id' => 'required|integer',
            'pet_hostel_id' => 'required|integer',
            'pet_name' => 'required|string',
            'parent_name' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'nullable|email',
            'gender' => 'required|string',
            'category_id' => 'required|integer',
            'dob' => 'required|date',
            'breed_id' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $PetHostelBooking = PetHostelBooking::create([
            'breed_id' => $request->breed_id,
            'pet_hostel_plan_id' => $request->pet_hostel_plan_id,
            'parent_name' => $request->parent_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'dob' => $request->dob,
            'pet_name' => $request->pet_name,
            'category_id' => $request->category_id,
            'gender' => $request->gender,
            'user_id' => $user->id,
            'pet_hostel_id' => $request->pet_hostel_id
        ]);

        return response()->json(['message' => 'Pet Hostel Booking created successfully', 'data' => $PetHostelBooking], 201);
    }

    public function GetHostelPlan($hostel_id){
        $PetHostelPlan = PetHostelPlan::where('pet_hostel_id', $hostel_id)->get();

        return response()->json([
            'status' => 'success',
            'message' => 'Pet Hostel Plans Fetched Successfully.',
            'data' => $PetHostelPlan,
        ]);
    }
}
