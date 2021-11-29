<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}} | Produk Detail</title>
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
    <link rel="stylesheet" href="{{ asset('assets/css/produk/detail.css') }}">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/77dbe32ca1.js" crossorigin="anonymous"></script>
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Unit Usaha
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="">Minimarket</a>
                                <a class="dropdown-item" href="">Simpanan Pinjam</a>
                                <a class="dropdown-item" href="">Distributor Pupuk Ritel</a>
                                <a class="dropdown-item" href="">Supplier Barang & Jasa</a>
                                <a class="dropdown-item" href="">Ekspedisi</a>
                                <a class="dropdown-item" href="">Kontraktor Sipil & Struktur</a>
                                <a class="dropdown-item" href="">Event Organizer & Catering</a>
                            </div>
                        </li>
                        <li class="nav-item active dropdown">
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Unit Usaha
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="">Minimarket</a>
                                <a class="dropdown-item" href="">Simpanan Pinjam</a>
                                <a class="dropdown-item" href="">Distributor Pupuk Ritel</a>
                                <a class="dropdown-item" href="">Supplier Barang & Jasa</a>
                                <a class="dropdown-item" href="">Ekspedisi</a>
                                <a class="dropdown-item" href="">Kontraktor Sipil & Struktur</a>
                                <a class="dropdown-item" href="">Event Organizer & Catering</a>
                            </div>
                        </li>
                        <li class="nav-item active dropdown">
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
                    <h2>Produk Detail</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End section1 -->

    <!-- Start Section2 -->
    <section class="portfolio section-sm" id="portfolio">
        <div class="container-fluid">
            <div class="row">
                <h2 class="leftbox"><b>Loren Ipsum</b></h2>
                <h2 class="rightbox"><b>Rp 1xx.xxx.xxx</b></h2>
            </div>
            <div class="row reverse">
                <div class="col-lg-8">
                    <div class="row filtr-container">
                        <div class="col-md-6 col-sm-6 col-xs-6 filtr-item " data-category="mix">
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
                        <div class="col-md-6 col-sm-6 col-xs-6 filtr-item " data-category="mix">
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
                        <div class="col-md-6 col-sm-6 col-xs-6 filtr-item " data-category="mix">
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
                <div class="col-lg-4">
                    <h5><b>Deskripsi</b></h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <div class="contact-form">
                        <form action="#" id="contact-form" class="form" method="GET">
                            @csrf
                            <div class="form-group mb-3 d-flex">
                                <label for="Jumlah_beli" class="form-label label-inline mr-auto pt-2 pb-2">Jumlah Beli:</label>
                                <input type="number" class="form-control input-inline mr-auto pt-2 pb-2 @error('jumlah_beli') is-invalid border-danger @enderror" name="jumlah_beli" id="Jumlah_beli" min="1" max="10">

                                <label for="Tersedia" class="form-label label-inline p-2">Tersedia:</label>
                                <input type="text" class="form-control input-inline p-2" name="tersedia" id="Tersedia" value="10" disabled style="border: none">
                                @error('tersedia')
                                    <span class="invalid-feedback mb-2 mt-0" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="Pilih_ukuran" class="form-label">Pilih Ukuran:</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('ukuran') is-invalid border-danger @enderror" type="radio" name="ukuran" id="inlineRadio1" value="#">
                                        <label class="form-check-label" for="inlineRadio1">XXL</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('ukuran') is-invalid border-danger @enderror" type="radio" name="ukuran" id="inlineRadio2" value="#">
                                        <label class="form-check-label" for="inlineRadio2">XL</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('ukuran') is-invalid border-danger @enderror" type="radio" name="ukuran" id="inlineRadio3" value="#">
                                        <label class="form-check-label" for="inlineRadio3">L</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('ukuran') is-invalid border-danger @enderror" type="radio" name="ukuran" id="inlineRadio4" value="#">
                                        <label class="form-check-label" for="inlineRadio4">M</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('ukuran') is-invalid border-danger @enderror" type="radio" name="ukuran" id="inlineRadio5" value="#">
                                        <label class="form-check-label" for="inlineRadio5">S</label>
                                    </div>
                                </div>
                                @error('ukuran')
                                    <span class="invalid-feedback mb-2 mt-0" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="Pilih_warna" class="form-label">Pilih Warna:</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('warna') is-invalid border-danger @enderror" type="radio" name="warna" id="inlineRadio1" value="#">
                                        <label class="form-check-label" for="inlineRadio1">Merah</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('warna') is-invalid border-danger @enderror" type="radio" name="warna" id="inlineRadio2" value="#">
                                        <label class="form-check-label" for="inlineRadio2">Putih</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('warna') is-invalid border-danger @enderror" type="radio" name="warna" id="inlineRadio3" value="#">
                                        <label class="form-check-label" for="inlineRadio3">ungu</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('warna') is-invalid border-danger @enderror" type="radio" name="warna" id="inlineRadio4" value="#">
                                        <label class="form-check-label" for="inlineRadio4">Kuning</label>
                                    </div>
                                </div>
                                @error('ukuran')
                                    <span class="invalid-feedback mb-2 mt-0" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div id="cf-submit">
                                <input type="submit" id="contact-submit" class="btn btn-transparent rounded" value="Tambah ke Keranjang">
                            </div>
                        </form>
                    </div>
                    <!-- Social Media Link -->
                    <div class="social-icon">
                        <ul>
                            <li class="mr-2">
                                <a href="#">
                                    <ion-icon class="mt-3" name="logo-facebook"></ion-icon>
                                </a>
                            </li>
                            <li class="ml-2">
                                <a href="#">
                                    <ion-icon class="mt-3" name="logo-instagram"></ion-icon>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- End section2 -->

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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>