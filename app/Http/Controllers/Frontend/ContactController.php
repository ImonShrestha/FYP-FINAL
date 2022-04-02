<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;
class ContactController extends Controller
{
    public function contact()
    {
        return view('Frontend.contact');
    }
    public function sendEmail(Request $request){
        $details=[
            'name'=> $request->name,
            'email'=> $request->email,
            'address'=> $request->address,
            'msg'=> $request->msg,
        ];
        Mail::to('imonshrestha9@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent','Your message has been sent successfully!');
    }
}

