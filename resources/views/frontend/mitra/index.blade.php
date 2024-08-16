@extends('frontend.layouts.app')

@section('content')
<!-- Background Section -->
<div class="bg-image" style="background-image: url('{{ asset('frontend/img/breadcrumb-bg.jpg') }}'); background-size: contain; background-repeat: no-repeat; background-position: center; padding: 100px 0;">
    <div class="container text-center text-white">
        <h1>Info Kemitraan</h1>
        <p>Bergabunglah dengan kami sebagai agen atau reseller dan nikmati keuntungan menarik!</p>
    </div>
</div>

<div class="container py-5">
    <div class="row justify-content-center">
        <!-- Agen Section -->
        <div class="col-lg-4 col-md-6">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Menjadi Agen</h5>
                    <p class="card-text">Dapatkan keuntungan eksklusif dan dukungan penuh dari kami untuk menjalankan usaha sebagai agen Miemie Brownie di daerah Anda.</p>
                    <a href="#" class="btn btn-pink">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>

        <!-- Reseller Section -->
        <div class="col-lg-4 col-md-6">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Menjadi Reseller</h5>
                    <p class="card-text">Jual produk-produk Miemie Brownie secara fleksibel tanpa modal besar. Mulai usaha Anda dengan menjadi reseller kami.</p>
                    <a href="#" class="btn btn-pink">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mau tau lebih banyak section -->
    <div class="row mt-5">
        <div class="col-lg-12 text-center">
            <h5>Mau tau lebih banyak tentang Miemie Brownie?</h5>
            <p>Tekan tombol di bawah ini untuk mendapatkan informasi lebih lanjut.</p>
            <a href="#" class="btn btn-pink">Pelajari Lebih Lanjut</a>
        </div>
    </div>

    <!-- Section untuk foto dan deskripsi -->
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="frontend-section text-center">
                <img src="path-to-your-image.jpg" alt="Miemie Brownie" class="img-fluid mb-4">
                <h4>Judul Deskripsi</h4>
                <p>Deskripsi yang dapat diisi melalui backend.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 text-center">
            <p class="mt-5">Jika Anda tertarik untuk menjadi bagian dari keluarga besar Miemie Brownie dengan menjadi mitra, Selanjutnya silahkan masuk ke group WA dengan menekan TOMBOL di bawah ini. Terimakasih:</p>
            <a href="#" class="btn btn-green btn-lg">Gabung Grub Sekarang</a>
        </div>
    </div>
</div>

<!-- CSS Kustom -->
<style>
    .btn-pink {
        background-color: #FF4DA3;
        color: white; /* Warna teks */
        border: none; 
    }

    .btn-pink:hover {
        background-color:#FFB6C1; 
    }

    .text-pink {
        color: #FF4DA3; 
    }
    .text-pink-custom {
        color: #FF4DA3; 
    }
    .btn-green {
    background-color: #28a745; 
    color: white; 
}
</style>
@endsection
