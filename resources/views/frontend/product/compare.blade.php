@extends('frontend.layouts.master')
@section('title','Product Compare | Talha USA Online E-Commerce Business.')

@section('stylesheet')

@endsection



@section('content')
    <!-- Product Compare Code Start -->
    <section class="compare-products section-padding">
        <div class="container">
            <div class="heading mb-5">
                <h1 class="title text-body fw-bold">Your Compare</h1>
                <p class="text-secondary">There are <span class="text-success fw-bold">3</span> products in your cart</p>
            </div>
            <div class="compare-items d-flex border rounded-2">
                <ul class="head">
                    <li>
                        <div class="line fw-bold">Preview</div>
                        <div class="line fw-bold">Name</div>
                        <div class="line fw-bold">Rating</div>
                        <div class="line fw-bold">Price</div>
                        <div class="line fw-bold">Description</div>
                        <div class="line fw-bold">Stock status</div>
                        <div class="line fw-bold">Buy now</div>
                        <div class="line fw-bold">Action</div>
                    </li>
                </ul>
                <ul class="body">
                    <li class="item">
                        <div class="line">
                            <div class="image">
                                <a href="product-details.html" class="link">
                                    <img class="border rounded-2 p-2" src="{{ asset('frontend/assets/images/products/16ee943679ec60dca64f376ec3e56989.jpg') }}" alt="Product">
                                </a>
                            </div>
                        </div>
                        <div class="line">
                            <h2 class="title fs-5"><a href="product-details.html" class="text-hover text-reset">Field Roast Chao Cheese Creamy Original</a></h2>
                        </div>
                        <div class="line">
                            <div class="rating-point d-flex column-gap-2">
                                <div class="rating">
                                    <div class="star down">
                                        <div class="star up" style="width: 90%;"></div>
                                    </div>
                                </div>
                                <div class="point text-secondary">(4.5)</div>
                            </div>
                        </div>
                        <div class="line">
                            <div class="price">
                                <span class="new fs-3 text-active1">$85.00</span>
                                <span class="old fs-5 text-secondary text-decoration-line-through">$90.00</span>
                            </div>
                        </div>
                        <div class="line">
                            <p class="text-secondary mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae neque velit, fugiat temporibus perspiciatis ut dolorem adipisci qui doloribus numquam quod sapiente culpa illum, aspernatur odit, consequatur repudiandae ea hic?</p>
                        </div>
                        <div class="line">
                            <div class="stock-status">
                                <div class="stock in"><span class="badge text-bg-success">Stock-in</span></div>
                                <!-- <div class="stock out"><span class="badge text-bg-danger">Stock-out</span></div> -->
                            </div>
                        </div>
                        <div class="line">
                            <div class="action">
                                <button type="button" class="custom-btn rounded-2 px-4 py-2">Add To Cart</button>
                            </div>
                        </div>
                        <div class="line">
                            <div class="action">
                                <button type="button" class="custom-btn1 rounded-2 px-4 py-2">Remove</button>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="line">
                            <div class="image">
                                <a href="product-details.html" class="link">
                                    <img class="border rounded-2 p-2" src="{{ asset('frontend/assets/images/products/16ee943679ec60dca64f376ec3e56989.jpg') }}" alt="Product">
                                </a>
                            </div>
                        </div>
                        <div class="line">
                            <h2 class="title fs-5"><a href="product-details.html" class="text-hover text-reset">Field Roast Chao Cheese Creamy Original</a></h2>
                        </div>
                        <div class="line">
                            <div class="rating-point d-flex column-gap-2">
                                <div class="rating">
                                    <div class="star down">
                                        <div class="star up" style="width: 90%;"></div>
                                    </div>
                                </div>
                                <div class="point text-secondary">(4.5)</div>
                            </div>
                        </div>
                        <div class="line">
                            <div class="price">
                                <span class="new fs-3 text-active1">$85.00</span>
                                <span class="old fs-5 text-secondary text-decoration-line-through">$90.00</span>
                            </div>
                        </div>
                        <div class="line">
                            <p class="text-secondary mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae neque velit, fugiat temporibus perspiciatis ut dolorem adipisci qui doloribus numquam quod sapiente culpa illum, aspernatur odit, consequatur repudiandae ea hic?</p>
                        </div>
                        <div class="line">
                            <div class="stock-status">
                                <div class="stock in"><span class="badge text-bg-success">Stock-in</span></div>
                                <!-- <div class="stock out"><span class="badge text-bg-danger">Stock-out</span></div> -->
                            </div>
                        </div>
                        <div class="line">
                            <div class="action">
                                <button type="button" class="custom-btn rounded-2 px-4 py-2">Add To Cart</button>
                            </div>
                        </div>
                        <div class="line">
                            <div class="action">
                                <button type="button" class="custom-btn1 rounded-2 px-4 py-2">Remove</button>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="line">
                            <div class="image">
                                <a href="product-details.html" class="link">
                                    <img class="border rounded-2 p-2" src="{{ asset('frontend/assets/images/products/16ee943679ec60dca64f376ec3e56989.jpg') }}" alt="Product">
                                </a>
                            </div>
                        </div>
                        <div class="line">
                            <h2 class="title fs-5"><a href="product-details.html" class="text-hover text-reset">Field Roast Chao Cheese Creamy Original</a></h2>
                        </div>
                        <div class="line">
                            <div class="rating-point d-flex column-gap-2">
                                <div class="rating">
                                    <div class="star down">
                                        <div class="star up" style="width: 90%;"></div>
                                    </div>
                                </div>
                                <div class="point text-secondary">(4.5)</div>
                            </div>
                        </div>
                        <div class="line">
                            <div class="price">
                                <span class="new fs-3 text-active1">$85.00</span>
                                <span class="old fs-5 text-secondary text-decoration-line-through">$90.00</span>
                            </div>
                        </div>
                        <div class="line">
                            <p class="text-secondary mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae neque velit, fugiat temporibus perspiciatis ut dolorem adipisci qui doloribus numquam quod sapiente culpa illum, aspernatur odit, consequatur repudiandae ea hic?</p>
                        </div>
                        <div class="line">
                            <div class="stock-status">
                                <div class="stock in"><span class="badge text-bg-success">Stock-in</span></div>
                                <!-- <div class="stock out"><span class="badge text-bg-danger">Stock-out</span></div> -->
                            </div>
                        </div>
                        <div class="line">
                            <div class="action">
                                <button type="button" class="custom-btn rounded-2 px-4 py-2">Add To Cart</button>
                            </div>
                        </div>
                        <div class="line">
                            <div class="action">
                                <button type="button" class="custom-btn1 rounded-2 px-4 py-2">Remove</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Product Compare Code End -->
@endsection



@section('scripts')

@endsection