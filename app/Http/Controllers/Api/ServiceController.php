<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
    // Get all Services
    public function index()
    {
        $services = Service::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Services fetched successfully',
            'data' => $services
        ], 200);
    }
}
