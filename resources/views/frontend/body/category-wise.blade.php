<section class="category-wise products section-padding">
    <div class="container">
        @php
            $categories = null;

            if(\App\Models\category::where('status',1)->count() > 0){ 
                $categories = \App\Models\category::where('parentid',0)->where('status',1)->get();
            }
        @endphp

        @foreach($categories as $key=>$cat)

            @if(\App\Models\product::where('category_id','=', $cat->id)->count() > 0)

                <div class="cat-products">
                    <div class="heading d-flex justify-content-between align-items-center border-bottom mb-3 pb-2">
                        <div class="title fw-bold fs-3">{{ $cat->name }}</div>
                        <a class="nav-link text-secondary custom-outline-btn1 text-white px-2 py-1 rounded-2" href="{{ route('product.category', $cat->slug) }}">Show More</a>
                    </div>
    
                    <!-- Tab panes -->
                    @if($products != null)
                    <!-- Cat Data -->
                    <div class="row">
                        @forelse( \App\Models\product::where('category_id','=',$cat->id)->with('colors.color_name')->inRandomOrder()->take(4)->get() as $item )
                        
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
                        @empty
                        <h4 class="text-center">Data Not Found!!</h4>
                        @endforelse
                    </div>

                    @endif
                </div>
            @endif
        @endforeach

        
    </div>
</section>