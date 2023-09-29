<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // Store Contact Form data
    public function store(Request $request) {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        //  Store data in database
        Contact::create($request->all());
        //  Send mail to admin
        \Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'content' => $request->get('message'),
        ), function($message) use ($request){
            $message->from('benjaminmorozov@stvorka.cloud'); // would be $request->email but outlook does not support SendAs
            $message->to('benjaminmorozov@gmail.com')->subject($request->get('subject'));
        });
        return back()->with('success', 'Správa bola úspešne odoslaná!');
    }
}
