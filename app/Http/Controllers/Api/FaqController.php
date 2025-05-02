<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Faq;

class FaqController extends Controller
{
    // Get all FAQs
    public function index()
    {
        $faqs = Faq::all();

        return response()->json([
            'status' => 'success',
            'message' => 'FAQs fetched successfully',
            'data' => $faqs
        ], 200);
    }
}
