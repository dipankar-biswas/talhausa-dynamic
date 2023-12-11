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
                <li><span>size</span></li>
            </ul>
            @endsection
            <!-- Form inputs start -->
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title d-flex justify-content-between">
                            <span>Size list</span>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Size</button>
                        </h4>

                        <hr>


    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($size) && $size != null)
                @foreach($size as $data)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$data->name}}</td>
                        <td>
                            @if($data->status == 1)
                                <span class="badge text-bg-success">Active</span>
                            @else
                                <span class="badge text-bg-danger">Inactive</span>
                            @endif
                        </td>
                        <td>

                            <a class="btn btn-sm btn-primary" onclick="update({{$data->id}})" href=""><i class="fa fa-edit"></i></a>

                            <a onclick="return confirm('Are you sure Delete?')" href="{{Route('size.delete', $data->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>

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
        <div class="modal fade modal-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Size</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

                <form method="post" id="myForm">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Size name">
                        <small id="errname" class="form-text"></small>
                    </div>
                    <div class="mb-3">
                        <select class="form-control" name="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
              </div>
            </div>
          </div>
        </div>
<!-- Insert Modal End-->


<!-- Update Modal Start-->
        <div class="modal fade modal-lg" id="staticBackdropUpdate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Update Size</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

                <form method="post" id="myFormUpdate">
                    @csrf

                     <input type="hidden" name="id" id="id">

                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Size name">
                        <small id="erruname" class="form-text"></small>
                    </div>
                    <div class="mb-3">
                        <select class="form-control" name="status" id="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
              </div>
            </div>
          </div>
        </div>
<!-- Update Modal End-->







@endsection


@section('admin.scripts')
<!-- <script src="{{ asset('assets/backend/js/drag-drop.js') }}" type="text/javascript"></script> -->
    
    <script type="text/javascript">

/*For insert */
$("#myForm").submit(function(){

    var form = $("#myForm").get(0);

        $.ajax({
            url : "{{Route('size.insert')}}",
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
            url : "{{Route('size.update')}}",
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
        url : "{{Route('size.view')}}",
        method: "get",
        data : {
            "id" : id
        },
        beforeSend : function(){
            $(document).find(".form-text").text("");
        },
        success: function(response){
            console.log(response.status);
            if(response.status == "update"){
                $("#id").val(response.data.id);
                $("#name").val(response.data.name);
                $("#status").val(response.data.status);
            }
        }
    });
 }

    </script>



    <script type="text/javascript">
        $('#example').DataTable();
    </script>
@endsection
