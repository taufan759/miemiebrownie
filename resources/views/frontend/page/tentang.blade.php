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
                                <h4>PT Nibras Berkah Mulia</h4>
                                <p class="subtitle">Miemie Brownie</p>
                                <p>
                                    PT Nibras Berkah Mulia adalah sebuah perusahaan dinamis yang bergerak di sektor F&B, dengan fokus pada produk bakery, coffee shop, dan snack. Perusahaan ini menghadirkan beberapa brand unggulan seperti <strong>Miemie Brownie, Miemie Coffee, dan Brownie To Go.</strong>
                                </p>
                                <p>
                                    Didirikan pada bulan November 2016 di Semarang, Jawa Tengah, awalnya beroperasi sebagai toko online selama setahun. Berkat kerja keras dan visi dari pasangan suami istri yang penuh energi, aktif, dan inovatif, Kemudian berhasil membuka <strong>outlet pertama di Kota Tegal</strong> pada akhir tahun 2017.
                                </p>
                                <p>
                                    Pasangan pendiri ini sebelumnya memiliki karir yang cemerlang di perusahaan skala nasional, namun mereka memutuskan untuk meninggalkan dunia profesional dan beralih menjadi pengusaha. Salah satu alasan utama mereka mendirikan Miemie Brownie adalah untuk mewujudkan impian masa muda mereka: memiliki sebuah <strong>bakery shop</strong> yang berpadu dengan <strong>coffee shop</strong>, dan menawarkan oleh-oleh eksklusif di kota yang mereka cintai. Selain itu, mereka juga berkomitmen untuk memberikan dampak positif bagi masyarakat sekitar.
                                </p>
                                <p>
                                    Nama <strong>"Miemie"</strong> sendiri diambil dari panggilan sayang anak-anak kepada sang ibu, yang juga merupakan salah satu pendiri, sehingga memberikan sentuhan personal dan kehangatan pada brand ini.
                                </p>
                                <p>
                                    Dengan dedikasi dan cinta pada setiap produk yang dihasilkan, terus tumbuh dan berinovasi, menghadirkan pengalaman kuliner yang unik dan berkualitas tinggi bagi para pelanggannya.
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
                            <p style="font-size: 20px; line-height: 1.6; margin-top: 20px;">“Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, veniam!”</p>
                            <div class="testimonial__author" style="display: flex; align-items: center; justify-content: center; margin-top: 30px;">
                                <div class="testimonial__author__pic" style="flex-shrink: 0;">
                                    <img src="{{ asset('frontend/img/about/RamaSahid.jpeg') }}" alt="Testimonial Author" style="width: 100px; height: 100px; border-radius: 50%;">
                                </div>
                                <div class="testimonial__author__text" style="margin-left: 15px; text-align: left;">
                                    <h5 style="font-size: 24px; font-weight: bold; margin: 0;">Rama Sahid</h5>
                                    <p style="font-size: 16px; color: #666; margin: 0;">CEO PT Nibras Berkah Mulia </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        
        <!-- Testimonial Section End -->
    
        <!-- Counter Section Begin -->
        <section class="counter spad" style="margin-top: 50px; margin-bottom: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__number">
                                <h2 class="cn_num">8</h2>
                            </div>
                            <span>Tahun Beroperasi</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__number">
                                <h2 class="cn_num">50</h2>
                            </div>
                            <span>Lebih Variasi Menu</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__number">
                                <h2 class="cn_num">95</h2>
                                <strong>%</strong>
                            </div>
                            <span>Tingkat Kepuasan Pelanggan</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>        
        <!-- Counter Section End -->
        
        <!-- Team Section Begin -->
        <section class="team spad" style="padding-top: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Tim Kami</h2>
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
                            <h2>Partner Kami</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Client logos -->
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                        <a href="#" class="client__item"><img src="{{ asset('frontend/img/clients/partner1.jpg' )}}" alt="Partner"></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                        <a href="#" class="client__item"><img src="{{ asset('frontend/img/clients/partner2.png' )}}" alt="Partner"></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                        <a href="#" class="client__item"><img src="{{ asset('frontend/img/clients/partner1.jpg' )}}" alt="Partner"></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                        <a href="#" class="client__item"><img src="{{ asset('frontend/img/clients/partner2.png' )}}" alt="Partner"></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                        <a href="#" class="client__item"><img src="{{ asset('frontend/img/clients/partner1.jpg' )}}" alt="Partner"></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                        <a href="#" class="client__item"><img src="{{ asset('frontend/img/clients/partner2.png' )}}" alt="Partner"></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Client Section End -->
</body>
@endsection