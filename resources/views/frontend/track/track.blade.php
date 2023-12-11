@extends('frontend.layouts.master')
@section('title','Product Traking | Talha USA Online E-Commerce Business.')

@section('stylesheet')

@endsection



@section('content')

    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 center">
                    <div class="content shadow-sm rounded-3 px-4 py-5 mb-5">
                        <div class="form-wrap">
                            <div class="heading mb-5">
                                <h1 class="title text-body fw-bold">Track your order</h1>
                            </div>


                            <form class="mb-5 pb-5" action="" method="get">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-4">

        <input type="hidden" value="true" name="search">

    <input type="text" class="form-control fs-5 py-3" placeholder="Enter you tracking ID" value="{{isset($data) ? $data : ''}}" name="trackingid">



        @if(isset($msg) && $msg != "")
            <small class="form-text">{{$msg}}</small>
        @endif

                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="custom-btn rounded-3 py-3 px-5 fw-bold">Track</button>
                            </form>

                    @if(isset($trackingdata) && $trackingdata != null)

                        <table class="table table-striped">
                            <tr>
                                <td width="15%">Name</td>
                                <td>:</td>
                                <td>{{$trackingdata->name}}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>:</td>
                                <td>{{$trackingdata->address}}</td>
                            </tr>

                            <tr>
                                <td>Payment Method</td>
                                <td>:</td>
                                <td>{{$trackingdata->paymethod}}</td>
                            </tr>

                            <tr>
                                <td>Payment Status</td>
                                <td>:</td>
                                <td>{!! $trackingdata->payment == 1 ? '<span class="badge bg-success rounded-pill">Paid</span>' : 'Unpaid' !!}</td>
                            </tr>

                            <tr style="border-top: 2px solid #ecd7d7 !important;border-bottom: 2px solid #ecd7d7 !important;">
                                <td>Order Date</td>
                                <td>:</td>
                                <td>{{date("h:m:s a d-F-Y", strtotime($trackingdata->created_at))}}</td>
                            </tr>

                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td>
                                    @if($trackingdata->orderStatus == 0)
                                        <span class="badge bg-danger rounded-pill">Pending</span>
                                    @elseif($trackingdata->orderStatus == 1)
                                        <span class="badge bg-warning rounded-pill">Prepare to Delivery</span>
                                    @elseif($trackingdata->orderStatus == 2)
                                        <span class="badge bg-success rounded-pill">Delivered</span>
                                    @endif
                                </td>
                            </tr>

                        </table>
                        <hr>



            <table  class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th width="15%">Image</th>
                        <th width="20%">Product Name</th>                
                        <th>Price</th>
                        <th>Color</th>
                        <th>Size</th>
                        <th>Qty</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($trackingdata->orders) && $trackingdata->orders != null)

                        @foreach($trackingdata->orders as $data)
                            <tr>
                                <td>{{$loop->index + 1}}</td>
                                <td>
                                    <img src="{{asset($data->image)}}" style="background: {{$data->color_code}};" height="100px">
                                </td>
                                <td>{{$data->name}}</td>
                                <td>${{$data->price}}</td>
                                <td>{{$data->color}}</td>
                                <td>{{$data->size}}</td>
                                <td>{{$data->qty}}</td>
                                <td>{{$data->qty * $data->price}}</td>
                            </tr>
                        @endforeach

                            <tr style="border-top: 2px solid #d9cccc;">
                                <td colspan="6"></td>
                                <td>Sub Total</td>
                                <td>${{$trackingdata->subtotal}}</td>
                            </tr>
                            <tr>
                                <td colspan="6"></td>
                                <td>Total qty</td>
                                <td>{{$trackingdata->quantity}}</td>
                            </tr>
                            {{-- <tr>
                                <td colspan="6"></td>
                                <td>Tax</td>
                                <td>${{$trackingdata->tax}}</td>
                            </tr> --}}
                            <tr style="border-top: 2px solid #d9cccc;">
                                <td colspan="6"></td>
                                <td>Total</td>
                                <td>${{$trackingdata->total}}</td>
                            </tr>

                    @endif
                </tbody>
            </table>



                    @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



@section('scripts')

@endsection