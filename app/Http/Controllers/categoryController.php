<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;
use App\Models\category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Image;
use Illuminate\Support\Facades\Session;

class categoryController extends Controller
{
    
    public function Index(){

        $categories = category::where('parentid', 0)
            ->with('childrenCategories')
            ->get();

        $category = null;

        if(category::count()){
            $category = category::orderby("id", "DESC")->get();
        }

        return view("backend.category.category_add", compact('categories', 'category'));
    }

    public function Insert(Request $request){


        if($request->isMethod("post")){

            $validator = Validator::make($request->all(),[
                "name" => "required|max:40"
            ]);

            if($validator->fails()){
                return response()->json([
                    "status"    => "validatorError",
                    "data"      => $validator->errors(),
                ]);
            }

            if(category::where("name", $request->name)->where("parentid", 0)->count() > 0){
                return response()->json([
                    "status"    => "validatorError",
                    "data"      => ["name" => ["$request->name already exists!"]],
                ]);
            }


            if(category::where("name", $request->name)->where("parentid", $request->parentid)->count() > 0){
                return response()->json([
                    "status"    => "validatorError",
                    "data"      => ["name" => ["$request->name already exists!"]],
                ]);
            }

            $category                   = new category();
            $category->name             = $request->name;
            $category->banner           = $request->banner;
            $category->metatile         = $request->metatile;
            $category->metadescription  = $request->metadescription;
            $category->slug             = Str::slug($request->name);

            if ($request->parentid != 0) {
                $category->parentid     = $request->parentid;
                $parent                 = category::find($request->parentid);
                $category->level        = $parent->level + 1;
            }else{
                $category->parentid     = 0;
                $category->level        = 0;
            }

            if($request->ordering != null){
                $category->ordering = $request->ordering;
            }else{
                $category->ordering = 0;
            }

            if(isset($request->banner)){
                $file = "uploads/".substr(md5(time()), 0, 10)."."."webp";
                Image::make($request->banner)->save($file, 20);
                $category->banner   = $file;
            }

            if(isset($request->icon)){
                $file = "uploads/".substr(md5(time()), 0, 12)."."."webp";
                Image::make($request->icon)->save($file, 20);
                $category->icon   = $file;
            }
            $category->status       = $request->status;
            $category->save();




            if($category){
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
        $category = category::findOrFail($request->id);
        if($category){
            return response()->json([
                "status" => "update",
                "data" => $category
            ]);
        }
    }    


    public function Update(Request $request){


        if($request->isMethod("post")){

            $validator = Validator::make($request->all(),[
                "name" => "required|max:40||unique:categories,name,".$request->id
            ]);

            if($validator->fails()){
                return response()->json([
                    "status" => "validatorError",
                    "data" => $validator->errors(),
                ]);
            }

            if($request->id == $request->parentid){

                return response()->json([
                    "status" => "invalid",
                    "data" => "Please chose another category!",
                ]);

            }

            $category = category::find($request->id);

            if($request->banner != null){
                $validator = Validator::make($request->all(),[
                    "banner" => "required|max:1600",
                ]);
                if($validator->fails()){
                    return response()->json([
                        "status" => "validatorError",
                        "data" => $validator->errors(),
                    ]);
                }
                @unlink($category->banner);
                $file = "uploads/".substr(md5(time()), 0, 10)."."."webp";
                Image::make($request->banner)->save($file, 20);
                $category->banner   = $file;
            }


            if($request->icon != null){
                $validator = Validator::make($request->all(),[
                    "icon" => "required|max:1600",
                ]);
                if($validator->fails()){
                    return response()->json([
                        "status" => "validatorError",
                        "data" => $validator->errors(),
                    ]);
                }
                @unlink($category->icon);
                $file = "uploads/".substr(md5(time()), 0, 12)."."."webp";
                Image::make($request->icon)->save($file, 20);
                $category->icon   = $file;
            }


            $category->name                 = $request->name;
            $category->metatile             = $request->metatile;
            $category->metadescription      = $request->metadescription;
            $category->slug                 = Str::slug($request->name);
            $category->status               = $request->status;

            if ($request->parentid != 0) {
                $category->parentid     = $request->parentid;
                $parent                 = category::find($request->parentid);
                $category->level        = $parent->level + 1;
            }else{
                $category->parentid     = 0;
                $category->level        = 0;
            }

            if($request->ordering != null){
                $category->ordering = $request->ordering;
            }else{
                $category->ordering = 0;
            }


            $category->save();

            if($category){
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
        $category = category::findOrFail($id)->delete();
        Session::put('success', 'Data delete successfully!');
        return redirect(Route('category.addcategory'));
    }

}
