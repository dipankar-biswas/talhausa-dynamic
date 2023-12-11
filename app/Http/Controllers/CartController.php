<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\product;
use App\Models\ProductSize;
use Cart;

class CartController extends Controller
{
    
    public function Index(){
        return view('frontend.product.cart');
    }

    public function addToCart(Request $request){
        if($request->pid && $request->cid && $request->sid && $request->qty){
            // Product Details Page Add To Cart
            $product = product::where('id', $request->pid)->with('neck')->first();
            $pdt = ProductSize::where('product_id', $request->pid)->where('product_color_id', $request->cid)->where('size_id', $request->sid)->with('size_name','color_name')->first();
            
            $addtocart = Cart::add([
                'id' => $product->id, 
                'name' => $product->name, 
                'qty' => $request->qty, 
                'price' => $pdt->dis_price, 
                'options' => [
                    'slug' => $product->slug, 
                    'image' => $product->neck->image, 
                    'design' => $product->neck->name, 
                    'color_id' => $pdt->product_color_id, 
                    'color' => $pdt?->color_name?->name, 
                    'color_code' => $pdt?->color_name?->code, 
                    'size_id' => $pdt->size_id, 
                    'size' => $pdt?->size_name?->name, 
                    'total_qty' => $pdt->stock - $request->qty, 
                ],
            ]);

        }else{
            // Default Product Add To Cart
            $product = product::where('id', $request->pid)->with('colors.color_name','sizes.size_name','neck')->first();
            $addtocart = Cart::add([
                'id' => $product->id, 
                'name' => $product->name, 
                'qty' => 1, 
                'price' => $product->sizes[0]?->dis_price, 
                'options' => [
                    'slug' => $product->slug, 
                    'image' => $product->neck->image, 
                    'design' => $product->neck->name, 
                    'color_id' => $product->sizes[0]?->product_color_id, 
                    'color' => $product->colors[0]?->color_name?->name, 
                    'color_code' => $product->colors[0]?->color_name?->code, 
                    'size_id' => $product->sizes[0]?->size_id, 
                    'size' => $product->sizes[0]?->size_name?->name, 
                    'total_qty' => $product->sizes[0]?->stock - 1, 
                ],
            ]);
        }

        if($addtocart){
            return response()->json([
                'status' => 'success',
                'message' => 'Product Added Successfully!'
            ]);
        }else {
            return response()->json([
                'status' => 'error',
                'message' => 'Something Wrong!'
            ]);
        }
    }

    public function getCartData(){
        $cartTax = Cart::tax();
        $cartCount = Cart::count();
        $cartData = Cart::content();
        $cartSubtotal = Cart::subtotal();
        return response()->json([
            'data' => $cartData,
            'count' => $cartCount,
            'tax' => $cartTax,
            'subtotal' => $cartSubtotal,
        ]);
    }

    public function cartDataRemove(Request $request){
        $remove = Cart::remove($request->rowId);
        if($remove == NULL){
            return response()->json([
                'status' => 'success',
                'message' => 'Product Remove Successfully!'
            ]);
        }else {
            return response()->json([
                'status' => 'error',
                'message' => 'Product Not Remove!'
            ]);
        }
    }


    // Cart Product Qty Update
    public function qtyUpdate(Request $request){
        $rowId = explode(",",$request->rowId);
        $pid = explode(",",$request->pid);
        $cid = explode(",",$request->cid);
        $sid = explode(",",$request->sid);
        $qty = explode(",",$request->qty);

        foreach ($pid as $key => $value) {
            $product = product::where('id', $pid[$key])->with('neck')->first();
            $pdt = ProductSize::where('product_id', $pid[$key])->where('product_color_id', $cid[$key])->where('size_id', $sid[$key])->with('size_name','color_name')->first();
    
            $update = Cart::update($rowId[$key], [  
                'qty'               => $qty[$key], 
                'options'           => [
                    'slug'          => $product->slug, 
                    'image'         => $product->neck->image, 
                    'design'        => $product->neck->name, 
                    'color_id'      => $pdt->product_color_id, 
                    'color'         => $pdt?->color_name?->name, 
                    'color_code'    => $pdt?->color_name?->code, 
                    'size_id'       => $pdt->size_id, 
                    'size'          => $pdt?->size_name?->name, 
                    'total_qty'     => $pdt->stock - $qty[$key]
                ]
            ]);
        }


        if($update){
            $pdtIdSubtotal  = $update->price * $update->qty;
            $subtotal       = Cart::subtotal();
            $total          = Cart::total();
            $cartCount      = Cart::count();
            $cartItem       = Cart::content()->count();
            if($cartCount > 0){
                return response()->json([
                    'cartItem'  => $cartItem,
                    'qtyCount'  => $cartCount,
                    'qtyprice'  => $pdtIdSubtotal,
                    'subtotal'  => $subtotal,
                    'cusrowId'    => $update->rowId,
                    'total'     => $total,
                    'cartData'  => $update,
                    'status'    => 'success',
                    'message'   => 'Product Qty Update Successfully!'
                ]);
            }else{
                return redirect()->route('cart.empty');
            }
        }else {
            return response()->json([
                'status' => 'error',
                'message' => 'Product Qty Not Update!'
            ]);
        }
    }

    // Cart Product Remove
    public function cartPdtRemove(Request $request){
        $remove = Cart::remove($request->rowId);
        if($remove == NULL){
            return redirect()->back()->with([
                'status' => 'success',
                'message' => 'Product Remove Successfully!'
            ]);
        }else {
            return redirect()->back()->with([
                'status' => 'error',
                'message' => 'Product Not Remove!'
            ]);
        }
    }


    public function CartEmpty(){
        return view('frontend.product.cart-empty');
    }

}
