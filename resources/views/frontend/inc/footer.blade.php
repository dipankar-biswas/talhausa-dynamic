@php
$setup = \App\Models\SiteSetup::where('id',1)->first();
$categoryData = \App\Models\category::where('parentid',0)->orderby("id","DESC")->take(6)->get();
@endphp
<!-- Footer Code Start -->
<footer class="pt-5 pb-4">
    <div class="container">
        <div class="row">
            <div class="widgets">
                <div class="widget">
                    <h3 class="title">About Us</h3>
                    <div class="footer-logo">
                        <a href="{{ route('home-page') }}">
                            @if(isset($setup->footer_logo)) 
                            <img src="{{ asset($setup->footer_logo) }}" alt="Logo">
                            @endif
                        </a>
                    </div>
                    <p>@if(isset($setup->footer_content)) {{ $setup->footer_content }} @endif</p>
                </div>
                <div class="widget">
                    <h3 class="title">Useful links</h3>
                    <ul class="lists">
                        <li class="list"><a href="{{url('/')}}" class="link">Contact us</a></li>
                        <!-- <li class="list"><a href="faq.html" class="link">Common FAQs</a></li> -->
                        <li class="list"><a href="{{url('/')}}" class="link">Terms & Conditions</a></li>
                        <li class="list"><a href="{{url('/')}}" class="link">Return policy</a></li>
                        <!-- <li class="list"><a href="cancellation.html" class="link">Cancellation</a></li> -->
                        <li class="list"><a href="{{Route('track-order.order_tracking')}}" class="link">Track orders</a></li>
                    </ul>
                </div>
                <div class="widget">
                    <h3 class="title">Online Shopping</h3>
                    <ul class="lists">
                        @if(isset($categoryData))
                            @foreach($categoryData as $item)
                                <li class="list">
                                    <a href="{{ route('product.category', $item->slug) }}" class="link">{{ $item->name }}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class="widget">
                    <h3 class="title">Contact Us</h3>
                    <div class="cont-info">
                        <div class="_info">
                            <div class="_title">Phone</div>
                            <p>@if(isset($setup->phone))<a href="tel:{{ $setup->phone }}" class="text-decoration-underline">{{ $setup->phone }}</a>@endif</p>
                        </div>
                        <div class="_info">
                            <div class="_title">Email</div>
                            <p>@if(isset($setup->email))<a href="mailto:{{ $setup->email }}"
                            class="text-decoration-underline">{{ $setup->email }}</a>@endif</p>
                        </div>
                        <div class="_info">
                            <div class="_title">Address</div>
                            <p>@if(isset($setup->address)) {{ $setup->address }} @endif</p>
                        </div>
                    </div>
                </div>
                <div class="widget">
                    {{-- <h3 class="title">Experience App on Mobile</h3>
                    <div class="apps-download">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-android"></i>
                                    <div class="content">
                                        <p>get it on</p>
                                        <h5>Goole play</h5>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="active">
                                    <i class="fa-brands fa-apple"></i>
                                    <div class="content">
                                        <p>get it on</p>
                                        <h5>app store</h5>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                    <div class="social">
                        <div class="_title">follow us</div>
                        <ul>
                            <li>
                                <a href="{{ !empty($setup->facebook) ? $setup->facebook : '#' }}" class="facebook" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="{{ !empty($setup->twitter) ? $setup->twitter : '#' }}" class="twitter" title="Twitter"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="{{ !empty($setup->instagram) ? $setup->instagram : '#' }}" class="instagram" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="{{ !empty($setup->linkedin) ? $setup->linkedin : '#' }}" class="linkedin" title="Linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="{{ !empty($setup->youtube) ? $setup->youtube : '#' }}" class="youtube" title="Youtube"><i class="fa-brands fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright border-top mt-3">
            <p class="text-secondary text-center pt-4 mb-0">@if(isset($setup->copyright_text)) {!! $setup->copyright_text !!} @endif</p>
        </div>
    </div>
</footer>
<!-- Footer Code End -->