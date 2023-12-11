<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\stripePaymentInfo;
use Session;
use Cart;

class stripeController extends Controller
{
    
    public function payment_payment(Request $request){

       $this->validate($request, [
            "name"              => "required",
            "phone"             => "required",
            "email"             => "required|email",
            "address"           => "required",
        ]);

       if(Cart::count() == 0){
            return redirect(route('product.cart'));
       }

        $itemData = array();
        foreach(Cart::content() as $data){
            $image = asset($data->options->image);
            array_push($itemData, [
                'price_data' => [
                    'currency'      => 'usd',
                    'product_data'  => ['name' => $data->name, 'images' => [$image]],
                    'unit_amount'   => ($data->price * 100),
                ],
                'quantity' => $data->qty,
            ]);
        }

        $customerData = [
            "name"      => $request->name,
            "phone"     => $request->phone,
            "email"     => $request->email,
            "address"   => $request->address,
            "cartItem"  => (\Cart::count() == 1 ? 15.00 : ((\Cart::count() - 1) * 0.75) + 15.00)
        ];

        $shipping = (\Cart::count() == 1 ? 15.00 : ((\Cart::count() - 1) * 0.75) + 15.00);

        //====================For Stripe Payment getway=====================
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $checkout_session = \Stripe\Checkout\Session::create([
            'shipping_options' => [
                [
                  'shipping_rate_data' => [
                    'type' => 'fixed_amount',
                    'fixed_amount' => [
                      'amount' => $shipping * 100,
                      'currency' => 'usd',
                    ],
                    'display_name' => 'Delivery'
                  ],
                ],
        ],
          'line_items'  => $itemData,
          'mode'        => 'payment',
          'success_url' => Route("success.success_payment", $customerData, true)."&ssMSG={CHECKOUT_SESSION_ID}",
          'cancel_url'  => Route("cancel.cancel_payment"),
        ]);
        //====================For Stripe Payment getway=====================
        return redirect($checkout_session->url);
    }

    
    public function success_payment(Request $request){
      
        $customerData = (new OrderController())->ProductOrder($request);
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $session    = \Stripe\Checkout\Session::retrieve($request->ssMSG);

        $SPI                    = new stripePaymentInfo();
        $SPI->name              = isset($session->customer_details->name) ? $session->customer_details->name : null;
        $SPI->customer_id       = $customerData['customer']->id;
        $SPI->email             = isset($session->customer_details->email) ? $session->customer_details->email : null;
        $SPI->phone             = isset($session->customer_details->phone) ? $session->customer_details->phone : null;

        $address = [
            "city" => isset($session->customer_details->address->city) ? $session->customer_details->address->city : null,
            "country" => isset($session->customer_details->address->country) ? $session->customer_details->address->country : null,
            "line1" => isset($session->customer_details->address->line1) ? $session->customer_details->address->line1 : null,
            "line2" => isset($session->customer_details->address->line2) ? $session->customer_details->address->line2 : null,
            "postal_code" => isset($session->customer_details->address->postal_code) ? $session->customer_details->address->postal_code : null,
            "state" => isset($session->customer_details->address->state) ? $session->customer_details->address->state : null,
        ];

        $SPI->address = json_encode($address);
        $SPI->save();
        return redirect(Route("ordercomplete.ordercomplete"))->with("payment", [
            "payment" => true,
            "customer" => $customerData['customer'],
            "cartItem" => $request->cartItem
        ]);
        
    }

    public function cancel_payment(){
        Cart::destroy();
        return redirect("/");
    }

}
