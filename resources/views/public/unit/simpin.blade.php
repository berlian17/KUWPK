<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}} | Profile</title>
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
    <link rel="stylesheet" href="{{ asset('assets/css/unit/simpin.css') }}">
</head>
<body id="body">
    
    <!-- Setelah Login -->
    @if (auth()->check())
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
                        <li class="nav-item active dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Unit Usaha
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="">Minimarket</a>
                                <a class="dropdown-item" href="{{ route('public.unitsimpin') }}">Simpanan Pinjam</a>
                                <a class="dropdown-item" href="">Distributor Pupuk Ritel</a>
                                <a class="dropdown-item" href="">Supplier Barang & Jasa</a>
                                <a class="dropdown-item" href="">Ekspedisi</a>
                                <a class="dropdown-item" href="">Kontraktor Sipil & Struktur</a>
                                <a class="dropdown-item" href="">Event Organizer & Catering</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Toko
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
    </header>
    <!-- Sebelum Login -->
    @else
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
                        <li class="nav-item active dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Unit Usaha
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="">Minimarket</a>
                                <a class="dropdown-item" href="{{ route('public.unitsimpin') }}">Simpanan Pinjam</a>
                                <a class="dropdown-item" href="">Distributor Pupuk Ritel</a>
                                <a class="dropdown-item" href="">Supplier Barang & Jasa</a>
                                <a class="dropdown-item" href="">Ekspedisi</a>
                                <a class="dropdown-item" href="">Kontraktor Sipil & Struktur</a>
                                <a class="dropdown-item" href="">Event Organizer & Catering</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Toko
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
                            <div class="border"></div>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /main nav -->
        </div>
    </header>
    @endif

    <!-- Start Section1 -->
    <section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Simpan Pinjam</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End section1 -->

    <!-- Start Section2 -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 option">
                    <h4><b>Unit Usaha</b></h4>
                    <ul>
                        <li><a class="dropdown-item" href="">Minimarket</a></li>
                        <li><a class="dropdown-item active" href="{{ route('public.unitsimpin') }}">Simpan Pinjam</a></li>
                        <li><a class="dropdown-item" href="">Distributor Pupuk Ritel</a></li>
                        <li><a class="dropdown-item" href="">Supplier Barang & Jasa</a></li>
                        <li><a class="dropdown-item" href="">Ekspedisi</a></li>
                        <li><a class="dropdown-item" href="">Konstraktor Sipil & Struktur</a></li>
                        <li><a class="dropdown-item" href="">Event Organizer & Catering</a></li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <h4><b>Overview</b></h4>
                    <div class="border2"></div>

                    {{-- <h4><b>Foto</b></h4>
                    <div class="border2"></div>

                    <div class="row filtr-container text-center">
                        <div class="col-md-4 col-sm-6 col-xs-6 filtr-item" data-category="mix">
                            <div class="portfolio-block shadow">
                                <img src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img" class="img-fluid">   
                                <div class="caption">
                                    <a class="search-icon" href="{{ asset('assets/logo/KUWPK-logo.png') }}" data-lightbox="image-1">
                                        <i class="tf-ion-ios-search-strong"></i>
                                    </a>
                                    <h4>
                                        <a href="">View</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 filtr-item" data-category="mix">
                            <div class="portfolio-block shadow">
                                <img src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img" class="img-fluid">   
                                <div class="caption">
                                    <a class="search-icon" href="{{ asset('assets/logo/KUWPK-logo.png') }}" data-lightbox="image-1">
                                        <i class="tf-ion-ios-search-strong"></i>
                                    </a>
                                    <h4>
                                        <a href="">View</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 filtr-item " data-category="mix">
                            <div class="portfolio-block shadow">
                                <img src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img" class="img-fluid">   
                                <div class="caption">
                                    <a class="search-icon" href="{{ asset('assets/img/Surat_Domisili.jpeg') }}" data-lightbox="image-1">
                                        <i class="tf-ion-ios-search-strong"></i>
                                    </a>
                                    <h4>
                                        <a href="">View</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- End section2 -->

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