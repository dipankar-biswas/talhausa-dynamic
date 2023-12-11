@extends('frontend.layouts.master')
@section('title','Blog Details | Talha USA Online E-Commerce Business.')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/blog.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/emojis.css') }}">
@endsection



@section('content')
    <!-- Page Code Start -->
    <section class="banner bg-light" style="background-image: url('{{ asset('frontend/assets/images/banner/banner.webp') }}');">
        <div class="heading text-center">
            <h1 class="title text-white fw-bold">Blog Details</h1>
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </section>
    <section class="blogs section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
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
                    <!-- Details -->
                    <div class="details">
                        <div class="feature-image">
                            <img src="{{ asset('frontend/assets/images/blog/01.jpg') }}" alt="Blog Feature Iamge">
                        </div>
                        <div class="media py-2 mb-3">
                            <div class="avatar">
                                <a href="#" class="link">
                                    <img src="{{ asset('frontend/assets/images/avatar.webp') }}" alt="Image">
                                </a>
                            </div>
                            <div class="avatar-info">
                                <div class="person list">by <a href="#" class="link">Dipankar</a></div>
                                <div class="category list"><a href="#" class="link">Design</a></div>
                                <div class="date list">21.08.23 11:20am</div>
                            </div>
                        </div>
                        <h1 class="title mb-3">The Best Features Coming to iOS and Web design</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum ipsam culpa nobis eaque pariatur fugiat facere qui porro tenetur itaque ex nulla exercitationem sunt corporis illo illum minima, labore quae!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum ipsam culpa nobis eaque pariatur fugiat facere qui porro tenetur itaque ex nulla exercitationem sunt corporis illo illum minima, labore quae!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum ipsam culpa nobis eaque pariatur fugiat facere qui porro tenetur itaque ex nulla exercitationem sunt corporis illo illum minima, labore quae!
                        </p>
                        <article>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum nobis, repudiandae accusamus placeat, aliquam quo aspernatur et cumque tempore ipsa ea sapiente, vitae corrupti vel. Sunt corporis accusamus ullam veritatis!
                        </article>
                        <div class="images d-flex justify-content-between column-gap-3 mt-5">
                            <div class="image">
                                <img src="{{ asset('frontend/assets/images/blog/04.jpg') }}" alt="Image" class="mw-100">
                            </div>
                            <div class="image">
                                <img src="{{ asset('frontend/assets/images/blog/06.jpg') }}" alt="Image" class="mw-100">
                            </div>
                        </div>
                        <ol class="mt-4">
                            <li>HRETe GRTe SDFw</li>
                            <li>consectetur adipisicing elit. Ipsum ipsam c</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>sit amet, consectetur adipisicing elit. ere qui porro tenetur itaque ex nulla exercitationem</li>
                            <li>Cum nobis, repudiandae </li>
                            <li>Ipsum ipsam culpa nobis eaque pariatur fugiat fac</li>
                            <li>Features Coming to iOS and Web design</li>
                        </ol>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum ipsam culpa nobis eaque pariatur fugiat facere qui porro tenetur itaque ex nulla exercitationem sunt corporis illo illum minima, labore quae!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum ipsam culpa nobis eaque pariatur fugiat facere qui porro tenetur itaque ex nulla exercitationem sunt corporis illo illum minima, labore quae!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum ipsam culpa nobis eaque pariatur fugiat facere qui porro tenetur itaque ex nulla exercitationem sunt corporis illo illum minima, labore quae!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum ipsam culpa nobis eaque pariatur fugiat facere qui porro tenetur itaque ex nulla exercitationem sunt corporis illo illum minima, labore quae!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum ipsam culpa nobis eaque pariatur fugiat facere qui porro tenetur itaque ex nulla exercitationem sunt corporis illo illum minima, labore quae!
                        </p>
                    </div>
                    <!-- reviews -->
                    <div class="reviews mt-5">
                        <h4 class="title text-body">Reviews</h4>
                        <div class="items">
                            <div class="item">
                                <div class="review">
                                    <div class="avatar">
                                        <img src="{{ asset('frontend/assets/images/avatar.webp') }}" alt="Avatar">
                                    </div>
                                    <div class="content">
                                        <div class="head">
                                            <div class="name">Dipankar</div>
                                            <div class="date">21.08.23 11:20am</div>
                                        </div>
                                        <div class="text">
                                            <div class="msg">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur beatae vitae maxime dignissimos dicta cum qui! Laboriosam, quaerat voluptatem tempora, tempore facilis dicta soluta hic fuga deleniti, odit iure vero.
                                                <span class="text-decoration-underline text-active">See More</span>
                                            </div>
                                            <div class="reply text-decoration-underline cursor-pointer text-white custom-btn d-inline-block py-2 px-3 rounded-3 mt-3">Reply</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="reply-section ms-5 mt-4">
                                    <div class="item">
                                        <div class="avatar">
                                            <img src="{{ asset('frontend/assets/images/avatar.webp') }}" alt="Avatar">
                                        </div>
                                        <div class="content">
                                            <div class="head">
                                                <div class="name">Dipankar</div>
                                                <div class="date">21.08.23 11:20am</div>
                                            </div>
                                            <div class="text">
                                                <div class="msg">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur beatae vitae maxime dignissimos dicta cum qui! Laboriosam, quaerat voluptatem tempora, tempore facilis dicta soluta hic fuga deleniti, odit iure vero.
                                                    <span class="text-decoration-underline text-active">See More</span>
                                                </div>
                                                <div class="reply text-decoration-underline cursor-pointer text-white custom-btn d-inline-block py-2 px-3 rounded-3 mt-3">Reply</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="review">
                                    <div class="avatar">
                                        <img src="{{ asset('frontend/assets/images/avatar.webp') }}" alt="Avatar">
                                    </div>
                                    <div class="content">
                                        <div class="head">
                                            <div class="name">Dipankar</div>
                                            <div class="date">21.08.23 11:20am</div>
                                        </div>
                                        <div class="text">
                                            <div class="msg">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur beatae vitae maxime dignissimos dicta cum qui! Laboriosam, quaerat voluptatem tempora, tempore facilis dicta soluta hic fuga deleniti, odit iure vero.
                                                <span class="text-decoration-underline text-active">See More</span>
                                            </div>
                                            <div class="reply text-decoration-underline cursor-pointer text-white custom-btn d-inline-block py-2 px-3 rounded-3 mt-3">Reply</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- post comment -->
                    <div class="post-comment mt-5">
                        <div class="form-wrap">
                            <div class="heading border-bottom mb-3">
                                <h4 class="title text-body">Your Comment</h4>
                            </div>
                            <form>
                                <div class="mb-4">
                                    <textarea name="" id="" rows="4" class="form-control fs-5 py-3" placeholder="Enter Your Message"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-4">
                                            <input type="text" class="form-control fs-5 py-3" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-4">
                                            <input type="text" class="form-control fs-5 py-3" placeholder="Phone Number">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="custom-btn rounded-3 py-3 px-5 fw-bold">Send</button>
                            </form>
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