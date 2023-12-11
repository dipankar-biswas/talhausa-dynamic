<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Size;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class SizeController extends Controller
{
    
    public function Index(){
        $size = null;
        if(Size::orderby("id","DESC")->count() > 0){
           $size = Size::orderby("id","DESC")->get(); 
        }
        return view("backend.size.size_list", compact('size'));
    }

    public function Insert(Request $request){

        if($request->isMethod("post")){
            $validator = Validator::make($request->all(),[
                "name" => "required|unique:sizes|max:40",
            ]);

            if($validator->fails()){
                return response()->json([
                    "status" => "validatorError",
                    "data" => $validator->errors(),
                ]);
            }

            $size = new Size();
            $size->name    = $request->name;
            $size->slug    = Str::slug($request->name);
            $size->status  = $request->status;
            $size->save();
            
            if($size){
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
        $size = Size::findOrFail($request->id);
        if($size){
            return response()->json([
                "status" => "update",
                "data" => $size
            ]);
        }
    }    


    public function Update(Request $request){


       if($request->isMethod("post")){

            $validator = Validator::make($request->all(),[
                "name" => "required|max:40||unique:sizes,name,".$request->id
            ]);

            if($validator->fails()){
                return response()->json([
                    "status" => "validatorError",
                    "data" => $validator->errors(),
                ]);
            }

            $size = Size::find($request->id);

            $size->name    = $request->name;
            $size->slug    = Str::slug($request->name);
            $size->status  = $request->status;
            $size->save();

            if($size){
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
        $size = Size::findOrFail($id)->delete();
        Session::put('success', 'Data delete successfully!');
        return redirect(Route('sizes'));
    }

}
