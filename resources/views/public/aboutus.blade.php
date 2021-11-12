<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}} | Profile Perusahaan</title>
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
    <link rel="stylesheet" href="{{ asset('assets/css/aboutus.css') }}">
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
                        <li class="nav-item active dropdown">
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
                        <li class="nav-item dropdown">
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
                        <li class="nav-item active dropdown">
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
                        <li class="nav-item dropdown">
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
    @endif

    <!-- Start Section1 -->
    <section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Profile Koperasi</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End section1 -->

    <!-- Start Section2 -->
    <section class="about-shot-info section-sm s1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img">
                </div>
                <div class="col-md-6 mt-20">
                    <h2 class="mb-5"><b>Tentang KUWPK</b></h2>
                    <p>KUWPK merupakan salah satu upaya PT. Pupuk Kujang untuk meningkatkan kesejahteraan anggotanya, khususnya di daerah sekitar perusahaan. Pembentukan koperasi ini lebih dikenal dengan nama Koperasi Usaha Warga Pupuk Kujang berdiri sejak tanggal 17 Oktober 1980 dengan nama Koperasi Kesejahteraan Karyawan Kujang (K4).</p>
                    <p>Kegiatan usaha yang diselenggarakan anggota antara lain adalah layanan simpan pinjam, pembelian barang, unit usaha pertokoan, dan usaha catering yang biasanya menyediakan konsumsi untuk acara perusahaan. Sementara itu untuk kegiatan usaha non anggota adalah usaha jasa foto copy dan pengadaan barang rekanan PT Pupuk Kujang.</p>
                    <p>KUWPK sempat berganti nama beberapa kali sejak awal keberadaannya. K4 pernah berubah menjadi Koperasi Karyawan Pupuk Kujang (KOPKAR-PK), dan terhitung mulai tanggal 10 Juni 2002, Koperasi Karyawan Pupuk Kujang (KOPKAR) dengan Koperasi Wanita Pupuk Kujang (KOPWAN) bergabung membentuk Koperasi yang baru dengan nama KUWPK dan telah disahkan berdasarkan Akta Pendirian atau Perubahan oleh Dinas Koperasi Pengusaha Kecil dan Menengah Kabupaten Karawang No. 518/016/BH/PLK/VI/2002.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End section2 -->

    <!-- Start Section3 -->
    <section class="service-2 section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title text-center">
                        <h2><b>Visi</b></h2>
                        <div class="border"></div>
                        <h5>Menjadi koperasi sehat tingkat nasional dan memberikan manfaat sebesar-besarnya untuk anggota.</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="title text-center">
                        <h2><b>Misi</b></h2>
                        <div class="border"></div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img" class="rounded-circle mb-4">   
                    <h5>Melayani sepenuh hati untuk anggota.</h5>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img" class="rounded-circle mb-4">  
                    <h5>Pengelolaan transparan dan professional.</h5>  
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img" class="rounded-circle mb-4">    
                    <h5>Menjadikan KUWPK, koperasi berbasis digital.</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- End section3 -->

    <!-- Start Section4 -->
    <section class="portfolio section-sm" id="portfolio">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-12 mt-5">
                    <!-- section title -->
                    <div class="title text-center">
                        <h2><b>Galeri Foto</b></h2>
                        <div class="border"></div>
                    </div>
                    <!-- /section title -->
                    <div class="portfolio-filter">
                        <button type="button" data-filter="all">All</button>
                        <button type="button" data-filter="photography">Photography</button>
                        <button type="button" data-filter="ios">IOS App</button>
                        <button type="button" data-filter="development">Development</button>
                        <button type="button" data-filter="design">Design</button>
                    </div>
                    <div class="row filtr-container">
                        <div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, design">
                            <div class="portfolio-block">
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
                        <div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, design, ios">
                            <div class="portfolio-block">
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
                        <div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, photography, development">
                            <div class="portfolio-block">
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
                        <div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, photography, ios">
                            <div class="portfolio-block">
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
                        <div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, design">
                            <div class="portfolio-block">
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
                        <div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, design, development">
                            <div class="portfolio-block">
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
                        <div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, photography">
                            <div class="portfolio-block">
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
                        <div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, design, development">
                            <div class="portfolio-block">
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
                    </div>
                </div>
                <!-- /end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- End section4 -->

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