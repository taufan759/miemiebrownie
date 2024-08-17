@extends('frontend.layouts.app')
@section('content')
<body>
    <!-- Jadi Mitra Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__pic">
                        <img src="{{ asset('frontend/img/bg2.png') }}" alt="Jadi Mitra">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>Mengapa Bergabung?</h4>
                        <p>Bergabunglah dengan jaringan kami dan nikmati keuntungan memiliki bisnis sendiri dengan dukungan penuh dari kami.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>Keuntungan Mitra</h4>
                        <p>Nikmati berbagai keuntungan seperti brand awareness yang sudah dikenal, pelatihan khusus, dan dukungan marketing.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>Cara Bergabung</h4>
                        <p>Mudah dan cepat! Cukup ikuti langkah-langkah sederhana kami dan jadilah bagian dari keluarga besar kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Jadi Mitra Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="testimonial__text">
                        <span class="icon_quotations"></span>
                        <p>“Bergabung dengan program kemitraan ini adalah keputusan terbaik yang pernah saya buat. Dukungan dari tim sangat luar biasa.”</p>
                        <div class="testimonial__author">
                            <div class="testimonial__author__pic">
                                <img src="img/franchise/testimonial-author.jpg" alt="Testimonial Author">
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Andi Wijaya</h5>
                                <p>Mitra Sejak 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="testimonial__pic set-bg" data-setbg="img/franchise/testimonial-pic.jpg"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Counter Section Begin -->
    <section class="counter spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__number">
                            <h2 class="cn_num">120</h2>
                        </div>
                        <span>Mitra <br />Aktif</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__number">
                            <h2 class="cn_num">50</h2>
                        </div>
                        <span>Proyek <br />Berjalan</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__number">
                            <h2 class="cn_num">30</h2>
                        </div>
                        <span>Lokasi <br />Beroperasi</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__number">
                            <h2 class="cn_num">95</h2>
                            <strong>%</strong>
                        </div>
                        <span>Tingkat <br />Kepuasan</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Tim Kami</span>
                        <h2>Temui Tim Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Anggota tim diubah sesuai kebutuhan -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="img/franchise/team-1.jpg" alt="Tim">
                        <h4>Fulan Bin Fulan</h4>
                        <span>Founder</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="img/franchise/team-2.jpg" alt="Tim">
                        <h4>Fulan Bin Fulan</h4>
                        <span>Manager Kemitraan</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="img/franchise/team-3.jpg" alt="Tim">
                        <h4>Fulan Bin Fulan</h4>
                        <span>Marketing</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="img/franchise/team-4.jpg" alt="Tim">
                        <h4>Fulan Bin Fulan</h4>
                        <span>Customer Support</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Client Section Begin -->
    <section class="clients spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Partner Kami</span>
                        <h2>Mitra Terpercaya Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Client logos -->
                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                    <a href="#" class="client__item"><img src="img/franchise/client-1.png" alt="Partner"></a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                    <a href="#" class="client__item"><img src="img/franchise/client-2.png" alt="Partner"></a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                    <a href="#" class="client__item"><img src="img/franchise/client-3.png" alt="Partner"></a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                    <a href="#" class="client__item"><img src="img/franchise/client-4.png" alt="Partner"></a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                    <a href="#" class="client__item"><img src="img/franchise/client-5.png" alt="Partner"></a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                    <a href="#" class="client__item"><img src="img/franchise/client-6.png" alt="Partner"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Section End -->
</body>
@endsection