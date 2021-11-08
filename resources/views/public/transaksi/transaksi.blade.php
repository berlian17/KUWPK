<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}} | Transaksi</title>
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
    <link rel="stylesheet" href="{{ asset('assets/css/transaksi/transaksi.css') }}">
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
                    <h2>Transaksi</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End section1 -->

    <!-- Start Section2 -->
    <section class="section">
        <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item tab-box">
                    <a class="nav-link tab-title active" data-toggle="tab" href="#proses">
                        <h4><b>Proses</b></h4>
                    <a>
                </li>
                <li class="nav-item tab-box">
                    <a class="nav-link tab-title" data-toggle="tab" href="#selesai">
                        <h4><b>Selesai</b></h4>
                    </a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div id="proses" class="container tab-pane p-0 active">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="boxleft1">
                                    <p><b>16 Juli 2021</b></p>
                                </div>
                                <div class="boxright1">
                                    <p>Bayar sebelum: <b>18 Juli 2021</b></p>
                                </div>
                            </div>
                            <div class="row mt-2 mb-2">
                                <div class="col-md-3 d-flex align-items-center">
                                    <img class="img-fluid" src="{{ asset('assets/logo/Bank_Mandiri.png') }}" alt="img">
                                </div>
                                <div class="col-md-6 text-center rek">
                                    <h3>88xxxxxxxxxxxxxxxxx</h3>
                                </div>
                                <div class="col-md-3 text-center">
                                    <p>Total pembayaran</p>
                                    <h3>Rp 1.415.000</h3>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="boxleft1 status">
                                    <p>Status: <b>Pembayaran</b></p>
                                </div>
                                <div class="boxright1">
                                    <a class="btn btn-success mt-2" href="{{ route('public.transaksidetailpayment') }}" role="button">Lihat detail</a>
                                    <a class="btn btn-danger mt-2" href="#" role="button">Batalkan</a>
                                </div>
                            </div>
                        </div>
                    </div>        
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="boxleft1">
                                    <p><b>17 Juli 2021</b></p>
                                </div>
                                <div class="boxright1">
                                    <p>Bayar sebelum: <b>19 Juli 2021</b></p>
                                </div>
                            </div>
                            <div class="row mt-2 mb-2">
                                <div class="col-md-3 d-flex align-items-center">
                                    <img class="img-fluid" src="{{ asset('assets/logo/Bank_Mandiri.png') }}" alt="img">
                                </div>
                                <div class="col-md-6 text-center rek">
                                    <h3>88xxxxxxxxxxxxxxxxx</h3>
                                </div>
                                <div class="col-md-3 text-center">
                                    <p>Total pembayaran</p>
                                    <h3>Rp 915.000</h3>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="boxleft1 status">
                                    <p>Status: <b>Pembayaran</b></p>
                                </div>
                                <div class="boxright1">
                                    <a class="btn btn-success mt-2" href="{{ route('public.transaksidetailpayment') }}" role="button">Lihat detail</a>
                                    <a class="btn btn-danger mt-2" href="#" role="button">Batalkan</a>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                <div id="selesai" class="container tab-pane p-0 fade">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="boxleft1">
                                    <p><b>14 Juli 2021</b></p>
                                </div>
                                <div class="boxright1">
                                </div>
                            </div>
                            <div class="row mt-2 mb-2">
                                <div class="col-md-8">
                                    <p>No. invoice</p>
                                    <h3>xxx/xxx/xxxxxxxx</h3>
                                </div>
                                <div class="col-md-4 text-center">
                                    <p>Total pembayaran</p>
                                    <h3>Rp 915.000</h3>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="boxleft1 status">
                                    <p>Status: <b>Selesai</b></p>
                                </div>
                                <div class="boxright1">
                                    <a class="btn btn-success mt-2" href="{{ route('public.transaksidetailpayment') }}" role="button">Lihat detail</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="boxleft1">
                                    <p><b>15 Juli 2021</b></p>
                                </div>
                                <div class="boxright1">
                                </div>
                            </div>
                            <div class="row mt-2 mb-2">
                                <div class="col-md-8">
                                    <p>No. invoice</p>
                                    <h3>xxx/xxx/xxxxxxxx</h3>
                                </div>
                                <div class="col-md-4 text-center">
                                    <p>Total pembayaran</p>
                                    <h3>Rp 715.000</h3>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="boxleft1 status">
                                    <p>Status: <b>Selesai</b></p>
                                </div>
                                <div class="boxright1">
                                    <a class="btn btn-success mt-2" href="{{ route('public.transaksidetailpayment') }}" role="button">Lihat detail</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="boxleft1">
                                    <p><b>16 Juli 2021</b></p>
                                </div>
                                <div class="boxright1">
                                </div>
                            </div>
                            <div class="row mt-2 mb-2">
                                <div class="col-md-8">
                                    <p>No. invoice</p>
                                    <h3>xxx/xxx/xxxxxxxx</h3>
                                </div>
                                <div class="col-md-4 text-center">
                                    <p>Total pembayaran</p>
                                    <h3>Rp 965.000</h3>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="boxleft1 status">
                                    <p>Status: <b>Selesai</b></p>
                                </div>
                                <div class="boxright1">
                                    <a class="btn btn-success mt-2" href="{{ route('public.transaksidetailpayment') }}" role="button">Lihat detail</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!-- End Section2 -->

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>