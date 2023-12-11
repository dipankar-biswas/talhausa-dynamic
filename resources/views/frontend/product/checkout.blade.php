@extends('frontend.layouts.master')
@section('title','Product Checkout | Talha USA Online E-Commerce Business.')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/product.css') }}">
@endsection



@section('content')
    <!-- Product Checkout Code Start -->
    <section class="checkout-products section-padding">
        <div class="container">
            <div class="heading mb-5">
                <h1 class="title text-body fw-bold">Your Checkout</h1>
                <p class="text-secondary">There are products in your cart</p>
            </div>
            {{--<form action="{{ route('product.order') }}" method="POST">--}}

            <form action="{{ route('pay.payment_payment') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-7">
                        <div class="heading mb-4">
                            <h4 class="title text-body fw-bold">Billing Details</h4>
                            <hr>
                        </div>
                        <div class="form-wrap">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <input type="text" name="name" class="form-control fs-5 py-3" placeholder="Full Name">
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <input type="text" name="phone" class="form-control fs-5 py-3" placeholder="Phone">
                                        @error('phone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <input type="email" name="email" class="form-control fs-5 py-3" placeholder="example@gmail.com">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <!-- <div class="mb-4">
                                <select name="state" class="form-select form-control fs-5 py-3" aria-label="Default select example">
                                    <option class="text-secondary" selected>Select State</option>
                                    <option value="1">California</option>
                                    <option value="2">Alaska</option>
                                    <option value="3">Florida</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <select  name="city" class="form-select form-control fs-5 py-3" aria-label="Default select example">
                                    <option class="text-secondary" selected>Select City</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div> -->
                            <div class="mb-4">
                                <textarea name="address" id="" rows="6" class="form-control fs-5 py-3" placeholder="Address"></textarea>
                                @error('address')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="shadow-sm rounded-3 px-3 py-4">
                            <div class="heading mb-4">
                                <h4 class="title text-body fw-bold">Your Order</h4>
                                <hr>
                            </div>

                            <div class="checkout-lists table-responsive">
                                <table class="table border mb-0">
                                    <tbody>
                                        @forelse(\Cart::content() as $item)
                                        <tr>
                                            <td  width="105px">
                                                <div class="image">
                                                    <a href="{{ route('product.details',$item->options->slug) }}" class="link">
                                                        <img class="border rounded-2" src="{{ asset($item->options->image) }}" alt="Product" width="90px" height="90px" style="background: {{ asset($item->options->color_code) }}">
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <h2 class="title fs-5"><a href="{{ route('product.details',$item->options->slug) }}" class="text-hover text-reset">Field Roast Chao Cheese Creamy Original</a></h2>
                                                <div class="color-list d-flex column-gap-4 mb-1 fs-6">
                                                    <div class="txt">Color : </div>
                                                    <ul class="colors">
                                                        <li class="color">{{ $item->options->color }}</li>
                                                    </ul>
                                                </div>
                                                <div class="size-list d-flex align-content-center column-gap-4 fs-6">
                                                    <div class="txt">Size : </div>
                                                    <ul class="sizes">
                                                        <li class="size">{{ $item->options->size }}</li>
                                                    </ul>
                                                </div>
                                                <div class="price-qty">
                                                    <div class="quantity text-secondary">${{ $item->price }} X {{ $item->qty }}</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="price">
                                                    <span class="new fs-3 text-active1">${{ $item->subtotal }}</span>
                                                    <!-- <span class="old fs-5 text-secondary text-decoration-line-through">$90.00</span> -->
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                            <tr><td class="text-center" colspan="4">Product Not Found!!</td></tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            <div class="cart-totals mb-5">
                                <div class="subtotal pt-4">
                                    <div class="table-responsive">
                                        <table class="table border">
                                            <tbody>
                                                <tr>
                                                    <td class="cart_total_label">
                                                        <h6 class="text-muted fw-bold">Subtotal</h6>
                                                    </td>
                                                    <td class="cart_total_amount">
                                                        <h4 class="text-brand text-end">${{ \Cart::subtotal() }}</h4>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="col" colspan="2">
                                                        <div class="divider-2 mt-10 mb-10"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="cart_total_label">
                                                        <h6 class="text-muted fw-bold">Shipping and handle</h6>
                                                    </td>
                                                    <td class="cart_shipping_amount">
                                                        <h5 class="text-heading text-end"><span>$</span><span class="num">{{ \Cart::count() == 0 ? number_format(0,2,'.','') : number_format(\Cart::count() == 1 ? 15.00 : ((\Cart::count() - 1) * 0.75) + 15.00,2,'.','') }}</span> </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="cart_total_label">
                                                        <h6 class="text-muted fw-bold">Tax</h6>
                                                    </td>
                                                    <td class="cart_shipping_amount">
                                                        <h5 class="text-heading text-end"><span>$</span><span class="num">0.00</span> </h5>
                                                    </td>
                                                </tr>
                                                {{-- <tr>
                                                    <td class="cart_total_label">
                                                        <h6 class="text-muted fw-bold">Estimate for</h6>
                                                    </td>
                                                    <td class="cart_total_amount">
                                                        <h5 class="text-heading text-end">United Kingdom </h5></td></tr> <tr>
                                                    <td scope="col" colspan="2">
                                                        <div class="divider-2 mt-10 mb-10"></div>
                                                    </td>
                                                </tr> --}}
                                                <tr>
                                                    <td class="cart_total_label">
                                                        <h6 class="text-muted fw-bold">Total</h6>
                                                    </td>
                                                    <td class="cart_total_amount">
                                                        @php
                                                            $total = \Cart::total();
                                                            $total = filter_var($total, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

                                                            $shipping = \Cart::count() == 0 ? number_format(0,2,'.','') : number_format(\Cart::count() == 1 ? 15.00 : ((\Cart::count() - 1) * 0.75) + 15.00,2,'.','');
                                                            $total_amount = $total + $shipping;
                                                        @endphp
                                                        <h4 class="text-brand text-end"><span>$</span><span class="num">{{ number_format($total_amount,2,'.') }}</span></h4>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="payment">
                                <div class="heading mb-2">
                                    <h4 class="title text-body fw-bold">Payment</h4>
                                    <hr>
                                </div>
                                <div class="lists">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">Direct Bank Transfer</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">Cash on delivery</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                        <label class="form-check-label" for="flexRadioDefault3">Online Getway</label>
                                    </div>
                                    <div class="payment-logo d-flex align-items-center mb-4">
                                        <a href="#" class="link me-2">
                                            <img src="{{ asset('frontend/assets/images/payment/payment-paypal.svg') }}" alt="Paypal" width="60px" height="30px">
                                        </a>
                                        <a href="#" class="link me-2">
                                            <img src="{{ asset('frontend/assets/images/payment/payment-visa.svg') }}" alt="Visa" width="60px" height="16px" class="d-block">
                                        </a>
                                        <a href="#" class="link me-2">
                                            <img src="{{ asset('frontend/assets/images/payment/payment-master.svg') }}" alt="Master" width="60px" height="20px" class="d-block">
                                        </a>
                                        <a href="#" class="link">
                                            <img src="{{ asset('frontend/assets/images/payment/payment-zapper.svg') }}" alt="Zapper" width="60px" height="30px">
                                        </a>
                                    </div>
                                </div>
                            </div> -->
                            <button type="submit" class="custom-btn d-block fw-bold text-center rounded-2 px-3 py-3 fs-5">Place an Order</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Product Checkout Code End -->

    @if (Session::has('orders'))

    

        <div class="alert-popup">
            <div class="overlay show">
                <!-- basic start -->
                <div class="popup-basic popup show">
                    <div class="body">
                        <div class="content">
                            <h1 class="text-success">Order Success.</h1>
                            <p>
                                Your Order:- Name: <strong>{{ Session::get('orders')->name }}, </strong>
                                Phone: <strong>{{ Session::get('orders')->phone }}</strong>, 
                                Order Qty: <strong>{{ Session::get('orders')->quantity }}</strong>, 
                                Subtotal: <strong>${{ Session::get('orders')->subtotal }}</strong>
                                <!-- Tax: <strong>${{ Session::get('orders')->tax }}</strong> -->
                                Shipping: <strong>$0.00</strong>
                                Total: <strong>${{ Session::get('orders')->total }}</strong>
                                Tracking ID: <strong>{{ Session::get('orders')->trackingid }}</strong>
                            </p>
                        </div>
                    </div>
                    <div class="foot">
                        <div class="actions">
                            <div class="loader"></div>
                            <button type="button" class="btn dismiss">Ok</button>
                        </div>
                    </div>
                </div>
                <!-- basic end -->
            </div>
        </div>
    @endif


@endsection



@section('scripts')

@endsection