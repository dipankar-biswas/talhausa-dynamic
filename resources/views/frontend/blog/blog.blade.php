@extends('frontend.layouts.master')
@section('title','Blogs | Talha USA Online E-Commerce Business.')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/blog.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/emojis.css') }}">
@endsection



@section('content')
    <!-- Page Code Start -->
    <section class="banner bg-light" style="background-image: url('{{ asset('frontend/assets/images/banner/banner.webp') }}')">
        <div class="heading text-center">
            <h1 class="title text-white fw-bold">Blog</h1>
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </section>
    <section class="blogs section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-search bg-white mb-3 dt-none ph-lg-block">
                                <div class="d-flex justify-content-center align-items-center column-gap-3">
                                    <div class="input-group input-group-lg">
                                        <input type="text" class="form-control search-input" aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-lg" placeholder="Product Search...">
                                        <div class="input-group-text p-0">
                                            <button type="button" class="btn custom-btn btn-b0 fs-3 w-60"><i
                                                    class="fa-solid fa-magnifying-glass"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="blog shadow-sm my-3">
                                <a href="blog-details.html" class="link thumb">
                                    <img src="{{ asset('frontend/assets/images/blog/01.jpg') }}" alt="Blog Image">
                                </a>
                                <div class="content">
                                    <h2 class="title">
                                        <a href="blog-details.html" class="link">The Best Features Coming to iOS and Web design</a>
                                    </h2>
                                    <div class="media">
                                        <div class="avatar">
                                            <a href="#" class="link">
                                                <img src="{{ asset('frontend/assets/images/avatar.jpg') }}" alt="Image">
                                            </a>
                                        </div>
                                        <div class="avatar-info">
                                            <div class="person list">by <a href="#" class="link">Dipankar</a></div>
                                            <div class="category list"><a href="#" class="link">Design</a></div>
                                            <div class="date list">21.08.23 11:20am</div>
                                        </div>
                                    </div>
                                    <ul class="category">
                                        <li class="item">
                                            <a href="#" class="link">news</a>
                                        </li>
                                        <li class="item">
                                            <a href="#" class="link">sports</a>
                                        </li>
                                        <li class="item">
                                            <a href="#" class="link">foods</a>
                                        </li>
                                    </ul>
                                    <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore, eius! Quasi consequuntur doloribus optio obcaecati aliquid quisquam, Quasi consequuntur doloribus optio obcaecati aliquid quisquam</p>
                                    <div class="social-action">
                                        <ul class="items">
                                            <li class="item social-like">
                                                <div class="link blog-like-btn">
                                                    <div class="icon"><i class="fa-solid fa-thumbs-up"></i></div>
                                                    <div class="txt">Like</div>
                                                </div>
                                                <!-- Social Emojis Start -->
                                                <div class="social-emojis blog-like-div shadow rounded-2 px-3 py-3">
                                                    <div class="emoji emoji--like">
                                                    <div class="emoji__hand">
                                                        <div class="emoji__thumb"></div>
                                                    </div>
                                                    </div>
                                                    <div class="emoji emoji--love">
                                                        <div class="emoji__heart"></div>
                                                    </div>
                                                    <div class="emoji emoji--haha">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyes">
                                                                <div class="emoji__mouth">
                                                                    <div class="emoji__tongue"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--yay">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__mouth"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--wow">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__eyes">
                                                                    <div class="emoji__mouth"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--sad">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__eyes">
                                                                    <div class="emoji__mouth"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--angry">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__eyes">
                                                                    <div class="emoji__mouth"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Social Emojis End -->
                                            </li>
                                            <li class="item">
                                                <div class="link">
                                                    <div class="icon"><i class="fa-solid fa-comment-dots"></i></div>
                                                    <div class="txt">Comment</div>
                                                </div>
                                            </li>
                                            <li class="item social-share">
                                                <div class="link blog-share-btn">
                                                    <div class="icon"><i class="fa-solid fa-share-nodes"></i></div>
                                                    <div class="txt">Share</div>
                                                </div>
                                                <!-- Share Social -->
                                                <div class="share social blog-share-div shadow rounded-2 d-flex align-items-center column-gap-3 px-3 py-3">
                                                    <ul class="d-flex column-gap-2">
                                                        <li>
                                                            <a href="#" class="facebook" title="Facebook">
                                                                <i class="fa-brands fa-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="twitter" title="Twitter">
                                                                <i class="fa-brands fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="instagram" title="Instagram">
                                                                <i class="fa-brands fa-instagram"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="linkedin" title="Linkedin">
                                                                <i class="fa-brands fa-linkedin-in"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="youtube" title="Youtube">
                                                                <i class="fa-brands fa-youtube"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Share Social -->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="blog shadow-sm my-3">
                                <a href="blog-details.html" class="link thumb">
                                    <img src="{{ asset('frontend/assets/images/blog/02.jpg') }}" alt="Blog Image">
                                </a>
                                <div class="content">
                                    <h2 class="title">
                                        <a href="blog-details.html" class="link">Latest Quirky Opening Sentence or Paragraph</a>
                                    </h2>
                                    <div class="media">
                                        <div class="avatar">
                                            <a href="#" class="link">
                                                <img src="{{ asset('frontend/assets/images/avatar.jpg') }}" alt="Image">
                                            </a>
                                        </div>
                                        <div class="avatar-info">
                                            <div class="person list">by <a href="#" class="link">Dipankar</a></div>
                                            <div class="category list"><a href="#" class="link">Design</a></div>
                                            <div class="date list">21.08.23 11:20am</div>
                                        </div>
                                    </div>
                                    <ul class="category">
                                        <li class="item">
                                            <a href="#" class="link">news</a>
                                        </li>
                                        <li class="item">
                                            <a href="#" class="link">sports</a>
                                        </li>
                                        <li class="item">
                                            <a href="#" class="link">foods</a>
                                        </li>
                                    </ul>
                                    <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore, eius! Quasi consequuntur doloribus optio obcaecati aliquid quisquam, Quasi consequuntur doloribus optio obcaecati aliquid quisquam</p>
                                    <div class="social-action">
                                        <ul class="items">
                                            <li class="item social-like">
                                                <div class="link blog-like-btn">
                                                    <div class="icon"><i class="fa-solid fa-thumbs-up"></i></div>
                                                    <div class="txt">Like</div>
                                                </div>
                                                <!-- Social Emojis Start -->
                                                <div class="social-emojis blog-like-div shadow rounded-2 px-3 py-3">
                                                    <div class="emoji emoji--like">
                                                    <div class="emoji__hand">
                                                        <div class="emoji__thumb"></div>
                                                    </div>
                                                    </div>
                                                    <div class="emoji emoji--love">
                                                        <div class="emoji__heart"></div>
                                                    </div>
                                                    <div class="emoji emoji--haha">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyes">
                                                                <div class="emoji__mouth">
                                                                    <div class="emoji__tongue"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--yay">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__mouth"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--wow">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__eyes">
                                                                    <div class="emoji__mouth"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--sad">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__eyes">
                                                                    <div class="emoji__mouth"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--angry">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__eyes">
                                                                    <div class="emoji__mouth"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Social Emojis End -->
                                            </li>
                                            <li class="item">
                                                <div class="link">
                                                    <div class="icon"><i class="fa-solid fa-comment-dots"></i></div>
                                                    <div class="txt">Comment</div>
                                                </div>
                                            </li>
                                            <li class="item social-share">
                                                <div class="link blog-share-btn">
                                                    <div class="icon"><i class="fa-solid fa-share-nodes"></i></div>
                                                    <div class="txt">Share</div>
                                                </div>
                                                <!-- Share Social -->
                                                <div class="share social blog-share-div shadow rounded-2 d-flex align-items-center column-gap-3 px-3 py-3">
                                                    <ul class="d-flex column-gap-2">
                                                        <li>
                                                            <a href="#" class="facebook" title="Facebook">
                                                                <i class="fa-brands fa-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="twitter" title="Twitter">
                                                                <i class="fa-brands fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="instagram" title="Instagram">
                                                                <i class="fa-brands fa-instagram"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="linkedin" title="Linkedin">
                                                                <i class="fa-brands fa-linkedin-in"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="youtube" title="Youtube">
                                                                <i class="fa-brands fa-youtube"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Share Social -->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="blog shadow-sm my-3">
                                <a href="blog-details.html" class="link thumb">
                                    <img src="{{ asset('frontend/assets/images/blog/03.jpg') }}" alt="Blog Image">
                                </a>
                                <div class="content">
                                    <h2 class="title">
                                        <a href="blog-details.html" class="link">Share an Amazing and Shocking Fact or Statistic</a>
                                    </h2>
                                    <div class="media">
                                        <div class="avatar">
                                            <a href="#" class="link">
                                                <img src="{{ asset('frontend/assets/images/avatar.jpg') }}" alt="Image">
                                            </a>
                                        </div>
                                        <div class="avatar-info">
                                            <div class="person list">by <a href="#" class="link">Dipankar</a></div>
                                            <div class="category list"><a href="#" class="link">Design</a></div>
                                            <div class="date list">21.08.23 11:20am</div>
                                        </div>
                                    </div>
                                    <ul class="category">
                                        <li class="item">
                                            <a href="#" class="link">news</a>
                                        </li>
                                        <li class="item">
                                            <a href="#" class="link">sports</a>
                                        </li>
                                        <li class="item">
                                            <a href="#" class="link">foods</a>
                                        </li>
                                    </ul>
                                    <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore, eius! Quasi consequuntur doloribus optio obcaecati aliquid quisquam, Quasi consequuntur doloribus optio obcaecati aliquid quisquam</p>
                                    <div class="social-action">
                                        <ul class="items">
                                            <li class="item social-like">
                                                <div class="link blog-like-btn">
                                                    <div class="icon"><i class="fa-solid fa-thumbs-up"></i></div>
                                                    <div class="txt">Like</div>
                                                </div>
                                                <!-- Social Emojis Start -->
                                                <div class="social-emojis blog-like-div shadow rounded-2 px-3 py-3">
                                                    <div class="emoji emoji--like">
                                                    <div class="emoji__hand">
                                                        <div class="emoji__thumb"></div>
                                                    </div>
                                                    </div>
                                                    <div class="emoji emoji--love">
                                                        <div class="emoji__heart"></div>
                                                    </div>
                                                    <div class="emoji emoji--haha">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyes">
                                                                <div class="emoji__mouth">
                                                                    <div class="emoji__tongue"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--yay">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__mouth"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--wow">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__eyes">
                                                                    <div class="emoji__mouth"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--sad">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__eyes">
                                                                    <div class="emoji__mouth"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--angry">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__eyes">
                                                                    <div class="emoji__mouth"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Social Emojis End -->
                                            </li>
                                            <li class="item">
                                                <div class="link">
                                                    <div class="icon"><i class="fa-solid fa-comment-dots"></i></div>
                                                    <div class="txt">Comment</div>
                                                </div>
                                            </li>
                                            <li class="item social-share">
                                                <div class="link blog-share-btn">
                                                    <div class="icon"><i class="fa-solid fa-share-nodes"></i></div>
                                                    <div class="txt">Share</div>
                                                </div>
                                                <!-- Share Social -->
                                                <div class="share social blog-share-div shadow rounded-2 d-flex align-items-center column-gap-3 px-3 py-3">
                                                    <ul class="d-flex column-gap-2">
                                                        <li>
                                                            <a href="#" class="facebook" title="Facebook">
                                                                <i class="fa-brands fa-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="twitter" title="Twitter">
                                                                <i class="fa-brands fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="instagram" title="Instagram">
                                                                <i class="fa-brands fa-instagram"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="linkedin" title="Linkedin">
                                                                <i class="fa-brands fa-linkedin-in"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="youtube" title="Youtube">
                                                                <i class="fa-brands fa-youtube"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Share Social -->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="blog shadow-sm my-3">
                                <a href="blog-details.html" class="link thumb">
                                    <img src="{{ asset('frontend/assets/images/blog/04.jpg') }}" alt="Blog Image">
                                </a>
                                <div class="content">
                                    <h2 class="title">
                                        <a href="blog-details.html" class="link">Withhold a Compelling Piece of Information</a>
                                    </h2>
                                    <div class="media">
                                        <div class="avatar">
                                            <a href="#" class="link">
                                                <img src="{{ asset('frontend/assets/images/avatar.jpg') }}" alt="Image">
                                            </a>
                                        </div>
                                        <div class="avatar-info">
                                            <div class="person list">by <a href="#" class="link">Dipankar</a></div>
                                            <div class="category list"><a href="#" class="link">Design</a></div>
                                            <div class="date list">21.08.23 11:20am</div>
                                        </div>
                                    </div>
                                    <ul class="category">
                                        <li class="item">
                                            <a href="#" class="link">news</a>
                                        </li>
                                        <li class="item">
                                            <a href="#" class="link">sports</a>
                                        </li>
                                        <li class="item">
                                            <a href="#" class="link">foods</a>
                                        </li>
                                    </ul>
                                    <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore, eius! Quasi consequuntur doloribus optio obcaecati aliquid quisquam, Quasi consequuntur doloribus optio obcaecati aliquid quisquam</p>
                                    <div class="social-action">
                                        <ul class="items">
                                            <li class="item social-like">
                                                <div class="link blog-like-btn">
                                                    <div class="icon"><i class="fa-solid fa-thumbs-up"></i></div>
                                                    <div class="txt">Like</div>
                                                </div>
                                                <!-- Social Emojis Start -->
                                                <div class="social-emojis blog-like-div shadow rounded-2 px-3 py-3">
                                                    <div class="emoji emoji--like">
                                                    <div class="emoji__hand">
                                                        <div class="emoji__thumb"></div>
                                                    </div>
                                                    </div>
                                                    <div class="emoji emoji--love">
                                                        <div class="emoji__heart"></div>
                                                    </div>
                                                    <div class="emoji emoji--haha">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyes">
                                                                <div class="emoji__mouth">
                                                                    <div class="emoji__tongue"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--yay">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__mouth"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--wow">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__eyes">
                                                                    <div class="emoji__mouth"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--sad">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__eyes">
                                                                    <div class="emoji__mouth"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--angry">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__eyes">
                                                                    <div class="emoji__mouth"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Social Emojis End -->
                                            </li>
                                            <li class="item">
                                                <div class="link">
                                                    <div class="icon"><i class="fa-solid fa-comment-dots"></i></div>
                                                    <div class="txt">Comment</div>
                                                </div>
                                            </li>
                                            <li class="item social-share">
                                                <div class="link blog-share-btn">
                                                    <div class="icon"><i class="fa-solid fa-share-nodes"></i></div>
                                                    <div class="txt">Share</div>
                                                </div>
                                                <!-- Share Social -->
                                                <div class="share social blog-share-div shadow rounded-2 d-flex align-items-center column-gap-3 px-3 py-3">
                                                    <ul class="d-flex column-gap-2">
                                                        <li>
                                                            <a href="#" class="facebook" title="Facebook">
                                                                <i class="fa-brands fa-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="twitter" title="Twitter">
                                                                <i class="fa-brands fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="instagram" title="Instagram">
                                                                <i class="fa-brands fa-instagram"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="linkedin" title="Linkedin">
                                                                <i class="fa-brands fa-linkedin-in"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="youtube" title="Youtube">
                                                                <i class="fa-brands fa-youtube"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Share Social -->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="blog shadow-sm my-3">
                                <a href="blog-details.html" class="link thumb">
                                    <img src="{{ asset('frontend/assets/images/blog/05.jpg') }}" alt="Blog Image">
                                </a>
                                <div class="content">
                                    <h2 class="title">
                                        <a href="blog-details.html" class="link">Unadvertised Bonus Opening: Share a Quote</a>
                                    </h2>
                                    <div class="media">
                                        <div class="avatar">
                                            <a href="#" class="link">
                                                <img src="{{ asset('frontend/assets/images/avatar.jpg') }}" alt="Image">
                                            </a>
                                        </div>
                                        <div class="avatar-info">
                                            <div class="person list">by <a href="#" class="link">Dipankar</a></div>
                                            <div class="category list"><a href="#" class="link">Design</a></div>
                                            <div class="date list">21.08.23 11:20am</div>
                                        </div>
                                    </div>
                                    <ul class="category">
                                        <li class="item">
                                            <a href="#" class="link">news</a>
                                        </li>
                                        <li class="item">
                                            <a href="#" class="link">sports</a>
                                        </li>
                                        <li class="item">
                                            <a href="#" class="link">foods</a>
                                        </li>
                                    </ul>
                                    <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore, eius! Quasi consequuntur doloribus optio obcaecati aliquid quisquam, Quasi consequuntur doloribus optio obcaecati aliquid quisquam</p>
                                    <div class="social-action">
                                        <ul class="items">
                                            <li class="item social-like">
                                                <div class="link blog-like-btn">
                                                    <div class="icon"><i class="fa-solid fa-thumbs-up"></i></div>
                                                    <div class="txt">Like</div>
                                                </div>
                                                <!-- Social Emojis Start -->
                                                <div class="social-emojis blog-like-div shadow rounded-2 px-3 py-3">
                                                    <div class="emoji emoji--like">
                                                    <div class="emoji__hand">
                                                        <div class="emoji__thumb"></div>
                                                    </div>
                                                    </div>
                                                    <div class="emoji emoji--love">
                                                        <div class="emoji__heart"></div>
                                                    </div>
                                                    <div class="emoji emoji--haha">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyes">
                                                                <div class="emoji__mouth">
                                                                    <div class="emoji__tongue"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--yay">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__mouth"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--wow">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__eyes">
                                                                    <div class="emoji__mouth"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--sad">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__eyes">
                                                                    <div class="emoji__mouth"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--angry">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__eyes">
                                                                    <div class="emoji__mouth"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Social Emojis End -->
                                            </li>
                                            <li class="item">
                                                <div class="link">
                                                    <div class="icon"><i class="fa-solid fa-comment-dots"></i></div>
                                                    <div class="txt">Comment</div>
                                                </div>
                                            </li>
                                            <li class="item social-share">
                                                <div class="link blog-share-btn">
                                                    <div class="icon"><i class="fa-solid fa-share-nodes"></i></div>
                                                    <div class="txt">Share</div>
                                                </div>
                                                <!-- Share Social -->
                                                <div class="share social blog-share-div shadow rounded-2 d-flex align-items-center column-gap-3 px-3 py-3">
                                                    <ul class="d-flex column-gap-2">
                                                        <li>
                                                            <a href="#" class="facebook" title="Facebook">
                                                                <i class="fa-brands fa-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="twitter" title="Twitter">
                                                                <i class="fa-brands fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="instagram" title="Instagram">
                                                                <i class="fa-brands fa-instagram"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="linkedin" title="Linkedin">
                                                                <i class="fa-brands fa-linkedin-in"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="youtube" title="Youtube">
                                                                <i class="fa-brands fa-youtube"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Share Social -->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="blog shadow-sm my-3">
                                <a href="blog-details.html" class="link thumb">
                                    <img src="{{ asset('frontend/assets/images/blog/06.jpg') }}" alt="Blog Image">
                                </a>
                                <div class="content">
                                    <h2 class="title">
                                        <a href="blog-details.html" class="link">FJH Quirky Opening Sentence or Paragraph</a>
                                    </h2>
                                    <div class="media">
                                        <div class="avatar">
                                            <a href="#" class="link">
                                                <img src="{{ asset('frontend/assets/images/avatar.jpg') }}" alt="Image">
                                            </a>
                                        </div>
                                        <div class="avatar-info">
                                            <div class="person list">by <a href="#" class="link">Dipankar</a></div>
                                            <div class="category list"><a href="#" class="link">Design</a></div>
                                            <div class="date list">21.08.23 11:20am</div>
                                        </div>
                                    </div>
                                    <ul class="category">
                                        <li class="item">
                                            <a href="#" class="link">news</a>
                                        </li>
                                        <li class="item">
                                            <a href="#" class="link">sports</a>
                                        </li>
                                        <li class="item">
                                            <a href="#" class="link">foods</a>
                                        </li>
                                    </ul>
                                    <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore, eius! Quasi consequuntur doloribus optio obcaecati aliquid quisquam, Quasi consequuntur doloribus optio obcaecati aliquid quisquam</p>
                                    <div class="social-action">
                                        <ul class="items">
                                            <li class="item social-like">
                                                <div class="link blog-like-btn">
                                                    <div class="icon"><i class="fa-solid fa-thumbs-up"></i></div>
                                                    <div class="txt">Like</div>
                                                </div>
                                                <!-- Social Emojis Start -->
                                                <div class="social-emojis blog-like-div shadow rounded-2 px-3 py-3">
                                                    <div class="emoji emoji--like">
                                                    <div class="emoji__hand">
                                                        <div class="emoji__thumb"></div>
                                                    </div>
                                                    </div>
                                                    <div class="emoji emoji--love">
                                                        <div class="emoji__heart"></div>
                                                    </div>
                                                    <div class="emoji emoji--haha">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyes">
                                                                <div class="emoji__mouth">
                                                                    <div class="emoji__tongue"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--yay">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__mouth"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--wow">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__eyes">
                                                                    <div class="emoji__mouth"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--sad">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__eyes">
                                                                    <div class="emoji__mouth"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="emoji emoji--angry">
                                                        <div class="emoji__face">
                                                            <div class="emoji__eyebrows">
                                                                <div class="emoji__eyes">
                                                                    <div class="emoji__mouth"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Social Emojis End -->
                                            </li>
                                            <li class="item">
                                                <div class="link">
                                                    <div class="icon"><i class="fa-solid fa-comment-dots"></i></div>
                                                    <div class="txt">Comment</div>
                                                </div>
                                            </li>
                                            <li class="item social-share">
                                                <div class="link blog-share-btn">
                                                    <div class="icon"><i class="fa-solid fa-share-nodes"></i></div>
                                                    <div class="txt">Share</div>
                                                </div>
                                                <!-- Share Social -->
                                                <div class="share social blog-share-div shadow rounded-2 d-flex align-items-center column-gap-3 px-3 py-3">
                                                    <ul class="d-flex column-gap-2">
                                                        <li>
                                                            <a href="#" class="facebook" title="Facebook">
                                                                <i class="fa-brands fa-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="twitter" title="Twitter">
                                                                <i class="fa-brands fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="instagram" title="Instagram">
                                                                <i class="fa-brands fa-instagram"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="linkedin" title="Linkedin">
                                                                <i class="fa-brands fa-linkedin-in"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="youtube" title="Youtube">
                                                                <i class="fa-brands fa-youtube"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Share Social -->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 mb-4">
                        <div class="col-lg-12">
                            <div class="blog-pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                        <a class="page-link">Prev</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                    </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="blog-aside">
                        <div class="blog-search bg-white shadow-sm px-3 py-4 mb-5 ph-lg-none">
                            <div class="d-flex justify-content-center align-items-center column-gap-3">
                                <div class="input-group input-group-lg">
                                    <input type="text" class="form-control search-input" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-lg" placeholder="Product Search...">
                                    <div class="input-group-text p-0">
                                        <button type="button" class="btn custom-btn btn-b0 fs-3 w-60"><i
                                                class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-recent-post bg-white shadow-sm px-3 py-4 mb-5">
                            <h3 class="title text-secondary">Recent Post</h3>
                            <hr>
                            <ul class="blog-post-lists d-flex flex-column row-gap-4">
                                <li class="post d-flex column-gap-3">
                                    <div class="thumb">
                                        <a href="blog-details.html" class="link">
                                            <img src="{{ asset('frontend/assets/images/blog/06.jpg') }}" alt="Post" width="90px" height="75px">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h2 class="title">
                                            <a href="blog-details.html" class="link text-secondary text-hover">FJH Quirky Opening Sentence or Paragraph</a>
                                        </h2>
                                        <div class="date text-body-tertiary">21.08.23 11:20am</div>
                                    </div>
                                </li>
                                <li class="post d-flex column-gap-3">
                                    <div class="thumb">
                                        <a href="blog-details.html" class="link">
                                            <img src="{{ asset('frontend/assets/images/blog/05.jpg') }}" alt="Post" width="90px" height="75px">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h2 class="title">
                                            <a href="blog-details.html" class="link text-secondary text-hover">Unadvertised Bonus Opening: Share a Quote</a>
                                        </h2>
                                        <div class="date text-body-tertiary">21.08.23 11:20am</div>
                                    </div>
                                </li>
                                <li class="post d-flex column-gap-3">
                                    <div class="thumb">
                                        <a href="blog-details.html" class="link">
                                            <img src="{{ asset('frontend/assets/images/blog/04.jpg') }}" alt="Post" width="90px" height="75px">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h2 class="title">
                                            <a href="blog-details.html" class="link text-secondary text-hover">Withhold a Compelling Piece of Information</a>
                                        </h2>
                                        <div class="date text-body-tertiary">21.08.23 11:20am</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-categories bg-white shadow-sm px-3 py-4 mb-5">
                            <h3 class="title text-secondary">Categories</h3>
                            <hr>
                            <ul class="category-lists">
                                <li class="list">
                                    <a href="#" class="link text-secondary text-hover d-flex justify-content-between align-items-center py-2">
                                        <span class="txt">Graphic Design</span>
                                        <span class="num">2</span>
                                    </a>
                                </li>
                                <li class="list">
                                    <a href="#" class="link text-secondary text-hover d-flex justify-content-between align-items-center py-2">
                                        <span class="txt">UI UX Design</span>
                                        <span class="num">5</span>
                                    </a>
                                </li>
                                <li class="list">
                                    <a href="#" class="link text-secondary text-hover d-flex justify-content-between align-items-center py-2">
                                        <span class="txt">Web Design</span>
                                        <span class="num">11</span>
                                    </a>
                                </li>
                                <li class="list">
                                    <a href="#" class="link text-secondary text-hover d-flex justify-content-between align-items-center py-2">
                                        <span class="txt">Web Development</span>
                                        <span class="num">8</span>
                                    </a>
                                </li>
                                <li class="list">
                                    <a href="#" class="link text-secondary text-hover d-flex justify-content-between align-items-center py-2">
                                        <span class="txt">Business</span>
                                        <span class="num">4</span>
                                    </a>
                                </li>
                                <li class="list">
                                    <a href="#" class="link text-secondary text-hover d-flex justify-content-between align-items-center py-2">
                                        <span class="txt">Marketing</span>
                                        <span class="num">15</span>
                                    </a>
                                </li>
                                <li class="list">
                                    <a href="#" class="link text-secondary text-hover d-flex justify-content-between align-items-center py-2">
                                        <span class="txt">Uncategorized</span>
                                        <span class="num">1</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-tags bg-white shadow-sm px-3 py-4">
                            <h3 class="title text-secondary">Tags</h3>
                            <hr>
                            <ul class="tags-lists">
                                <li class="item">
                                    <a href="#" class="link">Headphone</a>
                                </li>
                                <li class="item">
                                    <a href="#" class="link">Blog</a>
                                </li>
                                <li class="item">
                                    <a href="#" class="link">news</a>
                                </li>
                                <li class="item">
                                    <a href="#" class="link">Hooby</a>
                                </li>
                                <li class="item">
                                    <a href="#" class="link">sports</a>
                                </li>
                                <li class="item">
                                    <a href="#" class="link">Design</a>
                                </li>
                                <li class="item">
                                    <a href="#" class="link">foods</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Code End -->
@endsection



@section('scripts')
<script type="text/javascript" src="{{ asset('frontend/assets/js/blog.js') }}"></script>
@endsection