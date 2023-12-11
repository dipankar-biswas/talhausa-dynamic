@php
$setup = \App\Models\SiteSetup::where('id',1)->first();
@endphp
<header>
    <div class="logo-bar">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-3 ph-lg-none">
                    <div class="logo d-flex justify-content-start align-items-center h-100">
                        <a href="{{ route('home-page') }}">
                            @if(isset($setup->header_logo))
                                <img src="{{ asset($setup->header_logo) }}" alt="Logo">
                            @endif
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 ph-lg-none search">
                    <div class="d-flex h-100">
                        <form method="GET" action="{{ route('product.search') }}" class="w-100">
                            <div class="d-flex justify-content-center align-items-center h-100 column-gap-3">
                                <div class="input-group input-group-lg">
                                    <select name="scat" class="form-select input-group-text px-0" aria-label="Default select example">
                                        <option value="" selected>All Categories</option>
                                        @php
                                        $parentCat = \App\Models\category::where("status", 1)->where('parentid','=',0)->get()
                                        @endphp
                                        @foreach($parentCat as $item)
                                        <option value="{{ $item->slug }}" {{ request('scat') == $item->slug ? 'selected' : '' }}>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <input type="text" name="stxt" value="{{ request('stxt') }}" class="form-control search-input" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-lg" placeholder="Product Search...">
                                    <div class="input-group-text p-0 button">
                                        <button type="submit" class="btn custom-btn btn-b0 fs-3 w-60"><i
                                                class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-8 col-sm-7 col-6">
                    <div class="d-flex justify-content-end align-items-center h-100 column-gap-4">

                        {{-- <div class="compare">
                            <a href="compare.html" class="text-light-emphasis fs-4">
                                <i class="fa-solid fa-code-compare"></i>
                            </a>
                        </div> 

                        <div class="wishlist">
                            <a href="wishlist.html" class="text-light-emphasis fs-4 position-relative">
                                <i class="fa-regular fa-heart"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle px-2 py-0 border border-light rounded-circle fs-6 text-white fw-lighter custom-btn">
                                    <span class="visually-visiale">0</span>
                                </span>
                            </a>
                        </div>

                        --}}
                        
                        <div class="cart">
                            <a class="link d-flex align-items-center text-light-emphasis fs-4 position-relative"
                                href="javascript:void(0)" id="myCart">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle px-2 py-0 border border-light rounded-circle fs-6 text-white fw-lighter custom-btn">
                                    <span class="visually-visiale cart-item-num">0</span>
                                </span>
                            </a>

                            <ul class="cart-lists px-3">
                                {{--
                                @if(\Cart::count() > 0)
                                @foreach(\Cart::content() as $row)
                                <li class="list mb-3">
                                    <div class="item">
                                        <div class="content d-flex column-gap-2">
                                            <a href="{{ route('product.details',$row->options->slug) }}" class="link" target="_blank">
                                                <img src="{{ $row->options->image != NULL ? asset($row->options->image) : asset('frontend/assets/images/dummy-image.jpg') }}" alt="Product" style="background:{{$row->options->color_code}}"/>
                                            </a>
                                            <div class="d-flex justify-content-between column-gap-2" style="width:calc(100% - 50px)">
                                                <div class="text">
                                                    <h2 class="title fs-5 mb-1 text-center">
                                                        <a href="{{ route('product.details',$row->options->slug) }}" target="_blank" class="text-body-secondary text-hover">{{ $row->name }}</a>
                                                    </h2>
                                                    <div class="d-flex column-gap-2">
                                                        <div class="price d-flex align-items-end justify-content-center column-gap-2">
                                                            <span class="new fw-bold text-body fs-5">${{ $row->price }}</span>
                                                            <!-- <span class="old fs-6 text-secondary text-decoration-line-through">$00.00</span> -->
                                                        </div>
                                                        <div class="qty"><i class="fa-solid fa-xmark"></i> <span>{{ $row->qty }}</span></div>
                                                    </div>
                                                </div>
                                                <div class="remove text-active text-hover1 fs-5">
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                @endif
                                <hr class="mb-1">
                                <li>
                                    <div class="subtotal d-flex justify-content-between align-items-center fw-bold">
                                        <div class="txt fs-5">Subtotal</div>
                                        <div class="price fs-4">$<span>{{ \Cart::subtotal() }}</span></div>
                                    </div>
                                </li>
                                <hr class="mb-1">
                                <li>
                                    <div class="action d-flex justify-content-between align-items-center mt-2">
                                        <a href="{{ route('product.cart') }}" class="custom-btn rounded-2 px-3 py-2 fw-bold">View Cart</a>
                                        <a href="{{ route('product.checkout') }}" class="custom-btn1 rounded-2 px-3 py-2 fw-bold">Checkout</a>
                                    </div>
                                </li>
                                --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Desktop Navigation -->
    <div class="navigation">
        <div class="container h-100">
            <div class="row h-100">

                {{-- <div class="col-lg-3">
                    @include('frontend.inc.categories')
                </div> --}}
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg d-flex justify-content-start align-items-center h-100">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="{{ route('home-page') }}">
                                <div class="logo d-flex justify-content-start justify-content-sm-center align-items-center h-100">
                                    @if(isset($setup->header_logo))
                                    <img src="{{ asset($setup->header_logo) }}" alt="Logo">
                                    @endif
                                </div>
                            </a>
                            <div class="d-flex align-items-center column-gap-4">
                                <div class="search dt-none">
                                    <a href="javascript:void(0)" class="text-light-emphasis fs-4 search-btn">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                    <div class="search-slide">
                                        <form method="GET" action="{{ route('product.search') }}">
                                            <div class="input-group input-group-lg">
                                                <input type="text" name="stxt" value="{{ request('stxt') }}" class="form-control search-input" aria-label="Sizing example input"
                                                    aria-describedby="inputGroup-sizing-lg" placeholder="Product Search...">
                                                <div class="input-group-text p-0">
                                                    <button type="submit" class="btn custom-btn btn-b0 fs-3 w-60"><i
                                                            class="fa-solid fa-magnifying-glass"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav nav bg-white m-auto mb-lg-0 fs-5">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="{{ route('home-page') }}">Home</a>
                                    </li>
                                    @php
                                    $categories = null;

                                    if(\App\Models\category::where('status',1)->count() > 0){ 
                                        $categories = \App\Models\category::where('parentid',0)->where('status',1)->get();
                                    }
                                    @endphp
                                    @foreach($categories as $item)
                                        @php
                                        $parentSCat = \App\Models\category::where("status", 1)->where('parentid','=',$item->id)->get()
                                        @endphp
                                        <li class="nav-item {{ count($parentSCat) > 0 ? 'tree' : '' }}">
                                            <a class="nav-link" href="{{ route('product.category',$item->slug) }}">{{ $item->name }}
                                            @if(count($parentSCat) > 0)
                                            <span class="icon"><i class="fa-solid fa-sort-down"></i></span>
                                            @endif
                                            </a>
                                            @if(count($parentSCat) > 0)
                                            <div class="dropmenu">
                                                <ul class="items">
                                                    @foreach($parentSCat as $sitem)
                                                    <li class="nav-item">
                                                        <a href="{{ route('product.category', [$item->slug, $sitem->slug]) }}" class="nav-link">{{ $sitem->name }}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                        </li>
                                    @endforeach
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" href="{{ route('about.us') }}">About</a>
                                    </li> --}}
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" href="{{ route('blog.page') }}">Blog</a>
                                    </li> --}}

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('track-order.order_tracking') }}">Tracking Order</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('contact.us') }}">Contact</a>
                                    </li>


                                    {{--
                                    <li class="nav-item dt-none ph-lg-block">
                                        <a class="nav-link" href="{{ route('product.wishlist') }}">Wishlist</a>
                                    </li>
                                    <li class="nav-item dt-none ph-lg-block">
                                        <a class="nav-link" href="{{ route('product.compare') }}">Compare</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">Sign In</a>
                                    </li>
                                    <li class="nav-item user-set ph-lg-none">
                                        <a class="nav-link" href="javascript:void(0)">Hi! Dipankar</a>
                                        <div class="user-options">
                                            <div class="head">
                                                <div class="image">
                                                    <img src="{{ asset('frontend/assets/images/avatar.webp') }}" alt="Avatar">
                                                </div>
                                                <div class="content">
                                                    <div class="name">Dipankar</div>
                                                    <div class="sub-title">User</div>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <hr>
                                                <a href="{{ route('user.dashboard') }}" class="link">
                                                    <div class="icon"><i class="fa-regular fa-user"></i></div>
                                                    <div class="txt">Profile</div>
                                                </a>
                                                <a href="#" class="link">
                                                    <div class="icon"><i class="fa-solid fa-gear"></i></div>
                                                    <div class="txt">Settings</div>
                                                </a>
                                                <a href="#" class="link">
                                                    <div class="icon"><i class="fa-regular fa-credit-card"></i></div>
                                                    <div class="txt">Billing</div>
                                                </a>
                                                <hr>
                                                <a href="#" class="link">
                                                    <div class="icon"><i class="fa-regular fa-life-ring"></i></div>
                                                    <div class="txt">Help</div>
                                                </a>
                                                <a href="#" class="link">
                                                    <div class="icon"><i class="fa-solid fa-dollar-sign"></i></div>
                                                    <div class="txt">Pricing</div>
                                                </a>
                                                <a href="faq.html" class="link">
                                                    <div class="icon"><i class="fa-solid fa-question"></i></div>
                                                    <div class="txt">FAQ</div>
                                                </a>
                                                <hr>
                                                <a href="#" class="link">
                                                    <div class="icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></div>
                                                    <div class="txt">Logout</div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    --}}

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>