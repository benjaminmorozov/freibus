<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $tours = Tour::query()
            ->orderBy('date', 'desc')
            ->paginate(2);
        return view('tours', compact('tours'));
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
    public function show(Tour $tour)
    {
        $next = Tour::query()
            ->whereDate('date', '<', $tour->date)
            ->orderBy('date', 'desc')
            ->limit(1)
            ->first();
        $prev = Tour::query()
            ->whereDate('date', '>', $tour->date)
            ->orderBy('date', 'asc')
            ->limit(1)
            ->first();
        return view('tour.view', compact('tour', 'prev', 'next'));
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
