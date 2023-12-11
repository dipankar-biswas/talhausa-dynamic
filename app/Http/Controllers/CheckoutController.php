<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\product;

class CheckoutController extends Controller
{
    
    public function Index(){
        return view('frontend.product.checkout');
    }

    public function Insert(){
        
    }

    public function Update(){
        
    }

    public function Delete(){
        
    }

}
