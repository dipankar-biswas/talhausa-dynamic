@extends('frontend.layouts.master')
@section('title', 'About Us | Talha USA Online E-Commerce Business.')

@section('stylesheet')

@endsection



@section('content')
    <section class="banner bg-light" style="background-image: url('{{ asset('frontend/assets/images/banner/banner.webp') }}');">
        <div class="heading text-center">
            <h1 class="title text-white fw-bold">About Us</h1>
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </section>
    <section class="page-data">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 center">
                    <div class="content shadow-sm rounded-3 px-4 py-5 mb-5">
                        <h3 class="title fw-bold">About Us : </h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="image">
                                    <img src="{{ asset('frontend/assets/images/auth/register.webp') }}" alt="About Us">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia esse, labore ratione est veniam quos beatae excepturi nostrum obcaecati. Harum autem, a soluta provident nobis iure impedit obcaecati neque odit.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia esse, labore ratione est veniam quos beatae excepturi nostrum obcaecati. Harum autem, a soluta provident nobis iure impedit obcaecati neque odit.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia esse, labore ratione est veniam quos beatae excepturi nostrum obcaecati. Harum autem, a soluta provident nobis iure impedit obcaecati neque odit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



@section('scripts')

@endsection