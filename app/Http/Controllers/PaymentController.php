<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use Session;
use App\Models\Order;

class PaymentController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }
    
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function post(Request $request)
    {
        $order = Session::get('order');
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => str($order->price*100),
                "currency" => "eur",
                "source" => $request->stripeToken,
                "description" => "Freibus rezervácia - č. obj. ".$order->id 
        ]);

        Session::flash('success', 'Payment successful!');
        return view('tour.invoice', compact('order'));
    }
}