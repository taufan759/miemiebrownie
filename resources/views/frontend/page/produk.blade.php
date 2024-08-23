@extends('frontend.layouts.app')
@section('content')
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
                                    <a href="/cart/keranjang" class="add-cart">+ Tambah ke Keranjang</a>
                                    <!-- Hapus atau komentar bagian rating -->
                                    <!-- <div class="rating">
                                        @for ($i = 0; $i < 5; $i++)
                                            <i class="fa fa-star-o"></i>
                                        @endfor
                                    </div> -->
                                    <h5>Rp {{ number_format($product->harga, 0, ',', '.') }}</h5>
                                    <div class="product__color__select">
                                        <label for="pc-{{ $product->id }}-1">
                                            <input type="radio" id="pc-{{ $product->id }}-1">
                                        </label>
                                        <label class="active black" for="pc-{{ $product->id }}-2">
                                            <input type="radio" id="pc-{{ $product->id }}-2">
                                        </label>
                                        <label class="grey" for="pc-{{ $product->id }}-3">
                                            <input type="radio" id="pc-{{ $product->id }}-3">
                                        </label>
                                    </div>
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