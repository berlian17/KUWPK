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
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
</head>
<body id="body">
    <!-- Setelah Login -->
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
                            <li class="nav-item active dropdown">
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

    <!-- Start Section1 -->
    <section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Profile</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End section1 -->

    <!-- Start Section2 -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="card col-md-12 shadow">
                    <div class="card-body mb-5">
                        <h4 class="mt-5 mb-5"><b>DATA DIRI</b></h4>
                        <div class="form-row">
                            <div class="form-group col-md-4 mb-3">
                                <img class="img-fluid" src="{{ asset('assets/logo/KUWPK-logo.png') }}" alt="img">
                            </div>
                            <div class="form-group col-md-8 mb-3">
                                <div class="form-row box">
                                    <div class="form-group col-md-12 mb-3">
                                        <label for="Nama" class="form-label"><b>Nama</b></label>
                                        <input type="text" class="form-control rounded @error('nama') is-invalid @enderror" name="nama" placeholder="Nama lengkap sesuai KTP..." id="Nama" value="">
                                        @error('nama')
                                            <span class="invalid-feedback mb-2 mt-0" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12 mb-3">
                                        <label for="Tempat_Lahir" class="form-label"><b>Tempat Lahir</b></label>
                                        <input type="text" class="form-control rounded @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" placeholder="Tempat lahir sesuai KTP..." id="Tempat_Lahir" value="{{ old('tempat_lahir') }}">
                                        @error('tempat_lahir')
                                            <span class="invalid-feedback mb-2 mt-0" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="Tanggal_Lahir" class="form-label"><b>Tanggal Lahir</b></label>
                                        <input type="date" class="form-control rounded @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" id="Tanggal_Lahir" value="{{ old('tanggal_lahir') }}">
                                        @error('tanggal_lahir')
                                            <span class="invalid-feedback mb-2 mt-0" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="Jenis_Kelamin" class="form-label"><b>Jenis Kelamin</b></label>
                                        <select class="form-control rounded @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="Jenis_Kelamin" value="{{ old('jenis_kelamin') }}">
                                            <option>Pilih...</option>
                                            <option>Laki-laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                        @error('jenis_kelamin')
                                            <span class="invalid-feedback mb-2 mt-0" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="No_KTP" class="form-label"><b>No KTP</b></label>
                                        <input type="text" class="form-control rounded @error('no_ktp') is-invalid @enderror" name="no_ktp" placeholder="Nomor sesuai KTP Anda..." id="No_KTP" value="{{ old('no_ktp') }}">
                                        @error('no_ktp')
                                            <span class="invalid-feedback mb-2 mt-0" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="No_Rekening" class="form-label"><b>No Rekening</b></label>
                                        <input type="text" class="form-control rounded @error('no_rekening') is-invalid @enderror" name="no_rekening" placeholder="Nomor Rekening Anda..." id="No_Rekening" value="{{ old('no_rekening') }}">
                                        @error('no_rekening')
                                            <span class="invalid-feedback mb-2 mt-0" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h4 class="mt-5"><b>DATA PEKERJAAN</b></h4>
                        <div class="form-row">
                            <div class="form-group col-md-12 mb-3">
                                <label for="Unit_Kerja" class="form-label"><b>Unit Kerja</b></label>
                                <input type="text" class="form-control rounded @error('unit_kerja') is-invalid @enderror" name="unit_kerja" placeholder="Unit Kerja Anda..." id="Unit_Kerja" value="{{ old('unit_kerja') }}">
                                @error('unit_kerja')
                                    <span class="invalid-feedback mb-2 mt-0" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 mb-3">
                                <label for="No_Badge" class="form-label"><b>No. Badge</b></label>
                                <input type="text" class="form-control rounded @error('no_badge') is-invalid @enderror" name="no_badge" placeholder="Nomor Badge Anda..." id="No_Badge" value="{{ old('no_badge') }}">
                                @error('no_badge')
                                    <span class="invalid-feedback mb-2 mt-0" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label for="Telepon" class="form-label"><b>No. Telepon</b></label>
                                <input type="text" class="form-control rounded @error('telepon') is-invalid @enderror" name="telepon" placeholder="Nomor telepon aktif..." id="Telepon" value="{{ old('telepon') }}">
                                @error('telepon')
                                    <span class="invalid-feedback mb-2 mt-0" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <h4 class="mt-5"><b>DATA KELUARGA</b></h4>
                        <div class="form-row">
                            <div class="form-group col-md-12 mb-3">
                                <label for="Nama" class="form-label"><b>Nama</b></label>
                                <input type="text" class="form-control rounded @error('nama') is-invalid @enderror" name="nama" placeholder="Nama..." id="Nama" value="{{ old('nama') }}">
                                @error('nama')
                                    <span class="invalid-feedback mb-2 mt-0" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 mb-3">
                                <label for="Tempat_Lahir" class="form-label"><b>Tempat Lahir</b></label>
                                <input type="text" class="form-control rounded @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" placeholder="Tempat lahir sesuai KTP..." id="Tempat_Lahir" value="{{ old('tempat_lahir') }}">
                                @error('tempat_lahir')
                                    <span class="invalid-feedback mb-2 mt-0" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-3 mb-3">
                                <label for="Tanggal_Lahir" class="form-label"><b>Tanggal Lahir</b></label>
                                <input type="date" class="form-control rounded @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" id="Tanggal_Lahir" value="{{ old('tanggal_lahir') }}">
                                @error('tanggal_lahir')
                                    <span class="invalid-feedback mb-2 mt-0" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-3">
                                <label for="Jenis_Kelamin" class="form-label"><b>Jenis Kelamin</b></label>
                                <select class="form-control rounded @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="Jenis_Kelamin" value="{{ old('jenis_kelamin') }}">
                                    <option>Pilih...</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                    <span class="invalid-feedback mb-2 mt-0" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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