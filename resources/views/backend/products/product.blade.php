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
                            <span>Product list</span>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add product</button>
                        </h4>

                        <hr>


    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Category</th>
                <th>Design</th>
                <th>Total Stock</th>
                <th>Published</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($products) && $products != null)

                @foreach($products as $data)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{substr($data->name, 0, 20)}}</td>
                        <td>{{$data?->category?->name}}</td>
                        <td>{{$data?->neck?->name}}</td>
                        <td>
                            @php
                                $sum = 0;
                            @endphp
                            @foreach($data->color->size as $item)
                                @php
                                $sum = $sum + (Int)$item->stock
                                @endphp
                            @endforeach
                            {{ $sum }}

                        </td>
                        <td>
                            @if($data->status == 1)
                                <span class="badge text-bg-success">Publish</span>
                            @else
                                <span class="badge text-bg-danger">Unpublish</span>
                            @endif
                        </td>
                        <td>
                            @if(isset($data->thumbnail))
                                <img src="{{asset($data->thumbnail)}}" height="50">
                            @else
                                <span>N/A</span>
                            @endif
                        </td>
                        <td>

        <a class="btn btn-sm btn-primary" onclick="update({{$data->id}})" href=""><i class="fa fa-edit"></i></a>

        <a class="btn btn-sm btn-primary" href="{{ route('product.details', $data->slug) }}" target="_blank"><i class="fa fa-eye"></i></a>

        <a onclick="return confirm('Are you sure Delete?')" href="{{Route('product.productdelete', $data->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>

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



<!-- Insert Modal Start-->
    @include("backend.products.insertform")
<!-- Insert Modal End-->


<!-- Update Modal Start-->
    @include("backend.products.update")
<!-- Update Modal End-->







@endsection


@section('admin.scripts')
<!-- <script src="{{ asset('assets/backend/js/drag-drop.js') }}" type="text/javascript"></script> -->


<!-- For Product update -->

<script type="text/javascript">


    /*For update data show */

    function update(id){

        $(".emptyClass").html("");
        event.preventDefault();
        var myModal = new bootstrap.Modal(document.getElementById('staticBackdropUpdate'), {
          keyboard: false
        });
        myModal.show();
        $.ajax({
            url : "{{Route('product.editproduct')}}",
            method: "get",
            data : {
                "id" : id //Product Id
            },
            beforeSend : function(){
                $(document).find(".form-text").text("");
            },
            success: function(response){
                if(response.status == "update"){
                    $("#id").val(response.product.id);
                    $("#name").val(response.product.name);
                    $("#category_id").val(response.product.category_id);
                    $("#neck_id").val(response.product.neck_id);
                    $("#metadescription").val(response.product.metadescription);
                    CKEDITOR.instances['descriptionUpdate'].setData(response.product.description);
                    $("#metatitle").val(response.product.metatitle);
                    $("#tags").val(response.product.tags);
                    $("#status").val(response.product.status);
                    $(".form-check-input").attr("checked", false);
                    $.each(response.colors, function(key, value){
                        $("#chubox"+value.color_id).attr("checked", true);
                    });
                }
    $('.get_static_color:checked').each(function() {
        var color_id = $(this).val();
        $.ajax({
            url : "{{Route('getcolorwishdata.color_wish_data')}}",
            method: "get",
            data : {
                "color_id"      : color_id,
                "product_id"    : id
            },
            success: function(getColorwishData){
                var storeData   = "";
                var remov       = "";
                $.each(getColorwishData.data, function(key, values){
                    if(key == 0){
                        remov = `<button type="button" onclick="addMore(${color_id})" class="btn btn-primary">+</button>`
                    }else{
                        remov = `<button type="button" onclick="remove(this)" class="btn btn-danger remove">X</button>`
                    }
                    storeData += `
                    <div class="form-group my-2 d-flex column-gap-2 w-100" id="setUpdateData${color_id}">
                    <select class="form-control-inline" name="size[${color_id}][]" onchange="mutilecheck(${color_id}, this.value, this)" data-old="" value="" required>
                        <option value="">~Size</option>
                        @if($sizes)
                            @foreach($sizes as $size) 
                                <option value="{{$size->id}}" ${'{{$size->id}}' == values.size_id ? 'selected' : ''}>{{$size->name}}</option>
                            @endforeach
                        @endif
                    </select>
                    <input type="text" name="price[${color_id}][]" class="form-control-inline" value="${values.price}" placeholder=" Price *" style="width: 160px" min="1" required>
                    <input type="number" name="disprice[${color_id}][]" class="form-control-inline" placeholder=" Discount price *" style="max-width: 160px" min="1" required value="${values.dis_price}">
                    <input type="number" name="stock[${color_id}][]" class="form-control-inline" placeholder=" Stock *" style="max-width: 150px" value="${values.stock}" min="1" required> ${remov} </div>`;
                    $("#selectData_"+color_id+"_"+values.size_id).val(values.size_id);

                });
                sizeColorRow(storeData);
            }
        });



        function sizeColorRow(getResponse){
            var getName = $("#chubox"+color_id).attr('data-type');
            $("#colorwishup_"+color_id).html(`<hr>
                <span class="mx-2">${getName} sss</span>
                <input type="hidden" name="color_id[]" value="${color_id}">
                <input type="file" name="image[]" class="form-control-inline d-none">
                <div id="append${color_id}">
                        ${getResponse}
                </div>
                <hr>`);
        }
    });
            }
        });
    }

    function colorwish_update(id){

        if($("#chubox"+id).prop('checked')){
           var getName = $("#chubox"+id).attr('data-type');
                $("#colorwishup_"+id).html(`<hr>
                    <span class="mx-2">${getName}</span>
                    <input type="hidden" name="color_id[]" value="${id}">
                    <input type="file" name="image[]" class="form-control-inline d-none">
                        <div id="append${id}">
                            <div class="form-group my-2 d-flex column-gap-2 w-100">
                                <select class="form-control-inline" name="size[${id}][]" onchange="mutilecheck(${id}, this.value, this)" data-old="" required>
                                    <option value="">~Size</option>
                                @if($sizes)
                                    @foreach($sizes as $size)
                                        <option value="{{$size->id}}">{{$size->name}}</option>
                                    @endforeach
                                @endif
                                </select>
                                <input type="text" name="price[${id}][]" class="form-control-inline" placeholder=" Price *" style="width: 160px" min="1" required>
                                <input type="number" name="disprice[${id}][]" class="form-control-inline" placeholder=" Discount price *" style="max-width: 160px" min="1" required>
                                <input type="number" name="stock[${id}][]" class="form-control-inline" placeholder=" Stock *" style="max-width: 150px" min="1" required>
                                <button type="button" onclick="addMore(${id})" class="btn btn-primary">+</button>
                            </div>
                        </div>
                        <hr>`);
            }else{
                $("#colorwishup_"+id).html("");
            }
       }

</script>

    <script type="text/javascript">
        let snum = 1;
       function colorwish(id){
        snum = 1;
        if($("#chbox"+id).prop('checked')){
           var getName = $("#chbox"+id).attr('data-type');
                // let randnum = Math.floor(Math.random() * (999 - 111 + 1) + 111);
                // let randnum1 = Math.floor(Math.random() * (55 - 11 + 1) + 11);
                let randnum = $('.default-price .price').val();
                let randnum1 = $('.default-price .discount-price').val();
                let stock = $('.default-price .stock').val();
                $("#colorwish_"+id).html(`<hr>
                    <span class="mx-2">${getName}</span>

                    <input type="hidden" name="color_id[]" value="${id}">

                    <input type="file" name="image[]" class="form-control-inline d-none">


                        <div id="append${id}">

                            <div class="form-group my-2 d-flex column-gap-2 w-100">
                                <select class="form-control-inline" name="size[${id}][]" onchange="mutilecheck(${id}, this.value, this)" data-old="" required>
                                    <option value="">~Size</option>
                                @if($sizes)
                                    @foreach($sizes as $size)
                                        <option value="{{$size->id}}" {{$size->id == 1 ? 'selected' : ''}}>{{$size->name}}</option>
                                    @endforeach
                                @endif
                                </select>

                                <input type="text" name="price[${id}][]" class="form-control-inline" placeholder=" Price *" style="width: 160px" min="1" value="${randnum}" required>

                                <input type="number" name="disprice[${id}][]" class="form-control-inline" placeholder=" Discount price *" style="max-width: 160px" min="1" value="${randnum1}" required>

                                <input type="number" name="stock[${id}][]" class="form-control-inline" placeholder=" Stock *" style="max-width: 150px" min="1" value="${stock}" required>

                                <button type="button" onclick="addMore(${id})" class="btn btn-primary">+</button>

                            </div>
                        </div>
                        <hr>`);
            }else{
                $("#colorwish_"+id).html("");
            }
       }


       /*Insert + Update*/
       function addMore(id){
            // let randnums = Math.floor(Math.random() * (111 - 999 + 1) + 999);
            // let randnums1 = Math.floor(Math.random() * (55 - 11 + 1) + 11);
            let randnums = $('.default-price .price').val();
            let randnums1 = $('.default-price .discount-price').val();
            let stock = $('.default-price .stock').val();
            snum++
            $("#append"+id).append(`<div class="form-group my-2 d-flex column-gap-2 w-100">

                <select class="form-control-inline" name="size[${id}][]" data="size_${id}" onchange="mutilecheck(${id}, this.value, this)" data-old="" required>
                    <option value="">~Size</option>
                @if($sizes)
                    @foreach($sizes as $size)
                        <option value="{{$size->id}}" ${ snum == '{{$size->id}}' ? 'selected' : '' }>{{$size->name}}</option>
                    @endforeach
                @endif
                </select>

                <input type="number" name="price[${id}][]" class="form-control-inline" placeholder=" Price *" style="width: 160px" min="1" value="${randnums}" required>

                <input type="number" name="disprice[${id}][]" class="form-control-inline" placeholder=" Discount price *" style="max-width: 160px" min="1" value="${randnums1}" required>

                <input type="number" name="stock[${id}][]" class="form-control-inline" placeholder=" Stock *" style="max-width: 150px" min="1" value="${stock}" required>


                <button type="button" onclick="remove(this)" class="btn btn-danger remove">X</button>

            </div>`);
       }

       /*Insert + Update*/
       function remove(thisResp){
            $(thisResp).parent().remove();
       }

        /*Insert + Update*/
       function mutilecheck(data, getValue, self){
            var count   = $("."+data+getValue).length;
            var oldData = $(self).attr("data-old");
            if(getValue == ""){
                $("#check").removeClass(oldData);
            }else{
                if(count == 0){
                    $(self).attr("data-old", data+getValue);
                    $("#check").addClass(data+getValue);
                    $("#check").removeClass(oldData);
                }else{
                    alert("Already added!");
                    $(self).val("");
                }
            }
       }
    </script>


<script type="text/javascript">

// For insert
$("#myForm").submit(function(){
    for(instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
    }
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


// For update
$("#myFormUpdate").submit(function(){
    
    for(instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
    }

    var form = $("#myFormUpdate").get(0);
        $.ajax({
            url : "{{Route('product.updateproduct')}}",
            method: "post",
            data : new FormData(form),
            contentType : false,
            processData : false,
            beforeSend : function(){
                $(document).find(".form-text").text("");
            },
            success: function(response){

                console.log(response);

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

    </script>
    <script type="text/javascript">
        $('#example').DataTable();
    </script>
@endsection
