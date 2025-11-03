@extends('layout.master')
@section('title', 'ITS Scale - ' . $category->name)
@section('content')

<section class="prodindex py-5 px-4 px-md-5">
    {{-- === Judul Kategori === --}}
    <div class="text-center mb-5">
        <h2 class="fw-bold mb-2">{{ $category->name }}</h2>
        <p class="text-muted">Temukan berbagai produk dalam kategori ini</p>
    </div>

    {{-- === Loop Subkategori (grouped) === --}}
    @foreach ($grouped as $subcategoryName => $items)
        <div class="subcategory-section mb-5 pb-4 border-bottom">
            {{-- Header Subkategori --}}
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-semibold mb-0">{{ $subcategoryName }}</h4>
                <span class="text-muted small">{{ $items->count() }} produk</span>
            </div>

            {{-- Grid produk --}}
            <div class="row g-4 justify-content-center">
                @foreach ($items as $item)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <a href="/produk/{{ $category->alt }}/{{ $item->alt }}" class="text-decoration-none text-dark">
                            <div class="card h-100 shadow-sm border-0 hover-card p-3">

                                {{-- Image Wrapper --}}
                                <div class="image-wrapper mb-3">
                                    <img src="{{ asset($item->image) }}" alt="{{ $item->alt }}">
                                </div>

                                {{-- Info produk --}}
                                <div class="card-body p-0">
                                    <h6 class="fw-semibold mb-1">
                                        {{ $item->brand->name ?? '' }} {{ $item->name }}
                                    </h6>
                                    <p class="text-muted small mb-0">
                                        {{ $subcategoryName }} | {{ $category->name }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</section>

@endsection
