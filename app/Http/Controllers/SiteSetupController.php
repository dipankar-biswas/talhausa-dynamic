<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\SiteSetup;

class SiteSetupController extends Controller
{
    
    public function Index(){
        $setup = SiteSetup::where('id',1)->first();
        return view('backend.site-setup.setup', compact('setup'));
    }

    public function HeaderUpdate(Request $req) {
        if(count(SiteSetup::get()) == 0){
            $errors = Validator::make($req->all(),[
                "header_logo" => "required",
            ]);
    
            if ($errors->fails()) {
                return response()->json([
                    "status" => false,
                    "message" => "error",
                    "data" => $errors->errors()
                ]);
            }
            $setting = new SiteSetup;
            if($req->header_logo){
                $path = $req->header_logo;
                $paths = substr(md5(time()), 0, 10).".".$path->getClientOriginalExtension();
                $path->move(public_path("setup"),$paths);
                $path_url = 'setup/'.$paths;
                $setting->header_logo = $path_url;
            }
            $setting->save();
        }else{
            $setting = SiteSetup::where('id',1)->first();
            if($req->header_logo){
                $path = $req->header_logo;
                @unlink($setting->header_logo);
                $paths = substr(md5(time()), 0, 10).".".$path->getClientOriginalExtension();
                $path->move(public_path("setup"),$paths);
                $path_url = 'setup/'.$paths;
                $setting->header_logo = $path_url;
            }
            $setting->save();
        }
        if($setting){
            return redirect()->back()->with("success","SiteSetup Header Logo updated!");
        }else{
            return redirect()->back()->with("error","SiteSetup Header Logo not updated!");
        }
    }
    public function InformationUpdate(Request $req) {
        
        if(count(SiteSetup::get()) == 0){
            $errors = Validator::make($req->all(),[
                "hot_line" => "required",
                "phone" => "required",
                "email" => "required",
                "address" => "required",
            ]);
    
            if ($errors->fails()) {
                return response()->json([
                    "status" => false,
                    "message" => "error",
                    "data" => $errors->errors()
                ]);
            }
            $setting = new SiteSetup;
            $setting->hot_line = $req->hot_line;
            $setting->phone = $req->phone;
            $setting->phone_two = $req->phone_two;
            $setting->email = $req->email;
            $setting->address = $req->address;
            $setting->maps = $req->maps;
            $setting->save();
        }else{
            $setting = SiteSetup::where('id',1)->first();
            $setting->hot_line = $req->hot_line;
            $setting->phone = $req->phone;
            $setting->phone_two = $req->phone_two;
            $setting->email = $req->email;
            $setting->address = $req->address;
            $setting->maps = $req->maps;
            $setting->save();
        }

        if($setting){
            return redirect()->back()->with("success","SiteSetup Information updated!");
        }else{
            return redirect()->back()->with("error","SiteSetup Information not updated!");
        };
    }
    public function SocialUpdate(Request $req) {
        
        if(count(SiteSetup::get()) == 0){
            $errors = Validator::make($req->all(),[
                "facebook" => "required",
                "instagram" => "required",
                "twitter" => "required",
                "linkedin" => "required",
                "youtube" => "required",
            ]);
    
            if ($errors->fails()) {
                return response()->json([
                    "status" => false,
                    "message" => "error",
                    "data" => $errors->errors()
                ]);
            }
            $setting = new SiteSetup;
            $setting->facebook = $req->facebook;
            $setting->instagram = $req->instagram;
            $setting->twitter = $req->twitter;
            $setting->linkedin = $req->linkedin;
            $setting->youtube = $req->youtube;
            $setting->save();
        }else{
            $setting = SiteSetup::where('id',1)->first();
            $setting->facebook = $req->facebook;
            $setting->instagram = $req->instagram;
            $setting->twitter = $req->twitter;
            $setting->linkedin = $req->linkedin;
            $setting->youtube = $req->youtube;
            $setting->save();
        }

        if($setting){
            return redirect()->back()->with("success","SiteSetup Information updated!");
        }else{
            return redirect()->back()->with("error","SiteSetup Information not updated!");
        };
    }
    public function FooterUpdate(Request $req) {
        
        if(count(SiteSetup::get()) == 0){
            $errors = Validator::make($req->all(),[
                "footer_logo" => "required",
                "footer_content" => "required",
            ]);
    
            if ($errors->fails()) {
                return response()->json([
                    "status" => false,
                    "message" => "error",
                    "data" => $errors->errors()
                ]);
            }
            $setting = new SiteSetup;
            if($req->footer_logo){
                @unlink($setting->footer_logo);
                $path = $req->footer_logo;
                $paths = substr(md5(time()), 0, 10).".".$path->getClientOriginalExtension();
                $path->move(public_path("setup"),$paths);
                $path_url = 'setup/'.$paths;
                $setting->footer_logo = $path_url;
            }
            $setting->footer_content = $req->footer_content;
            $setting->save();
        }else{
            $setting = SiteSetup::where('id',1)->first();
            if($req->footer_logo){
                @unlink($setting->footer_logo);
                $path = $req->footer_logo;
                $paths = substr(md5(time()), 0, 10).".".$path->getClientOriginalExtension();
                $path->move(public_path("setup"),$paths);
                $path_url = 'setup/'.$paths;
                $setting->footer_logo = $path_url;
            }
            $setting->footer_content = $req->footer_content;
            $setting->save();
        }

        if($setting){
            return redirect()->back()->with("success","Footer Information updated!");
        }else{
            return redirect()->back()->with("error","Footer Information not updated!");
        };
    }
    public function CopyrightUpdate(Request $req) {
        
        if(count(SiteSetup::get()) == 0){
            $errors = Validator::make($req->all(),[
                "copyright_text" => "required",
            ]);
    
            if ($errors->fails()) {
                return response()->json([
                    "status" => false,
                    "message" => "error",
                    "data" => $errors->errors()
                ]);
            }
            $setting = new SiteSetup();
            $setting->copyright_text = $req->copyright_text;
            $setting->save();
        }else{
            $setting = SiteSetup::where('id',1)->first();
            $setting->copyright_text = $req->copyright_text;
            $setting->save();
        }

        if($setting){
            return redirect()->back()->with("success","Copyright Information updated!");
        }else{
            return redirect()->back()->with("error","Copyright Information not updated!");
        };
    }

}
