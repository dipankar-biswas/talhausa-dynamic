<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php
    $setup = \App\Models\SiteSetup::where('id',1)->first();
    @endphp
    <link rel="icon" type="image/x-icon" href="{{ asset($setup->header_logo) }}">
    
    @php
    $pdt = \App\Models\product::where("status", 1)->where('slug',request()->slug)->first();
    @endphp
    <title>@if(isset($pdt->metatitle)){!! $pdt->metatitle !!} @else @yield('title') @endif</title>
    <meta name="title" content="@if(isset($pdt->metatitle)){!! $pdt->metatitle !!} @else @yield('title') @endif">
    <meta name="description" content="@if(isset($pdt->metadescription)){!! $pdt->metadescription !!} @else Explore a world of T-Shirt at Online E-Commerce Business. Discover top-quality t-shirt and indulge in a seamless shopping experience. Find the latest trends and must-have items, all backed by our commitment to quality and customer satisfaction. @endif">
    <meta name="keywords" content="@if(isset($pdt->tags)){!! $pdt->tags !!} @else talha, talhausa, talhausa.com, comfort tee, crew neck comfortsoft, crewneck sweatshirt sweatpants, long sleeve tee, pullover hoodie, ring-spun, tank top, cargo shorts, women's comfort tee, women's premium v-neck tee, v-neck tee, digisoft printed premium tee, baby premium onesie, premium hoodie, toddler classic tee, women's flowy tank top, sweatshorts, boxer briefs, socks @endif">
    <meta name="author" content="Enrich IT Solutions">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Social Media -->
    <meta property="og:type" content="@if(isset($pdt->tags)){!! $pdt->tags !!} @else talha, talhausa, talhausa.com, comfort tee, crew neck comfortsoft, crewneck sweatshirt sweatpants, long sleeve tee, pullover hoodie, ring-spun, tank top, cargo shorts, women's comfort tee, women's premium v-neck tee, v-neck tee, digisoft printed premium tee, baby premium onesie, premium hoodie, toddler classic tee, women's flowy tank top, sweatshorts, boxer briefs, socks @endif" />
    <meta property="og:title" content="@if(isset($pdt->metatitle)){!! $pdt->metatitle !!} @else @yield('title') @endif" />
    <meta property="og:description" content="@if(isset($pdt->metadescription)){!! $pdt->metadescription !!} @else Explore a world of T-Shirt at Online E-Commerce Business. Discover top-quality t-shirt and indulge in a seamless shopping experience. Find the latest trends and must-have items, all backed by our commitment to quality and customer satisfaction. @endif" />
    <meta property="og:url" content="https://talhausa.com/" />
    <meta property="og:image" content="@if(isset($pdt->neck->image)){{ asset($pdt->neck->image) }} @else {{ asset('frontend/assets/images/Talha Usa Logo.png') }} @endif" />

    <!-- Twitter -->
    <meta name="twitter:card" content="@if(isset($pdt->tags)){!! $pdt->tags !!} @else talha, talhausa, talhausa.com, comfort tee, crew neck comfortsoft, crewneck sweatshirt sweatpants, long sleeve tee, pullover hoodie, ring-spun, tank top, cargo shorts, women's comfort tee, women's premium v-neck tee, v-neck tee, digisoft printed premium tee, baby premium onesie, premium hoodie, toddler classic tee, women's flowy tank top, sweatshorts, boxer briefs, socks @endif" />
    <meta name="twitter:site" content="@digitalocean" />
    <meta name="twitter:title" content="@if(isset($pdt->metatitle)){!! $pdt->metatitle !!} @else @yield('title') @endif" />
    <meta name="twitter:description" content="@if(isset($pdt->metadescription)){!! $pdt->metadescription !!} @else Explore a world of T-Shirt at Online E-Commerce Business. Discover top-quality t-shirt and indulge in a seamless shopping experience. Find the latest trends and must-have items, all backed by our commitment to quality and customer satisfaction. @endif" />
    <meta name="twitter:image" content="@if(isset($pdt->neck->image)){{ asset($pdt->neck->image) }} @else {{ asset('frontend/assets/images/Talha Usa Logo.png') }} @endif" />

    <!-- Css Link -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/categories.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/drag-slide.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/drag-slide.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/alertpopup.css') }}">
    <script type='application/ld+json'> 
            {
              "@context": "http://www.schema.org",
              "@type": "ShoppingCenter",
              "name": "Talhausa.com",
              "url": "https://www.talhausa.com/",
              "logo": "https://www.talhausa.com/setup/9b2be5d1b3.png",

              "image": "https://www.talhausa.com/setup/9b2be5d1b3.png",

              "description": "Talhausa is an online shopping center. ",
              "address": {
                "@type": "PostalAddress",
                "streetAddress": "153 W 27th Street Store 5, New York, NY 10001",
                "addressLocality": "New York",
                "addressRegion": "New York",
                "postalCode": "10001",
                "addressCountry": "New York"
              },
              "geo": {
                "@type": "GeoCoordinates",
                "latitude": "40.7463405",
                "longitude": "73.9928491"
              },
              "hasMap": "https://maps.app.goo.gl/SJgoB8397uWLheQ88",
              "openingHours": "Mo, Tu, We, Th, Fr, Su - Sa 01:00-",
              "contactPoint": {
                "@type": "ContactPoint",
                "contactType": "Call",
                "telephone": "2122139069"
              }
            }
        </script>
    @yield('stylesheet')
</head>

<body>
    <div class="apps">
        <!-- Top Navbar Start -->
        @include('frontend.inc.top-navbar')
        <!-- Top Navbar End -->

        <!-- Header Code Start -->
        @include('frontend.inc.header')
        <!-- Header Code End -->


        <!-- Body Code Start -->
        <div class="page-wrapper">
            @yield('content')
        </div>
        <!-- Body Code End -->



        <!-- Footer Code Start -->
        @include('frontend.inc.footer')
        <!-- Footer Code End -->

        <!-- Alert Popup Code Start -->
        @include('frontend.inc.alertpopup')
        <!-- Alert Popup Code End -->

        <!-- Modal -->
        <div class="modal fade pdt-detail-view-modal" tabindex="-1" data-bs-backdrop="static">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Product View</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pdt-detail-view-data">
                        <div class="py-5 text-center">
                            <img src="{{ asset('frontend/assets/images/loader.gif') }}" alt="Loading">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Site Overlay -->
        <div class="site-overlay"></div>

    </div>

    <!-- Mobile Tools -->
    @include('frontend.inc.mobile-tools')

    <!-- Js Link -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/categories.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/alertpopup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/cart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/product-details.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/drag-slide.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/pdt-detail-view.js') }}"></script>
    @yield('scripts')
</body>

</html>