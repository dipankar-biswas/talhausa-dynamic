<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    
    public function Index(){
        $users = User::where('id',Auth::user()->id)->first();
        return view("backend.profile.profile",compact('users'));
    }

    public function profileUpdate(Request $req){
        if($req->method("POST")){

            $errors = Validator::make($req->all(),[
                "name" => "required",
                "email" => "required|unique:users,id,".$req->id,
            ]);

            if($req->email){
                $errors = Validator::make($req->all(),[
                    "email" => "email",
                ],[
                    "email.email" => "Please valid email address.",
                    "email.users" => "Email address already exists."
                ]);
            }

            if ($errors->fails()) {
                return response()->json([
                    "status" => false,
                    "message" => "error",
                    "data" => $errors->errors()
                ]);
            }

            $users = User::where('id',Auth::user()->id)->first();

            $users->name     = $req->name;
            $users->email    = $req->email;
            $users->save();

            if($users){
                Session::put("success","Profile updated successfully!");
                return response()->json([
                    "status" => "reload"
                ]);
            }else{
                Session::put("error","Profile updated unsuccessful!");
                return response()->json([
                    "status" => "reload"
                ]);            
            }



        }
    }
    public function passwordChange(Request $req){
        $errors = Validator::make($req->all(), [
            "oldpassword" => "required",
            "password" => "required|min:8",
            "repassword" => "required|same:password",
        ]);

        if ($errors->fails()) {
            return response()->json([
                "status" => false,
                "message" => "error",
                "data" => $errors->errors()
            ]);
        }


        $check_data = User::where('id', Auth::user()->id)->first();

        if (Hash::check($req->oldpassword, $check_data->password)) {
            $users = User::where('id',Auth::user()->id)->first();
            $users->password = Hash::make($req->password);
            $users->save();
            if($users){
                Session::put("success","Password change successfully");
                return response()->json([
                    "status" => "reload"
                ]);
            }else{
                Session::put("error","Something Wrong!");
                return response()->json([
                    "status" => "reload"
                ]);
            }
        }else{
            Session::put("error","Old password not match!");
            return response()->json([
                "status" => "reload"
            ]);
        }
    }

}
