@extends('frontend.layouts.app')
@section('content')
<body>
<section class="combined-section set-bg" data-setbg="{{ asset('frontend/img/bg2.jpeg') }}">
    <div class="overlay">
        <div class="content">
            <h1>Produk Miemie Brownie</h1>
        </div>
    </div>
</section>

<!-- Categories Slider di luar gambar -->
<!-- Categories Slider di luar gambar -->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider-container" style="position: relative; overflow: hidden;">
                <div class="categories__slider" style="display: flex; transition: transform 0.3s ease;">
                    @foreach($kategori as $kat)
                    <div class="categories__item" onclick="window.location.href='{{ route('produk', ['kategori' => $kat->nama_kategori]) }}'">
                        <div class="categories__item__icon">
                            @if($kat->foto)
                                <img src="{{ asset('storage/img-kategori/' . $kat->foto) }}" alt="{{ $kat->nama_kategori }}" style="width: 4rem; height: auto;">
                            @else
                                <img src="{{ asset('frontend/img/icon/default-icon.png') }}" alt="{{ $kat->nama_kategori }}" style="width: 4rem; height: auto;">
                            @endif
                            <h5>{{ $kat->nama_kategori }}</h5>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="owl-prev wd-btn-arrow">
                <span class="fas fa-chevron-left fa-2x" style="color: #472323;"></span>
            </div>

            <div class="owl-next wd-btn-arrow">
                <span class="fas fa-chevron-right fa-2x" style="color: #472323;"></span>
            </div>
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

<!-- Products Section -->
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