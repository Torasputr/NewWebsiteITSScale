@extends('layout.master')
@section('title', 'ITS Scale - ' . $article->title)
@section('content')
    {{-- Artikel Detail Start --}}
    <section class='article-detail p-5'>
        <div class='container'>
            <div class='header'>
                <h5 class=''>{{ $article->title }}</h5>
                <div class='pt-2'>
                    <h6 class='fw-light'>{{ $article->author->name }}</h6>
                    <h6 class='fw-light'>{{ $article->date }}</h6>
                </div>
            </div>
            <div class='contents row align-items-center gap-3'>
                <div class='col-lg pt-5'>
                    <div class='image-container d-flex justify-content-center'>
                        <div class=''>
                            <img src="{{ asset($article->image1) }}" alt="{{ $article->image1_alt }}">
                            <h5 class='fw-light'>Sumber: {{ $article->image1_source }}</h5>
                        </div>
                    </div>
                    <div class='pt-5'>
                        <h6>{{ $article->paragraph1 }}</h6>
                    </div>
                </div>
                <div class='col-lg pt-5 d-block d-lg-none'>
                    <div class='image-container d-flex justify-content-center'>
                        <div class=''>
                            <img src="{{ asset($article->image2) }}" alt="{{ $article->image2_alt }}">
                            <h5 class='fw-light'>Sumber: {{ $article->image2_source }}</h5>
                        </div>
                    </div>
                    <div class='pt-5'>
                        <h6>{{ $article->paragraph2 }}</h6>
                    </div>
                </div>

                <div class='col-lg pt-5 d-none d-lg-block'>
                    <div class=''>
                        <h6>{{ $article->paragraph2 }}</h6>
                    </div>
                    <div class='image-container d-flex justify-content-center pt-5'>
                        <div class=''>
                            <img src="{{ asset($article->image2) }}" alt="">
                            <h5 class='fw-light'>Sumber: {{ $article->image2_source }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
