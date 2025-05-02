<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all()->pluck('value', 'key');

        return response()->json([
            'status' => 'success',
            'message' => 'Settings fetched successfully',
            'data' => $settings
        ], 200);
    }
}
