@extends('frontend.layouts.master')
@section('title','Product Details | Talha USA Online E-Commerce Business.')

@section('stylesheet')

@endsection



@section('content')
    <!-- Product Details Code Start -->
    <section class="product-details pt-2">
        <div class="container">
            <div class="pdt-details pdt-dtls-view section-padding">
                <div class="bread-crumb bg-light mb-4 py-2 px-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('home-page') }}" class="text-body text-hover">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="pdt-image">
                            <div class="thumbnail">
                                <img src="{{ asset($product->neck->image) }}" alt="Product" class="mw-100" style="background: red">
                            </div>
                            <div class="multi-slides">
                                <ul class="img-slides tabs-box">
                                @if($product != null)

                                @foreach($product->colors as $color)
                                <li class="img" data-pid="{{ $product->id }}" data-cid="{{ $color->color_name?->id }}">
                                    <img src="{{ asset($product->neck->image) }}" alt="Product" style="background: {{ $color->color_name?->code }}">
                                </li>
                                @endforeach

                                @endif
                                </ul>
                                <div class="arrow">
                                    <div class="icon left"><i class="fa-solid fa-angle-left"></i></div>
                                    <div class="icon right"><i class="fa-solid fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="details">
                            <h2 class="title text-body">{{ $product->name }}</h2>
                            <div class="price d-flex align-items-end justify-content-start column-gap-2 mb-4 mt-3">
                                <div class="fw-bold fs-1 text-active"><span>$</span><span class="new">{{ $product->sizes[0]->dis_price }}</span></div>
                                <div class="fs-4 text-secondary text-decoration-line-through"><span>$</span><span class="old">{{ $product->sizes[0]->price }}</span></div>
                            </div>
                            <div class="stock-check d-flex align-content-center column-gap-4 mb-4">
                                <div class="txt">Stock :</div>
                                <div class="content">
                                    @if($product->sizes[0]->stock > 0)
                                    <span class="text-success">Available</span>
                                    @else
                                    <span class="text-secondary">Non-Available</span>
                                    @endif
                                </div>
                            </div>
                            <div class="color-list d-flex align-content-center column-gap-4 mb-4">
                                <div class="txt">Colors :</div>
                                <div class="content">
                                    <div class="title color-text mb-2">Back</div>
                                    <ul class="colors pdt-colors">

                                        @foreach($product->colors as $color)
                                        <li class="img color" data-pid="{{ $product->id }}" data-cid="{{ $color->color_name?->id }}" title="{{ $color->color_name?->name }}">
                                            <img src="{{ asset($product->neck->image) }}" alt="Product" style="background: {{ $color->color_name?->code }}">
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <div class="size-list d-flex align-content-center column-gap-4 mb-4">
                                <div class="txt">Size :</div>
                                <div class="content">
                                    <div class="title size-text mb-2"></div>
                                    <ul class="sizes d-flex align-content-center column-gap-2">

                                        @foreach($product->sizes as $size)
                                        @if($product->id == $size->product_id && $size->size_id == $size->size_name?->id && $size->product_color_id == $product->colors[0]->color_id)
                                        <li class="size" data-pid="{{ $product->id }}" data-sid="{{ $size->size_name?->id }}">{{ $size->size_name?->name }}</li>
                                        @endif
                                        @endforeach
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="quantity d-flex align-content-center column-gap-4 mb-5">
                                <div class="txt">Quantity :</div>
                                <div class="qty">
                                    <button type="button" class="minus">-</button>
                                    <input type="text" class="qtyNum" value="{{ $product->sizes[0]->stock <= 0 ? 0 : 1 }}" min="1" max="{{ $product->sizes[0]->stock }}" {{$product->sizes[0]->stock <= 0 ? 'readonly' : ''}}>
                                    <button type="button" class="plus work">+</button>
                                </div>
                            </div>
                            <p class="stock-empty-msg text-danger text-bold">
                                @if($product->sizes[0]->stock <= 0)
                                <span class="mb-2">Stock is not available!</span>
                                @endif
                            </p>
                            <div class="actions d-flex justify-content-start align-items-center column-gap-4">
                                <button type="button" class="cart add-cart action border shadow custom-btn1"
                                    title="Add To Cart" data-pid="{{ $product->id }}" {{ $product->sizes[0]->stock > 0 ? '' : 'disabled' }}>
                                    Add To Cart
                                </button>

                               {{-- <button type="button" class="buy action border shadow custom-btn"
                                    title="Buy Now">
                                    Buy Now
                                </button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hr border-top mt-5"></div>
            <div class="pdt-description section-padding">
                <div class="row">
                    <div class="col-lg-10">
                        @if(isset($product->description) && $product->description != null)
                        <div class="pdt-detail">
                            <div class="heading bg-body-tertiary py-2 px-4 mb-4">
                                <h4 class="text-body">{{ $product->name }}</h4>
                            </div>
                            <div class="content">
                                {!! $product->description !!}
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-lg-2">
                        <div class="same-product products d-flex flex-column row-gap-4 column-gap-3">
                            @forelse( $samepdts as $item )
                            <div class="item pdt-item small rounded-1 shadow-sm">
                                <a href="{{ route('product.details',$item->slug) }}" class="thumb">
                                    @if(!empty($item->thumbnail))
                                    <img src="{{ asset($item->thumbnail) }}" alt="Product Image" style="background:{{file_exists(public_path($item->thumbnail)) || empty(asset($item->thumbnail)) ? $item->colors[0]?->color_name?->code : '#f2f2f2'}}">
                                    @else
                                    <img src="{{ asset($item->neck->image) }}" alt="Product Image" style="background:{{file_exists(public_path($item->thumbnail)) || empty(asset($item->thumbnail)) ? $item->colors[0]?->color_name?->code : '#f2f2f2'}}">
                                    @endif
                                </a>
                                <div class="content">
                                    <h2 class="title fs-5 mt-3 mb-4 text-center">
                                        <a href="{{ route('product.details',$item->slug) }}" class="text-body text-hover">{{ $item->name }}</a>
                                    </h2>
                                    <div class="price-rating d-flex justify-content-between mb-2">
                                        <div class="price d-flex align-items-end justify-content-center column-gap-2">
                                            <span class="new fw-bold fs-3"><span>$</span><span class="num">{{ $item->sizes[0]->dis_price }}</span></span>
                                            <span class="old fs-5 text-secondary text-decoration-line-through"><span>$</span><span class="num">{{ $item->sizes[0]->price }}</span></span>
                                        </div>
                                    </div>
                                    <div
                                        class="actions d-flex justify-content-center align-items-center column-gap-4">
                                        <!-- <div class="view action bg-white border rounded-circle shadow"
                                            title="Quick View">
                                            <i class="fa-regular fa-eye"></i>
                                        </div>
                                        <div class="wishlist action bg-white border rounded-circle shadow"
                                            title="Compare">
                                            <i class="fa-regular fa-heart"></i>
                                        </div> -->
                                        <div class="cart action s-cart bg-white border rounded-circle shadow pdt-detail-view" title="Add To Cart" data-pid="{{ $item->id }}" {{ $item->sizes[0]->stock > 0 ? '' : 'disabled' }}>
                                            <i class="fa-solid fa-cart-shopping"></i> Add To Cart
                                        </div>
                                    </div>
                                    <div
                                        class="stock-color d-flex justify-content-between align-items-center mt-4">
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
                            @empty
                                <p class="fs-4">Data Not Found!!</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            <div class="relatated-pdt section-padding">
                <div class="heading mb-4">
                    <h1 class="title text-body fw-bold">Relatated Product</h1>
                    <p class="text-secondary">Please create a new password that you don’t use on any other site.</p>
                </div>
                <div class="products">
                    <div class="row">
                        @forelse( $relatedpdts as $item )
                        <div class="col-lg-3 col-md-4 col-6 my-3">
                            <div class="item pdt-item rounded-1 shadow-sm">
                                <a href="{{ route('product.details',$item->slug) }}" class="thumb">
                                    @if(!empty($item->thumbnail))
                                    <img src="{{ asset($item->thumbnail) }}" alt="Product Image" style="background:{{file_exists(public_path($item->thumbnail)) || empty(asset($item->thumbnail)) ? $item->colors[0]?->color_name?->code : '#f2f2f2'}}">
                                    @else
                                    <img src="{{ asset($item->neck->image) }}" alt="Product Image" style="background:{{file_exists(public_path($item->thumbnail)) || empty(asset($item->thumbnail)) ? $item->colors[0]?->color_name?->code : '#f2f2f2'}}">
                                    @endif
                                </a>
                                <div class="content">
                                    <h2 class="title fs-5 mt-3 mb-4 text-center">
                                        <a href="{{ route('product.details',$item->slug) }}" class="text-body text-hover">{{ $item->name }}</a>
                                    </h2>
                                    <div class="price-rating d-flex justify-content-center mb-3">
                                        <div class="price d-flex align-items-end justify-content-center column-gap-2">
                                            <span class="new fw-bold fs-3"><span>$</span><span class="num">{{ $item->sizes[0]->dis_price }}</span></span>
                                            <span class="old fs-5 text-secondary text-decoration-line-through"><span>$</span><span class="num">{{ $item->sizes[0]->price }}</span></span>
                                        </div>
                                    </div>
                                    <div class="actions d-flex justify-content-center align-items-center column-gap-4">
                                        <!-- <div class="view action bg-white border rounded-circle shadow" title="Quick View">
                                            <i class="fa-regular fa-eye"></i>
                                        </div>
                                        <div class="wishlist action bg-white border rounded-circle shadow" title="Compare">
                                            <i class="fa-regular fa-heart"></i>
                                        </div> -->
                                        <div class="cart action s-cart bg-white border rounded-circle shadow pdt-detail-view" title="Add To Cart" data-pid="{{ $item->id }}" {{ $item->sizes[0]->stock > 0 ? '' : 'disabled' }}>
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
                        @empty
                            <p class="fs-4">Data Not Found!!</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Code End -->
@endsection



@section('scripts')

@endsection