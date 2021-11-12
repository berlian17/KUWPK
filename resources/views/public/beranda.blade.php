<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{config('app.name')}} | Beranda</title>
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
        <link rel="stylesheet" href="{{ asset('assets/css/beranda.css') }}">
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
                            <li class="nav-item active">
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
                            <li class="nav-item active">
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

        <div class="hero-slider">
            <div class="slider-item th-fullpage hero-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Pinjaman KOMERSIAL</h1>
                            <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"><b>Mudah & Cepat</b> <br> Proses pengajuan dan pencairan maksimal 3 hari kerja.</p>
                            <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn btn-main" href="#">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item th-fullpage hero-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Simpanan Berjangka</h1>
                            <p data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".5"><b>Mudah & Aman</b> <br> Proses pengajuan dan pencairan dana pada hari yang sama.</p>
                            <a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8"  class="btn btn-main" href="#">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item th-fullpage hero-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Ayo jadi Anggota</h1>
                            <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"><b>Berpartisipasi membantu sesama anggota Koperasi</b> <br> dan dapatkan imbal hasil hingga 24%.</p>
                            <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn btn-main" href="#">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Section1 -->
        <section class="about-shot-info section-sm s1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-20">
                        <h2 class="mb-5"><b>Tentang KUWPK</b></h2>
                        <p>Dalam rangka peningkatkan kesejahteraan anggotanya, KUWPK melaksanakan berbagai kegiatan yang diharapkan bisa memberikan manfaat. Kegiatan ini diselenggarakan untuk anggota karyawan Pupuk Kujang.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quae officia earum dolore est quaerat cupiditate voluptatibus id, magni alias veniam voluptate, libero explicabo, distinctio atque!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, fugit itaque ratione incidunt voluptas. Quaerat quidem dolor, quisquam amet inventore quas adipisci ea sint qui placeat beatae molestias aut, aperiam!</p>
                        <div class="text-center">
                            <a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8"  class="btn btn-main mb-2 mt-3" href="{{ route('public.aboutus') }}">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </section>
        <!-- End section1 -->

        <!-- Start Section2 -->
        <section class="service-2 section bg-light">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12">
                        <div class="title text-center">
                            <h2><b>Layanan Kami</b></h2>
                            <p>Kami menyediakan beberapa layanan yang bisa anda pilih sesuai dengan kebutuhan anda.</p>
                            <div class="border"></div>
                        </div>
                    </div>
                    <!-- /section title -->
                    <div class="col-md-6 col-sm-6 col-xs-12 s2">
                        <div class="service-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Simpanan</h4>
                                    <p>Simpanan aman dan mudah sehingga menyimpan dana lebih optimal dan mendapatkan pengembalian atau balas jasa yang menarik.</p>
                                    <div class="text-center">
                                        <a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8"  class="btn btn-main mb-2 mt-3" href="#">Selengkapnya</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img class="img-fluid mb-3" src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 s2">
                        <div class="service-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Pinjaman</h4>
                                    <p>Pengajuan pinjaman yang mudah serta menggunakan sistem pengembalian yang terjangkau dan nyaman khusus anggota KUWPK.</p>
                                    <div class="text-center">
                                        <a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8"  class="btn btn-main mb-2 mt-3" href="#">Selengkapnya</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img class="img-fluid mb-3" src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End section2 -->

        <!-- Start Section3 -->
        <section class="section-sm">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 mt-5">
                        <div class="title">
                            <h2><b>Cara menjadi Anggota KUWPK</b></h2>
                        </div>
                    </div>
                    <!-- /section title -->
                </div>
                <!-- row1 -->
                <div class="row reverse center">
                    <div class="col-md-4">
                        <div class="card p-4 shadow">
                            <h2>Daftar</h2>
                            <p>Daftar online cukup melakukan registrasi di www.kuwpk.co.id atau datang langsung ke kantor kami </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="line bg-transparent mx-auto pt-5 pb-5"></div>
                        <div class="card border-0 circle mx-auto d-flex align-items-center shadow">
                            <img src="{{ asset('assets/img/number_1.png') }}" alt="img" class="mx-auto image-circle number">
                        </div>
                        <div class="line mx-auto pt-5 pb-5 mt-3"></div>
                    </div>
                    <div class="col-md-4 img-position-1">
                        <img class="img-fluid imgs3" src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img">
                    </div>
                </div>
                <!-- row2 -->
                <div class="row center">
                    <div class="col-md-4 img-position-2">
                        <img class="img-fluid imgs3" src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img">
                    </div>
                    <div class="col-md-4">
                        <div class="line mx-auto pt-5 pb-5 mb-3"></div>
                        <div class="card border-0 circle mx-auto d-flex align-items-center shadow">
                            <img src="{{ asset('assets/img/number_2.png') }}" alt="" class="mx-auto image-circle number">
                        </div>
                        <div class="line mx-auto pt-5 pb-5 mt-3"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-4 shadow">
                            <h2>Memilih Layanan</h2>
                            <p>Pilih jenis simpanan & pinjaman sesuai kebutuhan anda, tentukan jumlah dan jangka waktu.</p>
                        </div>
                    </div>
                </div>
                <!-- row3 -->
                <div class="row reverse center">
                    <div class="col-md-4">
                        <div class="card p-4 shadow">
                            <h2>Online & Offline</h2>
                            <p>Daftar Online atau datang ke kantor kami untuk konsultasi secara gratis.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="line mx-auto pt-5 pb-5 mb-3"></div>
                        <div class="card border-0 circle mx-auto d-flex align-items-center shadow">
                            <img src="{{ asset('assets/img/number_3.png') }}" alt="img" class="mx-auto image-circle number">
                        </div>
                        <div class="line mx-auto pt-5 pb-5 mt-3"></div>
                    </div>
                    <div class="col-md-4 img-position-1">
                        <img class="img-fluid imgs3" src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img">
                    </div>
                </div>
                <!-- row4 -->
                <div class="row center">
                    <div class="col-md-4 img-position-2">
                        <img class="img-fluid imgs3" src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img">
                    </div>
                    <div class="col-md-4">
                        <div class="line mx-auto pt-5 pb-5 mb-3"></div>
                        <div class="card border-0 circle mx-auto d-flex align-items-center shadow">
                            <img src="{{ asset('assets/img/number_4.png') }}" alt="" class="mx-auto image-circle number">
                        </div>
                        <div class="line bg-line mx-auto pt-5 pb-5 mt-3"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-4 shadow">
                            <h2>Manfaat Anggota</h2>
                            <p>Daftar Online atau datang ke kantor kami untuk konsultasi secara gratis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End section3 -->

        <!-- Start Section4 -->
        <section class="section-sm bg-light">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 mt-5">
                        <div class="title2 text-center">
                            <h2><b>Mitra Usaha</b></h2>
                            <div class="border"></div>
                        </div>
                    </div>
                    <!-- /section title -->
                    <div class="col-md-12">
                        <div id="clients-slider" class="clients-logo-slider d-flex justify-content-center mb-3">
                            <img src="{{ asset('assets/logo/Bank_Mandiri.png') }}" alt="img" class="ml-4 mr-4">
                            <img src="{{ asset('assets/logo/Bank_BJB.png') }}" alt="img" class="ml-4 mr-4">
                            <img src="{{ asset('assets/logo/Pos_Indonesia.png') }}" alt="img" class="ml-4 mr-4">
                            <img src="{{ asset('assets/logo/Bank_Syariah_Mandiri.png') }}" alt="img" class="ml-4 mr-4">
                            <img src="{{ asset('assets/logo/BNI_logo.png') }}" alt="img" class="ml-4 mr-4">
                        </div>        
                    </div>
                </div>
            </div>
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