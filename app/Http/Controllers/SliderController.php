<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Models\Slider;
use Image;

class SliderController extends Controller
{
    
    public function Index(){
        $slider = null;
        if(Slider::orderby("id","DESC")->count() > 0){
           $slider = Slider::orderby("id","DESC")->get(); 
        }
        return view("backend.slider.slider_list", compact('slider'));
    }

    public function Insert(Request $request){

        if($request->isMethod("post")){
            $validator = Validator::make($request->all(),[
            "name" => "required|unique:sliders|max:120",
            "short_des" => "required",
            "image" => "required|max:3072",
            ]);
            if($validator->fails()){
                return response()->json([
                    "status" => "validatorError",
                    "data" => $validator->errors(),
                ]);
            }
            $file = "uploads/slider/".substr(md5(time()), 0, 10)."."."png";
            Image::make($request->image)->save($file, 20);
            $slide = new Slider();
            $slide->name    = $request->name;
            $slide->slug    = Str::slug($request->name);
            $slide->short_des    = $request->short_des;
            $slide->link    = $request->link;
            $slide->image   = $file;
            $slide->status  = $request->status;
            $slide->save();
            
            if($slide){
                Session::put('success', 'Data inserted successfully!');
                return response()->json([
                    "reload" => true
                ]);
            }else{
                Session::put('error', 'Data not deleted!');
                return response()->json([
                    "reload" => true
                ]);
            }

            
        }
    }

    public function View(Request $request){
        $slide = Slider::findOrFail($request->id);
        if($slide){
            return response()->json([
                "status" => "update",
                "data" => $slide
            ]);
        }
    }    


    public function Update(Request $request){


       if($request->isMethod("post")){

            $validator = Validator::make($request->all(),[
                "name" => "required|max:40||unique:sliders,name,".$request->id,
                "short_des" => "required"
            ]);
            if($validator->fails()){
                return response()->json([
                    "status" => "validatorError",
                    "data" => $validator->errors(),
                ]);
            }

            $slide = Slider::find($request->id);

            if($request->image != null){
                $validator = Validator::make($request->all(),[
                    "image" => "required|max:1600",
                ]);
                if($validator->fails()){
                    return response()->json([
                        "status" => "validatorError",
                        "data" => $validator->errors(),
                    ]);
                }
                $requirestFile = $request->image;
                $getExtension = $requirestFile->getClientOriginalExtension();

                @unlink('uploads/slider/'.$slide->image);
                $file = "uploads/slider/".substr(md5(time()), 0, 10).".".$getExtension;
                Image::make($request->image)->save($file, 20);
                $slide->image   = $file;
            }

            $slide->name    = $request->name;
            $slide->slug    = Str::slug($request->name);
            $slide->short_des    = $request->short_des;
            $slide->link    = $request->link;
            $slide->status  = $request->status;
            $slide->save();

            if($slide){
                Session::put('success', 'Data updated successfully!');
                return response()->json([
                    "reload" => true
                ]);
            }else{
                Session::put('error', 'Data not deleted!');
                return response()->json([
                    "reload" => true
                ]);
            }

            

        }


    }

    public function Delete($id){
        $slide = Slider::findOrFail($id);
        @unlink($slide->image);
        $slide->delete();
        Session::put('success', 'Data delete successfully!');
        return redirect(Route('slide.slidelist'));
    }

}
