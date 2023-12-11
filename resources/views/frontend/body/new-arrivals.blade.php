<section class="new-arrivals products section-padding">
    <div class="container">
        <div class="heading d-flex justify-content-between align-items-center">
            <div class="title fw-bold fs-2">New Arrivals</div>
            <!-- Nav pills -->
            <ul class="nav fs-5">
                <li class="nav-item">
                    <a class="nav-link text-secondary active" data-bs-toggle="pill" href="#navlAll">All</a>
                </li>
                @php
                $categories = null;

                if(\App\Models\category::where('status',1)->count() > 0){ 
                    $categories = \App\Models\category::where('parentid',0)->where('status',1)->get();
                }
                @endphp
                @foreach($categories as $key=>$item)
                <li class="nav-item">
                    <a class="nav-link text-secondary" data-bs-toggle="pill" href="#navlMen{{ $key }}">{{ $item->name }}</a>
                </li>
                @endforeach
            </ul>
        </div>

        <!-- Tab panes -->
        @if($products != null)
            <div class="tab-content mt-4">
                <!-- Cat All -->
                <div class="tab-pane container active" id="navlAll">
                    <div class="tab-items">
                        <div class="row">
                            @foreach( $products as $item )
                            <div class="col-lg-3 col-md-4 col-6 my-3">
                                <div class="item rounded-1 shadow-sm">
                                    <a href="{{ route('product.details',$item->slug) }}">
                                        @if(!empty($item->thumbnail))
                                        <img src="{{ asset($item->thumbnail) }}" alt="Product Image" style="background:{{file_exists(public_path($item->thumbnail)) || empty(asset($item->thumbnail)) ? $item->colors[0]?->color_name?->code : '#f2f2f2'}}">
                                        @else
                                        <img src="{{ asset($item->neck->image) }}" alt="Product Image" style="background:{{file_exists(public_path($item->thumbnail)) || empty(asset($item->thumbnail)) ? $item->colors[0]?->color_name?->code : '#f2f2f2'}}">
                                        @endif
                                    </a>
                                    <div class="content">
                                        <div class="price-rating d-flex justify-content-between">
                                            <div class="price d-flex align-items-end justify-content-center column-gap-2">
                                                <span class="new fw-bold fs-3"><span>$</span><span>{{ $item->sizes[0]->dis_price }}</span></span>
                                                <span class="old fs-5 text-secondary text-decoration-line-through"><span>$</span><span>{{ $item->sizes[0]->price }}</span></span>
                                            </div>
                                            <div class="rating">
                                                <div class="star down">
                                                    <div class="star up" style="width: 90%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="title fs-5 mt-3 mb-4 text-center">
                                            <a href="{{ route('product.details',$item->slug) }}" class="text-body text-hover">{{ substr($item->name, 0, 30) }}</a>
                                        </h2>
                                        <div class="actions d-flex justify-content-center align-items-center column-gap-4">
                                            <div class="view action bg-white border rounded-circle shadow" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                            <div class="wishlist action bg-white border rounded-circle shadow" title="Compare">
                                                <i class="fa-regular fa-heart"></i>
                                            </div>
                                            <div class="cart action bg-white border rounded-circle shadow btn-popup basic" title="Add To Cart" data-pid="{{ $item->id }}">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </div>
                                        </div>
                                        <div class="stock-color d-flex justify-content-between align-items-center mt-4">
                                            <div class="stocks">
                                                <span class="stock in text-success fw-bold">Stock-In</span>
                                                <!-- <span class="stock out text-body-tertiary fw-bold">Stock-Out</span> -->
                                            </div>
                                            <ul class="colors">
                                                <li class="color" title="Red" style="background-color: red;"></li>
                                                <li class="color" title="Blue" style="background-color: blue;"></li>
                                                <li class="color" title="Black" style="background-color: black;"></li>
                                                <li class="color" title="Gray" style="background-color: gray;"></li>
                                                <li class="color" title="Green" style="background-color: green;"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @if(isset($categories))
                @foreach($categories as $key=>$item)
                <!-- Cat Data -->
                <div class="tab-pane container fade" id="navlMen{{ $key }}">
                    <div class="tab-items">
                        <div class="row">
                            @forelse( \App\Models\product::where('category_id','=',$item->id)->inRandomOrder()->take(8)->get() as $item )
                            <div class="col-lg-3 col-md-4 col-6 my-3">
                                <div class="item rounded-1 shadow-sm">
                                    <a href="{{ route('product.details',$item->slug) }}">
                                        @if(!empty($item->thumbnail))
                                        <img src="{{ asset($item->thumbnail) }}" alt="Product Image" style="background:{{file_exists(public_path($item->thumbnail)) || empty(asset($item->thumbnail)) ? $item->colors[0]?->color_name?->code : '#f2f2f2'}}">
                                        @else
                                        <img src="{{ asset($item->neck->image) }}" alt="Product Image" style="background:{{file_exists(public_path($item->thumbnail)) || empty(asset($item->thumbnail)) ? $item->colors[0]?->color_name?->code : '#f2f2f2'}}">
                                        @endif
                                    </a>
                                    <div class="content">
                                        <div class="price-rating d-flex justify-content-between">
                                            <div class="price d-flex align-items-end justify-content-center column-gap-2">
                                                <span class="new fw-bold fs-3"><span>$</span><span>{{ $item->sizes[0]->dis_price }}</span></span>
                                                <span class="old fs-5 text-secondary text-decoration-line-through"><span>$</span><span>{{ $item->sizes[0]->price }}</span></span>
                                            </div>
                                            <div class="rating">
                                                <div class="star down">
                                                    <div class="star up" style="width: 90%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="title fs-5 mt-3 mb-4 text-center">
                                            <a href="{{ route('product.details',$item->slug) }}" class="text-body text-hover">{{ $item->name }}</a>
                                        </h2>
                                        <div class="actions d-flex justify-content-center align-items-center column-gap-4">
                                            <div class="view action bg-white border rounded-circle shadow" title="Quick View">
                                                <i class="fa-regular fa-eye"></i>
                                            </div>
                                            <div class="wishlist action bg-white border rounded-circle shadow" title="Compare">
                                                <i class="fa-regular fa-heart"></i>
                                            </div>
                                            <div class="cart action bg-white border rounded-circle shadow  btn-popup basic" title="Add To Cart" data-pid="{{ $item->id }}">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </div>
                                        </div>
                                        <div class="stock-color d-flex justify-content-between align-items-center mt-4">
                                            <div class="stocks">
                                                <span class="stock in text-success fw-bold">Stock-In</span>
                                                <!-- <span class="stock out text-body-tertiary fw-bold">Stock-Out</span> -->
                                            </div>
                                            <ul class="colors">
                                                <li class="color" title="Red" style="background-color: red;"></li>
                                                <li class="color" title="Blue" style="background-color: blue;"></li>
                                                <li class="color" title="Black" style="background-color: black;"></li>
                                                <li class="color" title="Gray" style="background-color: gray;"></li>
                                                <li class="color" title="Green" style="background-color: green;"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <h4 class="text-center">Data Not Found!!</h4>
                            @endforelse
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        @endif
    </div>
</section>