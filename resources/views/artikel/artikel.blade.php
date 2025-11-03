@extends('layout.master')
@section('title', 'ITS Scale - Artikel')
@section('content')
    <section class='article-container'>
        <div class='artikel banner-container d-flex align-items-center justify-content-center p-5'>
            <h3 class='fw-bold'>Artikel</h3>
        </div>
        <div class='p-4 p-md-5 '>
            <div class='row justify-content-center gap-md-5 gap-4'>
                @foreach ($articles as $article)
                    <div class='col-lg-3 card p-3'>
                        <a href="/artikel/{{ $article->id }}">
                            <div class='image-container'>
                                <img class='rounded' style="width: 100%; height: 200px;"
                                    src="{{ asset($article->thumbnail) }}" alt="{{ asset($article->thumbnail_alt) }}">
                            </div>
                            <div class='content-container'>
                                <h5 class='title pt-3'>{{ $article->title }}</h5>
                                <h6 class="text-end fw-light">{{ $article->date }}</h6>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="pagination-container mt-5">
                {{ $articles->links('pagination::bootstrap-5') }}
            </div>

        </div>
    </section>
@endsection
