<div class="left-section shadow rounded-1 px-3 py-4">
    <!-- <div class="filter-title border-bottom pb-2 mb-4 d-flex justify-content-between align-items-center">
        <h2 class="heading text-body fs-5 fw-bold">Filter</h2>
        <div class="dt-none ph-lg-block filter-close fs-4 text-hover"><i class="fa-solid fa-xmark"></i></div>
    </div>
    <div class="price-range mb-3">
        <div class="price-input">
            <div class="field">
                <span>Min</span>
                <input type="number" class="input-min" value="2500">
            </div>
            <div class="separator">-</div>
            <div class="field">
                <span>Max</span>
                <input type="number" class="input-max" value="7500">
            </div>
        </div>

        <div class="slider">
            <div class="progress"></div>
        </div>
        <div class="range-input">
            <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
            <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
        </div>
    </div> -->
    <div class="cat-lists">
        <div class="heading text-secondary fs-5 fw-bold border-bottom pb-2 mb-3">Categories</div>
        <div class="items d-flex justify-content-start flex-column">
            @php
            $parentCat = \App\Models\category::where("status", 1)->where('parentid','=',0)->get()
            @endphp
            @foreach($parentCat as $item)
            @php
            $parentSCat = \App\Models\category::where("status", 1)->where('parentid','=',$item->id)->get()
            @endphp
            <div class="item {{ count($parentSCat) > 0 ? 'tree' : '' }}">
                <a href="{{ route('product.search') ? route('product.category',$item->slug) : $item->slug }}" class="title link text-body text-bold text-hover" data-catid="{{ $item->id }}">{{ $item->name }}</a>
                @if(count($parentSCat) > 0)
                <ul class="lists px-4">
                    @foreach($parentSCat as $sitem)
                    <li class="list">
                        <a href="{{ route('product.search') ? route('product.category', [$item->slug, $sitem->slug]) : $sitem->slug }}" class="link text-reset text-hover" data-pcatid="{{ $sitem->parentid }}" data-catid="{{ $sitem->id }}">{{ $sitem->name }}</a>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
            @endforeach
        </div>
    </div>
    <div class="brand-lists mt-5">
        <div class="heading text-secondary fs-5 fw-bold border-bottom pb-2 mb-3">Design</div>
        <div class="lists d-flex flex-column row-gap-2">
            @php
            $necks = \App\Models\Neck::where("status", 1)->get()
            @endphp
            @foreach($necks as $key=>$item)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="{{ $item->id }}" id="flexCheckDefault{{$key}}">
                <label class="form-check-label text-hover" for="flexCheckDefault{{$key}}">{{ $item->name }}</label>
            </div>
            @endforeach
        </div>
    </div>
</div>