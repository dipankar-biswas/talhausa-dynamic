@extends('frontend.layouts.master')
@section('title','Product Cart | Talha USA Online E-Commerce Business.')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/product.css') }}">
@endsection



@section('content')
    <!-- Product Cart Code Start -->
    <section class="cart-products section-padding">
        <div class="container">
            <div class="heading mb-5">
                <h1 class="title text-body fw-bold">Your Cart</h1>
                {{-- <p class="text-secondary">There are <span class="text-success fw-bold">{{ \Cart::count() }}</span> products in your cart</p> --}}
            </div>
            
            <div class="cart-lists table-responsive">
                <table class="table border mb-0">
                    <thead class="table-light">
                        <tr>
                            <th scope="col" class="py-4"><input class="form-check-input" type="checkbox" value="" id=""></th>
                            <th scope="col" colspan="2" class="py-4">Product</th>
                            <th scope="col" class="py-4">Unit Price</th>
                            <th scope="col" class="py-4">Quantity</th>
                            <th scope="col" class="py-4">Subtotal</th>
                            <th scope="col" class="py-4">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse(\Cart::content() as $item)
                        <tr>
                            <td>
                                <input type="hidden" class="itemRowId" value="{{$item->rowId}}">
                                <input class="form-check-input" type="checkbox" value="" id="">
                            </td>
                            <td  width="105px">
                                <div class="image">
                                    <a href="{{ route('product.details',$item->options->slug) }}" class="link">
                                        <img class="border rounded-2" src="{{ asset($item->options->image) }}" alt="Product" width="90px" height="90px" style="background: {{ asset($item->options->color_code) }}">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h2 class="title fs-5"><a href="{{ route('product.details',$item->options->slug) }}" class="text-hover text-reset">{{ $item->name }} --{{ $item->options->size }}--{{ $item->options->color }}</a></h2>
                            </td>
                            <td>
                                <div class="price">
                                    <span class="new fs-3 text-active1"><span>$</span><span class="num">{{ $item->price }}</span></span>
                                </div>
                            </td>
                            <td style="width: 150px;">
                                <div class="quantity" style="width: 110px;">
                                    <div class="input-group qty">
                                        <button type="button" class="input-group-text cursor-pointer minus" data-rowId="{{ $item->rowId }}" data-pid="{{ $item->id }}" data-cid="{{ $item->options->color_id }}" data-sid="{{ $item->options->size_id }}">-</button>
                                        <input type="text" class="form-control text-center qtyNum" value="{{ $item->qty }}" min="1" max="100" {{ $item->qty <= 0 ? 'readonly' : '' }}>
                                        <button type="button" class="input-group-text cursor-pointer plus work" data-rowId="{{ $item->rowId }}" data-pid="{{ $item->id }}" data-cid="{{ $item->options->color_id }}" data-sid="{{ $item->options->size_id }}">+</button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="subtotal"><span class="new fs-3 text-active1"><span>$</span><span class="num">{{ $item->subtotal }}</span></span></div>
                            </td>
                            <td>
                                <a href="{{ route('cart.pdtremove',$item->rowId) }}" class="action pdt-remove text-active1 text-hover cursor-pointer d-inline-block fs-5" data-id="{{ $item->rowId }}"><i class="fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr>
                        @empty
                            <tr><td class="text-center" colspan="7">Product Not Found!!</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5">
                    <!-- <div class="apply-coupon rounded-2">
                        <h1 class="title text-body">Apply Coupon</h1>
                        <p class="text-secondary fs-5">Using A Promo Code?</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Enter Your Coupon" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <button type="button" class="input-group-text custom-btn fw-bold px-5 py-3" id="basic-addon2">Apply</button>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-7">
                    <div class="cart-totals">
                        <div class="subtotal pt-4">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="cart_subtotal_label">
                                                <h6 class="text-muted fw-bold">Subtotal</h6>
                                            </td>
                                            <td class="cart_subtotal_amount">
                                                <h4 class="text-brand text-end"><span>$</span><span class="num">{{ \Cart::subtotal() }}</span></h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="col" colspan="2">
                                                <div class="divider-2 mt-10 mb-10"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cart_total_label">
                                                <h6 class="text-muted fw-bold">Shipping and Handling</h6>
                                            </td>
                                            <td class="cart_shipping_amount">
                                                <h5 class="text-heading text-end"><span>$</span><span class="num">{{ \Cart::count() == 0 ? number_format(0,2,'.','') : number_format(\Cart::count() == 1 ? 15.00 : ((\Cart::count() - 1) * 0.75) + 15.00,2,'.','') }}</span> </h5>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td class="cart_total_label">
                                                <h6 class="text-muted fw-bold">Tax</h6>
                                            </td>
                                            <td class="cart_total_amount">
                                                <h5 class="text-heading text-end">0.00</h5>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td scope="col" colspan="2">
                                                <div class="divider-2 mt-10 mb-10"></div>
                                            </td>
                                        </tr>
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
                            <a href="#" class="custom-btn proceed-to-checkout d-flex justify-content-center align-items-center fw-bold text-center rounded-2 px-3 py-3 fs-5">
                                <span class="img me-2 d-none">
                                    <img src="{{ asset('frontend/assets/images/loader.gif') }}" alt="Loading" width="18px">
                                </span>
                                <span>Proceed To CheckOut</span>
                            </a>
                            <!-- <a href="{{ route('product.checkout') }}" class="custom-btn proceed-to-checkout d-block fw-bold text-center rounded-2 px-3 py-3 fs-5">Proceed To CheckOut</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Cart Code End -->
@endsection



@section('scripts')

@endsection