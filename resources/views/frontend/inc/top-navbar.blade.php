@php
$setup = \App\Models\SiteSetup::where('id',1)->first();
@endphp

<div class="top-navbar">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-6 col-md-6 col-sm-5 col-12">
                <ul class="list-inline d-flex justify-content-start align-items-center h-100">
                    <li class="list-inline-item text-white">
                        @if(isset($setup->email))
                        <a href="mailto:{{ $setup->email }}"class="text-white text-decoration-underline"><i class="fa-regular fa-envelope"></i> {{ $setup->email }}</a>
                        @endif
                    </li>
                    <li class="list-inline-item text-white">
                        @if(isset($setup->hot_line))
                        <a href="tel:{{ $setup->hot_line }}" class="text-white text-decoration-underline"><i class="fa-solid fa-phone"></i> {{ $setup->hot_line }}</a>
                        @endif
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-7 col-12">
                <ul class="list-inline d-flex justify-content-end align-items-center h-100 column-gap-3">
                    <li class="list-inline-item text-white">
                    @if(isset($setup->address))
                    <p class="text-white text-decoration-underline mb-0"><i class="fa-solid fa-location-dot"></i> {{ $setup->address }}</p>
                    @endif
                    </li>

                    {{-- <li class="list-inline-item text-white dropdown">
                        <a class="dropdown-toggle text-white d-flex align-items-center" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-language pe-2"></i> Language
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">Bangla</a></li>
                            <li><a class="dropdown-item" href="#">Hindi</a></li>
                        </ul>
                    </li> --}}

                </ul>
            </div>
        </div>
    </div>
</div>