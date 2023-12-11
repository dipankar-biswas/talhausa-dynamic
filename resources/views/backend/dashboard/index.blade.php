@extends('backend.layouts.master')

@section('admin.content')
<style type="text/css">
    .color-box{
        width: 24px;
        height: 24px;
        border-radius: 50%;
        display: inline-block;
    }
</style>
<div class="layout-content">
    <div class="page-content">
        
        <div class="row">
            <div class="col-md-6">
                @if(isset($colors) && $colors != null)
                        <div class="card">
                            <div class="card-body">
                               <p class="fs-5">Color List</p>
                               <hr>
                                <div class="d-flex flex-wrap column-gap-4 row-gap-4">
                                    @foreach($colors as $color)
                                        <div class="d-flex align-items-center column-gap-2">
                                            <span class="color-box" style="background:{{$color->code}}"></span>
                                            <p class="m-0">{{$color->name}}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                @endif

                <div class="card mt-4">
                    <div class="card-body">
                       <p class="fs-5">Order Information</p>
                       <hr>
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-md-6 my-2">
                                            <span>Total Orders : {{isset($OrderTotal) ? $OrderTotal : 0}} </span>
                                        </div>

                                        <div class="col-md-6 my-2">
                                            <span>Total Pending : {{isset($OrderPending) ? $OrderPending : 0}} </span>
                                        </div>

                                        <div class="col-md-6 my-2">
                                            <span>Total Confirm : {{isset($OrderConfirm) ? $OrderConfirm : 0}} </span>
                                        </div>

                                        <div class="col-md-6 my-2">
                                            <span>Total Delivered : {{isset($OrderDelivered) ? $OrderDelivered : 0}} </span>
                                        </div>

                                    </div>
                                    <hr>
                                    @if(App\Models\Customer::count() > 0)

                                        <table class="table table-responsive-sm">
                                            <tr>
                                                <td>SL</td>
                                                <td>Name</td>
                                                <td>Email</td>
                                                <td>Phone</td>
                                            </tr>
                                            
                                            @foreach(App\Models\Customer::orderby("id","DESC")->limit(5)->get() as $customerData)
                                                <tr>
                                                    <td>{{$loop->index + 1}}</td>
                                                    <td>{{$customerData->name}}</td>
                                                    <td>{{$customerData->email}}</td>
                                                    <td>{{$customerData->phone}}</td>
                                                </tr>
                                            @endforeach
                                        
                                        </table>

                                    @endif



                                </div>
                            </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                       <p class="fs-5">Product List</p>
                       <hr>
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-md-6 my-2">
                                            <span>Total Product : {{isset($productCount) ? $productCount : 0}} </span>
                                        </div>
                                        <hr>
                                        @if(App\Models\product::count() > 0)

                                            <table class="table table-responsive-sm">
                                                <tr>
                                                    <td>SL</td>
                                                    <td>Name</td>
                                                </tr>
                                                
                                                @foreach(App\Models\product::orderby("id","DESC")->limit(5)->get() as $productData)
                                                    <tr>
                                                        <td>{{$loop->index + 1}}</td>
                                                        <td>{{$productData->name}}</td>
                                                    </tr>
                                                @endforeach
                                            
                                            </table>

                                        @endif
                                    </div>

                                </div>
                            </div>
                    </div>
                </div>

            </div>   



            <!-- Right Part -->
            <div class="col-md-6">
                @if(isset($sizes) && $sizes != null)
                        <div class="card">
                            <div class="card-body">
                               <p class="fs-5">Size List</p>
                               <hr>
                                <div class="d-flex flex-wrap column-gap-4 row-gap-4">
                                    @foreach($sizes as $size)
                                        <div class="d-flex align-items-center column-gap-2">
                                            <p class="m-0">{{$size->name}}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                @endif


                <div class="card mt-4">
                    <div class="card-body">
                       <p class="fs-5">Category List</p>
                       <hr>
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-md-6 my-2">
                                            <span>Total Category : {{isset($category) ? $category : 0}} </span>
                                        </div>
                                        <hr>
                            @if(isset($categoresData) && $categoresData != null)
                                <div class="d-flex flex-wrap column-gap-4 row-gap-4">
                                    @foreach($categoresData as $categorey)
                                        <div class="d-flex align-items-center column-gap-2">
                                            <p class="m-0">{{$categorey->name}}</p>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                                    </div>

                                </div>
                            </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                       <p class="fs-5">User List</p>
                       <hr>
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-md-12 my-2">
                                            <span>Total User : {{isset($totalUser) ? $totalUser : 0}} </span>
                                        </div>

                                        <div class="col-md-6 my-2">
                                            <span>Active User : {{isset($UsersActive) ? $UsersActive : 0}} </span>
                                        </div>

                                        <div class="col-md-6 my-2">
                                            <span>Inactive User : {{isset($UsersInactive) ? $UsersInactive : 0}} </span>
                                        </div>

                                        <hr>

                                        @if(App\Models\User::count() > 0)

                                            <table class="table table-responsive-sm">
                                                <tr>
                                                    <td>SL</td>
                                                    <td>Name</td>
                                                    <td>E-mail</td>
                                                </tr>
                                                
                                                @foreach(App\Models\User::orderby("id","DESC")->limit(5)->get() as $userData)
                                                    <tr>
                                                        <td>{{$loop->index + 1}}</td>
                                                        <td>{{$userData->name}}</td>
                                                        <td>{{$userData->email}}</td>
                                                    </tr>
                                                @endforeach
                                            
                                            </table>

                                        @endif
                                    </div>

                                </div>
                            </div>
                    </div>
                </div>

            </div>
        </div>





    </div>
</div>
@endsection