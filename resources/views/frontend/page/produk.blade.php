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
    <div class="overlay">
        <div class="content">
            <h1>Produk Miemie Brownie</h1>
        </div>
    </div>
</section>
<!-- Categories Slider di luar gambar -->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider-container" style="position: relative; overflow: hidden;">
                <div class="categories__slider" style="display: flex; transition: transform 0.3s ease;">
                <div class="categories__item" onclick="window.location.href='/brownies'">
                        <div class="categories__item__icon">
                            <img src="{{ asset('frontend/img/icon/brownis.png') }}" alt="Brownies" style="width: 4rem; height: auto;">
                            <h5>Brownies</h5>
                        </div>
                    </div>

                    <div class="categories__item" onclick="window.location.href='/Bolen'">
                        <div class="categories__item__icon">
                        <img src="{{ asset('frontend/img/icon/bolen1.png') }}" alt="Bolen" style="width: 4rem; height: auto;">
                            <h5>Bolen</h5>
                        </div>
                    </div>

                    <div class="categories__item" onclick="window.location.href='/Kaya Kue Cake'">
                        <div class="categories__item__icon">
                        <img src="{{ asset('frontend/img/icon/cake2.png') }}" alt="Kaya Kue Cake" style="width: 4rem; height: auto;">
                            <h5>Kaya Kue Cake</h5>
                        </div>
                    </div>

                    <div class="categories__item" onclick="window.location.href='/cookies-snack'">
                        <div class="categories__item__icon">
                        <img src="{{ asset('frontend/img/icon/dessert.png') }}" alt="Dessert" style="width: 4rem; height: auto;">
                            <h5>Dessert</h5>
                        </div>
                    </div>

                    <div class="categories__item" onclick="window.location.href='/Roti Bread'">
                        <div class="categories__item__icon">
                        <img src="{{ asset('frontend/img/icon/roti.png') }}" alt="Roti Bread" style="width: 4rem; height: auto;">
                            <h5>Roti</h5>
                        </div>
                    </div>

                    <div class="categories__item" onclick="window.location.href='/hampers'">
                        <div class="categories__item__icon">
                        <img src="{{ asset('frontend/img/icon/hampers.png') }}" alt="hampers" style="width: 4rem; height: auto;">
                            <h5>Hampers</h5>
                        </div>
                    </div>

                    <div class="categories__item" onclick="window.location.href='/cake-tart'">
                        <div class="categories__item__icon">
                        <img src="{{ asset('frontend/img/icon/cookies.png') }}" alt="Brownies" style="width: 4rem; height: auto;">
                            <h5>Cookies</h5>
                        </div>
                    </div>

                    <div class="categories__item" onclick="window.location.href='/meals'">
                        <div class="categories__item__icon">
                        <img src="{{ asset('frontend/img/icon/momen.png') }}" alt="Special moment" style="width: 4rem; height: auto;">
                            <h5>Special Moment</h5>
                        </div>
                    </div>

                    <div class="categories__item" onclick="window.location.href='/meals'">
                        <div class="categories__item__icon">
                        <img src="{{ asset('frontend/img/icon/cake.png') }}" alt="Brownies" style="width: 4rem; height: auto;">
                            <h5>Gift and Sofenir</h5>
                        </div>
                    </div>
                    <div class="categories__item" onclick="window.location.href='/meals'">
                        <div class="categories__item__icon">
                        <img src="{{ asset('frontend/img/icon/hantaran.png') }}" alt="Hantaran" style="width: 4rem; height: auto;">
                            <h5>Hantaran</h5>
                        </div>
                    </div>
                </div>
            </div>
        <div class="owl-prev wd-btn-arrow">
            <span class="fas fa-chevron-left fa-2x" style="color: #472323;"></span>
        </div>

        <div class="owl-next wd-btn-arrow">
            <span class="fas fa-chevron-right fa-2x" style="color: #472323;"></span>
        </div>
    </div>

</section>
<script>
  // Dapatkan referensi ke elemen slider dan tombol navigasi
  const slider = document.querySelector('.categories__slider');
  const prevBtn = document.querySelector('.owl-prev');
  const nextBtn = document.querySelector('.owl-next');

  const scrollStep = 150; // Jarak scroll untuk setiap klik, sesuaikan dengan ukuran item

  // Event listener untuk tombol prev
  prevBtn.addEventListener('click', () => {
    slider.scrollBy({
      left: -scrollStep, // Geser ke kiri
      behavior: 'smooth' // Scroll halus
    });
  });

  // Event listener untuk tombol next
  nextBtn.addEventListener('click', () => {
    slider.scrollBy({
      left: scrollStep, // Geser ke kanan
      behavior: 'smooth' // Scroll halus
    });
  });
</script>

<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" 
                            data-setbg="{{ asset('storage/img-produk/img_produk_depan/' . $product->img_produk_depan) }}">
                            </div>
                            <div class="product__item__text">
                                <h6>{{ $product->nama_produk }}</h6>    
                                <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <button type="submit" class="add-cart product-page-cart"> + Tambah Keranjang</button> 
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