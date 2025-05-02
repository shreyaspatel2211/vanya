<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    // Register API
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|string|max:15|unique:users',
            'password' => 'required|string|min:6|confirmed', // <-- Confirmed password
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
                'data' => null
            ], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json([
            'status' => 'success',
            'message' => 'User created successfully',
            'data' => [
                'user' => $user,
                'token' => $token
            ]
        ], 201);
    }

    // Login API (email OR phone_number)
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
                'data' => null
            ], 422);
        }

        $login = $request->login;
        $password = $request->password;

        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone_number';

        $credentials = [
            $fieldType => $login,
            'password' => $password
        ];

        if (!$accessToken = JWTAuth::attempt($credentials)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid credentials',
                'data' => null
            ], 401);
        }

        $user = auth()->user();

        // Create a refresh token manually (with longer expiry)
        $refreshToken = JWTAuth::customClaims([
            'type' => 'refresh',
        ])->fromUser($user);

        return response()->json([
            'status' => 'success',
            'message' => 'User logged in successfully',
            'data' => [
                'user' => $user,
                'access_token' => $accessToken,
                'refresh_token' => $refreshToken
            ]
        ], 200);
    }


    public function refresh(Request $request)
    {
        $refreshToken = $request->input('refresh_token');

        if (!$refreshToken) {
            return response()->json([
                'status' => 'error',
                'message' => 'Refresh token not provided'
            ], 400);
        }
    
        try {
           
            $token = JWTAuth::parseToken()->refresh();
    
            return response()->json([
                'status' => 'success',
                'data' =>[
                    'access_token' => $token,
                    'refresh_token' => $refreshToken, 
                ],
                
                'message' => 'Token refreshed successfully via parsed token',
            ]);
    
        } catch (JWTException $e) {
            
            try {
                
                JWTAuth::setToken($refreshToken);
                $payload = JWTAuth::getPayload($refreshToken);
                $userId = $payload['sub']; 
    
                
                $user = User::find($userId);
                $newAccessToken = JWTAuth::refresh($refreshToken);
                $newRefreshToken = JWTAuth::fromUser($user, ['exp' => strtotime('+1 week')]);
    
                return response()->json([
                    'status' => 'success',
                    'message' => 'Token refreshed successfully using the refresh token',
                    'data' => [
                        'access_token' => $newAccessToken,
                        'refresh_token' => $newRefreshToken, 
                    ],       
                ]);
            } catch (JWTException $e) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Failed to refresh token: ' . $e->getMessage(),
                ], 401);
            }
        }
    }

    public function logout(Request $request)
    {
        $token = $request->header('Authorization');

        if (!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Token not provided'
            ], 401);
        }

        try {
            JWTAuth::invalidate(JWTAuth::getToken());
            return response()->json(['message' => 'Successfully logged out']);
        } catch (TokenInvalidException $e) {
            return response()->json(['status' => 'error','message' => 'Token is invalid'], 401);
        } catch (JWTException $exception) {
            return response()->json(['status' => 'error','message' => 'Failed to logout, please try again.'], 500);
        }
    }

    public function getUserData(Request $request)
    {
        try {
            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'User not found'
                ], 404);
            }
        } catch (TokenExpiredException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Token is expired'
            ], 401);
        } catch (TokenInvalidException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Token is invalid'
            ], 401);
        } catch (JWTException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Token is absent'
            ], $e->getStatusCode());
        }

        return response()->json([
            'status' => 'success',
            'message' => 'User data retrieved successfully',
            'data' => compact('user')
        ]);
    }

    public function updateProfile(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();

        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|string|email|max:255|unique:users',
            'phone_number' => 'nullable|unique:users,phone_number,' . $user->id,
        ]);

        if ($validator->fails()) {
            $firstErrorMessage = $validator->errors()->first();
    
            return response()->json([
                'status' => 'error',
                'message' => $firstErrorMessage
            ], 422);
        }

        if ($request->has('name')) {
            $user->name = $request->input('name');
        }

        if ($request->has('email')) {
            $user->email = $request->input('email');
        }

        if ($request->has('phone_number')) {
            $user->phone_number = $request->input('phone_number');
        }

        $user->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Profile updated successfully',
            'data' => ['user' => $user]
        ]);
    }

    public function delete($id, Request $request)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();

            if ($user->role_id !== 1) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'You can not delete the User.'
                ], 403);
            }

            $userToDelete = User::find($id);

            if (!$userToDelete) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'User not found'
                ], 404);
            }

            $userToDelete->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'User deleted successfully'
            ]);
        } catch (TokenExpiredException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Token expired'
            ], 401);
        } catch (TokenInvalidException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Token invalid'
            ], 401);
        } catch (JWTException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Token absent'
            ], 401);
        }
    }
    
    public function addDeviceToken(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'device_token' => 'required|string',
        ]);

        if ($validator->fails()) {
            $firstErrorMessage = $validator->errors()->first();
    
            return response()->json([
                'status' => 'error',
                'message' => $firstErrorMessage
            ], 422);
        }

        $user = JWTAuth::parseToken()->authenticate();

        if (!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'User not found',
            ], 404);
        }

        $user->device_token = $request->input('device_token');
        $user->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Device token added successfully',
            'data' => $user
        ]);
    }

    public function removeDeviceToken(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        
        if (!$user->device_token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Device token not found'
            ], 404);
        }
        
        $user->device_token = null;
        $user->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Device token removed successfully',
            'data' => $user
        ]);
    }

    public function updatePassword(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();

        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }
        
        $validator = Validator::make($request->all(), [
            'old_password' => 'required|string|min:6',
            'new_password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            $firstErrorMessage = $validator->errors()->first();
    
            return response()->json([
                'status' => 'error',
                'message' => $firstErrorMessage
            ], 422);
        }

        if (!Hash::check($request->input('old_password'), $user->password)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Old password does not match'
            ], 400);
        }

        if (Hash::check($request->input('new_password'), $user->password)){
            return response()->json([
                'status' => 'error',
                'message' => 'New password cannot be the same as the old password'
            ], 400);
        }

        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Password updated successfully',
        ]);
    }
}
