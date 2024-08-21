<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Miemie Brownie | Oleh-oleh Exclusive Tegal</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="/cart/keranjang"><i class="fa fa-shopping-cart" style="color: grey;"></i></a>
                @if(Auth::guard('customer')->check())
                <a href="/customer/profile"><i class="fa fa-user" style="color: grey;"></i></a>
                <form action="{{ route('customer.logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-link" style="padding: 0; color: grey; text-decoration: none;">
                        <i class="fa fa-sign-out-alt"></i>
                    </button>
                </form>
                @else
                <a href="/customer/login"><i class="fa fa-user" style="color: grey;"></i></a>
                @endif
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Miemie Brownie X Lost In Coffee</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="/"><img src="{{ asset('frontend/img/logo.png') }}" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
                            <li class="{{ request()->is('produk') ? 'active' : '' }}"><a href="/page/produk">Produk</a></li>
                            <li class="{{ request()->is('tentang') ? 'active' : '' }}"><a href="/page/tentang">Tentang Kami</a></li>
                            <li class="{{ request()->is('mitra')  ? 'active' : '' }}"><a href="/page/mitra">Info Kemitraan</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="/cart/keranjang"><i class="fa fa-shopping-cart" style="color: grey;"></i></a>
                        @if(Auth::guard('customer')->check())
                        <a href="/customer/profile"><i class="fa fa-user" style="color: grey;"></i></a>
                        <form action="{{ route('customer.logout') }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-link" style="padding: 0; color: grey; text-decoration: none;">
                                <i class="fa fa-sign-out-alt"></i>
                            </button>
                        </form>
                        @else
                        <a href="/customer/login"><i class="fa fa-user" style="color: grey;"></i></a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->
    
    <div id="wrapper">
        <div class="main-content">
            <!-- Main Content Begin -->
            @yield('content')
            <!-- Main Content End -->
        </div>
    </div>
    
    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        {{-- <div class="footer__logo">
                            <a href="#"><img src="{{ asset('frontend/img/footer-logo.png') }}" alt=""></a>
                        </div> --}}
                        <h6>Lokasi Kami</h6>
                        <address style="color: #f0f0f0;">
                            Jl Diponegoro No 102<br>
                            Kota Tegal - Jawa Tengah 52125<br>
                            <a href="https://wa.me/628152800800" style="color: #f0f0f0;"><i class="fa fa-whatsapp"></i> 081 52 800 800</a>
                        </address>
                        {{-- <a href="#"><img src="{{ asset('frontend/img/payment.png') }}" alt=""></a> --}}
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Ikuti Kami</h6>
                        <p style="color: #f0f0f0;">
                            <a href="https://www.facebook.com/miemiebrownie" style="color: #f0f0f0;"><i class="fa fa-facebook-f"></i> Facebook</a><br>
                            <a href="https://www.instagram.com/miemiebrownie" style="color: #f0f0f0;"><i class="fa fa-instagram"></i> Instagram</a><br>
                            <a href="https://www.tiktok.com/@miemie.brownie" style="color: #f0f0f0;"><i class="fa fa-tiktok"></i> TikTok</a><br>
                            <a href="https://youtube.com/@miemiebrownieofficial" style="color: #f0f0f0;"><i class="fa fa-youtube-play"></i> Youtube</a><br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Infromasi</h6>
                        <p style="color: #f0f0f0;">
                            <a href="#" style="color: #f0f0f0;">Promo & Event</a><br>
                            <a href="#" style="color: #f0f0f0;">Jadi Mitra</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <div class="footer__about">
                            <h6>Jam Operasional</h6>
                                <p style="color: #f0f0f0;">
                                    Buka setiap hari dari pukul 07:00 hingga 22:00 WIB. <br>
                                    Pelajari lebih lanjut tentang Miemie Brownie <a href="https://instabio.cc/20707wemr50" style="color: #FF4DA3;">di sini</a>.
                                </p>
                            </div>                        
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="footer__copyright__text">
                            <p>&copy; 
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> 
                                All rights reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Cari">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js')}}"></script> 
    <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.js')}}"></script>
    <script src="{{ asset('frontend/js/mixitup.min.js')}}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/js/main.js')}}"></script>
</body> 
</html>