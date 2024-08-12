<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('backend/css/style.css')}}">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="{{ route('home') }}">Home</a>
	          </li>
	          <li>
	              <a href="{{ route('user.index') }}">User</a>
	          </li>
	          <li>
              <a href="{{ route('customer.index') }}">Customer</a>
	          </li>
	          <li>
              <a href="{{ route('produk.index') }}">Produk</a>
	          </li>
            <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Menu</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="{{ route('kategori.index') }}">Kategori</a>
                </li>
                <li>
                    <a href="{{ route('subkategori.index') }}">SubKategori</a>
                </li>
              </ul>
	          </li>
            <li>
              <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Data Pesanan</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="{{ route('pesanan.index') }}">Pesanan</a>
                </li>
                <li>
                    <a href="#">Pesanan Selesai</a>
                </li>
              </ul>
	          </li>
	        </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.index') }}">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.index') }}">Customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('produk.index') }}">Produk</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

    <div id="wrapper">
      <div class="main-content">
          <!-- isi -->
          @yield('content')
          <!-- isi end -->
      </div>
  </div>

    <script src="{{ asset('backend/js/jquery.min.js')}}"></script>
    <script src="{{ asset('backend/js/popper.js')}}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('backend/js/main.js')}}"></script>
  </body>
</html>