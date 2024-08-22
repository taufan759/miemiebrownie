@extends('frontend.layouts.app')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<body>
  <!-- Welcome Section Begin -->
<div class="welcome-section" style="background-image: url('{{asset('frontend/img/bg2.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container py-4 bg-white rounded shadow" style="background: rgba(255, 255, 255, 0.85); max-width: 75%; margin: auto; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);">
        <section class="about">
            <div class="row mb-4">
                <div class="col-lg-12 text-center mb-4 animate__animated animate__fadeInUp">
                    <h2 class="text-pink display-4 font-weight-bold">Selamat Datang</h2>
                    <p class="lead font-italic text-muted">Mitra Miemie Brownie Di Seluruh Indonesia</p>
                    <div class="underline bg-pink mx-auto mt-3"></div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 text-center mb-4 animate__animated animate__fadeInUp">
                            <p class="lead text-dark font-weight-normal" style="line-height: 1.8;">
                                Mau kerja dari rumah, tapi punya penghasilan jutaan rupiah?<br>
                                Mau dapetin gratis emas murni?<br>
                                Mau punya banyak teman dan relasi?<br>
                                Mau dibimbing menjadi penjual yang handal dari ahlinya?<br>
                                Yukkk... baca pelan-pelan sampai tuntas yaa.<br>
                                Jawabannya akan kamu temukan di sini.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- Welcome Section End -->


<!-- YouTube Section Begin -->
<section class="youtube-section py-5">
    <div class="container">
    <div class="row mb-4">
    <div class="col-lg-12 text-center animate__animated animate__fadeInUp">
        <h4 class="text-black font-weight-bold">Tonton Video Kami</h4>
        <div class="underline bg-pink mx-auto"></div>
    </div>
</div>

<div class="row">
    <div class="col-12 text-center">
        <!-- YouTube Video -->
        <div class="embed-responsive embed-responsive-16by9 mb-3" style="max-width: 80%; margin: auto;">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IEuOPuanEWc" title="Pemutar video YouTube" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
        <p class="lead mb-3">Tonton video terbaru kami di YouTube!</p>
        
        <!-- YouTube Channel Link -->
        <a href="https://www.youtube.com/@miemiebrownieofficial" target="_blank" class="btn btn-primary btn-custom">
    <i class="fab fa-youtube mr-2"></i> Kunjungi Channel YouTube Miemie Brownie
</a>

    </div>
</div>



        </div>
    </div>
</section>
<!-- YouTube Section End -->

    <!-- Description Section Begin -->
    <section class="description-section">
        
    </section>
    <!-- Description Section End -->
<div class="row justify-content-center mt-4">
    <div class="col-lg-8 text-center">
        <p class="lead text-dark font-weight-normal">Mau tau lebih banyak tentang Miemie Brownie? Tekan tombol di bawah ini.</p>
        <a href="https://instabio.cc/20707wemr50" class="btn btn-pink btn-lg">Pelajari Lebih Lanjut</a>
    </div>
</div>


   <!-- Section: Tentang Mitra Miemie Brownie -->
<div class="container mt-5 py-5 bg-white rounded shadow-lg">
    <div class="row align-items-center mb-5">
        <div class="col-lg-6 text-center">
            <img src="{{ asset('frontend/img/mitra 2.jpg') }}" alt="Mitra Miemie Brownie" class="img-fluid rounded shadow-lg mb-4">
            
        </div>
        <div class="col-lg-6 animate__animated animate__fadeInUp">
        <h4 class="text-pink font-weight-bold">Sekilas tentang Mitra Miemie Brownie</h4>
            <p class="lead">Miemie Brownie yang berdiri sejak 2016, ingin memberikan kesempatan bagi Anda untuk maju bersama mendapatkan penghasilan tambahan atau bahkan menjadi penghasilan utama nantinya. Apalagi di masa NEW NORMAL ini, mencari pekerjaan atau pendapatan sangatlah susah dan tidak pasti. Alhamdulillah, produk Miemie Brownie sudah dikenal dengan baik, dan dapat diterima oleh semua kalangan. Kami juga menjaga mutu, kualitas, serta kehalalannya. Bismillah kita bisa sukses berjamaah.. amin yra.</p>
        </div>
    </div>
</div>

<!-- Section: Ketentuan dan Etika Menjadi Mitra -->
<div class="container mt-5 py-5 bg-white rounded shadow-sm">
    <div class="row align-items-center mb-5">
        <div class="col-lg-6 order-lg-2 text-center">
            <img src="{{ asset('frontend/img/mitra1.jpg') }}" alt="Ketentuan dan Etika" class="img-fluid rounded shadow-lg mb-4">
            
        </div>
        <div class="col-lg-6 order-lg-1 animate__animated animate__fadeInUp">
        <h4 class="text-pink">Ketentuan dan Etika Menjadi Mitra</h4>
            <p class="lead">
            <ul class="list-unstyled">
    <li><span class="bullet-point"></span> Bawa nama baik diri, keluarga, dan tentunya Miemie Brownie.</li>
    <li><span class="bullet-point"></span> Jadilah sosok yang aktif dan positif di lingkungan Anda dan media sosial.</li>
    <li><span class="bullet-point"></span> Ada ketentuan pembelanjaan. Semakin sering belanja (Repeat Order), akan semakin banyak mendapatkan reward.</li>
    <li><span class="bullet-point"></span> Jika niat dan tujuan kita baik, InsyaAllah hasilnya pun akan jauh lebih baik dan bermanfaat bagi banyak orang.</li>
    <li><span class="bullet-point"></span> Terbuka untuk saran dan masukan. Jika ada hal-hal yang perlu dibicarakan secara pribadi, silakan bisa WA/hubungi tim admin.</li>
</ul>
            </p>
        </div>
    </div>
</div>

<!-- Section: Keuntungan Menjadi Mitra -->
<div class="container mt-5 py-5 bg-white rounded shadow-sm">
    <div class="row align-items-center">
        <div class="col-lg-6 text-center">
            <img src="{{ asset('frontend/img/mitra.jpg') }}" alt="Keuntungan Menjadi Mitra" class="img-fluid rounded shadow-lg mb-4">
            
        </div>
        <div class="col-lg-6 animate__animated animate__fadeInUp">
        <h4 class="text-pink">Keuntungan Menjadi Mitra</h4>
            <p class="lead">
            <ul class="list-unstyled">
                    <li><i class="bullet-point"></i> Mendapatkan penghasilan tambahan hingga jutaan rupiah</li>
                    <li><i class="bullet-point"></i> Bisa bekerja secara online dari rumah</li>
                    <li><i class="bullet-point"></i> Mendapatkan e-banner Mitra Miemie Brownie</li>
                    <li><i class="bullet-point"></i> Kami selaku tim admin juga akan memposting e-banner Anda di medsos kami</li>
                    <li><i class="bullet-point"></i> Margin keuntungan bisa besar, sehingga bisa menjadi active income hingga jutaan rupiah</li>
                    <li><i class="bullet-point"></i> Dibuatkan materi promosi, foto promo medsos dan copywritingnya, dan online training</li>
                    <li><i class="bullet-point"></i> Ada hadiah langsung emas murni</li>
                </ul>
            </p>
        </div>
    </div>
</div>


<div class="container py-5 bg-light rounded shadow-sm">
    <!-- Section: Paket Belanja di Awal -->
    <div class="row mb-5">
    <div class="col-lg-12 text-center mb-4 animate__animated animate__fadeInUp">
            <h4 class="text-black font-weight-bold">Paket Belanja di Awal</h4>
            <div class="underline bg-pink mx-auto"></div>
        </div>

        <!-- Paket Platinum -->
        <div class="col-lg-4 col-md-6 animate__animated animate__fadeInUp">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-pink font-weight-bold">Paket Platinum</h5>
                    <p class="card-text">
                        Pembelanjaan di awal min. = 18 box Cookies atau pembelanjaan product senilai Rp 1.500.000
                        <br><br>
                        Benefit:
                        <ul class="list-unstyled">
                            <li>- Hadiah langsung EMAS MURNI (0,025 gram)</li>
                            <li>- Free training</li>
                            <li>- Free konsultasi dengan owner dan tim marketing</li>
                            <li>- Free product Brownie To Go</li>
                            <li>- Menggunakan harga khusus mitra</li>
                            <li>- Dibuatkan e-banner</li>
                            <li>- Diberikan materi foto utk iklan medsos</li>
                            <li>- Diberikan materi copywriting</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>

        <!-- Paket Gold -->
        <div class="col-lg-4 col-md-6 animate__animated animate__fadeInUp">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-pink font-weight-bold">Paket Gold</h5>
                    <p class="card-text">
                        Pembelanjaan di awal min. = 14 box Cookies atau pembelanjaan product senilai Rp 1.000.000
                        <br><br>
                        Benefit:
                        <ul class="list-unstyled">
                            <li>- Hadiah langsung EMAS MURNI (0,025 gram)</li>
                            <li>- Free training</li>
                            <li>- Free konsultasi dengan owner dan tim marketing</li>
                            <li>- Menggunakan harga khusus mitra</li>
                            <li>- Dibuatkan e-banner</li>
                            <li>- Diberikan materi foto utk iklan medsos</li>
                            <li>- Diberikan materi copywriting</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>

        <!-- Paket Silver -->
        <div class="col-lg-4 col-md-6 animate__animated animate__fadeInUp">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-pink font-weight-bold">Paket Silver</h5>
                    <p class="card-text">
                        Pembelanjaan di awal min. = 10 box Cookies atau pembelanjaan product senilai Rp 750.000
                        <br><br>
                        Benefit:
                        <ul class="list-unstyled">
                            <li>- Free training</li>
                            <li>- Free konsultasi dengan owner dan tim marketing</li>
                            <li>- Free product Brownie To Go</li>
                            <li>- Menggunakan harga khusus mitra</li>
                            <li>- Dibuatkan e-banner</li>
                            <li>- Diberikan materi foto utk iklan medsos</li>
                            <li>- Diberikan materi copywriting</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section: Tanya Jawab -->
<div class="container mt-5 py-5 bg-white rounded shadow-sm">
    <div class="row mb-4">
        <div class="col-lg-12 text-center animate__animated animate__fadeInUp">
            <h4 class="text-black font-weight-bold">Tanya Jawab</h4>
            <div class="underline bg-pink mx-auto"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="frontend-section">
                <div class="faq-item mb-4">
                    <h5 class="font-weight-bold">Apakah harga boleh dinaikkan/ upping price?</h5>
                    <p>Boleh, silahkan bisa disesuaikan dengan market/kondisi di lokasi anda. Jawaban: <em>Bisa lihat tabel harga yang terlampir.</em></p>
                </div>
                <div class="faq-item mb-4">
                    <h5 class="font-weight-bold">Saya ingin membeli Paket Platinum, tetapi uang belum mencukupi, bagaimana ya?</h5>
                    <p>Sangat sederhana, tawarkan terlebih dahulu produk dan varian Miemie Brownie ke calon customer seperti saudara, relasi, dan teman Anda. Minta pembayaran dari mereka di awal, nah... uang yang terkumpul langsung diperuntukkan untuk pembelian PAKET. Yang terpenting harus amanah.</p>
                </div>
                <div class="faq-item mb-4">
                    <h5 class="font-weight-bold">Saya belum begitu jago dalam memasarkan via media online, bagaimana ya?</h5>
                    <p>Tenang saja, Tim Miemie Brownie dan ahlinya akan memberikan pembekalan melalui Training. Silahkan Anda bisa bebas sharing dan diskusi di moment tersebut. Manfaatkan juga grup WA yaa. Atau bisa main ke Outlet, ketemu dengan tim Miemie Brownie yang baik hati dan berkompeten.</p>
                </div>
                <div class="faq-item mb-4">
                    <h5 class="font-weight-bold">Bagaimana untuk pengiriman barang belanjaan yang keluar kota, apakah aman?</h5>
                    <p>InsyaAllah Aman dan Amanah. Untuk Dessert Box kita bekukan dulu sebelum dikirim. Dikemas dengan box Styrofoam. Sejauh ini, pengiriman keluar kota/pulau alhamdulillah lancar.</p>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Section: Tombol Gabung WA -->
    <div class="row mt-5">
        <div class="col-lg-12 text-center">
            <p class="lead">Jika Anda tertarik untuk menjadi bagian dari keluarga besar Miemie Brownie dengan menjadi mitra, selanjutnya silakan masuk ke grup WA dengan menekan tombol di bawah ini. Terima kasih:</p>
            <a href="https://chat.whatsapp.com/Fbgo3wXPLbJCkqwpyUqOHb" class="btn btn-green btn-lg">Gabung Grup Sekarang</a>
        </div>
    </div>
</div>
<!-- Contact Us Section Begin -->
<section class="contact-us-section py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center animate__animated animate__fadeInUp">
                <h4 class="text-black font-weight-bold">Contact Us</h4>
                <div class="underline bg-pink mx-auto"></div>
            </div>
        </div>
        <div class="row">
            <!-- Contact Details -->
<div class="col-md-6 mb-4">
    <div class="contact-info">
        <div class="contact-item d-flex align-items-center mb-4">
            <i class="fas fa-store fa-lg text-pink mr-3"></i>
            <p class="mb-0">Outlet Centre: Jl Diponegoro No 102 Kota Tegal – Jawa Tengah</p>
        </div>
        <div class="contact-item d-flex align-items-center mb-4">
            <i class="fas fa-clock fa-lg text-pink mr-3"></i>
            <p class="mb-0">08.00 – 21.00<br>12.30 – 20.00 *(masa Ramadhan)</p>
        </div>
        <div class="contact-item d-flex align-items-center mb-4">
            <i class="fab fa-whatsapp fa-lg text-pink mr-3"></i>
            <p class="mb-0">WA: <a href="https://wa.me/628152800800" class="text-pink">081 52 800 800</a></p>
        </div>
        <div class="contact-item d-flex align-items-center mb-4">
            <i class="fas fa-envelope fa-lg text-pink mr-3"></i>
            <p class="mb-0">Email: <a href="mailto:miemiebrownieofficial@gmail.com" class="text-pink">miemiebrownieofficial@gmail.com</a></p>
        </div>
        <div class="contact-item d-flex align-items-center mb-4">
            <i class="fas fa-globe fa-lg text-pink mr-3"></i>
            <p class="mb-0">Website: <a href="http://www.miemiebrownie.com" class="text-pink">www.miemiebrownie.com</a></p>
        </div>
    </div>
</div>

            <!-- Social Media Links -->
            <div class="col-md-6 text-center">
                <p class="mb-2">Follow us on social media:</p>
                <div class="d-flex flex-column flex-md-row justify-content-center">
                    <a href="https://facebook.com/miemiebrownie" class="btn btn-primary btn-sm mb-2 mb-md-0 mx-1">
                        <i class="fab fa-facebook-f"></i> Facebook
                    </a>
                    <a href="https://instagram.com/miemiebrownie" class="btn btn-primary btn-sm mx-1">
                        <i class="fab fa-instagram"></i> Instagram
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us Section End -->




<!-- CSS Kustom -->
<style>
.welcome-section {
    background-color: #f9f9f9;
    padding: 50px 0;
}
    .mt-5 {
        margin-top: 3rem !important;
    }
    .btn-pink {
        background-color: #FF4DA3;
        color: white;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-pink:hover {
        background-color: #FFB6C1;
    }

    .text-pink {
        color: #FF4DA3;
        font-weight: bold;
        font-size: 1.25rem;
    }

    .btn-green {
        background-color: #28a745;
        color: white;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-green:hover {
        background-color: #218838;
    }

    .rounded {
        border-radius: 15px;
    }

    .shadow-sm {
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }
    .h4 {
        font-family: 'Roboto', sans-serif;
        text-transform: uppercase;
        margin-top: 20px;
    }

    .display-4 {
        font-size: 2.5rem;
        font-weight: 300;
    }

    .font-italic {
        font-style: italic;
    }
    .font-weight-bold {
        font-weight: 700;
    }

    .font-weight-normal {
        font-weight: 400;
    }

    .border-pink {
        border-color: #FF4DA3 !important;
    }

    .underline {
        height: 4px;
        width: 60px;
        background-color: #FF4DA3;
        border-radius: 2px;
    }
    .text-muted {
        color: #6c757d !important;
    }

    .lead {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #333;
    }

    .display-4 {
        font-size: 2.5rem;
    }
    .bullet-point {
        display: inline-block;
        width: 8px;
        height: 8px;
        background-color: #FF4DA3;
        border-radius: 50%;
        margin-right: 10px;
        vertical-align: middle;
    }
    .faq-item h5 {
        color: #FF4DA3;
        font-size: 1.1rem;
        font-weight: 600;
    }
    .faq-item p {
        font-size: 1rem;
        line-height: 1.6;
    }
    .animate__animated {
    animation-duration: 2s;
    animation-delay: 0.5s;
    animation-fill-mode: both;
}
.contact-info {
    text-align: left;
}
.contact-item {
    font-size: 1rem; /* Adjust font size as needed */
}
.contact-info a {
    color: #ff69b4; /* Warna pink default */
    text-decoration: none;
}

.contact-info a:hover,
.contact-info a:focus {
    color: #ff69b4; /* Tetap menggunakan warna pink saat di-hover atau di-fokus */
    text-decoration: underline; /* Opsional: Tambahkan garis bawah saat di-hover */
}
.contact-us-section .btn-sm {
    font-size: 0.875rem; /* Smaller font size */
    padding: 0.25rem 0.5rem; /* Adjust padding */
}

@media (max-width: 768px) {
    .contact-item {
        font-size: 0.9rem; /* Smaller font size for mobile */
    }

    .contact-item i {
        font-size: 1.25rem; /* Smaller icon size for mobile */
    }

    .contact-item p {
        font-size: 0.9rem; /* Smaller text for mobile */
    }
}


.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover,
.btn-primary:focus {
    color: #fff; /* Tetap menggunakan warna putih pada teks tombol */
    background-color: #0056b3;
    border-color: #004080;
}

</style>
</body>
@endsection
