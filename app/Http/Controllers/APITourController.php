<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class APITourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Tour::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tour = Tour::find($id); 
        if(!empty($tour))
        {
            return response()->json($tour);
        } else {
            return response()->json([
                "message" => "Tour not found"
            ], 404);
        }
    }

    public function showMap($id)
    {
        $tour = Tour::find($id); 
        if(!empty($tour))
        {
            $places =  explode(', ', $tour->places);
            return view('tour.map', compact('places'));
        } else {
            return response()->json([
                "message" => "Tour not found"
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tour $tour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tour)
    {
        //
    }
}
