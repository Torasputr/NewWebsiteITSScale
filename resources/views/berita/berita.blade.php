@extends('layout.master')
@section('title', 'ITS Scale - Berita')
@section('content')
    <section class='article-container'>
        <div class='artikel banner-container d-flex align-items-center justify-content-center p-5'>
            <h3 class='fw-bold'>Berita</h3>
        </div>

        <div class='p-4 p-md-5 '>
            <div class='row justify-content-center gap-md-5 gap-4'>
                @foreach ($news as $item)
                    <div class='col-lg-3 card p-3'>
                        <a href="/berita/{{ $item->id }}">
                            <div class='image-container'>
                                <img class='rounded' style="width: 100%; height: 200px;"
                                    src="{{ asset($item->thumbnail) }}" alt="{{ $item->thumbnail_alt ?? '' }}">
                            </div>
                            <div class='content-container'>
                                <h5 class='title pt-3'>{{ $item->title }}</h5>
                                <h6 class="text-end fw-light">{{ $item->date }}</h6>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="pagination-container mt-5">
                {{ $news->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </section>
@endsection
