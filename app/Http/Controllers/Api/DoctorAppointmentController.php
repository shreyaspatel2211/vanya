<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DoctorsCategory;
use App\Models\Doctor;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\DoctorBookingAppointment;

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
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Handle image uploads
        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('doctor_images', 'public');
                $imagePaths[] = $path;
            }
        }

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
        ]);

        return response()->json(['message' => 'Doctor created successfully', 'data' => $doctor], 201);
    }

    public function BookDoctorAppointment(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();

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
        ]);

        return response()->json(['message' => 'Breeder created successfully', 'data' => $breeder], 201);
    }
}
