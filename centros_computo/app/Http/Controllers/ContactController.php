<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail; // including your class
class ContactController extends Controller
{
    public function contact()
    {
        return view('contacto');
    }

    public function sendEmail(request $request){
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'msg' => $request->msg
        ];
        Mail::to('centroschiapa@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent', 'Tu mensaje ha sido enviado exitosamente');
    }
}
