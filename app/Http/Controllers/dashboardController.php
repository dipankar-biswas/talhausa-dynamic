<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\category;
use App\Models\color;
use App\Models\Customer;
use App\Models\Neck;
use App\Models\Order;
use App\Models\product;
use App\Models\ProductColor;
use App\Models\Size;

class dashboardController extends Controller
{
    
    public function Index(){
        $colors = null;
        if(color::count() > 0){
            $colors = color::orderby("name","ASC")->get();
        }

        $sizes = null;
        if(Size::count() > 0){
            $sizes = Size::orderby("name","ASC")->get();
        }

        $OrderPending = null;
        if(Order::where("status", 0)->count() > 0){
            $OrderPending = Order::where("status", 0)->count();
        }

        $OrderConfirm = null;
        if(Order::where("status", 1)->count() > 0){
            $OrderConfirm = Order::where("status", 1)->count();
        }

        $OrderDelivered = null;
        if(Order::where("status", 2)->count() > 0){
            $OrderDelivered = Order::where("status", 2)->count();
        }

        $OrderTotal = null;
        if(Order::count() > 0){
            $OrderTotal = Order::count();
        }


        $category = null;
        if(category::count() > 0){
            $category = category::count();
        }

        $categoresData = null;
        if(category::count() > 0){
            $categoresData = category::get();
        }

        $productCount = null;
        if(product::count() > 0){
            $productCount = product::count();
        }

        $UsersActive = null;
        if(User::where("status", 1)->count() > 0){
            $UsersActive = User::where("status", 1)->count();
        }

        $UsersInactive = null;
        if(User::where("status", 0)->count() > 0){
            $UsersInactive = User::where("status", 0)->count();
        }

        $totalUser = null;
        if(User::count() > 0){
            $totalUser = User::count();
        }

        return view("backend.dashboard.index", compact('colors','sizes','OrderPending','OrderConfirm','OrderDelivered','OrderTotal', 'category','categoresData','productCount', 'totalUser', 'UsersInactive', 'UsersActive'));
    }

    public function Insert(){
        
    }

    public function Update(){
        
    }

    public function Delete(){
        
    }

}
