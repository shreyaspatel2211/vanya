<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DoctorsCategory;
use App\Models\Doctor;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\DoctorBookingAppointment;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DoctorAppointmentController extends Controller
{
    public function doctorsGroupedByCategory()
    {
        $categories = DoctorsCategory::with('doctors')->get();

        return response()->json([
            'status' => 'success',
            'message' => 'Doctors list grouped by category',
            'data' => $categories,
        ]);
    }

    public function DoctorStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'doctor_category_id' => 'required|integer',
            'name' => 'required|string',
            'phone_number' => 'required|string',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'experience' => 'required',
            'description' => 'nullable|string',
            'booking_fees' => 'required',
            'city' => 'required|string',
            'qualification' => 'required',
            'address' => 'required',
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
                $path = $image->store('pet_doctor', 'public');
                $imagePaths[] = $path;
            }
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 3, 
            'phone_number' => $request->phone_number,
        ]);

        $doctor = Doctor::create([
            'doctor_category_id' => $request->doctor_category_id,
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'qualification' => $request->qualification,
            'images' => json_encode($imagePaths), // store as JSON
            'experience' => $request->experience,
            'booking_fees' => $request->booking_fees,
            'description' => $request->description,
            'city' => $request->city,
            'address' => $request->address,
            'user_id' => $user->id
        ]);

        return response()->json(['message' => 'Doctor created successfully', 'data' => $doctor, 'user' => $user], 201);
    }

    public function BookDoctorAppointment(Request $request)
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
            'doctor_id' => 'required|integer',
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

        $breeder = DoctorBookingAppointment::create([
            'doctor_id' => $request->doctor_id,
            'breed_id' => $request->breed_id,
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
