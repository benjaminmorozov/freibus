<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class APIOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Order::all());
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
        $this->validate(request(), [
            //'user_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'city' => 'required',
            'psc' => 'required',
            'tour_id' => 'required',
            'adults' => 'required',
            'students' => 'required',
            'children' => 'required'
        ]);
        if($request->user_id) {
            $user_id = $request->user_id;
        } else {
            $user_id = NULL;
        }
        $tour = Tour::query()->where('id', '=', $request->tour_id)->first();
        $order = Order::create(['user_id' => $user_id, 'name' => $request->name, 'email' => $request->email, 'address' => $request->address.', '.$request->city.' '.$request->psc, 'price' => $request->adults*$tour->priceadults+$request->students*$tour->pricestudents+$request->children*$tour->pricechildren, 'tour_id' => $request->tour_id, 'login_id' =>rand(100000, 999999)]);
        return [
            'result' => 200,
            'id' => $order->id,
            'user_id' => $order->user_id,
            'tour_id' => $tour->id, 
            'title' => $tour->title,
            'slug' => $tour->slug,
            'price' => $order->price,
            'places' => $tour->places,
            'thumbnail' => 'https://stvorka.cloud'.$tour->getThumbnail(),
            'images' => collect($tour->images)->map(function($img){
                return 'https://stvorka.cloud/storage/'.$img; //an equolent array turned into a collection, values of which were mapped onto a function that adds the url
            }),
            'body' => $tour->body,
            'date' => Carbon::parse($tour->date)->locale('sk-SK')->translatedFormat('d F Y'),
            'login_id' => $order->login_id
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $json = [];
        $orders = Order::query()->where('user_id', '=', $id)->get();
        foreach($orders as $order) {
            $tour = Tour::query()->where('id', '=', $order->tour_id)->first();
            $order_data = [
                'id' => $order->id,
                'user_id' => $order->user_id,
                'tour_id' => $tour->id, 
                'title' => $tour->title,
                'slug' => $tour->slug,
                'price' => $order->price,
                'places' => $tour->places,
                'thumbnail' => 'https://stvorka.cloud'.$tour->getThumbnail(),
                'images' => collect($tour->images)->map(function($img){
                    return 'https://stvorka.cloud/storage/'.$img; //an equolent array turned into a collection, values of which were mapped onto a function that adds the url
                }),
                'body' => $tour->body,
                'date' => Carbon::parse($tour->date)->locale('sk-SK')->translatedFormat('d F Y'),
            ];
            array_push($json, $order_data);
        }
        if(!$orders->isEmpty())
        {
            return $json;
        } else {
            return response()->json([
                "message" => "Orders not found"
            ], 404);
        }
    }

    public function login($id)
    {
        $order = Order::query()->where('login_id', '=', $id)->first();
        if(!empty($order))
        {
            $tour = Tour::query()->where('id', '=', $order->tour_id)->first();
            return [
                'id' => $order->id,
                'user_id' => $order->user_id,
                'tour_id' => $tour->id, 
                'title' => $tour->title,
                'slug' => $tour->slug,
                'price' => $order->price,
                'places' => $tour->places,
                'thumbnail' => 'https://stvorka.cloud'.$tour->getThumbnail(),
                'images' => collect($tour->images)->map(function($img){
                    return 'https://stvorka.cloud/storage/'.$img; //an equolent array turned into a collection, values of which were mapped onto a function that adds the url
                }),
                'body' => $tour->body,
                'date' => Carbon::parse($tour->date)->locale('sk-SK')->translatedFormat('d F Y'),
            ];
        } else {
            return response()->json([
                "message" => "Order not found"
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
