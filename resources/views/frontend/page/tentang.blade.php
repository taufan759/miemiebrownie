@extends('frontend.layouts.app')
@section('content')
<body>
        <!-- History Section Begin -->
        <div class="history-section">
            <div class="container">
                <section class="about">
                    <div class="row">
                        <div class="col-12">
                            <div class="history-content">
                                <h4>Miemie Brownie</h4>
                                <p class="subtitle">Mimpi Manis yang Menjadi Kenyataan</p>
                                <p>
                                    Di sebuah sudut Kota Semarang yang penuh kenangan, pada bulan November 2016, sebuah perjalanan baru dimulai. Tidak seperti kebanyakan cerita sukses lainnya, kisah Miemie Brownie berawal dari mimpi sederhana sepasang suami istri yang penuh semangat dan cita-cita besar. Mereka adalah pasangan yang selalu melangkah bersama, baik dalam kehidupan pribadi maupun karier profesional.
                                </p>
                                <p>
                                    Awalnya, mereka bekerja di perusahaan nasional yang memberikan mereka karier cemerlang dan posisi yang mapan. Namun, di balik kesuksesan tersebut, tersimpan mimpi yang sudah lama mereka rajut: membangun sebuah toko roti yang menyatu dengan coffee shop, tempat di mana aroma kopi segar dan roti hangat berpadu, menciptakan kenangan manis bagi setiap pelanggan yang datang. Pada akhir 2017, dengan penuh keberanian, mereka memutuskan untuk meninggalkan zona nyaman mereka. Mereka resign dari pekerjaan, meninggalkan dunia profesional yang sudah mereka kenal, dan memulai perjalanan sebagai pengusaha. Langkah ini bukanlah hal yang mudah, tetapi tekad mereka tidak pernah goyah. Mereka ingin menghadirkan sesuatu yang istimewa bagi kota yang mereka cintai.
                                </p>
                                <p>
                                    Miemie Brownie pun lahir, dimulai sebagai online store di Kota Semarang. Respons yang positif dari pelanggan membuat mereka yakin untuk membuka outlet fisik pertama di Kota Tegal. Toko ini bukan hanya sekedar tempat berjualan, tetapi juga wujud dari cinta mereka terhadap seni membuat roti. Mereka ingin setiap gigitan dari produk mereka membawa kebahagiaan dan kehangatan bagi siapa saja yang menikmatinya. Nama "Miemie" diambil dari panggilan sayang anak-anak mereka kepada sang ibu, yang juga merupakan salah satu pendiri. Setiap produk yang dihasilkan oleh Miemie Brownie bukan hanya tentang rasa, tetapi juga tentang cerita—tentang cinta, pengorbanan, dan impian yang menjadi nyata. Mereka percaya bahwa setiap orang berhak merasakan momen manis dalam hidup mereka, dan Miemie Brownie hadir untuk mewujudkan momen tersebut.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- History Section End -->

        <!-- Testimonial Section Begin -->
        <section class="testimonial spad">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="testimonial__text" style="background-color: #f9f9f9; padding: 40px; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1); text-align: center;">
                            <span class="icon_quotations" style="font-size: 50px; color: #333;"></span>
                            <p style="font-size: 20px; line-height: 1.6; margin-top: 20px;">“Bergabung dengan program kemitraan ini adalah keputusan terbaik yang pernah saya buat. Dukungan dari tim sangat luar biasa.”</p>
                            <div class="testimonial__author" style="display: flex; align-items: center; justify-content: center; margin-top: 30px;">
                                <div class="testimonial__author__pic" style="flex-shrink: 0;">
                                    <img src="{{ asset('frontend/img/about/testimonial-author.jpg') }}" alt="Testimonial Author" style="width: 100px; height: 100px; border-radius: 50%;">
                                </div>
                                <div class="testimonial__author__text" style="margin-left: 15px; text-align: left;">
                                    <h5 style="font-size: 24px; font-weight: bold; margin: 0;">Ardi Setiawan</h5>
                                    <p style="font-size: 16px; color: #666; margin: 0;">Mitra Sejak 2020</p>
                                </div>
                            </div>
                        </div>
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
                            <img src="{{ asset('frontend/img/about/team-1.jpg' )}}" alt="Tim">
                            <h4>Fulan Bin Fulan</h4>
                            <span>Founder</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team__item">
                            <img src="{{ asset('frontend/img/about/team-2.jpg' )}}" alt="Tim">
                            <h4>Fulan Bin Fulan</h4>
                            <span>Manager Kemitraan</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team__item">
                            <img src="{{ asset('frontend/img/about/team-3.jpg' )}}" alt="Tim">
                            <h4>Fulan Bin Fulan</h4>
                            <span>Marketing</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team__item">
                            <img src="{{ asset('frontend/img/about/team-4.jpg' )}}" alt="Tim">
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
                        <a href="#" class="client__item"><img src="{{ asset('frontend/img/clients/client-9.png' )}}" alt="Partner"></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                        <a href="#" class="client__item"><img src="{{ asset('frontend/img/clients/client-9.png' )}}" alt="Partner"></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                        <a href="#" class="client__item"><img src="{{ asset('frontend/img/clients/client-9.png' )}}" alt="Partner"></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                        <a href="#" class="client__item"><img src="{{ asset('frontend/img/clients/client-9.png' )}}" alt="Partner"></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                        <a href="#" class="client__item"><img src="{{ asset('frontend/img/clients/client-9.png' )}}" alt="Partner"></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                        <a href="#" class="client__item"><img src="{{ asset('frontend/img/clients/client-9.png' )}}" alt="Partner"></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Client Section End -->
</body>
@endsection