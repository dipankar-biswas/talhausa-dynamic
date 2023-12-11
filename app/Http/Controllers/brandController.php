<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Image;
use Illuminate\Support\Facades\Session;

class brandController extends Controller
{
    
    public function Index(){
        $brand = null;
        if(brand::orderby("id","DESC")->count() > 0){
           $brand = brand::orderby("id","DESC")->get(); 
        }
        return view("backend.brand.brand_add", compact('brand'));
    }

    public function Insert(Request $request){

        if($request->isMethod("post")){
            $validator = Validator::make($request->all(),[
            "name" => "required|unique:brands|max:40",
            "image" => "required|max:1600",
            ]);
            if($validator->fails()){
                return response()->json([
                    "status" => "validatorError",
                    "data" => $validator->errors(),
                ]);
            }
            $file = "uploads/".substr(md5(time()), 0, 10)."."."webp";
            Image::make($request->image)->save($file, 20);
            $brand = new brand();
            $brand->name    = $request->name;
            $brand->slug    = Str::slug($request->name);
            $brand->image   = $file;
            $brand->status  = $request->status;
            $brand->save();
            
            if($brand){
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

    public function viewUpdate(Request $request){
        $brand = brand::findOrFail($request->id);
        if($brand){
            return response()->json([
                "status" => "update",
                "data" => $brand
            ]);
        }
    }    


    public function Update(Request $request){


       if($request->isMethod("post")){

            $validator = Validator::make($request->all(),[
                "name" => "required|max:40||unique:brands,name,".$request->id
            ]);
            if($validator->fails()){
                return response()->json([
                    "status" => "validatorError",
                    "data" => $validator->errors(),
                ]);
            }

            $brand = brand::find($request->id);

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
                @unlink($brand->image);
                $file = "uploads/".substr(md5(time()), 0, 10)."."."webp";
                Image::make($request->image)->save($file, 20);
                $brand->image   = $file;
            }

            $brand->name    = $request->name;
            $brand->slug    = Str::slug($request->name);
            $brand->status  = $request->status;
            $brand->save();

            if($brand){
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
        $brand = brand::findOrFail($id)->delete();
        Session::put('success', 'Data delete successfully!');
        return redirect(Route('brand.addbrand'));
    }

}
