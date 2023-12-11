<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\color;

class colorController extends Controller
{
    
    public function Index(){

        $color = null;
        if(color::orderby("id","DESC")->count() > 0){
           $color = color::orderby("id","DESC")->get(); 
        }
        return view("backend.color.color", compact('color'));
    }

    public function Insert(Request $request){
        if($request->isMethod("post")){
            $validator = Validator::make($request->all(),[
            "name"          => "required|unique:colors|max:40",
            "private_name"  => "required|unique:colors|max:40",
            "code"          => "required|unique:colors|max:40",
            ]);
            if($validator->fails()){
                return response()->json([
                    "status" => "validatorError",
                    "data" => $validator->errors(),
                ]);
            }
            $color                  = new color();
            $color->name            = $request->name;
            $color->private_name    = $request->private_name;
            $color->code            = $request->code;
            $color->status          = $request->status;
            $color->save();
            if($color){
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
        $color = color::findOrFail($request->id);
        if($color){
            return response()->json([
                "status" => "update",
                "data" => $color
            ]);
        }
    }    


    public function Update(Request $request){


       if($request->isMethod("post")){

            $validator = Validator::make($request->all(),[
                "name"          => "required|max:40||unique:colors,name,".$request->id,
                "private_name"  => "required|max:40||unique:colors,name,".$request->id,
                "code"          => "required|max:40||unique:colors,code,".$request->id
            ]);
            
            if($validator->fails()){
                return response()->json([
                    "status" => "validatorError",
                    "data" => $validator->errors(),
                ]);
            }

            $color                  = color::find($request->id);
            $color->name            = $request->name;
            $color->private_name    = $request->private_name;
            $color->code            = $request->code;
            $color->status          = $request->status;
            $color->save();

            if($color){
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
        $color = color::findOrFail($id)->delete();
        Session::put('success', 'Data delete successfully!');
        return redirect(Route('color.addcolor'));
    }



}
