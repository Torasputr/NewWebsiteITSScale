@extends('layout.master')
@section('title', 'ITS Scale - Semua Produk')
@section('content')
    <section class="prodindex py-5 px-4 px-md-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-2">Produk Kami</h2>
            <p class="text-muted mb-0">Telusuri seluruh katalog berdasarkan subkategori dan kategori</p>
        </div>

        <form method="GET" action="{{ url('/produk') }}" class="product-filter row g-3 align-items-end mb-5">
            @if ($categoryFilter)
                <input type="hidden" name="category" value="{{ $categoryFilter }}">
                <div class="col-md-6">
                    <label for="filterSubcategory" class="form-label fw-semibold text-primary">Subkategori</label>
                    <select class="form-select" id="filterSubcategory" name="subcategory">
                        <option value="">Semua Subkategori</option>
                        @foreach ($subcategories as $subcategory)
                            <option value="{{ $subcategory->id }}" @selected($subcategoryFilter == $subcategory->id)>
                                {{ $subcategory->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 d-flex gap-3">
                    <button type="submit" class="btn btn-primary flex-grow-1">Terapkan</button>
                    <a href="{{ url('/produk') }}" class="btn btn-outline-secondary flex-grow-1">Reset</a>
                </div>
            @else
            <div class="col-md-4">
                <label for="filterCategory" class="form-label fw-semibold text-primary">Kategori</label>
                <select class="form-select" id="filterCategory" name="category">
                    <option value="">Semua Kategori</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="filterSubcategory" class="form-label fw-semibold text-primary">Subkategori</label>
                <select class="form-select" id="filterSubcategory" name="subcategory">
                    <option value="">Semua Subkategori</option>
                    @foreach ($subcategories as $subcategory)
                        <option value="{{ $subcategory->id }}" @selected($subcategoryFilter == $subcategory->id)>
                            {{ $subcategory->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4 d-flex gap-3">
                <button type="submit" class="btn btn-primary flex-grow-1">Terapkan</button>
                <a href="{{ url('/produk') }}" class="btn btn-outline-secondary flex-grow-1">Reset</a>
            </div>
            @endif
        </form>

        @if ($categoryFilter)
            @php
                $activeCategory = $categories->firstWhere('id', $categoryFilter);
            @endphp
            @if ($activeCategory)
                <div class="alert alert-primary rounded-pill py-2 px-4 d-inline-flex align-items-center gap-2 mb-4">
                    <span class="fw-semibold">Kategori:</span>
                    <span>{{ $activeCategory->name }}</span>
                    <a href="{{ url('/produk') }}" class="text-decoration-none small">Hapus filter</a>
                </div>
            @endif
        @endif

        @forelse ($grouped as $subcategoryName => $items)
            <div class="subcategory-section mb-5 pb-4 border-bottom">
                <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                    <h4 class="fw-semibold mb-0">{{ $subcategoryName }}</h4>
                    <span class="text-muted small">{{ $items->count() }} produk</span>
                </div>

                <div class="row g-4 justify-content-center">
                    @foreach ($items as $item)
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <a href="/produk/{{ $item->category->alt }}/{{ $item->alt }}" class="text-decoration-none text-dark">
                                <div class="card h-100 shadow-sm border-0 hover-card p-3">
                                    <div class="image-wrapper mb-3">
                                        <img src="{{ asset($item->image) }}" alt="{{ $item->alt }}">
                                    </div>
                                    <div class="card-body p-0 d-flex flex-column gap-1">
                                        <h6 class="fw-semibold mb-0 text-truncate">
                                            {{ $item->brand->name ?? '' }} {{ $item->name }}
                                        </h6>
                                        <p class="text-muted small mb-0">
                                            {{ $item->category->name }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @empty
            <div class="text-center py-5">
                <h5 class="fw-semibold mb-2">Produk tidak ditemukan</h5>
                <p class="text-muted mb-0">Coba ubah filter kategori atau subkategori.</p>
            </div>
        @endforelse
    </section>
@endsection
