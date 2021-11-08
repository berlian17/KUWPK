<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}} | Produk Wanita</title>
    <link rel="icon" href="{{ asset('assets/logo/KUWPK-logo.png') }}" type="image/x-icon">

    <!-- CSS -->
    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/themefisher-font/style.css') }}">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Lightbox.min css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/lightbox2/dist/css/lightbox.min.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/animate/animate.css') }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/produk/produk.css') }}">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/77dbe32ca1.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    <!-- Sebelum Login -->
    <header class="navigation fixed-top">
        <div class="container">
            <!-- main nav -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- logo -->
                <a class="navbar-brand logo" href="{{ route('public.beranda') }}">
                    <img class="img-fluid" style="max-width: 50px;" src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img">
                </a>
                <!-- /logo -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('public.beranda') }}">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Tentang Kami
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('public.aboutus') }}">Profile Perusahaan</a>
                                <a class="dropdown-item" href="{{ route('public.organisasi') }}">Strukture Organisasi</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Layanan
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('public.simpanan') }}">Simpanan</a>
                                <a class="dropdown-item" href="{{ route('public.pinjaman') }}">Pinjaman</a>
                            </div>
                        </li>
                        <li class="nav-item active dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Produk
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('public.produkpria') }}">Pria</a>
                                <a class="dropdown-item" href="{{ route('public.produkwanita') }}">Wanita</a>
                                <a class="dropdown-item" href="{{ route('public.produkanak') }}">Anak-anak</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('public.kontak') }}">Kontak</a>
                        </li>
                    </ul>
                    <div class="col-md-3 auth">
                        <ul class="navbar-nav ml-auto text-center">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            <div class="border"></div>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Daftar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /main nav -->
        </div>
    </header>

    <!-- Setelah Login -->
    {{-- <header class="navigation fixed-top">
        <div class="container">
            <!-- main nav -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- logo -->
                <a class="navbar-brand logo" href="{{ route('public.beranda') }}">
                    <img class="img-fluid" style="max-width: 50px;" src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img">
                </a>
                <!-- /logo -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('public.beranda') }}">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Tentang Kami
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('public.aboutus') }}">Profile Perusahaan</a>
                                <a class="dropdown-item" href="{{ route('public.organisasi') }}">Strukture Organisasi</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Layanan
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('public.simpanan') }}">Simpanan</a>
                                <a class="dropdown-item" href="{{ route('public.pinjaman') }}">Pinjaman</a>
                            </div>
                        </li>
                        <li class="nav-item active dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Produk
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('public.produkpria') }}">Pria</a>
                                <a class="dropdown-item" href="{{ route('public.produkwanita') }}">Wanita</a>
                                <a class="dropdown-item" href="{{ route('public.produkanak') }}">Anak-anak</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('public.kontak') }}">Kontak</a>
                        </li>
                    </ul>
                    <div class="col-md-3 auth">
                        <ul class="navbar-nav ml-auto text-center">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                    <img class="img-profile rounded-circle"
                                        src="{{ asset('assets/img/undraw_profile.svg') }}">
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('public.profile') }}">Profile</a>
                                    <a class="dropdown-item" href="{{ route('public.portofolio') }}">Portofolio</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="
                                        event.preventDefault();
                                        document.getElementById('formlogout').submit();">
                                        Logout
                                    </a>
                                    <form action="{{ route('logout') }}" id="formlogout" method="POST">@csrf</form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /main nav -->
        </div>
    </header> --}}

    <!-- Start Section1 -->
    <section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Produk Wanita</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End section1 -->

    <!-- Start Section2 -->
    <section class="th-fullpage hero-area2">
    </section>
    <!-- End section2 -->

     <!-- Start Section3 -->
     <section class="portfolio section-sm" id="portfolio">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-12 mt-5">
                    <h3><b>Produk</b></h3>
                    <div class="row filtr-container">
                        <div class="col-md-4 col-sm-6 col-xs-6 filtr-item" data-category="mix">
                            <a href="{{ route('public.produkdetail') }}">
                                <img src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img" class="img-fluid pt-5">   
                            </a>
                            <div class="row">
                                <h5 class="leftbox mt-3 pl-2">Loren Ipsum</h5>
                                <h5 class="rightbox mt-3 pr-2 d-flex flex-row-reverse">Rp 1xx.xxx.xxx</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 filtr-item" data-category="mix">
                            <a href="{{ route('public.produkdetail') }}">
                                <img src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img" class="img-fluid pt-5">   
                            </a>
                            <div class="row">
                                <h5 class="leftbox mt-3 pl-2">Loren Ipsum</h5>
                                <h5 class="rightbox mt-3 pr-2 d-flex flex-row-reverse">Rp 1xx.xxx.xxx</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 filtr-item" data-category="mix">
                            <a href="{{ route('public.produkdetail') }}">
                                <img src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img" class="img-fluid pt-5">   
                            </a>
                            <div class="row">
                                <h5 class="leftbox mt-3 pl-2">Loren Ipsum</h5>
                                <h5 class="rightbox mt-3 pr-2 d-flex flex-row-reverse">Rp 1xx.xxx.xxx</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 filtr-item" data-category="mix">
                            <a href="{{ route('public.produkdetail') }}">
                                <img src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img" class="img-fluid pt-5">   
                            </a>
                            <div class="row">
                                <h5 class="leftbox mt-3 pl-2">Loren Ipsum</h5>
                                <h5 class="rightbox mt-3 pr-2 d-flex flex-row-reverse">Rp 1xx.xxx.xxx</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 filtr-item" data-category="mix">
                            <a href="{{ route('public.produkdetail') }}">
                                <img src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img" class="img-fluid pt-5">   
                            </a>
                            <div class="row">
                                <h5 class="leftbox mt-3 pl-2">Loren Ipsum</h5>
                                <h5 class="rightbox mt-3 pr-2 d-flex flex-row-reverse">Rp 1xx.xxx.xxx</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 filtr-item" data-category="mix">
                            <a href="{{ route('public.produkdetail') }}">
                                <img src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img" class="img-fluid pt-5">   
                            </a>
                            <div class="row">
                                <h5 class="leftbox mt-3 pl-2">Loren Ipsum</h5>
                                <h5 class="rightbox mt-3 pr-2 d-flex flex-row-reverse">Rp 1xx.xxx.xxx</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 filtr-item" data-category="mix">
                            <a href="{{ route('public.produkdetail') }}">
                                <img src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img" class="img-fluid pt-5">   
                            </a>
                            <div class="row">
                                <h5 class="leftbox mt-3 pl-2">Loren Ipsum</h5>
                                <h5 class="rightbox mt-3 pr-2 d-flex flex-row-reverse">Rp 1xx.xxx.xxx</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 filtr-item" data-category="mix">
                            <a href="{{ route('public.produkdetail') }}">
                                <img src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img" class="img-fluid pt-5">   
                            </a>
                            <div class="row">
                                <h5 class="leftbox mt-3 pl-2">Loren Ipsum</h5>
                                <h5 class="rightbox mt-3 pr-2 d-flex flex-row-reverse">Rp 1xx.xxx.xxx</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 filtr-item" data-category="mix">
                            <a href="{{ route('public.produkdetail') }}">
                                <img src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img" class="img-fluid pt-5">   
                            </a>
                            <div class="row">
                                <h5 class="leftbox mt-3 pl-2">Loren Ipsum</h5>
                                <h5 class="rightbox mt-3 pr-2 d-flex flex-row-reverse">Rp 1xx.xxx.xxx</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- End section3 -->

    <!-- FAB -->
    <div class="fab-container">
		<div class="fab fab-main">
			<i class="fas fa-shopping-bag"></i>
		</div>

		<ul class="fab-options">
            <a href="{{ route('public.keranjang') }}">
                <li>
                    <span class="fab-label">Keranjang</span>
                    <div class="fab-icon-holder">
                        <i class="fas fa-cart-arrow-down"></i>
                    </div>
                </li>
            </a>
			<a href="{{ route('public.transaksi') }}">
                <li>
                    <span class="fab-label">Transaksi</span>
                    <div class="fab-icon-holder">
                        <i class="fas fa-file-alt"></i>
                    </div>
                </li>
            </a>
		</ul>
	</div>

    @include('public.component.footer')

    <!-- Main jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Form Validation -->
    <script src="{{ asset('assets/plugins/form-validation/jquery.form.js') }}"></script> 
    <script src="{{ asset('assets/plugins/form-validation/jquery.validate.min.js') }}"></script>
    <!-- Bootstrap4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Parallax -->
    <script src="{{ asset('assets/plugins/parallax/jquery.parallax-1.1.3.js') }}"></script>
    <!-- lightbox -->
    <script src="{{ asset('assets/plugins/lightbox2/dist/js/lightbox.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
    <!-- filter -->
    <script src="{{ asset('assets/plugins/filterizr/jquery.filterizr.min.js') }}"></script>
    <!-- Smooth Scroll js -->
    <script src="{{ asset('assets/plugins/smooth-scroll/smooth-scroll.min.js') }}"></script>
    <!-- Custom js -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>