@extends('layout.master')
@section('title', 'ITS Scale - ' . $item->title)
@section('content')
    {{-- Berita Detail Start --}}
    <section class='article-detail p-5'>
        <div class='container'>
            <div class='header'>
                <h5>{{ $item->title }}</h5>
                <div class='pt-2'>
                    @if (!empty($item->author))
                        <h6 class='fw-light'>{{ $item->author }}</h6>
                    @endif
                    <h6 class='fw-light'>{{ $item->date }}</h6>
                </div>
            </div>

            <div class='contents row align-items-center gap-3'>
                <div class='col-lg pt-5'>
                    <div class='image-container d-flex justify-content-center'>
                        <div>
                            <img src="{{ asset($item->image1) }}" alt="{{ $item->image1_alt ?? '' }}">
                            @if (!empty($item->image1_source))
                                <h5 class='fw-light'>Sumber: {{ $item->image1_source }}</h5>
                            @endif
                        </div>
                    </div>

                    @if (!empty($item->paragraph1))
                        <div class='pt-5'>
                            <h6>{{ $item->paragraph1 }}</h6>
                        </div>
                    @endif
                </div>

                {{-- Untuk layar kecil (mobile) --}}
                <div class='col-lg pt-5 d-block d-lg-none'>
                    <div class='image-container d-flex justify-content-center'>
                        <div>
                            <img src="{{ asset($item->image2) }}" alt="{{ $item->image2_alt ?? '' }}">
                            @if (!empty($item->image2_source))
                                <h5 class='fw-light'>Sumber: {{ $item->image2_source }}</h5>
                            @endif
                        </div>
                    </div>

                    @if (!empty($item->paragraph2))
                        <div class='pt-5'>
                            <h6>{{ $item->paragraph2 }}</h6>
                        </div>
                    @endif
                </div>

                {{-- Untuk layar besar (desktop) --}}
                <div class='col-lg pt-5 d-none d-lg-block'>
                    @if (!empty($item->paragraph2))
                        <div>
                            <h6>{{ $item->paragraph2 }}</h6>
                        </div>
                    @endif
                    <div class='image-container d-flex justify-content-center pt-5'>
                        <div>
                            <img src="{{ asset($item->image2) }}" alt="{{ $item->image2_alt ?? '' }}">
                            @if (!empty($item->image2_source))
                                <h5 class='fw-light'>Sumber: {{ $item->image2_source }}</h5>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tombol kembali --}}
            <div class='mt-5'>
                <a href="/berita" class='btn btn-outline-primary'>
                    ← Kembali ke Daftar Berita
                </a>
            </div>
        </div>
    </section>
@endsection
