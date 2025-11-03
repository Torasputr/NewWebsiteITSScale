@extends('layout.master')
@section('title', 'ITS Scale: Weighing Solution & Integration')
@section('content')
    {{-- Highlight --}}
    <section class="home-highlight">
        @foreach ($sliders as $slider)
            <div class="video-container">
                <video autoplay loop muted playsinline>
                    <source src="{{ asset("videos/Video1.mp4") }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        @endforeach
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
        {{-- Article Section --}}
        <section class='home-article'>
            {{-- Article Submenu --}}
            <h3 class='submenu'>Artikel</h3>
            {{-- Article Desktop --}}
            <div class='d-none d-lg-block'>
                <div class='row justify-content-center'>
                    <div class='col-6 flex-grow'>
                        <a href="/artikel/{{ $latestArticle->id }}">
                            <div class='card left p-3'>
                                <div class>
                                    <img class='rounded' style="width: 100%" src="{{ asset($latestArticle->thumbnail) }}"
                                        alt="">
                                </div>
                                <div class='pt-3'>
                                    <h4 class='title'>{{ $latestArticle->title }}</h4>
                                    <h6 class='text-end fw-light'>{{ $latestArticle->date }}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-6'>
                        <div class='row'>
                            @foreach ($articles as $article)
                                <div class='col-6 mb-4'>
                                    <a href="/artikel/{{ $article->id }}">
                                        <div class='card right p-3'>
                                            <img class='rounded' src="{{ asset($article->thumbnail) }}" alt="">
                                            <div class='pt-3'>
                                                <h5 class='title'>{{ $article->title }}</h5>
                                                <h6 class='text-end fw-light'>{{ $article->date }}</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{-- Selengkapnya --}}
                <div class=''>
                    <a class='fw-bold selengkapnya' href="/artikel">Selengkapnya -></a>
                </div>
            </div>
            {{-- Article Mobile --}}
            <div class='d-lg-none d-block'>
                <a href="/artikel/{{ $latestArticle->id }}">
                    <div class='cardmobile rounded d-flex align-items-center gap-3 p-2 mb-2'>
                        <img class='rounded' style='height: 100%; width: 50px' src="{{ asset($latestArticle->thumbnail) }}"
                            alt={{ $latestArticle->alt }}>
                        <div style="width: 75%;">
                            <h6 class='fw-bold title fs-7'>{{ $latestArticle->title }}</h6>
                            <h6 class='text-end fw-light fs-7'>{{ $latestArticle->date }}</h6>
                        </div>
                    </div>
                </a>
                @foreach ($articles as $article)
                    <a href="/artikel/{{ $article->id }}">
                        <div class='cardmobile rounded d-flex align-items-center gap-3 p-2 mb-2'>
                            <img class='rounded' style='height: 100%; width: 50px' src="{{ asset($article->thumbnail) }}"
                                alt="">
                            <div style='width: 75%'>
                                <h6 class='fw-bold title'>{{ $article->title }}</h6>
                                <h6 class='text-end fw-light'>{{ $article->date }}</h6>
                            </div>
                        </div>
                        <div>
                    </a>
                @endforeach
                <a class='selengkapnya fw-bold' href="/article">Selengkapnya -></a>
            </div>
        </div>
    </section>
    {{-- News Section --}}
    <section class='home-news'>
        {{-- News Submenu --}}
        <h3 class='submenu'>Berita</h3>

        {{-- News Desktop --}}
        <div class='d-none d-lg-block'>
            <div class='row justify-content-center'>
                <div class='col-6 flex-grow'>
                    <a href="/berita/{{ $latestNews->id }}">
                        <div class='card left p-3'>
                            <div>
                                <img class='rounded' style="width: 100%" src="{{ asset($latestNews->thumbnail) }}" alt="">
                            </div>
                            <div class='pt-3'>
                                <h4 class='title'>{{ $latestNews->title }}</h4>
                                <h6 class='text-end fw-light'>{{ $latestNews->date }}</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class='col-6'>
                    <div class='row'>
                        @foreach ($news as $item)
                            <div class='col-6 mb-4'>
                                <a href="/berita/{{ $item->id }}">
                                    <div class='card right p-3'>
                                        <img class='rounded' src="{{ asset($item->thumbnail) }}" alt="">
                                        <div class='pt-3'>
                                            <h5 class='title'>{{ $item->title }}</h5>
                                            <h6 class='text-end fw-light'>{{ $item->date }}</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Selengkapnya --}}
            <div>
                <a class='fw-bold selengkapnya' href="/berita">Selengkapnya -></a>
            </div>
        </div>

        {{-- News Mobile --}}
        <div class='d-lg-none d-block'>
            <a href="/berita/{{ $latestNews->id }}">
                <div class='cardmobile rounded d-flex align-items-center gap-3 p-2 mb-2'>
                    <img class='rounded' style='height: 100%; width: 50px' src="{{ asset($latestNews->thumbnail) }}" alt="">
                    <div style="width: 75%;">
                        <h6 class='fw-bold title fs-7'>{{ $latestNews->title }}</h6>
                        <h6 class='text-end fw-light fs-7'>{{ $latestNews->date }}</h6>
                    </div>
                </div>
            </a>

            @foreach ($news as $item)
                <a href="/berita/{{ $item->id }}">
                    <div class='cardmobile rounded d-flex align-items-center gap-3 p-2 mb-2'>
                        <img class='rounded' style='height: 100%; width: 50px' src="{{ asset($item->thumbnail) }}" alt="">
                        <div style='width: 75%'>
                            <h6 class='fw-bold title'>{{ $item->title }}</h6>
                            <h6 class='text-end fw-light'>{{ $item->date }}</h6>
                        </div>
                    </div>
                </a>
            @endforeach

            <a class='selengkapnya fw-bold' href="/berita">Selengkapnya -></a>
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
