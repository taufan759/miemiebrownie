@extends('frontend.layouts.app')
@section('content')
<body>
        <!-- Hero Section Begin -->
        <section class="hero">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="{{ asset('frontend/img/hero/hero.jpeg')}}">
            </div>
        </section>
        <!-- Hero Section End -->
    
        <!-- Banner Section Begin -->
        <section class="banner spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 offset-lg-4">
                        <div class="banner__item">
                            <div class="banner__item__pic">
                                <img src="{{ asset('frontend/img/banner/bolen.jpg')}}" alt="">
                            </div>
                            <div class="banner__item__text">
                                <h2>Bolen <span>Pisang</span></h2>
                                <a href="page/produk">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="banner__item banner__item--middle">
                            <div class="banner__item__pic">
                                <img src="{{ asset('frontend/img/banner/kayakue.jpg')}}" alt="">
                            </div>
                            <div class="banner__item__text">
                                <h2>KayaKue <span>Cake</span></h2>
                                <a href="page/produk">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="banner__item banner__item--last">
                            <div class="banner__item__pic">
                                <img src="{{ asset('frontend/img/banner/dessert.jpg')}}" alt="">
                            </div>
                            <div class="banner__item__text">
                                <h2>Dessert <span>Box</span></h2>
                                <a href="page/produk">Lihat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section End -->
    
        <!-- Product Section Begin -->
        <section class="product spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="filter__controls">
                            <li class="active" data-filter="*">Best Sellers</li>
                            <li data-filter=".new-arrivals">New Arrivals</li>
                            <li data-fil ter=".hot-sales">Hot Sales</li>
                        </ul>
                    </div>
                </div>
                <div class="row product__filter">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('frontend/img/product/p1.jpg')}}">
                                <span class="label">New</span>
                            </div>
                            <div class="product__item__text">
                                <h6>Produk</h6>
                                <a href="/cart/keranjang" class="add-cart">+ Keranjang</a>
                                <h5>Rp 50.000</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('frontend/img/product/p2.jpg')}}">
                            </div>
                            <div class="product__item__text">
                                <h6>Produk</h6>
                                <a href="/cart/keranjang" class="add-cart">+ Keranjang</a>
                                <h5>Rp 50.000</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                        <div class="product__item sale">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('frontend/img/product/p3.jpg')}}">
                                <span class="label">Sale</span>
                            </div>
                            <div class="product__item__text">
                                <h6>Produk</h6>
                                <a href="/cart/keranjang" class="add-cart">+ Keranjang</a>
                                <h5>Rp 50.000</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('frontend/img/product/p4.jpg')}}">
                            </div>
                            <div class="product__item__text">
                                <h6>Produk</h6>
                                <a href="/cart/keranjang" class="add-cart">+ Keranjang</a>
                                <h5>Rp 50.000</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('frontend/img/product/p5.jpg')}}">
                            </div>
                            <div class="product__item__text">
                                <h6>Produk</h6>
                                <a href="/cart/keranjang" class="add-cart">+ Keranjang</a>
                                <h5>Rp 50.000</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                        <div class="product__item sale">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('frontend/img/product/p6.jpg')}}">
                                <span class="label">Sale</span>
                            </div>
                            <div class="product__item__text">
                                <h6>Produk</h6>
                                <a href="/cart/keranjang" class="add-cart">+ Keranjang</a>
                                <h5>Rp 50.000</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('frontend/img/product/p7.jpg')}}">
                            </div>
                            <div class="product__item__text">
                                <h6>Produk</h6>
                                <a href="/cart/keranjang" class="add-cart">+ Keranjang</a>
                                <h5>Rp 50.000</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('frontend/img/product/p8.jpg')}}">
                            </div>
                            <div class="product__item__text">
                                <h6>Produk</h6>
                                <a href="/cart/keranjang" class="add-cart">+ Keranjang</a>
                                <h5>Rp 50.000</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Section End -->
    
        <!-- Instagram Section Begin -->
        <section class="instagram spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="instagram__pic">
                            <div class="instagram__pic__item set-bg" data-setbg="{{ asset('frontend/img/featured-produk.jpeg')}}"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="instagram__text">
                            <h2>Miemie</h2>
                            <h2><span>Brownie</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                            <h3>#miemie<span>brownie</span></h3>
                            <p>Miemie Brownie X Lost In Coffee</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Instagram Section End -->
    
        <!-- Testimony Begin -->
        <section class="latest spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Blog Artikel</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="{{ asset('frontend/img/blog/blog1.png')}}"></div>
                            <div class="blog__item__text">
                                <span><img src="{{ asset('frontend/img/icon/calendar.png')}}" alt=""> 29 February 2029</span>
                                <h5>Judul</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="{{ asset('frontend/img/blog/blog2.jpg')}}"></div>
                            <div class="blog__item__text">
                                <span><img src="{{ asset('frontend/img/icon/calendar.png')}}" alt=""> 29 February 2029</span>
                                <h5>Judul</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="{{ asset('frontend/img/blog/blog3.jpg')}}"></div>
                            <div class="blog__item__text">
                                <span><img src="{{ asset('frontend/img/icon/calendar.png')}}" alt=""> 29 February 2029</span>
                                <h5>Judul</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimony End -->
</body>
@endsection