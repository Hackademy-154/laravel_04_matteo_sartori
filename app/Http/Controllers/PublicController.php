<?php

namespace App\Http\Controllers;


use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage() {
        return view('welcome');
    }

    public function contactUs() {
        return view('contactUs');
    }

    public function contactUsSubmit(Request $request)
    {
        $userName = $request->input('userName');
        $email = $request->input('email');
        $messageBody = $request->input('message');
    
        Mail::to('example@example.com')->send(new ContactMail($userName, $email, $messageBody));
    
        return redirect()->route('thankYou');
    }

    public function thankYou()
    {
        return view('thank-you');
    }
}