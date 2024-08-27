@extends('frontend.layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('frontend/css/style-page.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
</head>
<body>
<section class="combined-section set-bg" data-setbg="{{ asset('frontend/img/bg2.jpeg') }}">
    <div class="container">
        <!-- Breadcrumb -->
        <div class="breadcrumb-option">
            <div class="row">

            </div>
        </div>
        <!-- Categories -->
        <div class="categories">
            <div class="row">
                <div class="categories__slider-container">
                    <div class="categories__slider">
                        <div class="categories__item">
                            <div class="categories__item__icon">
                                <span class="fas fa-apple-alt fa-4x"></span>
                                <h5>Bolen Pisang</h5>
                            </div>
                        </div>

                        <div class="categories__item">
                            <div class="categories__item__icon">
                                <span class="fas fa-cube fa-4x"></span> 
                                <h5>Brownies Box</h5>
                            </div>
                        </div>

                        <div class="categories__item">
                            <div class="categories__item__icon">
                                <span class="fas fa-coffee fa-4x"></span> 
                                <h5>Coffee & Drink</h5>
                            </div>
                        </div>

                        <div class="categories__item">
                            <div class="categories__item__icon">
                                <span class="fas fa-cookie fa-4x"></span> 
                                <h5>Cookies & Snack</h5>
                            </div>
                        </div>

                        <div class="categories__item">
                            <div class="categories__item__icon">
                                <span class="fas fa-box-open fa-4x"></span> 
                                <h5>Dessert Box</h5>
                            </div>
                        </div>

                        <div class="categories__item">
                            <div class="categories__item__icon">
                                <span class="fas fa-gift fa-4x"></span> 
                                <h5>Hampers</h5>
                            </div>
                        </div>

                        <div class="categories__item">
                            <div class="categories__item__icon">
                                <span class="fas fa-cake fa-4x"></span> 
                                <h5>Cake Tart</h5>
                            </div>
                        </div>

                        <div class="categories__item">
                            <div class="categories__item__icon">
                                <span class="fas fa-utensils fa-4x"></span>
                                <h5>Meals</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" 
                                 data-setbg="{{ asset('storage/img-produk/img_produk_depan/' . $product->img_produk_depan) }}">
                            </div>
                            <div class="product__item__text">
                                <h6>{{ $product->nama_produk }}</h6>
                                <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <button type="submit" class="add-cart" style="border: none; background: none; padding: 0; font: inherit; color: inherit; cursor: pointer;">+ Tambah ke Keranjang</button>
                                </form>
                                    <h5>Rp {{ number_format($product->harga, 0, ',', '.') }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
</body>
@endsection