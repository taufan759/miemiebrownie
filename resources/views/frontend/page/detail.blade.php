@extends('frontend.layouts.app')
@section('content')
<link href="{{ asset('frontend/css/style-detailproduk.css') }}" rel="stylesheet">
<body>
    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="container">
            <!-- Breadcrumb Section -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-section">
                        <a href="/">Beranda</a>
                        <a href="/page/produk">Produk</a>
                        <span>Detail Produk</span>
                    </div>
                </div>
            </div>
            
            <!-- Product Image and Info Section -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-image">
                        <img src="{{ asset('frontend/img/banner/bolen.jpg') }}" alt="Bolen Pisang">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-info">
                        <h2 class="product-title">Bolen Pisang Coklat</h2>
                        <h3 class="product-price">Rp 47.000 <span class="original-price">Rp 50.000</span></h3>
                        <p class="product-description">
                            Bolen pisang yang lezat dengan kulit yang renyah dan isian pisang yang manis. Cocok untuk dinikmati bersama keluarga.
                        </p>
                        <div class="product-category">
                            <span>Kategori:</span>
                            <span>Bolen</span>
                        </div>
                        <div class="product-quantity">
                            <label for="quantity">Jumlah:</label>
                            <input type="number" id="quantity" name="quantity" value="1" min="1">
                        </div>
                        <div class="add-to-cart">
                            <a href="/cart/keranjang" class="primary-btn">+ ke Keranjang <i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Details Tab Section -->
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="product-details-tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Deskripsi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Ulasan Pelanggan (5)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#additional-info" role="tab">Informasi Tambahan</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="description" role="tabpanel">
                                <div class="tab-content-item">
                                    <p>Bolen Pisang dibuat dari bahan-bahan pilihan dengan kualitas terbaik, menghasilkan produk dengan rasa yang istimewa dan tekstur yang lembut.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="reviews" role="tabpanel">
                                <div class="tab-content-item">
                                    <p>Ulasan dari pelanggan mengenai produk ini...</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="additional-info" role="tabpanel">
                                <div class="tab-content-item">
                                    <p>Informasi tambahan mengenai produk ini...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- Shop Details Section End -->
</body>
@endsection