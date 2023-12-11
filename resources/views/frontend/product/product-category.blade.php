@extends('frontend.layouts.master')
@section('title','Product Category | Talha USA Online E-Commerce Business.')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/plugin/price-range.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/product.css') }}">
@endsection



@section('content')
    <!-- Category Product Code Start -->
    <section class="category-product section-padding">
        <div class="container">
            <div class="cat-products">
                <div class="row">
                    <div class="col-lg-3">
                        @include('frontend.inc.pdtcat-aside')
                    </div>
                    <div class="col-lg-9">
                        <div class="right-section">
                            <div class="bread-crumb bg-light mb-2 py-2 px-4">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="{{ route('home-page') }}" class="text-body text-hover">Home</a></li>
                                        <!-- <li class="breadcrumb-item"><a href="#" class="text-body text-hover">Category</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data</li> -->
                                        @php
                                            $checkCat = \App\Models\category::where("status", 1)->where('id','=',$categoryName?->parentid)->first();
                                        @endphp
                                        @if( $checkCat != null )
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('product.category', $checkCat->slug) }}" class="text-body text-hover">{{ $checkCat->name }}</a>
                                        </li>
                                        @endif
                                        <li class="breadcrumb-item active" aria-current="page">{{ $categoryName?->name }}</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="heading d-flex justify-content-between align-items-center column-gap-3">
                                <div class="cat-filter">
                                    <div class="cat-name fs-5 text-body"><strong class="text-secondary">Category: </strong>{{ $categoryName?->name }}</div>
                                    <div class="filter filter-open dt-none ph-lg-block text-active1 text-hover"><i class="fa-solid fa-filter"></i> Filter</div>
                                </div>
                            </div>
                            <div class="products">
                                <div class="row">
                                    @if(count($products) > 0)
                                        @foreach( $products as $item )
                                        <div class="col-lg-3 col-md-4 col-6 my-3">
                                            <div class="item pdt-item small rounded-1 shadow-sm">
                                                <a href="{{ route('product.details',$item->slug) }}" class="thumb">
                                                    @if(!empty($item->thumbnail))
                                                    <img src="{{ asset($item->thumbnail) }}" alt="Product Image" style="background:{{file_exists(public_path($item->thumbnail)) || empty(asset($item->thumbnail)) ? $item->colors[0]?->color_name?->code : '#f2f2f2'}}">
                                                    @else
                                                    <img src="{{ asset($item->neck->image) }}" alt="Product Image" style="background:{{file_exists(public_path($item->thumbnail)) || empty(asset($item->thumbnail)) ? $item->colors[0]?->color_name?->code : '#f2f2f2'}}">
                                                    @endif
                                                </a>
                                                <div class="content">
                                                    <h2 class="title fs-5 mt-2 mb-3 text-center">
                                                        <a href="{{ route('product.details',$item->slug) }}" class="text-body text-hover">{{ substr($item->name, 0, 30) }}</a>
                                                    </h2>
                                                    <div class="price-rating d-flex justify-content-center mb-3">
                                                        <div class="price d-flex align-items-end justify-content-center column-gap-2">
                                                            <span class="new fw-bold fs-3"><span>$</span><span class="num">{{ $item->sizes[0]->dis_price }}</span></span>
                                                            <span class="old fs-5 text-secondary text-decoration-line-through"><span>$</span><span class="num">{{ $item->sizes[0]->price }}</span></span>
                                                        </div>
                                                        <!-- <div class="rating">
                                                            <div class="star down">
                                                                <div class="star up" style="width: 90%;"></div>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                    <div class="actions d-flex justify-content-center align-items-center column-gap-4">
                                                        <!-- <div class="view action bg-white border rounded-circle shadow" title="Quick View">
                                                            <i class="fa-regular fa-eye"></i>
                                                        </div>
                                                        <div class="wishlist action bg-white border rounded-circle shadow" title="Compare">
                                                            <i class="fa-regular fa-heart"></i>
                                                        </div> -->
                                                        <div class="cart action s-cart bg-white border rounded-circle shadow pdt-detail-view" title="Add To Cart" data-pid="{{ $item->id }}" {{ $item->sizes[0]->stock > 0 ? "" : "disabled" }}>
                                                            <i class="fa-solid fa-cart-shopping"></i> Add To Cart
                                                        </div>
                                                    </div>
                                                    <div class="stock-color d-flex justify-content-between align-items-center mt-4">
                                                        <div class="stocks">
                                                            @if($item->sizes[0]->stock > 0)
                                                            <span class="stock in text-success fw-bold">In-Stock</span>
                                                            @else
                                                            <span class="stock out text-body-tertiary fw-bold">Out-Stock</span>
                                                            @endif
                                                        </div>
                                                        <div class="color-group">
                                                            <ul class="colors">
                                                                @foreach( $item->colors->take(4) as $color )
                                                                <li class="color" title="{{ $color->color_name->name }}" style="background-color: {{ $color->color_name->code }}" data-pid="{{ $item->id }}" data-cid="{{ $color->color_id }}"></li>
                                                                @endforeach
                                                            </ul>
                                                            <div class="color-count">
                                                                @if(count($item->colors) - 4 > 0)
                                                                <span>{{count($item->colors) - 4}} @if(count($item->colors) - 4 > 0)+@endif</span>
                                                                @endif
                                                                <ul class="colors">
                                                                    @foreach( $item->colors->skip(4) as $color )
                                                                    <li class="color" title="{{ $color->color_name->name }}" style="background-color: {{ $color->color_name->code }}" data-pid="{{ $item->id }}" data-cid="{{ $color->color_id }}"></li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @if(count($products) > 16)
                                        <div class="col-lg-12">
                                            <div class="product-loader text-center py-4 mt-4">
                                                <img src="{{ asset('frontend/assets/images/loader.gif') }}" alt="Loader">
                                            </div>
                                        </div>
                                        @endif
                                    @else
                                    <h4 class="py-5 my-5 text-center">Product Not Found!!</h4>
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Product Code End -->
@endsection



@section('scripts')
<script type="text/javascript" src="{{ asset('frontend/assets/js/plugin/price-range.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/product-category.js') }}"></script>
@endsection