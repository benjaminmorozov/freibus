<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Spatie\Geocoder\Facades\Geocoder;

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
        /*
          This function returns an array with keys
          "lat" =>  37.331741000000001
          "lng" => -122.0303329
          "accuracy" => "ROOFTOP"
          "formatted_address" => "1 Infinite Loop, Cupertino, CA 95014, USA",
          "viewport" => [
            "northeast" => [
              "lat" => 37.3330546802915,
              "lng" => -122.0294342197085
            ],
            "southwest" => [
              "lat" => 37.3303567197085,
              "lng" => -122.0321321802915
            ]
          ]
        */
        $tour = Tour::find($id);
        $json = [];
        if(!empty($tour))
        {
            $places =  explode(', ', $tour->places);
            foreach($places as $place) {
                $data = [
                    Geocoder::getCoordinatesForAddress($place)['lat'],
                    Geocoder::getCoordinatesForAddress($place)['lng'],
                ];
                array_push($json, $data);
            }
            return response()->json($json);
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
