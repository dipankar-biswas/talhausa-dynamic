@extends('frontend.layouts.master')
@section('title','Product Wishlist | Talha USA Online E-Commerce Business.')
<title></title>
@endsection

@section('stylesheet')

@endsection



@section('content')
    <!-- Product Wishlist Code Start -->
    <section class="wishlist-products section-padding">
        <div class="container">
            <div class="heading mb-5">
                <h1 class="title text-body fw-bold">Your Wishlist</h1>
                <p class="text-secondary">There are <span class="text-success fw-bold">3</span> products in your
                    cart</p>
            </div>
            <div class="wishlist-lists table-responsive">
                <table class="table border mb-0">
                    <thead class="table-light">
                        <tr>
                            <th scope="col" class="py-4"><input class="form-check-input" type="checkbox"
                                    value="" id=""></th>
                            <th scope="col" colspan="2" class="py-4">Product</th>
                            <th scope="col" class="py-4">Unit Price</th>
                            <th scope="col" class="py-4">Quantity</th>
                            <th scope="col" class="py-4">Subtotal</th>
                            <th scope="col" class="py-4">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input class="form-check-input" type="checkbox" value="" id=""></td>
                            <td width="105px">
                                <div class="image">
                                    <a href="product-details.html" class="link">
                                        <img class="border rounded-2 p-2"
                                            src="{{ asset('frontend/assets/images/products/16ee943679ec60dca64f376ec3e56989.jpg') }}"
                                            alt="Product" width="90px" height="90px">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h2 class="title fs-5"><a href="product-details.html"
                                        class="text-hover text-reset">Field Roast Chao Cheese Creamy
                                        Original</a></h2>
                                <div class="rating-point d-flex column-gap-2">
                                    <div class="rating">
                                        <div class="star down">
                                            <div class="star up" style="width: 90%;"></div>
                                        </div>
                                    </div>
                                    <div class="point text-secondary">(4.5)</div>
                                </div>
                            </td>
                            <td>
                                <div class="price">
                                    <span class="new fs-3 text-active1">$85.00</span>
                                    <span
                                        class="old fs-5 text-secondary text-decoration-line-through">$90.00</span>
                                </div>
                            </td>
                            <td style="width: 150px;">
                                <div class="quantity" style="width: 110px;">
                                    <div class="input-group">
                                        <span class="input-group-text cursor-pointer">-</span>
                                        <input type="text" class="form-control text-center" value="1">
                                        <span class="input-group-text cursor-pointer">+</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="subtotal"><span class="new fs-3 text-active1">$85.00</span></div>
                            </td>
                            <td>
                                <div class="action text-active1 text-hover cursor-pointer d-inline-block fs-5">
                                    <i class="fa-regular fa-trash-can"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input" type="checkbox" value="" id=""></td>
                            <td width="105px">
                                <div class="image">
                                    <a href="product-details.html" class="link">
                                        <img class="border rounded-2 p-2"
                                            src="{{ asset('frontend/assets/images/products/2023-New-Sunglasses-Men-s-Driving-Anti-UV-Sunglasses-Concave-Shape-Ladies-Long-Frame-Sunglasses-gafas.jpg') }}_ (1).webp"
                                            alt="Product" width="90px" height="90px">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h2 class="title fs-5"><a href="product-details.html"
                                        class="text-hover text-reset">Field Roast Chao Cheese Creamy
                                        Original</a></h2>
                                <div class="rating-point d-flex column-gap-2">
                                    <div class="rating">
                                        <div class="star down">
                                            <div class="star up" style="width: 90%;"></div>
                                        </div>
                                    </div>
                                    <div class="point text-secondary">(4.5)</div>
                                </div>
                            </td>
                            <td>
                                <div class="price">
                                    <span class="new fs-3 text-active1">$85.00</span>
                                    <span
                                        class="old fs-5 text-secondary text-decoration-line-through">$90.00</span>
                                </div>
                            </td>
                            <td style="width: 150px;">
                                <div class="quantity" style="width: 110px;">
                                    <div class="input-group">
                                        <span class="input-group-text cursor-pointer">-</span>
                                        <input type="text" class="form-control text-center" value="1">
                                        <span class="input-group-text cursor-pointer">+</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="subtotal"><span class="new fs-3 text-active1">$85.00</span></div>
                            </td>
                            <td>
                                <div class="action text-active1 text-hover cursor-pointer d-inline-block fs-5">
                                    <i class="fa-regular fa-trash-can"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input" type="checkbox" value="" id=""></td>
                            <td width="105px">
                                <div class="image">
                                    <a href="product-details.html" class="link">
                                        <img class="border rounded-2 p-2"
                                            src="{{ asset('frontend/assets/images/products/1eaea3b9d8871cef85630f71acd6a61f.jpg') }}"
                                            alt="Product" width="90px" height="90px">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h2 class="title fs-5"><a href="product-details.html"
                                        class="text-hover text-reset">Field Roast Chao Cheese Creamy
                                        Original</a></h2>
                                <div class="rating-point d-flex column-gap-2">
                                    <div class="rating">
                                        <div class="star down">
                                            <div class="star up" style="width: 90%;"></div>
                                        </div>
                                    </div>
                                    <div class="point text-secondary">(4.5)</div>
                                </div>
                            </td>
                            <td>
                                <div class="price">
                                    <span class="new fs-3 text-active1">$85.00</span>
                                    <span
                                        class="old fs-5 text-secondary text-decoration-line-through">$90.00</span>
                                </div>
                            </td>
                            <td style="width: 150px;">
                                <div class="quantity" style="width: 110px;">
                                    <div class="input-group">
                                        <span class="input-group-text cursor-pointer">-</span>
                                        <input type="text" class="form-control text-center" value="1">
                                        <span class="input-group-text cursor-pointer">+</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="subtotal"><span class="new fs-3 text-active1">$85.00</span></div>
                            </td>
                            <td>
                                <div class="action text-active1 text-hover cursor-pointer d-inline-block fs-5">
                                    <i class="fa-regular fa-trash-can"></i>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Product Wishlist Code End -->
@endsection



@section('scripts')

@endsection