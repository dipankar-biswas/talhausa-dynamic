@extends('frontend.layouts.master')
@section('title','My Orders | Talha USA Online E-Commerce Business.')

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
                        <div class="row orders mt-2 mb-5">
                            <div class="table-responsive">
                                <table class="table border">
                                    <thead>
                                        <tr>
                                            <th scope="col">Order</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">#1357</td>
                                            <td>March 25, 2023</td>
                                            <td>Processing</td>
                                            <td>$125.00 for 2 item</td>
                                            <td><a href="#" class="action">View</a></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">#1356</td>
                                            <td>March 24, 2023</td>
                                            <td>Processing</td>
                                            <td>$25.00 for 1 item</td>
                                            <td><a href="#" class="action">View</a></td>
                                        </tr>
                                    </tbody>
                                </table>
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