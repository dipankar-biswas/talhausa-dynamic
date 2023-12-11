@extends('frontend.layouts.master')
@section('title','My Account Details | Talha USA Online E-Commerce Business.')

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
                            <h1 class="title text-body fw-bold">Account Details</h1>
                        </div>
                        <div class="row account-details mt-2 mb-5">
                            <div class="form-wrap">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <input type="text" class="form-control fs-5 py-3" placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <input type="text" class="form-control fs-5 py-3" placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <input type="text" class="form-control fs-5 py-3" placeholder="Username">
                                    </div>
                                    <div class="mb-4">
                                        <input type="email" class="form-control fs-5 py-3" placeholder="example@gmail.com">
                                    </div>
                                    <div class="mb-4">
                                        <input type="text" class="form-control fs-5 py-3" placeholder="Address">
                                    </div>
                                    <button type="button" class="custom-btn rounded-3 py-3 px-5 fw-bold">Save Change</button>
                                </form>
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