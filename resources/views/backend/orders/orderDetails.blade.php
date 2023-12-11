@extends('backend.layouts.master')

@section('admin.styles')

@endsection

@section('admin.content')
<div class="layout-content">
    <div class="page-content">
        <div class="row">
           
            @section('breadcrumbs')
            <ul class="breadcrumbs pull-left">
                <li><a href="{{ url('/') }}">Dashboard</a></li>
                <li><span>brand</span></li>
            </ul>
            @endsection
            <!-- Form inputs start -->
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title d-flex justify-content-between">
                            <span>{{$customer->name}}'s order list</span>
                            <div>
                                @if($customer->orderStatus == 0)
                                    <a href="{{Route('order_confirm.orderconfirm', $customer->id)}}" onclick="return confirm('Are you sure Order Confirm?')" class="btn btn-danger">Order Confirm</a> 
                                @elseif($customer->orderStatus == 1)
                                    <a href="{{Route('orderdelivery.order_delivery', $customer->id)}}" onclick="return confirm('Are you sure Order Delivery?')" class="btn btn-info">Order Delivery</a>
                                @elseif($customer->orderStatus == 2)
                                    <button class="btn btn-success">Delivered</button>
                                @endif

                                <button class="btn btn-success btn-disabled" onclick="printDiv('invoice_wrapper')">Print</button>
                            </div>
                        </h4>
                        <hr>

                        <table class="table table-striped">
                            <tr>
                                <td width="10%">Name</td>
                                <td>:</td>
                                <td>{{$customer->name}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{$customer->email}}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>:</td>
                                <td>{{$customer->phone}}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>:</td>
                                <td>{{$customer->address}}</td>
                            </tr>

                            <tr>
                                <td>Payment Method</td>
                                <td>:</td>
                                <td>{{$customer->paymethod}}</td>
                            </tr>

                            <tr>
                                <td>Payment Status</td>
                                <td>:</td>
                                <td>{{$customer->payment == 1 ? 'Paid' : 'Unpaid'}}</td>
                            </tr>

                            <tr style="border-top: 2px solid #ecd7d7 !important;border-bottom: 2px solid #ecd7d7 !important;">
                                <td>Order Date</td>
                                <td>:</td>
                                <td>{{date("h:m:s a d-F-Y", strtotime($customer->created_at))}}</td>
                            </tr>
                        </table>

                        <hr>
                            <p>Payment Info:</p>
                        <hr>
                        <table class="table table-striped">
                            

                            <tr>
                                <td width="10%">Card Owner</td>
                                <td>:</td>
                                <td>{{$customer->cartInfo->name}}</td>
                            </tr>

                            <tr>
                                <td width="10%">Email Address:</td>
                                <td>:</td>
                                <td>{{$customer->cartInfo->email}}</td>
                            </tr><tr>
                                <td width="10%">Phone Number</td>
                                <td>:</td>
                                <td>{{$customer->cartInfo->phone}}</td>
                            </tr>
                            <tr>
                                <td width="10%">Address</td>
                                <td>:</td>
                                <td>
                                    @foreach(json_decode($customer->cartInfo->address) as $key => $value)
                                        @if(isset($value))
                                            {{ucwords($key)." : ".$value.", "}}
                                        @else
                                            {{ucwords($key)." : ---, "}}
                                        @endif
                                        
                                    @endforeach
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
                                @if(isset($customer->orders) && $customer->orders != null)

                                    @foreach($customer->orders as $data)
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
                                            <td>${{$customer->subtotal}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6"></td>
                                            <td>Total qty</td>
                                            <td>{{$customer->quantity}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6"></td>
                                            <td>Tax</td>
                                            <td>${{$customer->tax}}</td>
                                        </tr>
                                        <tr style="border-top: 2px solid #d9cccc;">
                                            <td colspan="6"></td>
                                            <td>Total</td>
                                            <td>${{$customer->total}}</td>
                                        </tr>

                                @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <!-- Form inputs end -->
                   
        </div>




        <!-- Invoice Code Start -->
        @php
        $setup = \App\Models\SiteSetup::where('id',1)->first();
        @endphp
        <section class="invoice section-padding d-none">
            <div class="container">
                <div class="invoice-inner bg-white">
                    <div class="invoice-info shadow-sm px-4 py-5 bg-white" id="invoice_wrapper" style="back">
                        <div class="invoice-header pb-4 border-bottom mb-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-5">
                                    <div class="invoice-numb">
                                        <h4 class="invoice-header">Tracking ID: <span class="text-brand">{{ $customer->trackingid }}</span></h4>
                                        <h6 class="">Order Date: {{date("d-F-Y", strtotime($customer->created_at))}}</h6>
                                        <h6 class="">Time: {{date("h:m:s a", strtotime($customer->created_at))}}</h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-7">
                                    <div class="invoice-name text-end">
                                        <div class="logo">
                                            <a href="index.html"><img src="{{ asset('frontend/assets/images/Talha Usa Logo2.png') }}" alt="logo" width="260px" /></a>
                                            {{--<p class="text-secondary">{{ $setup->address }}</p>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-top pb-4 border-bottom mb-4">
                            <div class="row" style="">
                                <div class="col-lg-9 col-md-6 col-sm-6 col-6">
                                    <div class="invoice-number">
                                        <h4 class="invoice-title">Invoice To</h4>
                                        <p class="invoice-addr">
                                            <strong>Talha USA</strong> <br />
                                            {{ $setup->email }} <br />
                                            {{ $setup->phone }}, <br />
                                            {{ $setup->address }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                    <div class="invoice-number">
                                        <h4 class="invoice-title">Bill To</h4>
                                        <p class="invoice-addr">
                                            <strong>{{$customer->name}}</strong> <br />
                                            {{$customer->email}} <br />
                                            {{$customer->phone}} <br />
                                            {{$customer->address}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row mt-2">
                                <div class="col-lg-9 col-md-6 col-sm-6 col-6">
                                    <h4 class="invoice-title">Due Date:</h4>
                                    <p class="invoice-from">30 November 2022</p>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                    <h4 class="invoice-title">Payment Method</h4>
                                    <p class="invoice-from">Via Paypal</p>
                                </div>
                            </div> -->
                        </div>
                        <div class="invoice-center">
                            <div class="table-responsive">
                                <table class="table table-striped invoice-table">
                                    <thead class="bg-active">
                                        <tr>
                                            <th>Item Item</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Color</th>
                                            <th class="text-center">Size</th>
                                            <th class="text-center">Qty</th>
                                            <th class="text-right">Total Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($customer->orders) && $customer->orders != null)
                                        @foreach($customer->orders as $data)
                                        <tr>
                                            <td>
                                                <div class="item-desc d-flex column-gap-2">
                                                    <img src="{{asset($data->image)}}" style="background: {{$data->color_code}};" width="70px">
                                                    <div class="name">{{ $data->name }}</div>
                                                </div>
                                            </td>
                                            <td class="text-center">${{ $data->price }}</td>
                                            <td class="text-center">{{ $data->color }}</td>
                                            <td class="text-center">{{ $data->size }}</td>
                                            <td class="text-center">{{ $data->qty }}</td>
                                            <td class="text-right">{{ $data->qty * $data->price }}</td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="5" class="text-end fw-bold">
                                                <span class="me-3">SubTotal : </span>
                                            </td>
                                            <td class="text-right fw-bold">${{$customer->subtotal}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="text-end fw-bold">
                                                <span class="me-3">Tax : </span>
                                            </td>
                                            <td class="text-right fw-bold">${{$customer->tax}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="text-end fw-bold">
                                                <span class="me-3">Grand Total : </span>
                                            </td>
                                            <td class="text-right fw-bold">${{$customer->total}}</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="invoice-bottom">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div>
                                        <h3 class="invoice-title">Important Note</h3>
                                        <ul class="important-notes-list">
                                            <li>All amounts shown on this invoice are in US dollars</li>
                                            <li>finance charge of 1.5% will be made on unpaid balances after 30 days.</li>
                                            <li>Once order done, money can't refund</li>
                                            <li>Delivery might delay due to some external dependency</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="text-end">
                                        <p class="mb-0">Thank you for your business</p>
                                        <p><strong>AliThemes JSC</strong></p>
                                        <div class="mobile-social-icon print-hide">
                                            <h6>Follow Us</h6>
                                            <!-- <a href="#"><img src="assets/imgs/theme/icons/icon-facebook-white.svg" alt="" /></a>
                                            <a href="#"><img src="assets/imgs/theme/icons/icon-twitter-white.svg" alt="" /></a>
                                            <a href="#"><img src="assets/imgs/theme/icons/icon-instagram-white.svg" alt="" /></a>
                                            <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest-white.svg" alt="" /></a>
                                            <a href="#"><img src="assets/imgs/theme/icons/icon-youtube-white.svg" alt="" /></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invoice-btn-section clearfix d-print-none">
                        <button type="button" onclick="printDiv('invoice_wrapper')" class="btn btn-lg btn-custom btn-print hover-up">  Print </button>
                        <button type="button" id="invoice_download_btn" class="btn btn-lg btn-custom btn-download hover-up">  Download </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Invoice Code End -->
    </div>
</div>

@endsection


@section('admin.scripts')

<script type="text/javascript">
// Print
function printDiv(divName) {
    let printContents = document.getElementById(divName).innerHTML;
    let originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
}
</script>



<script type="text/javascript">

    /*For insert */
    $("#myForm").submit(function(){

        var form = $("#myForm").get(0);

            $.ajax({
                url : "{{Route('product.productInsert')}}",
                method: "post",
                data : new FormData(form),
                contentType : false,
                processData : false,
                beforeSend : function(){
                    $(document).find(".form-text").text("");
                },
                success: function(response){

                    if(response.status == "validatorError"){
                        $.each(response.data, function(key, value){
                            $("#err"+key).text(value).css("color","red");
                        });
                    }


                    if(response.status == "validatorErrorExtra"){
                        $.each(response.data, function(key, value){
                            alert(value);
                        });
                    }

                    if(response.reload == true){
                        location.reload();
                        $("#myForm")[0].reset();
                    }
                }
            });
            return false;
    });


    /*For update */
    $("#myFormUpdate").submit(function(){

        var form = $("#myFormUpdate").get(0);

            $.ajax({
                url : "{{Route('product.editproduct')}}",
                method: "post",
                data : new FormData(form),
                contentType : false,
                processData : false,
                beforeSend : function(){
                    $(document).find(".form-text").text("");
                },
                success: function(response){
                    if(response.status == "validatorError"){
                        $.each(response.data, function(key, value){
                            $("#erru"+key).text(value).css("color","red");
                        });
                    }

                    if(response.status == "validatorErrorExtra"){
                        $.each(response.data, function(key, value){
                            alert(value);
                        });
                    }

                    if(response.reload == true){
                        location.reload();
                        $("#myForm")[0].reset();
                    }
                }
            });
            return false;
    });


    /*For update data show */
    function update(id){

        event.preventDefault();
        var myModal = new bootstrap.Modal(document.getElementById('staticBackdropUpdate'), {
        keyboard: false
        });
        myModal.show();
        $.ajax({
            url : "{{Route('product.editproduct')}}",
            method: "get",
            data : {
                "id" : id
            },
            beforeSend : function(){
                $(document).find(".form-text").text("");
            },
            success: function(response){

                if(response.status == "update"){

                    $("#id").val(response.product.id);
                    $("#name").val(response.product.name);
                    $("#category_id").val(response.product.category_id);

                    $(".form-check-input").attr("checked", false);

                    $.each(response.colors, function(key, value){
                        $("#chubox"+value.color_id).attr("checked", true);
                    });

                }

            }
        });
    }
 
</script>
<script type="text/javascript">
    $('#example').DataTable();
</script>
@endsection
