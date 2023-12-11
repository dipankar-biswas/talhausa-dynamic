<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\Slide;

class SlideController extends Controller
{
    
    public function Index(){
        $slide = Slide::where('id',1)->first();
        return view('backend.slide.slide', compact('slide'));
    }

    public function SlideUpdate(Request $req) {
        
        if(count(Slide::get()) == 0){
            $errors = Validator::make($req->all(),[
                "slide_image" => "required",
                "slide_content" => "required",
            ]);
    
            if ($errors->fails()) {
                return response()->json([
                    "status" => false,
                    "message" => "error",
                    "data" => $errors->errors()
                ]);
            }
            $slide = new Slide;
            if($req->slide_image){
                @unlink($slide->slide_image);
                $path = $req->slide_image;
                $paths = substr(md5(time()), 0, 10).".".$path->getClientOriginalExtension();
                $path->move(public_path("uploads/slide"),$paths);
                $path_url = 'uploads/slide/'.$paths;
                $slide->slide_image = $path_url;
            }
            $slide->slide_content = $req->slide_content;
            $slide->save();
        }else{
            $slide = Slide::where('id',1)->first();
            if($req->slide_image){
                @unlink($slide->slide_image);
                $path = $req->slide_image;
                $paths = substr(md5(time()), 0, 10).".".$path->getClientOriginalExtension();
                $path->move(public_path("uploads/slide"),$paths);
                $path_url = 'uploads/slide/'.$paths;
                $slide->slide_image = $path_url;
            }
            $slide->slide_content = $req->slide_content;
            $slide->save();
        }

        if($slide){
            return redirect()->back()->with("success","Slide data updated!");
        }else{
            return redirect()->back()->with("error","Slide data not updated!");
        };
    }

}
