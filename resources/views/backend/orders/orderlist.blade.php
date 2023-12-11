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
                            <span>Order list</span>
                        </h4>
                        <hr>


    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Tracking ID</th>
                <th>Order Status</th>
                <th>Payment Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($customer) && $customer != null)

                @foreach($customer as $data)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->trackingid}}</td>
                        <td>

                            @if($data->orderStatus == 0)
                                <span class="badge bg-danger rounded-pill">Pending</span>
                            @elseif($data->orderStatus == 1)
                                <span class="badge bg-info rounded-pill">Prepare to Delivery</span>
                            @elseif($data->orderStatus == 2)
                                <span class="badge bg-success rounded-pill">Delivered</span>
                            @endif

                        </td>
                        <td>
                            @if($data->payment == 0)
                                <span class="badge bg-danger rounded-pill">Unpaid</span>
                            @elseif($data->payment == 1)
                                <span class="badge bg-success rounded-pill">Paid</span>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{Route('get_all_order_Details.orderDetails', $data->id )}}"><i class="fa fa-eye"></i></a>

                            <a onclick="return confirm('Are you sure Delete?')" href="{{route('orderdelete.order_delete', $data->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>



                    </div>
                </div>
            </div>
            <!-- Form inputs end -->
                   
        </div>
    </div>
</div>


@endsection


@section('admin.scripts')
<!-- <script src="{{ asset('assets/backend/js/drag-drop.js') }}" type="text/javascript"></script> -->
    

    <script type="text/javascript">
        





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
