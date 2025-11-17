<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- Normal Styles CSS --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    {{-- Swiper CSS --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z9QNF58KZK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-Z9QNF58KZK');
    </script>
    {{-- JQUERY JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="icon" type="image/png" href="images/logo/logoITS1Banding1.png">
</head>

<body class=''>
    {{-- Navbar --}}
    <nav style="width: 100vw" class="navbar navbar-expand-lg bg-body-tertiary fixed-top p-3">
        <div class="container-fluid align-items-center">
            {{-- Logo --}}
            <a class="navbar-brand" href="#">
                <div class='logo-container d-flex align-items-center gap-3'>
                    <div>
                        <img class='img-fluid' src="{{ asset('images/navbar/Logo ITS 2021.webp') }}" alt="">
                    </div>
                    <div class='d-none d-lg-block'>
                        <h6 class='fw-bold text-center title'>PT Internasional Teknik Solusindo</h6>
                        <h6 class='fw-light text-center subtitle'>Weighing Solution & Integration</h6>
                    </div>
                </div>
            </a>
            {{-- Hamburger Button --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            {{-- Sidebar --}}
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title fw-bold" id="offcanvasNavbarLabel">PT Internasional Teknik Solusindo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    {{-- Links --}}
                    <ul class="navbar-nav justify-content-center align-items-center gap-2 flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tentang-kami">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/artikel">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/produk">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/karir">Karir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/kontak">Kontak</a>
                        </li>
                        <li class="nav-item pb-5 pb-lg-0">
                            <a class="nav-link" href="/gsc">Servis & Garansi</a>
                        </li>
                        <li class="nav-item pb-4 pb-lg-0 d-flex align-items-center">
                            <div id="google_translate_element" class="translate-container"></div>
                        </li>
                    </ul>
                    {{-- Search Bar --}}
                    <div class='mt-4 mt-lg-0'>
                        <form IS='searchForm' class="d-flex" role="search">
                            <input id='searchInput' class="form-control me-2 fst-italic rounded-pill" type="search"
                                placeholder="Telusuri produk disini..." aria-label="Search" style= "width: 100%;">
                        </form>
                        <div id="searchResultsMobile" class="mt-2 d-block d-lg-none searchresult"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </nav>
    <section class='content'>
        <div id="searchResultsDesktop" class="mt-2 d-lg-block d-none searchresultdesktop"></div>
        <div class="">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        @yield('content')
        <div class='container'>
            <div class="whatsapp-icon position-fixed bottom-0 end-0 mb-4 me-4 rounded-circle"
                style="z-index: 9999999; padding: 0.7rem">
                <a href="https://api.whatsapp.com/send/?phone=6281119103783&text=Halo%2C+saya+membutuhkan+timbangan+digital"
                    target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-whatsapp fs-1 wa-icon text-white"></i>
                </a>
            </div>
        </div>
    </section>
    <footer class='p-4 footer-container'>
        <div class='row align-items-center justify-content-center'>
            <div class='col'>
                <div>
                    <div class='d-flex align-items-center gap-3 location-header'>
                        <i class="fa-solid fa-location-dot fs-3"></i>
                        <h5>Green Lake City</h5>
                    </div>
                    <div>
                        <h6 class='fw-light text'>
                            Rukan Crown Blok B.1, Jl. Green Lake City Boulevard No.01, RT.005/RW.008, Petir, Kec.
                            Cipondoh,
                            Kota
                            Tangerang, Banten 15147
                        </h6>
                    </div>
                </div>
                <div class='mt-4'>
                    <div class='d-flex align-items-center gap-3 location-header'>
                        <i class="fa-solid fa-location-dot fs-3"></i>
                        <h5>Cikarang</h5>
                    </div>
                    <div>
                        <h6 class='fw-light'>
                            Jl. Raya Industri Jl. Jababeka Raya No.67, Pasirgombong, Kecamatan Cikarang Ut, Kabupaten
                            Bekasi,
                            Jawa Barat 17530
                        </h6>
                    </div>
                </div>
            </div>
            <div class='col d-flex justify-content-center'>
                <div class='d-inline-block'>
                    <div>
                        <h2 class='fw-bold text-white text-center mt-4 mt-md-0'>Berlangganan ke Newsletter Kami</h2>
                    </div>
                    <form action="/newuser" method="POST">
                        @csrf
                        <div class='py-4 d-flex align-items-center gap-2'>
                            <input class="fst-italic px-1 footer-input" type="text" name="email"
                                style="width: 100%" placeholder="example@email.com">
                            <button type="submit" class="footer-btn fw-bold">KIRIM</button>
                        </div>
                    </form>
                    <div class='d-flex justify-content-between'>
                        <a href="https://www.facebook.com/internasionalteknik.solusindo"><i
                                class="fa-brands fa-facebook-f logo"></i></a>
                        <a href="https://www.tiktok.com/@itsscale"><i class="fa-brands fa-tiktok logo tiktok"></i></a>
                        <a
                            href="https://www.instagram.com/accounts/login/?next=https%3A%2F%2Fwww.instagram.com%2Fits.scale%2F&is_from_rle"><i
                                class="fa-brands fa-instagram logo tiktok"></i></a>
                        <a href="https://www.youtube.com/@its_scale"><i
                                class="fa-brands fa-youtube logo youtube"></i></a>
                        <a href="https://www.linkedin.com/in/pt-internasional-teknik-solusindo-181a93151/"><i
                                class="fa-brands fa-linkedin-in logo tiktok"></i></a>
                        <a href="https://x.com/its_scale"><i class="fa-brands fa-x-twitter logo x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    {{-- Swiper JS --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    {{-- FontAwesome JS --}}
    <script src="https://kit.fontawesome.com/ef25a92f55.js" crossorigin="anonymous"></script>
    {{-- Google Translate --}}
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'id',
                includedLanguages: 'zh-CN,en,ja',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    {{-- Master js --}}
    <script src={{ asset('js/master.js') }}></script>
</body>

</html>
