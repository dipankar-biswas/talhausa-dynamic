<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\customerQueryMail;

class ContactController extends Controller
{
    public function Index(){
        return view('frontend.contact-us');
    }

    public function contactMessage(Request $request){

        $request->validate([
            "name"              => "required",
            "phone"             => "required",
            "email"             => "required|email",
            "message"           => "required",
            "contact_option"    => "required",
        ]);

        if($request->contact_option == 1){
            $from       = "supersw@hotmail.com";
            $subject    = "Feedback for customer order.";
        }elseif($request->contact_option == 2){
            $from       = "supersw@hotmail.com";
            $subject    = "Feedback for customer Support.";
        }elseif($request->contact_option == 3){
            $from       = "supersw@hotmail.com";
            $subject    = "Customer Feedback.";
        }elseif($request->contact_option == 4){
            $from       = "shakziaurrahmantito.official@gmail.com";
            $subject    = "Technical Support";
        }elseif($request->contact_option == 5){
            $from       = "supersw@hotmail.com";
            $subject    = "Feedback for Others.";
        }

        Mail::to($from)->send(new customerQueryMail($subject, $request->all()));
        return redirect()->back()->with(['message' => "Message sent successfully!"]);
    }

    public function Update(){
        
    }

    public function Delete(){
        
    }

}
