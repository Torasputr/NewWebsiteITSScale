@extends('layout.master')
@section('title', 'ITS Scale - Tentang Kami')
@section('content')
    {{-- Banner --}}
    <section class='banner-section'>
        <div class='about banner-container d-flex align-items-center'>
            <h1 class='fw-bold p-5'>Tentang Kami</h1>
        </div>
    </section>
    {{-- Milestones --}}
    <section class='milestones-section'>
        <div class='p-4 p-md-5 row gap-5 align-items-center'>
            <div class='image-container col-lg'>
                <img class='rounded' style="width: 100%;" src="{{ asset('images\tentang\KebijakanMutu.webp') }}" alt="">
            </div>
            <div class='milestone-container col-lg'>
                <div>
                    <h2 class='fw-bold header'>PT Internasional Teknik Solusindo</h2>
                </div>
                <div class='py-2'>
                    <h6 class=''>PT Internasional Teknik Solusindo atau dikenal dengan ITS Scale adalah perusahaan
                        yang
                        berspesialisasi di dalam pengadaan alat timbangan untuk komersial dan industri termasuk software &
                        sistem integrasi untuk industri otomatis.</h6>
                </div>
                <div class='milestonebtn-container d-flex justify-content-between'>
                    <button class='rounded-pill px-lg-3 fw-bold' id='2014-btn'>2014</button>
                    <button class='rounded-pill px-lg-3 fw-bold' id='2018-btn'>2018</button>
                    <button class='rounded-pill px-lg-3 fw-bold' id='2020-btn'>2020</button>
                    <button class='rounded-pill px-lg-3 fw-bold' id='2023-btn'>2023</button>
                    <button class='rounded-pill px-lg-3 fw-bold' id='2024-btn'>2024</button>
                </div>
                <div class='milestonetext-container pt-3'>
                    <h6 id='2014-text' class='d-block'>
                        ITS Scale dibentuk. Dimulai dari door-to-door sales, hingga mulai memberanikan diri untuk mencoba
                        menawarkan produknya melalui business-to-business kepada beberapa perusahaan.
                    </h6>
                    <h6 id='2018-text' class='d-none'>
                        Melakukan optimalisasi manajemen dengan memastikanya kredibilitas dan legalitas sebagai perusahaan
                        yang bergerak dalam bidang distributor alat ukur berat. Dibentuklah PT Internasional Teknik
                        Solusindo sebagai perusahaan retail yang bonafid.
                    </h6>
                    <h6 id='2020-text' class='d-none'>
                        PT Internasional Teknik Solusindo melebarkan sayapnya berkembang dari retail, merambah ke beberapa
                        commissioning project dan proyek tender skala nasional untuk pengadaan alat ukur berat skala
                        menengah hingga besar seperti jembatan timbang, dan sensor timbang pada rel kereta api.
                    </h6>
                    <h6 id='2023-text' class='d-none'>
                        Dalam usaha menyuplai berbagai kebutuhan alat ukur berat di Indonesia, mulai dari produk retail
                        hingga proyek pengadaan alat timbang, PT Internasional Teknik Solusindo sudah terdaftar di beberapa
                        database tender perusahaan besar nasional, E-katalog, TKDN, dan berhasil memperoleh ISO:9001 2015 di
                        tahun 2023.
                    </h6>
                    <h6 id='2024-text' class='d-none'>
                        Branch office pertama ITS Scale sekaligus service center timbangan merk GYUMO pertama di Indonesia
                        dibuka di Kawasan industry Cikarang.
                    </h6>
                </div>
            </div>
        </div>
    </section>
    {{-- Visi Misi --}}
    <section class='visimisi-container p-4 p-md-5'>
        <div class='row align-items-center justify-content-center'>
            <div class="col-md-5">
                <div class="visi-text">
                    <h3 class='header fw-bold'>Visi</h3>
                    <h6 class='text'>Menjadi perusahaan timbangan digital yang berbasis teknologi & sistem integrasi</h6>
                </div>
            </div>
            <div class="col-md-5 pt-md-2">
                <div class="misi-text">
                    <h3 class='header fw-bold'>Misi</h3>
                    <h6 class='text'>1. Menyediakan produk timbangan digital yang berkualitas</h6>
                    <h6 class='text'>2. Memberikan solusi penimbangan dalam segala aspek industri</h6>
                </div>
            </div>
        </div>
    </section>
    {{-- Kebijakan Mutu Section --}}
    <section class='kebmut-container p-4 p-md-5'>
        <div class='row gap-5 align-items-center'>
            <div class='col-lg'>
                <h3 class='header'>Kebijakan Mutu</h3>
                <h6 class='text py-2'>
                    Kami, PT. Internasional Teknik Solusindo yang bergerak dalam bidang Distribusi dan Service Timbangan
                    Digital. Kami, manajemen dan seluruh karyawan PT Internasional Teknik Solusindo telah menyatakan
                    komitmennya untuk menerapkan sistem manajemen mutu yang sesuai dengan persyaratan ISO 9001:2015, dengan
                    cara:
                </h6>
                <div class='list'>
                    <div class='d-flex gap-3 align-items-center'>
                        <h2 class='fst-italic fw-bold'>1.</h2>
                        <h6 class='fst-italic'>Menyediakan kebutuhan timbangan digital dengan teknologi dan sistem yang
                            terintegrasi
                        </h6>
                    </div>
                    <div class='d-flex gap-3 align-items-center'>
                        <h2 class='fst-italic fw-bold'>2.</h2>
                        <h6 class='fst-italic'>Mendistribusikan timbangan digital dengan mengutamakan aspek kualitas dan
                            kualitas
                        </h6>
                    </div>
                    <div class='d-flex gap-3 align-items-center'>
                        <h2 class='fst-italic fw-bold'>3.</h2>
                        <h6 class='fst-italic'>Menjalin kerjasama dengan segala sektor industri & manufaktur sebagai
                            penyuplai kebutuhan.
                        </h6>
                    </div>
                    <div class='d-flex gap-3 align-items-center'>
                        <h2 class='fst-italic fw-bold'>4.</h2>
                        <h6 class='fst-italic'>Memperbaiki sistem manajemen mutu secara terus menerus khususnya pada mutu
                            produk.
                        </h6>
                    </div>
                </div>
            </div>
            <div class='col-lg'>
                <img style="width: 100%" src="{{ asset('images/tentang/tentangKami.webp') }}" alt="">
            </div>
        </div>
    </section>
    {{-- Sertifikat Section --}}
    <section class='sertifikat-section pt-1 p-4 p-md-5'>
        <h3 class='submenu'>Sertifikat</h3>
        <!-- Sertifs Desktop -->
        <div class='row gap-lg-4 d-none d-md-flex'>
            <button class='col rounded py-2'>
                <img class='rounded' style="height: 100%; width: 100%"
                    src="{{ asset('images/tentang/sertifikat/diniargeo/diniargeo.webp') }}" alt="">
            </button>
            <button class='col rounded py-2'>
                <img class='rounded' style="height: 100%; width: 100%"
                    src="{{ asset('images/tentang/sertifikat/imi/imi.webp') }}" alt="">
            </button>
            <button class='col rounded py-2'>
                <img class='rounded' style="width: 100%; height: auto"
                    src="{{ asset('images/tentang/sertifikat/iso/thumbnail.png') }}" alt="">
            </button>
        </div>

        <!-- Sertifs Mobile -->
        <div class="swiper-container d-block d-md-none mobile-sertif">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('images/tentang/sertifikat/diniargeo/diniargeo.webp') }}"
                        alt="Diniargeo Certificate">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/tentang/sertifikat/imi/imi.webp') }}" alt="IMI Certificate">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/tentang/sertifikat/iso/thumbnail.png') }}" alt="ISO Certificate">
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <script src={{ asset('js/about.js') }}></script>
@endsection
