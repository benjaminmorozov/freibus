<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use Session;
use App\Models\Order;
use App\Models\Tour;

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
        $order = Session::get('order');
        $tour = Tour::query()->where('tours.id', '=', $order->tour_id)->first();
        $data = array('id' => $order->id, 'price' => $order->price, 'tour_id' => $order->tour_id, 'login_id' => $order->login_id, 'name' => $tour->title);
   
        \Mail::send(['text'=>'invoicemail'], $data, function($message) use ($order) {
           $message->to($order->email, $order->name)->subject
              ('Objednávka č.'.$order->id);
           $message->from('mail@stvorka.cloud','freibus.sk');
        });

        Session::flash('success', 'Payment successful!');
        return view('tour.invoice', compact('order'));
    }
}