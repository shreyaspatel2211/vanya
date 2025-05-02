<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service; 
use App\Models\InsuranceCover; 
use App\Models\Feature; 
use App\Models\Review; 
use App\Models\Faq;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function index()
    {
        $services = Service::all(); // Fetch all services from the database
        $covers = InsuranceCover::all();
        $features = Feature::all();
        $reviews = Review::all();
        $faqs = Faq::all();
        return view('contact', compact('services', 'covers', 'features', 'reviews', 'faqs')); // Pass services to the view
    }

    public function submit(Request $request)
    {
        // Validate form inputs
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // You can store this data in the database if needed
        $contact = Contact::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'message' => $request->message,
        ]);

        // Mail::to('shreyas.vikartr@gmail.com')->send(new ContactMail($contact->toArray()));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
