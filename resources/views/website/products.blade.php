@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Products</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Laptops</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!-- slider tab  -->
    <section class="section-b-space ratio_square">
        <div class="container-fluid">
            <div class="row no-slider">
                @for ($i = 1; $i <= 12; $i++)
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="{{ route('product_details') }}"><img src="{{ asset('website/assets/images/electronics/pro/1.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="cart-info cart-wrap">
                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="details-product">
                            <a href="p{{ route('product_details') }}">
                                <h6>Slim Fit Shirt</h6>
                            </a>
                            <h4>$500.00 <del>$600.00</del></h4>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    <!-- slider tab end -->

@endsection
