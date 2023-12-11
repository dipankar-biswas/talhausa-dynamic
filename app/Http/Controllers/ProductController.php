<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Size;
use App\Models\color;
use App\Models\category;
use App\Models\Neck;
use App\Models\ProductColor;
use App\Models\ProductSize;
use Image;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class ProductController extends Controller
{
    
    public function Index(){

        $products           = null;
        $colors             = null;
        $sizes              = null;
        $categories         = null;
        $necks              = null;

        $categories = category::where('parentid', 0)
            ->with('childrenCategories')
            ->get();

        if(product::orderby("id","DESC")->count() > 0){
           $products = product::orderby("id","DESC")->get(); 
        }
        if(Size::orderby("id","DESC")->count() > 0){
           $sizes = Size::where("status", 1)->orderby("id","DESC")->get(); 
        }
        if(color::orderby("id","DESC")->count() > 0){
           $colors = color::where("status", 1)->orderby("id","DESC")->get(); 
        }
        // if(category::orderby("id","DESC")->count() > 0){
        //    $categories = category::where("status", 1)->orderby("id","DESC")->get(); 
        // }
        if(Neck::orderby("id","DESC")->count() > 0){
            $necks = Neck::where("status", 1)->orderby("id","DESC")->get(); 
         }

        return view("backend.products.product", compact('products','colors','sizes','categories','necks', 'categories'));
    }

    public function Insert(Request $request){

        if($request->isMethod("post")){

            $validator = Validator::make($request->all(),[
                "name"              => "required|unique:products|max:100",
                "thumbnail"         => "max:2000|image|mimes:png,jpg,jpeg",
                "neck_id"           => "required",
                "category_id"       => "required",
                "color"             => "required",
                "description"       => "required",
                "tags"              => "required",
            ]);

            if($validator->fails()){
                return response()->json([
                    "status" => "validatorError",
                    "data" => $validator->errors(),
                ]);
            }

            $validatorExtra = Validator::make($request->all(),[
                "image.*"   => "max:2000|mimes:png,jpg,jpeg",
            ],[
               "image.mimes" => "Attibute image must be a file of type: png, jpg, jpeg",
               "image.max" => "Attibute image size must be 2000kb"
            ]);

            if($validatorExtra->fails()){
                return response()->json([
                    "status"    => "validatorErrorExtra",
                    "data"      => $validatorExtra->errors(),
                ]);
            }

            $product                    = new product();
            $product->name              = $request->name;
            $product->slug              = Str::slug($request->name);
            if(isset($request->thumbnail)){
                $file = "uploads/product/".substr(md5(time()), 0, 12)."."."webp";
                Image::make($request->thumbnail)->save($file, 20);
                $product->thumbnail     = $file;
            }
            $product->neck_id           = $request->neck_id;
            $product->category_id       = $request->category_id;
            $product->description       = $request->description;
            $product->metatitle         = $request->metatitle;
            $product->tags              = $request->tags;
            $product->metadescription   = $request->metadescription;
            $product->status            = $request->status;
            $product->save();

            for ($i=0; $i < count($request->color_id); $i++) { 

                $productColor               = new ProductColor();
                $productColor->product_id   = $product->id;
                $productColor->color_id     = $request->color_id[$i];
                if(isset($request->image[$i])){
                    $file = "uploads/product/".substr(md5($i), 0, $i).substr(md5(time()), 0, 10)."."."webp";
                    Image::make($request->image[$i])->save($file, 20);
                    $productColor->image   = $file;
                }
                $productColor->save();

                 for ($k=0; $k < count($request->size[$request->color_id[$i]]); $k++) {
                    $productSize = new ProductSize();
                    $productSize->product_id        = $product->id;
                    $productSize->product_color_id  = $request->color_id[$i];
                    $productSize->size_id           = $request->size[$request->color_id[$i]][$k];
                    $productSize->price             = $request->price[$request->color_id[$i]][$k];
                    $productSize->dis_price         = $request->disprice[$request->color_id[$i]][$k];
                    $productSize->stock             = $request->stock[$request->color_id[$i]][$k];
                    $productSize->save();
                 }
            }

            if($product){
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

        $product            = product::findOrFail($request->id);
        if($product){
            return response()->json([
                "status"    => "update",
                "product"   => $product,
                "colors"    => $product->colors,
            ]);
        }

    }    




    public function color_wish_data(Request $request){
       $productSize = ProductSize::where("product_id", $request->product_id)->where("product_color_id", $request->color_id)->get();
       return response()->json([
            "status" => true,
            "dataCheck" => "success",
            "data" => $productSize
       ]);
    }





    public function Update(Request $request){

        if($request->isMethod("post")){

            $validator = Validator::make($request->all(),[
                "name"              => "required|max:100|unique:products,name,".$request->id,
                "thumbnail"         => "max:2000|image|mimes:png,jpg,jpeg",
                "neck_id"           => "required",
                "category_id"       => "required",
                "color"             => "required",
                "descriptionUpdate" => "required",
                "tags"              => "required",
            ]);

            if($validator->fails()){
                return response()->json([
                    "status" => "validatorError",
                    "data" => $validator->errors(),
                ]);
            }

            $validatorExtra = Validator::make($request->all(),[
                "image.*"   => "max:2000|mimes:png,jpg,jpeg",
            ],[
               "image.mimes" => "Attibute image must be a file of type: png, jpg, jpeg",
               "image.max" => "Attibute image size must be 2000kb"
            ]);

            if($validatorExtra->fails()){
                return response()->json([
                    "status"    => "validatorErrorExtra",
                    "data"      => $validatorExtra->errors(),
                ]);
            }

            $product                    = product::find($request->id);
            $product->name              = $request->name;
            $product->slug              = Str::slug($request->name);
            if(isset($request->thumbnail)){
                @unlink($product->thumbnail);
                $file = "uploads/product/".substr(md5(time()), 0, 12)."."."webp";
                Image::make($request->thumbnail)->save($file, 20);
                $product->thumbnail     = $file;
            }
            $product->neck_id           = $request->neck_id;
            $product->category_id       = $request->category_id;
            $product->description       = $request->descriptionUpdate;
            $product->metatitle         = $request->metatitle;
            $product->tags              = $request->tags;
            $product->metadescription   = $request->metadescription;
            $product->status            = $request->status;
            $product->save();


            $haveColor = json_encode(ProductColor::where("product_id", $product->id)->pluck("color_id"));
            $haveColor = json_decode($haveColor);

            $selectColor = [];

            // Make array
            for ($i=0; $i < count($request->color_id); $i++) {
                array_push($selectColor , $request->color_id[$i]);
            }
            //-----------

            if(count(array_diff($haveColor, $selectColor)) > 0){
                $getValue = array_diff($haveColor, $selectColor);
                ProductColor::where("product_id", $product->id)->whereIn("color_id", $getValue)->delete();
            }



            for ($i=0; $i < count($request->color_id); $i++) {

                if(array_search($request->color_id[$i], $haveColor) > -1){

                }else{
                    $productColor               = new ProductColor();
                    $productColor->product_id   = $request->id;
                    $productColor->color_id     = $request->color_id[$i];
                    $productColor->save();
                }




                // For Size Table




                $size_id = json_encode(ProductSize::where("product_id", $product->id)->where("product_color_id", $request->color_id[$i])->pluck("size_id"));
                $size_id = json_decode($size_id);



                $selectSize_id = [];

                // Make array
                    for ($k=0; $k < count($request->size[$request->color_id[$i]]); $k++) {
                        array_push($selectSize_id , $request->size[$request->color_id[$i]][$k]);
                    }
                //-----------


                if(count(array_diff($size_id, $selectSize_id)) > 0){
                    $getValueSize = array_diff($size_id, $selectSize_id);
                    ProductSize::where("product_id", $product->id)
                    ->where("product_color_id",$request->color_id[$i])
                    ->whereIn("size_id", $getValueSize)
                    ->delete();
                }


                for ($k=0; $k < count($request->size[$request->color_id[$i]]); $k++) {

                    if(array_search($request->size[$request->color_id[$i]][$k], $size_id) > -1){

                            $productSize = ProductSize::where("product_id",$product->id)
                            ->where("product_color_id",$request->color_id[$i])
                            ->where("size_id", $request->size[$request->color_id[$i]][$k])
                            ->first();

                        $productSize->product_id        = $product->id;
                        $productSize->product_color_id  = $request->color_id[$i];
                        $productSize->size_id           = $request->size[$request->color_id[$i]][$k];
                        $productSize->price             = $request->price[$request->color_id[$i]][$k];
                        $productSize->dis_price         = $request->disprice[$request->color_id[$i]][$k];
                        $productSize->stock             = $request->stock[$request->color_id[$i]][$k];
                        $productSize->save();
                    }
                    else{
                        $productSize = new ProductSize();
                        $productSize->product_id        = $product->id;
                        $productSize->product_color_id  = $request->color_id[$i];
                        $productSize->size_id           = $request->size[$request->color_id[$i]][$k];
                        $productSize->price             = $request->price[$request->color_id[$i]][$k];
                        $productSize->dis_price         = $request->disprice[$request->color_id[$i]][$k];
                        $productSize->stock             = $request->stock[$request->color_id[$i]][$k];
                        $productSize->save();
                    }

                }



            }

            if($product){
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
        $product        = product::findOrFail($id);
        @unlink($product->thumbnail);
        $product->delete();

        $ProductColor        = ProductColor::where("product_id",$id)->get();
        foreach($ProductColor as $pc){
           @unlink($pc->image); 
        }
        ProductColor::where("product_id",$id)->delete();
        $ProductSize    = ProductSize::where("product_id", $id)->delete();
        if($product && $ProductColor && $ProductSize){
            Session::put('success', 'Data delete successfully!');
            return redirect(Route('product.addproduct'));
        }else{
            Session::put('info', 'Data delete successfully!');
            return redirect(Route('admin.dashboard'));
        }
    }


    public function productDetails($slug){

        $sizes      = null;
        $colors     = null;
        $categories = null;
        $product    = null;
        $lastTen    = null;
        $samepdts   = null;
        $lastpdt    = null;
        $catid      = null;
        $relatedpdts = null;

        if(Size::orderby("id","DESC")->count() > 0){
            $sizes = Size::orderby("id","DESC")->get(); 
         }
 
         if(color::orderby("id","DESC")->count() > 0){
            $colors = color::orderby("id","DESC")->get(); 
         }
 
         if(category::orderby("id","DESC")->count() > 0){
            $categories = category::orderby("id","DESC")->get(); 
         }

         if(product::where('slug', $slug)->count() > 0){

            $product = product::where('slug', $slug)->with('category','colors','sizes')->first();
            $lastpdt = product::where("status", 1)->where('slug',$slug)->first()->id;
            $catid = product::where("status", 1)->where('slug',$slug)->first()->category_id;

            $lastTen = product::select("id")
                ->where("status", 1)
                ->take(10)
                ->pluck("id");

            $samepdts = product::whereIn("id", $lastTen)
                ->where("id","!=", $lastpdt)
                ->where("category_id","=", $catid)
                ->inRandomOrder()
                ->take(2)
                ->get();
            
            $relatedpdts = product::where("status", 1)
                ->where("id","!=", $lastpdt)
                ->where("category_id","=", $catid)
                ->with('category','colors','sizes')
                ->orderBy('id','DESC')
                ->take(8)
                ->get();
         }

        return view("frontend.product.product-details", compact('product','sizes','colors','categories','samepdts','relatedpdts','lastpdt'));
    }

    public function pdtDetailView($id){
        $product    = null;

         if(product::where('id', $id)->count() > 0){
            $product = product::where('id', $id)->with('category','colors.color_name','sizes.size_name','neck')->first();
         }
        
        return response()->json($product);
    }

    public function pdtSizePrice(Request $request){
        $getData = ProductSize::where('product_id',$request->pid)->where('size_id',$request->sid)->where('product_color_id',$request->cid)->first();
        return response()->json($getData);
    }

    public function pdtColorPrice(Request $request){
        $getData = ProductSize::where('product_id',$request->pid)->where('product_color_id',$request->cid)->with('sizes')->orderBy('size_id','ASC')->get();
        return response()->json($getData);
    }


    public function productCategory($pslug, $slug = null){

        $sizes      = null;
        $colors     = null;
        $categories = null;
        $products    = null;
        $categoryName    = null;
        $catid    = null;
        $parentid    = null;

        if(Size::orderby("id","DESC")->count() > 0){
            $sizes = Size::orderby("id","DESC")->get(); 
        }
 
        if(color::orderby("id","DESC")->count() > 0){
            $colors = color::orderby("id","DESC")->get(); 
        }
 
        if(category::orderby("id","DESC")->count() > 0){
            $categories = category::orderby("id","DESC")->get(); 
        }


        if($slug != null){

            $parentId = category::where("slug", $pslug)->first();
            $parentId = $parentId->id;

            $categoryName   = category::where("status", 1)
                            ->where('slug',$slug)
                            ->where('parentid', $parentId)
                            ->firstOrFail();

            $catid          = category::where("status", 1)
                            ->where('slug',$slug)
                            ->where('parentid', $parentId)
                            ->firstOrFail();
        }else{
            $categoryName   = category::where("status", 1)->where('slug',$pslug)->firstOrFail();
            $catid          = category::where("status", 1)->where('slug',$pslug)->firstOrFail();
        }


        
        if($catid->parentid){
            $products = product::where("category_id", $catid->id)
                        ->inRandomOrder()
                        ->take(16)
                        ->get(); 

        }else{
            $parentid = category::where("status", 1)->where('parentid',$catid->id)->first();
            if($parentid == null){
                $products = product::where("category_id", $catid->id)
                        ->inRandomOrder()
                        ->take(16)
                        ->get(); 
            }else{
                $products = product::whereIn("category_id", [$catid->id, $parentid->id])
                            ->inRandomOrder()
                            ->take(16)
                            ->get(); 
            }

        }
        
        
        
        return view("frontend.product.product-category", compact('sizes','colors','categories','products','categoryName'));
    }

    public function getFilterData(Request $request){
        $array = explode(",", $request->neckid);

        if($array[0] == ''){
            $products = product::where("category_id","=", $request->catid)
            ->with('sizes','neck','colors.color_name')
            ->inRandomOrder()
            ->take(16)
            ->get();

           return $products;
        }else{
            $products = product::whereIn('neck_id', $array)
            ->where("category_id","=", $request->catid)
            ->with('sizes','neck','colors.color_name')
            ->inRandomOrder()
            ->take(16)
            ->get();

           return $products;
        }
    }



    public function productSearch(Request $request){
        $categoryName = category::where("status", 1)->where('slug',$request->scat)->first();
        $catid = category::where("status", 1)->where('slug',$request->scat)->first()?->id;
        if($request->scat && $request->stxt){ 
            $check = product::where("category_id","=", $catid)->where("name","LIKE", '%'.$request->stxt.'%')->count(); 
            if($check > 0){
                $products = product::where("category_id", $catid)
                    ->where("name","LIKE", '%'.$request->stxt.'%')
                    ->inRandomOrder()
                    ->take(16)
                    ->get(); 
            }else{
                $products = product::where("category_id","=", $catid)
                    ->where("description","LIKE", '%'.$request->stxt.'%')
                    ->inRandomOrder()
                    ->take(16)
                    ->get(); 
            }
        }elseif($request->scat){
            $products = product::where("category_id","=", $catid)
                ->inRandomOrder()
                ->take(16)
                ->get();
        }else{
            $products = product::where("name","LIKE", '%'.$request->stxt.'%')
                ->orWhere("description","LIKE", '%'.$request->stxt.'%')
                ->inRandomOrder()
                ->take(16)
                ->get();
        } 
        
        return view("frontend.product.product-search",compact('categoryName','products'));
    }

    public function getSearchFilterData(Request $request){
        $getUrl = $_SERVER['HTTP_REFERER'];
        $array = explode(",", $request->neckid);


        if($array[0] == ''){
            $data = substr(strstr($getUrl,"?"), 1, strlen(strstr($getUrl,"?")));
            if(!empty($data)){
                $dataExplode = explode("&", $data);
                $first  = explode("=", $dataExplode[0]);
                $second = explode("=", $dataExplode[1]);
                $scat = $first[1];
                $stxt = str_replace('+',' ', $second[1]);
                $catid = category::where("status", 1)->where('slug',$scat)->first()?->id;

                if($scat && $stxt){ 
                    $check = product::where("category_id","=", $catid)->where("name","LIKE", '%'.$stxt.'%')->count(); 
                    if($check > 0){
                        $products = product::where("category_id","=", $catid)
                            ->where("name","LIKE", '%'.$stxt.'%')
                            ->with('sizes','neck','colors.color_name')
                            ->inRandomOrder()
                            ->take(16)
                            ->get(); 
                    }else{
                        $products = product::where("category_id","=", $catid)
                            ->where("description","LIKE", '%'.$stxt.'%')
                            ->with('sizes','neck','colors.color_name')
                            ->inRandomOrder()
                            ->take(16)
                            ->get(); 
                    }
                }elseif($scat){
                    $products = product::where("category_id","=", $catid)
                        ->with('sizes','neck','colors.color_name')
                        ->inRandomOrder()
                        ->take(16)
                        ->get();
                }else{
                    $products = product::where("name","LIKE", '%'.$stxt.'%')
                        ->orWhere("description","LIKE", '%'.$stxt.'%')
                        ->with('sizes','neck','colors.color_name')
                        ->inRandomOrder()
                        ->take(16)
                        ->get();
                }
            }else{
                $products = product::with('sizes','neck','colors.color_name')
                        ->inRandomOrder()
                        ->take(16)
                        ->get();
            }

           return $products;
        }else{
            $data = substr(strstr($getUrl,"?"), 1, strlen(strstr($getUrl,"?")));
            if(!empty($data)){
            $dataExplode = explode("&", $data);
                $first  = explode("=", $dataExplode[0]);
                $second = explode("=", $dataExplode[1]);
                $scat = $first[1];
                $stxt = str_replace('+',' ', $second[1]);
                $catid = category::where("status", 1)->where('slug',$scat)->first()?->id;
                if($scat && $stxt){ 
                    $check = product::where("category_id","=", $catid)->where("name","LIKE", '%'.$stxt.'%')->count(); 
                    if($check > 0){
                        $products = product::whereIn('neck_id', $array)
                            ->where("category_id","=", $catid)
                            ->where("name","LIKE", '%'.$stxt.'%')
                            ->with('sizes','neck','colors.color_name')
                            ->inRandomOrder()
                            ->take(16)
                            ->get(); 
                    }else{
                        $products = product::whereIn('neck_id', $array)
                            ->where("category_id","=", $catid)
                            ->where("description","LIKE", '%'.$stxt.'%')
                            ->with('sizes','neck','colors.color_name')
                            ->inRandomOrder()
                            ->take(16)
                            ->get(); 
                    }
                }elseif($scat){
                    $products = product::whereIn('neck_id', $array)
                        ->where("category_id","=", $catid)
                        ->with('sizes','neck','colors.color_name')
                        ->inRandomOrder()
                        ->take(16)
                        ->get();
                }else{
                    $products = product::whereIn('neck_id', $array)
                        ->where("name","LIKE", '%'.$stxt.'%')
                        ->orWhere("description","LIKE", '%'.$stxt.'%')
                        ->with('sizes','neck','colors.color_name')
                        ->inRandomOrder()
                        ->take(16)
                        ->get();
                } 
            }else {
                $products = product::whereIn('neck_id', $array)
                        ->with('sizes','neck','colors.color_name')
                        ->inRandomOrder()
                        ->take(16)
                        ->get();
            }

           return $products;
        }
    }

}
