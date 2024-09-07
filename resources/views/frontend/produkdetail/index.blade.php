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
                        <img id="productImg" src="{{ asset('storage/img-produk/img_produk_depan/' . $product->img_produk_depan) }}" alt="{{ $product->nama_produk }}" onclick="openModal()">
                    </div>
                </div>

                <!-- Modal -->
                <div id="myModal" class="modal">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <img class="modal-content" id="imgModal">
                    <div id="caption"></div>
                </div>
                
                <div class="col-lg-6">
                    <div class="product-info" style="margin-bottom: 20px">
                        <h2 style="font-size: 2rem; font-weight: bold; color: #333; margin-bottom: 20px; text-transform: uppercase;">
                            {{ $product->nama_produk }}
                        </h2>
                        <h3 style="font-size: 1.5rem; font-weight: bold; color: #FF4DA3; margin-bottom: 15px;">
                            Rp {{ number_format($product->harga, 0, ',', '.') }}
                        </h3>
                        <div style="font-size: 1.1rem; line-height: 1.6; color: #555; margin-bottom: 25px;">
                            {!! $product->deskripsi !!}
                        </div>
                        <div class="add-to-cart" style="margin-top: 20px;">
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <button style="background-color: #FF4DA3; color: white; border-radius: 4px;" type="submit" class="add-cart product-page-cart"> + Tambah Keranjang</button> 
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