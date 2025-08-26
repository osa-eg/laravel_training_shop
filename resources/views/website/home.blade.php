@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <!-- Home slider -->
    <section class="p-0">
        <div class="slide-1 home-slider">
            <div>
                <div class="home  text-center">
                    <img src="{{ asset('website/assets/images/home-banner/1.jpg') }}" alt="" class="bg-img blur-up lazyload">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain">
                                    <div>
                                        <h4>welcome to fashion</h4>
                                        <h1>men fashion</h1>
                                        <a href="#" class="btn btn-solid">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="home text-center">
                    <img src="{{ asset('website/assets/images/home-banner/2.jpg') }}" alt="" class="bg-img blur-up lazyload">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain">
                                    <div>
                                        <h4>welcome to fashion</h4>
                                        <h1>women fashion</h1>
                                        <a href="#" class="btn btn-solid">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home slider end -->

    <!-- category section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="title2 text-start">
                <h2 class="title-inner2 p-0">Shop By Category</h2>
            </div>
            <div class="row margin-default ratio_square">
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img src="{{ asset('website/assets/images/fashion/category/1.jpg') }}" class="img-fluid bg-img" alt="">
                            </div>
                            <h4>Top wear</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img src="{{ asset('website/assets/images/fashion/category/1.jpg') }}" class="img-fluid bg-img" alt="">
                            </div>
                            <h4>dresses</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img src="{{ asset('website/assets/images/fashion/category/1.jpg') }}" class="img-fluid bg-img" alt="">
                            </div>
                            <h4>bottom</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img src="{{ asset('website/assets/images/fashion/category/1.jpg') }}" class="img-fluid bg-img" alt="">
                            </div>
                            <h4>inner/sleep</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img src="{{ asset('website/assets/images/fashion/category/1.jpg') }}" class="img-fluid bg-img" alt="">
                            </div>
                            <h4>footwear</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img src="{{ asset('website/assets/images/fashion/category/1.jpg') }}" class="img-fluid bg-img" alt="">
                            </div>
                            <h4>sports/active</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img src="{{ asset('website/assets/images/fashion/category/1.jpg') }}" class="img-fluid bg-img" alt="">
                            </div>
                            <h4>Grooming</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img src="{{ asset('website/assets/images/fashion/category/1.jpg') }}" class="img-fluid bg-img" alt="">
                            </div>
                            <h4>accessories</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img src="{{ asset('website/assets/images/fashion/category/1.jpg') }}" class="img-fluid bg-img" alt="">
                            </div>
                            <h4>bags</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img src="{{ asset('website/assets/images/fashion/category/1.jpg') }}" class="img-fluid bg-img" alt="">
                            </div>
                            <h4>perfume</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img src="{{ asset('website/assets/images/fashion/category/1.jpg') }}" class="img-fluid bg-img" alt="">
                            </div>
                            <h4>watches</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="#">
                        <div class="img-category">
                            <div class="img-sec">
                                <img src="{{ asset('website/assets/images/fashion/category/1.jpg') }}" class="img-fluid bg-img" alt="">
                            </div>
                            <h4>jewellery</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- category section end -->

    <div class="layout-8-bg">
        <!-- collection banner -->
        <section class="banner-goggles ratio2_3">
            <div class="container-fluid">
                <div class="row partition3">
                    <div class="col-md-4">
                        <a href="#">
                            <div class="collection-banner">
                                <div class="img-part">
                                    <img src="{{ asset('website/assets/images/electronics/sub1.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                                </div>
                                <div class="contain-banner banner-3">
                                    <div>
                                        <h4>10% off</h4>
                                        <h2>speaker</h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="collection-banner">
                                <div class="img-part">
                                    <img src="{{ asset('website/assets/images/electronics/sub1.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                                </div>
                                <div class="contain-banner banner-3">
                                    <div>
                                        <h4>10% off</h4>
                                        <h2>earplug</h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="collection-banner">
                                <div class="img-part">
                                    <img src="{{ asset('website/assets/images/electronics/sub1.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                                </div>
                                <div class="contain-banner banner-3">
                                    <div>
                                        <h4>50% off</h4>
                                        <h2>best deal</h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- collection banner end -->




        <!-- slider tab  -->
        <section class="section-b-space ratio_square">
            <div class="container-fluid">
                <div class="title2">
                    <h4>new collection</h4>
                    <h2 class="title-inner2">trending products</h2>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="theme-tab layout7-product">
                            <ul class="tabs tab-title">
                                <li class="current"><a href="tab-1">new arrival</a></li>
                                <li class=""><a href="tab-2">featured</a></li>
                                <li class=""><a href="tab-3">special</a></li>
                            </ul>
                            <div class="tab-content-cls">
                                <div id="tab-1" class="tab-content active default">
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
                                <div id="tab-2" class="tab-content">
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
                                <div id="tab-3" class="tab-content">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider tab end -->

    </div>












@endsection
