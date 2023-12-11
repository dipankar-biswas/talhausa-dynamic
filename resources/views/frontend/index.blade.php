@extends('frontend.layouts.master')
@section('title','Talha USA | Explore a world  at Online E-Commerce Business.')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/product.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/slide.css') }}">
@endsection



@section('content')
    
    <!-- Slider Code Start -->
    @if(isset($slider) && $slider != null)
    <div class="container">
        <div class="slider">
            <div class="slide-wrap">
                <ul class="slides">
                    @foreach($slider as $slide)
                    <li class="slide">
                        <div class="content">
                            <div class="img">
                                <img src="{{ asset($slide->image) }}" alt="{{ asset($slide->name) }}" draggable="false">
                            </div>
                            <div class="text">
                                <h3 class="title mb-3">{{ isset($slide->name) ? $slide->name : '' }}</h3>
                                <p class="short-des fs-5 d-block">{{ isset($slide->short_des) ? $slide->short_des : '' }}</p>
                                <a href="{{ isset($slide->link) ? $slide->link : '' }}" class="link custom-btn1 rounded mt-4 d-inline-block fs-5">Read More</a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <div class="arrow">
                    <div id="left" class="icon left"><i class="fa-solid fa-angle-left"></i></div>
                    <div id="right" class="icon right"><i class="fa-solid fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- Slider Code End -->

   
   {{-- 
    <!-- Category List Code Start -->
    <section class="categories cat-service section-padding">
        <div class="container">
            <div class="items grid">
                <div class="item">
                    <h4 class="text-bold text-center">MEN’S FASHION TRENDS 2023</h4>
                    <a href="#" class="custom-btn px-4 py-2 mt-3 d-inline-block center">Shop Now</a>
                </div>
                <div class="item">
                    <h4 class="text-bold text-center">MEN’S FASHION TRENDS 2023</h4>
                    <a href="#" class="custom-btn px-4 py-2 mt-3 d-inline-block center">Shop Now</a>
                </div>
                <div class="item">
                    <h4 class="text-bold text-center">MEN’S FASHION TRENDS 2023</h4>
                    <a href="#" class="custom-btn px-4 py-2 mt-3 d-inline-block center">Shop Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Category List Code End -->
    --}}



    <!-- Ads Code Start -->
    {{-- @if(isset($banner->banner_image_one))
    <section class="ads section-padding">
        <div class="container">
            <div class="ads-banner w-100">
                <img class="mw-100 d-table m-auto" src="{{ $banner->banner_image_one }}" alt="Ads">
            </div>
        </div>
    </section>
    @endif --}}
    <!-- Ads Code End -->

    {{--
    <!-- New Arrivals Code Start -->
     @include('frontend.body.new-arrivals')
    <!-- New Arrivals Code End -->
    
    <!-- Ads Code Start -->
    @if(isset($banner->banner_image_two) && isset($banner->banner_image_three))
    <section class="ads section-padding">
        <div class="container">
            <div class="row row-gap-3">
                <div class="col-lg-6">
                    <div class="ads-banner w-100">
                        <img class="w-100 d-table m-auto" src="{{ $banner->banner_image_two }}" alt="Ads">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ads-banner w-100">
                        <img class="w-100 d-table m-auto" src="{{ $banner->banner_image_three }}" alt="Ads">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- Ads Code End -->
    --}}

    <!-- Trending Products Code Start -->
    @include('frontend.body.category-wise')
    <!-- Trending Products Code End -->

    

    <!-- Trending Categories Code Start -->
    {{-- <section class="trending-categories section-padding">
        <div class="container">
            <div class="heading mb-3">
                <div class="title fw-bold fs-2 text-sm-center">Trending Categories</div>
            </div>
            <div class="items grid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 py-3">
                        <div class="item text-center border px-3 py-5" style="background-image: url({{ asset('frontend/assets/images/ads/ads-half-one.jpg') }});">
                            <p class="text-white-50">New Products</p>
                            <h4 class="text-bold text-white">MEN’S FASHION TRENDS 2023</h4>
                            <a href="#" class="custom-btn px-4 py-2 mt-3 d-inline-block">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 py-3">
                        <div class="item text-center border px-3 py-5" style="background-image: url({{ asset('frontend/assets/images/ads/ads-half-two.jpg') }});">
                            <p class="text-white-50">New Products</p>
                            <h4 class="text-bold text-white">Men’s Round Neck Long Sleeve T-Shirt</h4>
                            <a href="#" class="custom-btn px-4 py-2 mt-3 d-inline-block">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 py-3">
                        <div class="item text-center border px-3 py-5" style="background-image: url({{ asset('frontend/assets/images/ads/ads-half-one.jpg') }});">
                            <p class="text-white-50">New Products</p>
                            <h4 class="text-bold text-white">Men’s V Neck T-Shirt</h4>
                            <a href="#" class="custom-btn px-4 py-2 mt-3 d-inline-block">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 py-3">
                        <div class="item text-center border px-3 py-5" style="background-image: url({{ asset('frontend/assets/images/ads/ads-half-two.jpg') }});">
                            <p class="text-white-50">New Products</p>
                            <h4 class="text-bold text-white">Men's Hoodie</h4>
                            <a href="#" class="custom-btn px-4 py-2 mt-3 d-inline-block">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 py-3">
                        <div class="item text-center border px-3 py-5" style="background-image: url({{ asset('frontend/assets/images/ads/ads-half-one.jpg') }});">
                            <p class="text-white-50">New Products</p>
                            <h4 class="text-bold text-white">Women's Tank Tops</h4>
                            <a href="#" class="custom-btn px-4 py-2 mt-3 d-inline-block">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 py-3">
                        <div class="item text-center border px-3 py-5" style="background-image: url({{ asset('frontend/assets/images/ads/ads-half-two.jpg') }});">
                            <p class="text-white-50">New Products</p>
                            <h4 class="text-bold text-white">Kid's T-Shirt</h4>
                            <a href="#" class="custom-btn px-4 py-2 mt-3 d-inline-block">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Trending Categories Code End -->

    


    <!-- Banner Code Start -->
    {{-- @if(isset($banner->banner_image_four))
   <div class="banner-section">
        <div class="item">
            <img src="{{ $banner->banner_image_four }}" alt="Banner Image">
        </div>
    </div>
    @endif --}}
    <!-- Banner Code End -->

    <!-- Hot Products Code Start -->
    {{-- 
    @include('frontend.body.hot-products')
    --}}
    <!-- Hot Products Code End -->
@endsection



@section('scripts')
<script type="text/javascript" src="{{ asset('frontend/assets/js/slide.js') }}"></script>
@endsection