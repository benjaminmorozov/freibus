<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\View\View;

class ReviewController extends Controller
{
    public function index(): View
    {
        $reviews = Review::query()->get();
        return view('reviews', compact('reviews'));
    }

    // Store Contact Form data
    public function store(Request $request) {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        Review::create(['name' => $request->get('name'), 'email' => $request->get('email'), 'message' => $request->get('message')]);
        return back()->with('success', 'Správa bola úspešne odoslaná!');
    }
}
