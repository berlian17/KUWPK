<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{config('app.name')}} | Beranda</title>
        <link rel="icon" href="{{ asset('assets/logo/KUWPK-logo.png') }}" type="image/x-icon">

        <!-- CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
            integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
            integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
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
                        <h2 class="mb-4 mt-2"><b>Tentang KUWPK</b></h2>
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
                            <h2><b>Unit Usaha</b></h2>
                            <p>Kami menyediakan beberapa layanan yang bisa anda pilih sesuai dengan kebutuhan anda.</p>
                            <div class="border"></div>
                        </div>
                    </div>
                    <!-- /section title -->
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="service-item card">
                                <img class="card-img-top" src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img">
                                <div class="card-body">
                                    <div class="card-title">Loren Ipsum1</div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-item card">
                                <img class="card-img-top" src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img">
                                <div class="card-body">
                                    <div class="card-title">Loren Ipsum2</div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-item card">
                                <img class="card-img-top" src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img">
                                <div class="card-body">
                                    <div class="card-title">Loren Ipsum3</div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-item card">
                                <img class="card-img-top" src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img">
                                <div class="card-body">
                                    <div class="card-title">Loren Ipsum4</div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-item card">
                                <img class="card-img-top" src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img">
                                <div class="card-body">
                                    <div class="card-title">Loren Ipsum5</div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-item card">
                                <img class="card-img-top" src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img">
                                <div class="card-body">
                                    <div class="card-title">Loren Ipsum6</div>
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
                    <div class="owl-carousel owl-theme mt-4 mb-4">
                        <div class="item">
                            <img class="card-img-top" src="{{ asset('assets/logo/Bank_Mandiri.png') }}" alt="img">
                        </div>
                        <div class="item">
                            <img class="card-img-top" src="{{ asset('assets/logo/Bank_BJB.png') }}" alt="img">
                        </div>
                        <div class="item">
                            <img class="card-img-top" src="{{ asset('assets/logo/Pos_Indonesia.png') }}" alt="img">
                        </div>
                        <div class="item">
                            <img class="card-img-top" src="{{ asset('assets/logo/Bank_Syariah_Mandiri.png') }}" alt="img">
                        </div>
                        <div class="item">
                            <img class="card-img-top" src="{{ asset('assets/logo/BNI_logo.png') }}" alt="img">
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ asset('assets/js/jquery.mousewheel.min.js') }}"></script>
        <script>
            $('.owl-carousel').owlCarousel({
                margin: 20,
                autoplay: true,
                autoplayHoverPause: true,
                loop: true,
                responsive: {
                    0: {
                        items: 2,
                        dots: true
                    },
                    485: {
                        items: 3,
                        dots: true
                    },
                    780: {
                        items: 4,
                        dots: true
                    },
                    960: {
                        items: 5,
                        dots: true
                    }
                }
            });

            $('.owl-carousel').on('mousewheel', '.owl-stage', function(e) {
                if(e.deltaY>0) {
                    $('.owl-carousel').trigger('next.owl');
                } else {
                    $('.owl-carousel').trigger('prev.owl');
                }
                e.preventDefault();
            });
        </script>
    </body>
</html>