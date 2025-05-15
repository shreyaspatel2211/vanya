<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WalkerAndTrainer;
use App\Models\WalkerTrainerPlan;
use App\Models\WalkerAndTrainerBooking;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class WalkerAndTrainerController extends Controller
{
    public function getWalkersAndTrainers()
    {
        $WalkerAndTrainer = WalkerAndTrainer::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Walker and Trainer Fetched Successfully.',
            'data' => $WalkerAndTrainer,
        ]);
    }

    public function WalkerAndTrainerPlanStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'walker_and_trainer_id' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $plan = WalkerTrainerPlan::create([
            'name' => $request->name,
            'price' => $request->price,
            'walker_and_trainer_id' => $request->walker_and_trainer_id,
            'description' => $request->description,
        ]);

        return response()->json(['status' => 'success', 'message' => 'Plan created successfully', 'data' => $plan], 201);
    }

    public function WalkerAndTrainerStore(Request $request)
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
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Handle image uploads
        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('walker_and_trainer', 'public');
                $imagePaths[] = $path;
            }
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 7, 
            'phone_number' => $request->phone_number,
        ]);

        $WalkerAndTrainer = WalkerAndTrainer::create([
            'name' => $request->name,
            'experience' => $request->experience,
            'description' => $request->description,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'images' => json_encode($imagePaths), // store as JSON
            'city' => $request->city,
            'address' => $request->address,
            'user_id' => $user->id,
        ]);

        return response()->json(['status' => 'success', 'message' => 'Walker And Trainer created successfully', 'data' => $WalkerAndTrainer, 'user' => $user], 201);
    }

    public function BookWalkerAndTrainer(Request $request)
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
            'walker_and_trainer_id' => 'required|integer',
            'walker_and_trainer_plan_id' => 'required|integer',
            'pet_name' => 'required|string',
            'parent_name' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'nullable|email',
            'gender' => 'required|string',
            'category_id' => 'required|integer',
            'breed_id' => 'required|integer',
            'address' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $WalkerAndTrainerBooking = WalkerAndTrainerBooking::create([
            'breed_id' => $request->breed_id,
            'walker_and_trainer_plan_id' => $request->walker_and_trainer_plan_id,
            'parent_name' => $request->parent_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'address' => $request->address,
            'pet_name' => $request->pet_name,
            'category_id' => $request->category_id,
            'gender' => $request->gender,
            'user_id' => $user->id,
            'walker_and_trainer_id' => $request->walker_and_trainer_id,
            'booking_date' => $request->booking_date,
            'booking_time' => $request->booking_time
        ]);

        return response()->json(['status' => 'success', 'message' => 'Walker And Trainer Booking created successfully', 'data' => $WalkerAndTrainerBooking], 201);
    }
    
    public function GetWalkerAndTrainerPlan($walker_and_trainer_id){
        $WalkerTrainerPlan = WalkerTrainerPlan::where('walker_and_trainer_id', $walker_and_trainer_id)->get();

        return response()->json([
            'status' => 'success',
            'message' => 'Walker Trainer Plans Fetched Successfully.',
            'data' => $WalkerTrainerPlan,
        ]);
    }
}
