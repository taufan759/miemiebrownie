<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Miemie Brownie | Oleh-oleh Exclusive Tegal</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="/"><img src="{{ asset('frontend/img/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="{{ request()->is('/') ? 'active' : '' }}">
                                <a href="/">Home</a>
                            </li>
                            <li class="{{ request()->is('produk') ? 'active' : '' }}">
                                <a href="/page/produk">Produk</a>
                            </li>
                            <li class="{{ request()->is('tentang') ? 'active' : '' }}">
                                <a href="/page/tentang">Tentang Kami</a>
                            </li>
                            <li class="{{ request()->is('mitra')  ? 'active' : '' }}">
                                <a href="/page/mitra">Info Kemitraan</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
    <div class="header__nav__option">
        <a href="#" class="search-switch"><i class="fa fa-search" style="color: grey;"></i></a>
        <a href="#"><i class="fa fa-heart" style="color: grey;"></i></a>
        <a href="/cart/keranjang"><i class="fa fa-shopping-cart" style="color: grey;"></i></a>
        @if(Auth::guard('customer')->check())
        <a href="/customer/ profile"><i class="fa fa-user" style="color: grey;"></i></a>
            <form action="{{ route('customer.logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-link" style="padding: 0; color: grey; text-decoration: none;">
                    <a class="fa fa-sign-out-alt"></a>
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
                    <div class="footer__about">
                        {{-- <div class="footer__logo">
                            <a href="#"><img src="{{ asset('frontend/img/footer-logo.png')}}" alt=""></a>
                        </div> --}}
                        <address style="color: #f0f0f0;">
                            Jl. P. Diponegoro No.102<br>
                            Kota Tegal - Jawa Tengah 52125<br>
                            <a href="https://www.facebook.com/miemiebrownie"><i class="fa fa-facebook-f"></i>@miemiebrownie</a> <br>
                            <a href="https://www.instagram.com/miemiebrownie"><i class="fa fa-instagram"></i>@miemieandbrownie</a> <br>
                            <a href="https://wa.me/628152800800">081 52 800 800</a>
                        </address>
                        {{-- <a href="#"><img src="{{ asset('frontend/img/payment.png')}}" alt=""></a> --}}
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Review</h6>
                        <ul>
                            <li><a href="#">Testimony</a></li>
                            <li><a href="#">Public Figure</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Update</h6>
                        <ul>
                            <li><a href="#">Promo & Event</a></li>
                            <li><a href="#">Jadi Mitra</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>NewLetter</h6>
                        <div class="footer__newslatter">
                            <p>Always updated with our products and promotions!</p>
                            <form action="#" method="post">
                                <input type="text" placeholder="Keep updated">
                                <button type="submit"><i class="icon_mail_alt"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <p>Copyright ©
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