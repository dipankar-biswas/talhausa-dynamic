@extends('frontend.layouts.master')
@section('title', 'Product Cart Empty | Talha USA Online E-Commerce Business.')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/product.css') }}">
@endsection



@section('content')
    <!-- Product Cart Empty Code Start -->
    <section class="cart-empty section-padding">
        <div class="container">
            <div class="empty text-center py-5">
                <div class="heading mb-5"><h1 class="title text-body fw-bold">Your Cart Empty</h1></div>
                <div class="icon"><i class="fa-solid fa-cart-shopping"></i></div>
                <p>No items yet? Continue shopping to explore more.</p>
                <a href="{{ Route('product.search') }}" class="custom-btn1 rounded">Continue Shopping</a>
            </div>
        </div>
    </section>
    <!-- Product Cart Empty Code End -->
@endsection



@section('scripts')

@endsection