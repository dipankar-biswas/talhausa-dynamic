<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function Index(){

    }

    public function Insert(){
        
    }

    public function Update(){
        
    }

    public function Delete(){
        
    }

    public function dashboard(){
        return view('frontend.user.dashboard');
    }
    public function accountdetails(){
        return view('frontend.user.account-details');
    }
    public function myaddress(){
        return view('frontend.user.myaddress');
    }
    public function orders(){
        return view('frontend.user.orders');
    }

}
