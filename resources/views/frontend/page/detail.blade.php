@extends('frontend.layouts.app')
@section('content')
<link href="{{ asset('frontend/css/style-detailproduk.css') }}" rel="stylesheet">
<body>
    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-image">
                        <img src="{{ asset('storage/img-produk/img_produk_depan/' . $product->img_produk_depan) }}" alt="{{ $product->nama_produk }}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-info">
                        <h2>{{ $product->nama_produk }}</h2>
                        <h3>Rp {{ number_format($product->harga, 0, ',', '.') }}</h3>
                        {!! $product->deskripsi !!}
                        <div class="add-to-cart">
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <button type="submit" class="primary-btn">+ ke Keranjang</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->
</body>
@endsection