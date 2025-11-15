@extends('layout.master')
@section('title', 'ITS Scale: Weighing Solution & Integration')
@section('content')
    {{-- Highlight --}}
    <section class="home-highlight">
        {{-- Highlight video placeholder (reactivate once the new footage is ready) --}}
        {{--
        <div class="highlight-video">
            <video autoplay loop muted playsinline>
                <source src="{{ asset('videos/Video1.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        --}}

        <div class="swiper highlight-swiper">
            <div class="swiper-wrapper">
                @forelse ($sliders as $slider)
                    <div class="swiper-slide">
                        <a href="{{ $slider->link ?? '#' }}" class="highlight-slide-link">
                            <img src="{{ asset($slider->image) }}" alt="{{ $slider->alt }}">
                        </a>
                    </div>
                @empty
                    <div class="swiper-slide">
                        <div class="highlight-empty">
                            Konten highlight belum tersedia.
                        </div>
                    </div>
                @endforelse
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>


    {{-- Brands Section --}}
    <section class='brand-container'>
        <h3 class='submenu fs-3'>Brand Kami</h3>
        <div class='brand-swiper'>
            <div class='swiper-wrapper'>
                @foreach ($brands as $brand)
                    <div class='swiper-slide d-flex justify-content-center'>
                        <img src="{{ asset($brand->image) }}" alt={{ $brand->alt }}>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class='mx-5'>
        {{-- Kategori Produk --}}
        <section class='home-category'>
            <h3 class='submenu'>Kategori Produk</h3>
            <div class='container'>
                <div class='row justify-content-center'>
                    @foreach ($categories as $category)
                        <a href="/produk/{{ $category->alt }}" class='col-lg-4 col-12 mb-2 mb-lg-4'>
                            <div class='card p-3'>
                                <div class='rounded'>
                                    <img class='rounded' src={{ asset($category->image) }} alt="">
                                </div>
                                <div class='pt-3 name'>
                                    <h4 class='fw-semibold'>{{ $category->name }}</h4>
                                    <h6 class='fw-light'>{{ $category->description }}</h6>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- Article & News Section --}}
        <section class='home-article-news'>
            <div class="row g-4 article-news-row {{ $latestNews ? 'row-cols-1 row-cols-lg-2' : '' }}">
                <div class="d-flex flex-column {{ $latestNews ? 'col' : 'col-12' }}">
                    <div class='d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3'>
                        <h3 class='submenu mb-0 text-start text-lg-center flex-grow-1'>Artikel</h3>
                        <a class='fw-bold selengkapnya mb-0' href="/artikel">Selengkapnya -></a>
                    </div>
                    @if ($latestArticle)
                        <a href="/artikel/{{ $latestArticle->id }}" class="card article-news-card p-3 flex-fill">
                            <div class="article-news-thumb rounded mb-3">
                                <img src="{{ asset($latestArticle->thumbnail) }}" alt="{{ $latestArticle->title }}">
                            </div>
                            <div>
                                <h4 class='title mb-2'>{{ $latestArticle->title }}</h4>
                                <h6 class='text-end fw-light mb-0'>{{ $latestArticle->date }}</h6>
                            </div>
                        </a>
                    @else
                        <div class="article-news-empty">
                            <p class="mb-0 text-center">Belum ada artikel terbaru.</p>
                        </div>
                    @endif
                </div>
                @if ($latestNews)
                    <div class="col d-flex flex-column">
                        <div class='d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3'>
                            <h3 class='submenu mb-0 text-start text-lg-center flex-grow-1'>Berita</h3>
                            <a class='fw-bold selengkapnya mb-0' href="/berita">Selengkapnya -></a>
                        </div>
                        <a href="/berita/{{ $latestNews->id }}" class="card article-news-card p-3 flex-fill">
                            <div class="article-news-thumb rounded mb-3">
                                <img src="{{ asset($latestNews->thumbnail) }}" alt="{{ $latestNews->title }}">
                            </div>
                            <div>
                                <h4 class='title mb-2'>{{ $latestNews->title }}</h4>
                                <h6 class='text-end fw-light mb-0'>{{ $latestNews->date }}</h6>
                            </div>
                        </a>
                    </div>
                @endif
            </div>
        </section>

    {{-- Clients Section --}}
    <section class='client-container'>
        <h3 class='submenu'>Client Kami</h3>
        <img class='mb-5' style="width: 100%; object-fit: cover" src="{{ asset('images\home\klien.webp') }}"
            alt="">
    </section>
    </div>
    {{-- Youtube Section --}}
    <section class='youtube-container py-5 px-5'>
        {{-- Desktop --}}
        <div class='d-lg-flex justify-content-around align-items-center gap-5'>
            <div class='text-center mb-3 mb-md-0'>
                <h1 class='fw-bold'>Tonton Video YouTube Terbaru Kami Disini</h1>
            </div>
            <div class='d-lg-block d-none'>
                <iframe class='rounded' style="width: 560px; height: 315px;" src="https://www.youtube.com/embed/"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            {{-- Mobile --}}
            <div class='d-lg-none d-block'>
                <iframe class='rounded' style="width: 100%" src="https://www.youtube.com/embed/"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <script src={{ asset('js/home.js') }}></script>
@endsection
