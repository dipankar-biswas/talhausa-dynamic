<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\category;
use App\Models\product;
use App\Models\SiteSetup;
use App\Models\Slide;
use App\Models\Slider;
use Artisan;

class HomeController extends Controller
{
    
    public function Index(){

        $products   = null;
        $slider   = null;
        $slide   = null;
        $banner   = null;

        $slider      = Slider::where('status',1)->get();
        $slide      = Slide::where('id',1)->first();
        $banner     = Banner::where('id',1)->first();

        if(product::orderby("id","DESC")->count() > 0){
            $products = product::where("status", 1)->with('category','neck','colors.color_name','sizes.size_name')->inRandomOrder()->take(8)->get();
        }


        return view('frontend.index', compact('slider','slide','banner','products'));
    }

    public function Insert(){
        //
    }

    public function Update(){
        //
    }

    public function Delete(){
        //
    }


    public function aboutus(){
        return view('frontend.about-us');
    }
    public function privacypolicy(){
        return view('frontend.privacy-policy');
    }
    public function termscondition(){
        return view('frontend.terms-condition');
    }
    public function invoice(){
        return view('frontend.invoice');
    }

    public function cache(){
        return Artisan::call("optimize:clear");
    }

}
