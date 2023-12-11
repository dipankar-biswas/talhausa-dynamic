<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\Banner;

class BannerController extends Controller
{
    
    public function Index(){
        $banner = Banner::where('id',1)->first();
        return view('backend.banner.banner', compact('banner'));
    }

    public function BannerUpdateTop(Request $req) {
        
        if(count(Banner::get()) == 0){
            $errors = Validator::make($req->all(),[
                "banner_image_one" => "required",
            ]);
    
            if ($errors->fails()) {
                return response()->json([
                    "status" => false,
                    "message" => "error",
                    "data" => $errors->errors()
                ]);
            }
            $banner = new Banner;
            if($req->banner_image_one){
                @unlink($banner->banner_image_one);
                $path = $req->banner_image_one;
                $paths = substr(md5(time()), 0, 10).".".$path->getClientOriginalExtension();
                $path->move(public_path("uploads/banner"),$paths);
                $path_url = 'uploads/banner/'.$paths;
                $banner->banner_image_one = $path_url;
            }
            $banner->save();
        }else{
            $banner = Banner::where('id',1)->first();
            if($req->banner_image_one){
                @unlink($banner->banner_image_one);
                $path = $req->banner_image_one;
                $paths = substr(md5(time()), 0, 10).".".$path->getClientOriginalExtension();
                $path->move(public_path("uploads/banner"),$paths);
                $path_url = 'uploads/banner/'.$paths;
                $banner->banner_image_one = $path_url;
            }
            $banner->save();
        }

        if($banner){
            return redirect()->back()->with("success","Banner data updated!");
        }else{
            return redirect()->back()->with("error","Banner data not updated!");
        };
    }

    public function BannerUpdateMiddle(Request $req) {
        
        if(count(Banner::get()) == 0){
            $errors = Validator::make($req->all(),[
                "banner_image_two" => "required",
                "banner_image_three" => "required",
            ]);
    
            if ($errors->fails()) {
                return response()->json([
                    "status" => false,
                    "message" => "error",
                    "data" => $errors->errors()
                ]);
            }
            $banner = new Banner;
            if($req->banner_image_two && $req->banner_image_three){
                @unlink($banner->banner_image_two);
                $path = $req->banner_image_two;
                $paths = substr(md5(time()), 0, 10).".".$path->getClientOriginalExtension();
                $path->move(public_path("uploads/banner"),$paths);
                $path_url = 'uploads/banner/'.$paths;
                $banner->banner_image_two = $path_url;

                @unlink($banner->banner_image_three);
                $path1 = $req->banner_image_three;
                $paths1 = substr(md5(time()), 0, 12).".".$path1->getClientOriginalExtension();
                $path1->move(public_path("uploads/banner"),$paths1);
                $path_url1 = 'uploads/banner/'.$paths1;
                $banner->banner_image_three = $path_url1;
            }elseif($req->banner_image_two){
                @unlink($banner->banner_image_two);
                $path = $req->banner_image_two;
                $paths = substr(md5(time()), 0, 10).".".$path->getClientOriginalExtension();
                $path->move(public_path("uploads/banner"),$paths);
                $path_url = 'uploads/banner/'.$paths;
                $banner->banner_image_two = $path_url;
            }elseif($req->banner_image_three){
                @unlink($banner->banner_image_three);
                $path1 = $req->banner_image_three;
                $paths1 = substr(md5(time()), 0, 12).".".$path1->getClientOriginalExtension();
                $path1->move(public_path("uploads/banner"),$paths1);
                $path_url1 = 'uploads/banner/'.$paths1;
                $banner->banner_image_three = $path_url1;
            }
            $banner->save();
        }else{
            $banner = Banner::where('id',1)->first();
            if($req->banner_image_two && $req->banner_image_three){
                @unlink($banner->banner_image_two);
                $path = $req->banner_image_two;
                $paths = substr(md5(time()), 0, 10).".".$path->getClientOriginalExtension();
                $path->move(public_path("uploads/banner"),$paths);
                $path_url = 'uploads/banner/'.$paths;
                $banner->banner_image_two = $path_url;

                @unlink($banner->banner_image_three);
                $path1 = $req->banner_image_three;
                $paths1 = substr(md5(time()), 0, 12).".".$path1->getClientOriginalExtension();
                $path1->move(public_path("uploads/banner"),$paths1);
                $path_url1 = 'uploads/banner/'.$paths1;
                $banner->banner_image_three = $path_url1;

            }elseif($req->banner_image_two ){
                @unlink($banner->banner_image_two);
                $path = $req->banner_image_two;
                $paths = substr(md5(time()), 0, 10).".".$path->getClientOriginalExtension();
                $path->move(public_path("uploads/banner"),$paths);
                $path_url = 'uploads/banner/'.$paths;
                $banner->banner_image_two = $path_url;
            }elseif($req->banner_image_three){
                @unlink($banner->banner_image_three);
                $path1 = $req->banner_image_three;
                $paths1 = substr(md5(time()), 0, 12).".".$path1->getClientOriginalExtension();
                $path1->move(public_path("uploads/banner"),$paths1);
                $path_url1 = 'uploads/banner/'.$paths1;
                $banner->banner_image_three = $path_url1;
            }
            $banner->save();
        }

        if($banner){
            return redirect()->back()->with("success","Banner data updated!");
        }else{
            return redirect()->back()->with("error","Banner data not updated!");
        };
    }

    public function BannerUpdateBottom(Request $req) {
        
        if(count(Banner::get()) == 0){
            $errors = Validator::make($req->all(),[
                "banner_image_four" => "required",
            ]);
    
            if ($errors->fails()) {
                return response()->json([
                    "status" => false,
                    "message" => "error",
                    "data" => $errors->errors()
                ]);
            }
            $banner = new Banner;
            if($req->banner_image_four){
                @unlink($banner->banner_image_four);
                $path = $req->slide_image;
                $paths = substr(md5(time()), 0, 10).".".$path->getClientOriginalExtension();
                $path->move(public_path("uploads/banner"),$paths);
                $path_url = 'uploads/banner/'.$paths;
                $banner->banner_image_four = $path_url;
            }
            $banner->save();
        }else{
            $banner = Banner::where('id',1)->first();
            if($req->banner_image_four){
                @unlink($banner->banner_image_four);
                $path = $req->banner_image_four;
                $paths = substr(md5(time()), 0, 10).".".$path->getClientOriginalExtension();
                $path->move(public_path("uploads/banner"),$paths);
                $path_url = 'uploads/banner/'.$paths;
                $banner->banner_image_four = $path_url;
            }
            $banner->save();
        }

        if($banner){
            return redirect()->back()->with("success","Banner data updated!");
        }else{
            return redirect()->back()->with("error","Banner data not updated!");
        };
    }

}
