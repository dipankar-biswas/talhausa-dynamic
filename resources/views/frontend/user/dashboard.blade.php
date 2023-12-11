@extends('frontend.layouts.master')
@section('title','My Dashboard | Talha USA Online E-Commerce Business.')

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
                            <h1 class="title text-body fw-bold">Hello Dipankar Biswas!</h1>
                            <p class="text-secondary">From your account dashboard. you can easily check & view your <a href="#">recent orders,</a></p>
                            <p class="text-secondary">manage your <a href="#">shipping and billing addresses</a> and <a href="#">edit your password and account details.</a></p>
                        </div>
                        <div class="row dash-overview mt-2 mb-5">
                            <div class="col-lg-4 col-md-6 col-12 my-3">
                                <div class="grid one">
                                    <h4>Products</h4>
                                    <p>Total Active Products</p>
                                    <h2>454</h2>
                                </div>
                            </div>
    
                            <div class="col-lg-4 col-md-6 col-12 my-3">
                                <div class="grid two">
                                    <h4>Stock-In</h4>
                                    <p>Total stock-in</p>
                                    <h2>854</h2>
                                </div>
                            </div>
    
                            <div class="col-lg-4 col-md-6 col-12 my-3">
                                <div class="grid three">
                                    <h4>Product-Out</h4>
                                    <p>Total stock-out</p>
                                    <h2>85</h2>
                                </div>
                            </div>
                            <!-- <div class="col-lg-3 col-md-6 col-12 my-3">
                                <div class="grid four">
                                    <h4>Users</h4>
                                    <p>Total Active Users</p>
                                    <h2>84</h2>
                                </div>
                            </div> -->
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