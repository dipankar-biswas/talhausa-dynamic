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
                <li><span>Profile</span></li>
            </ul>
            @endsection
            <!-- Form inputs start -->
            <div class="col-lg-12 mt-4">              
                <div class="card m-auto mb-5 d-table w-75 shadow-sm border-0">
                    <div class="card-body">
                        <div class="ownerName mt-2">
                            <h5 class="m-0 ml-4">Edit Profile</h5>
                        </div>
                        <hr>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home"
                                role="tabpanel" aria-labelledby="home-tab">

                                @if (Session::has('message'))
                                    <h5 class="form-text text-danger text-center">
                                        {{ Session::get('message') }}</h5>
                                @endif

                                <form class="my-4" id="adminUserProfile" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $users->id }}">

                                    <div class="form-group mb-3">
                                        <label>Name *</label>
                                        <input type="text" name="name"
                                            class="form-control"
                                            value="{{ $users->name }}">
                                        <small id="errname" class="form-text"></small>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Email *</label>
                                        <input type="text" name="email"
                                            class="form-control"
                                            value="{{ $users->email }}">
                                        <small id="erremail" class="form-text"></small>
                                    </div>

                                    <button type="submit" class="btn">Save
                                        Change</button>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>

                
                <div class="card m-auto mb-3 d-table w-75 shadow-sm border-0">
                    <div class="card-body">
                        <div class="ownerName">
                            <h5 class="m-0 ml-4">Change Password</h5>
                        </div>
                        <hr>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home"
                                role="tabpanel" aria-labelledby="home-tab">

                                <form class="my-4" id="adminUserPassowrd" method="POST">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <label>Old Password *</label>
                                        <input type="password" name="oldpassword"
                                            class="form-control" placeholder="Password">
                                        <small id="erroldpassword"
                                            class="form-text text-danger"></small>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>New Password *</label>
                                        <input type="password" name="password"
                                            class="form-control" placeholder="Password">
                                        <small id="errpassword"
                                            class="form-text text-danger"></small>

                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Confirm Password *</label>
                                        <input type="password" name="repassword"
                                            class="form-control"
                                            placeholder="Confirm Password">
                                        <small id="errrepassword"
                                            class="form-text text-danger"></small>

                                    </div>

                                    <button type="submit" class="btn">Save
                                        Change</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form inputs end -->
                   
        </div>
    </div>
</div>


@endsection


@section('admin.scripts')

    <script type="text/javascript">
        // Customer setting Form Update
        $("#adminUserProfile").submit(function(){
        var form = $("#adminUserProfile").get(0);
        $.ajax({
            url : "{{ Route('profile.update') }}",
            method: "post",
            data : new FormData(form),
            contentType : false,
            processData : false,
            beforeSend : function(){
            $(document).find(".form-text").text("");
            },
            success: function(data){
                if(data.message == "error"){
                    $.each(data.data, function(key, value){
                        $("#err"+key).text(value).css("color","red");
                    });
                }
                if(data.status == "reload"){
                    window.location.href = "{{Route('profile')}}"
                }
            }
        });
        return false;
        });


        /*----Customer password update----*/
        
        $("#adminUserPassowrd").submit(function(){
        var form = $("#adminUserPassowrd").get(0);
        $.ajax({
            url : "{{ Route('password.change') }}",
            method: "post",
            data : new FormData(form),
            contentType : false,
            processData : false,
            beforeSend : function(){
            $(document).find(".form-text").text("");
            },
            success: function(data){
                if(data.message == "error"){
                    $.each(data.data, function(key, value){
                        $("#err"+key).text(value).css("color","red");
                    });
                }
                if(data.status == "reload"){
                    window.location.href = "{{Route('profile')}}"
                }
            }
        });
        return false;
        }); 
    </script>

@endsection
