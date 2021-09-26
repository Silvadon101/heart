<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function mailsend(Request $request)
    {
        // --------------Email Details------------
        $details = [
            'name'=> $request->name,
            'email'=> $request->email,
            'body'=> $request->msg
        ];
        
        // --------Proccessing Email to Send--------- 
        Mail::to('jammybro2013@gmail.com')
        ->send(new SendMail($details));
        return back()->with('message','Email Sent Successfully');
    }
}
