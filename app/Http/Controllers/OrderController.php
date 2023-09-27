<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\View\View;
use App\Models\Tour;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(Tour $tour)
    {
        return view('tour.order', compact('tour'));
    }

    public function store(Request $request, Tour $tour)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'city' => 'required',
            'psc' => 'required',
            'adults' => 'required',
            'students' => 'required',
            'children' => 'required'
        ]);
        
        $order = Order::create(['user_id' => Auth::id(), 'name' => $request->name, 'email' => $request->email, 'address' => $request->address.', '.$request->city.' '.$request->psc, 'price' => $request->adults*$tour->priceadults+$request->students*$tour->pricestudents+$request->children*$tour->pricechildren, 'tour_id' => $tour->id, 'login_id' =>rand(100000, 999999)]);
        
        return redirect()->to('/');
    }
}
