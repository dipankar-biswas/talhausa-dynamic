@extends('frontend.layouts.master')
@section('title','My Address | Talha USA Online E-Commerce Business.')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/user-panel.css') }}">
@endsection



@section('content')
    <!-- Page Code Start -->
    <section class="user-panel section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('frontend.user.inc.user-aside')
                </div>
                <div class="col-lg-9">
                    <div class="dashboard">
                        <div class="heading mb-5">
                            <h1 class="title text-body fw-bold">Your Orders</h1>
                        </div>
                        <div class="row myaddress mt-2 mb-5">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="address billing">
                                        <h3 class="title fw-bold mb-4">Billing Address</h3>
                                        <ul class="lists">
                                            <li class="list text-body mb-2">3522 Interstate 75 Business Spur, New York</li>
                                            <li class="list text-body mb-2"><strong class="text-secondary">Email : </strong>example@gmail.com</li>
                                            <li class="list text-body mb-3"><strong class="text-secondary">Phone : </strong> 1.941.227.3333</li>
                                            <li class="list"><a href="#" class="action">Edit</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="address shipping">
                                        <h4 class="title fw-bold mb-4">Shipping Address</h4>
                                        <ul class="lists">
                                            <li class="list text-body mb-2">4299 Express Lane Sarasota, FL 34249 USA</li>
                                            <li class="list text-body mb-2"><strong class="text-secondary">Email : </strong>example@gmail.com</li>
                                            <li class="list text-body mb-3"><strong class="text-secondary">Phone : </strong> 1.941.227.4444</li>
                                            <li class="list"><a href="#" class="action">Edit</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Code End -->
@endsection



@section('scripts')

@endsection