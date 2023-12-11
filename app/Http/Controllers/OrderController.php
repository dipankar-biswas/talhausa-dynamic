<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\Customer;
use App\Models\Order;
use App\Models\product;
use App\Mail\customerMail;
use App\Mail\companyMail;
use App\Models\ProductSize;
use Cart;
use Mail;

class OrderController extends Controller
{
    
    public function Index(){
        return view('frontend.product.checkout');
    }


    public function get_all_order(){
        $customer = null;
        if(Customer::count()){
            $customer = Customer::orderBy("id","DESC")->get();
        }
        return view('backend.orders.orderlist', compact('customer'));
    }


    public function order_confirm($id){
        $customer               = Customer::findOrFail($id);
        $customer->orderStatus  = 1;
        $customer->save();
        $order = Order::where("customer_id", $id)->update([
                "status" => 1
        ]);
        return redirect(route('get_all_order_Details.orderDetails', $id));
    }    


    public function order_delivery($id){
        $customer               = Customer::findOrFail($id);
        $customer->orderStatus  = 2;
        $customer->save();
        $order = Order::where("customer_id", $id)->update([
                "status" => 2
        ]);
        return redirect(route('list.orderlist'));
    }


    public function get_all_order_Details($customer_id){
        $customer = Customer::findOrFail($customer_id);
        return view('backend.orders.orderDetails', compact('customer'));
    }


    public function order_tracking(Request $request){
        $msg            = null;
        $data           = $request->trackingid;
        $trackingdata   = null;
        if(isset($request->search) && $request->search == true){
            if($request->trackingid == ""){
                 $msg = "Field must not be empty!";
            }else{
                if(Customer::where("trackingid", $request->trackingid)->count() > 0){
                    $trackingdata = Customer::where("trackingid", $request->trackingid)->first();
                }else{
                    $msg = "Invalid tracking ID.";
                }
            }
        }
        return view('frontend.track.track', compact('msg','data', 'trackingdata'));
    }



    public function order_delete($id){
        $customer   = Customer::findOrFail($id)->delete();
        $order      = Order::where("customer_id", $id)->delete();
        return redirect(route('list.orderlist'));
    }       


    public function order_complete(){

        $payment = Session::get('payment');

        if(isset($payment['payment']) && $payment['payment'] == true){
            return view("frontend.payment.paycomplete");
        }else{
            return redirect("/");
        }
       
    }    


    public function ProductOrder($request){


        if(Cart::count() > 0){
            $customerId         = Customer::insertGetId([
                'name'          => $request->name,
                'phone'         => $request->phone,
                'email'         => $request->email,
                'address'       => $request->address,
                'trackingid'    => date("dmy")."-".substr(random_int(100000000, 900000000), 0,5),
                'quantity'      => Cart::count(),
                'subtotal'      => Cart::subtotal(),
                'payment'       => 1,
                'paymethod'     => "Stripe",
                'tax'           => Cart::tax(),
                'total'         => Cart::total(),
                'created_at'    => date("Y-m-d h:m:s")
            ]);
    
            $cartData = Cart::content();
            foreach($cartData as $item){
                $order                  = new Order();
                $order->customer_id     = $customerId;
                $order->product_id      = $item->id;
                $order->name            = $item->name;
                $order->slug            = $item->options->slug;
                $order->qty             = $item->qty;
                $order->price           = $item->price;
                $order->image           = $item->options->image;
                $order->design          = $item->options->design;
                $order->color           = $item->options->color;
                $order->color_code      = $item->options->color_code;
                $order->size            = $item->options->size;
                $order->tax             = $item->tax;
                $order->shipping        = 0.75;
                $order->save();

                $pdtSize = ProductSize::where('product_id',$item->id)->where('product_color_id',$item->options->color_id)->where('size_id',$item->options->size_id)->first();
                $pdtSize->stock         = $item->options->total_qty;
                $pdtSize->save();
            }
    
            if($order){
                Cart::destroy();
                $customer = Customer::where('id', $customerId)->first();
                Mail::to($request->email)->send(new customerMail($customer));
                Mail::to(env('COMPANY_MAIL'))->send(new companyMail($customer));
                return [
                    'customer'      => $customer,
                    'status'        => 'success',
                    'message'       => 'Product Order Successfully!'
                ];

            }else {
                return [
                        'status' => 'error',
                        'message' => 'Something Wrong!'
                    ];
            }
        }
    }

}
