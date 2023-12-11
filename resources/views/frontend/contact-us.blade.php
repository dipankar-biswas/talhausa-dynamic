@extends('frontend.layouts.master')
@section('title', 'Contact Us | Talha USA Online E-Commerce Business.')

@section('stylesheet')

@endsection


@section('content')
@php
    $setup = \App\Models\SiteSetup::where('id',1)->first();
@endphp

    <section class="banner bg-light" style="background-image: url('{{ asset('frontend/assets/images/banner/banner.webp') }}');">
        <div class="heading text-center">
            <h1 class="title text-white fw-bold">Contact Us</h1>
            <p class="text-white">Address: @if(isset($setup->address)) {{ $setup->address }} @endif, Cell: @if(isset($setup->phone)) {{ $setup->phone }} @endif</p>
            <p class="text-white">Email: @if(isset($setup->email)) {{ $setup->email }} @endif</p>
        </div>
    </section>
    <section class="page-data">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 center">
                    <div class="content shadow-sm rounded-3 px-4 py-5 mb-5">
                        <div class="form-wrap">
                            <div class="heading mb-5">
                                <h1 class="title text-body fw-bold">Contact</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>

                        @if(Session::has("message"))
                            <div class="alert alert-success">
                                {{Session::get("message")}}
                            </div>
                        @endif

                        @if($errors->any())
                            <ul class="list-unstyled mb-2">
                                @foreach($errors->all() as $error)
                                    <li class="alert alert-danger">{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif

                            <form action="{{ route('contact.message') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-4">
                                            <input name="name" type="text" value="{{old('name')}}" class="form-control fs-5 py-3" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-4">
                                            <input name="phone" type="text" value="{{old('phone')}}" class="form-control fs-5 py-3" placeholder="Phone Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <input name="email" type="email" value="{{old('email')}}" class="form-control fs-5 py-3" placeholder="example@gmail.com">
                                </div>
                                <div class="mb-4">
                                    <textarea name="message" rows="6" class="form-control fs-5 py-3" placeholder="Enter Your Message">{{old('message')}}</textarea>
                                </div>
                                <div class="mb-4">
                                    <select name="contact_option" class="form-select form-control fs-5 py-3" aria-label="Default select example">
                                        <option value="" selected>Choose Options</option>
                                        <option value="1">Customer Order</option>
                                        <option value="2">Customer Support</option>
                                        <option value="3">Feedback</option>
                                        <option value="4">Technical Support</option>
                                        <option value="5">Others</option>
                                    </select>
                                </div>
                                <button type="submit" class="custom-btn rounded-3 py-3 px-5 fw-bold">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="google-maps border-top mt-5 mb-5 pt-5">
                <div class="maps">
                    @if(isset($setup->maps)) {!! $setup->maps !!} @endif
                </div>
            </div>
        </div>
    </section>
@endsection



@section('scripts')

@endsection