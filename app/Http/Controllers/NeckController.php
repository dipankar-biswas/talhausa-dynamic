<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Models\Neck;
use Image;

class NeckController extends Controller
{
    
    public function Index(){
        $neck = null;
        if(Neck::orderby("id","DESC")->count() > 0){
           $neck = Neck::orderby("id","DESC")->get(); 
        }
        return view("backend.neck.neck_list", compact('neck'));
    }

    public function Insert(Request $request){

        if($request->isMethod("post")){
            $validator = Validator::make($request->all(),[
            "name" => "required|unique:necks|max:40",
            "image" => "required|max:3072",
            ]);
            if($validator->fails()){
                return response()->json([
                    "status" => "validatorError",
                    "data" => $validator->errors(),
                ]);
            }
            $file = "uploads/neck/".substr(md5(time()), 0, 10)."."."png";
            Image::make($request->image)->save($file, 20);
            $neck = new Neck();
            $neck->name    = $request->name;
            $neck->slug    = Str::slug($request->name);
            $neck->image   = $file;
            $neck->status  = $request->status;
            $neck->save();
            
            if($neck){
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
        $neck = Neck::findOrFail($request->id);
        if($neck){
            return response()->json([
                "status" => "update",
                "data" => $neck
            ]);
        }
    }    


    public function Update(Request $request){


       if($request->isMethod("post")){

            $validator = Validator::make($request->all(),[
                "name" => "required|max:40||unique:necks,name,".$request->id
            ]);
            if($validator->fails()){
                return response()->json([
                    "status" => "validatorError",
                    "data" => $validator->errors(),
                ]);
            }

            $neck = Neck::find($request->id);

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
                @unlink($neck->image);
                $file = "uploads/neck/".substr(md5(time()), 0, 10)."."."png";
                Image::make($request->image)->save($file, 20);
                $neck->image   = $file;
            }

            $neck->name    = $request->name;
            $neck->slug    = Str::slug($request->name);
            $neck->status  = $request->status;
            $neck->save();

            if($neck){
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
        $neck = Neck::findOrFail($id);
        @unlink($neck->image);
        $neck->delete();
        Session::put('success', 'Data delete successfully!');
        return redirect(Route('neck.necklist'));
    }

}
