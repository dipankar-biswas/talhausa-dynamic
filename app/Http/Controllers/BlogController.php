<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    
    public function Index(){

    }

    public function Insert(){
        
    }

    public function Update(){
        
    }

    public function Delete(){
        
    }

    public function blog(){
        return view('frontend.blog.blog');
    }

    public function blogDetails(){
        return view('frontend.blog.blog-details');
    }

}
