@extends('layout.master')
@section('title', 'ITS Scale - ' . $item->name)
@section('content')
    <div class='row justify-content-evenly align-items-center px-5'>
        <div class='col-lg-5 col-12'>
            <div class='d-flex justify-content-center rounded'>
                <img class='rounded' style="height: 520px; width: 100%; object-fit: contain" src="{{ asset($item->image) }}"
                    alt="">
            </div>
        </div>
        <div class='col-lg-5 col-12'>
            <div class='d-flex align-items-center justify-content-between item-detail-header'>
                <div class='text'>
                    <h3>{{ $item->brand->name }} {{ $item->name }}</h3>
                    <h5 class='fw-light'>{{ $item->subcategory->name }} | {{ $category->name }}</h5>
                </div>
                <div>
                    <div>
                        <img style="height: 6rem" src="{{ asset($item->brand->image) }}" alt="">
                    </div>
                </div>
            </div>
            <div class='d-md-none d-block mt-4'>
                <a class='item-detail-btn rounded-pill px-3 py-1 fw-bold' href="{{ $item->brochure }}">Cek
                    Brosur</a>
            </div>
            <div class='py-3'>
                <ul>
                    @foreach ($features as $feature)
                        <li class='pt-1 fs-6'>{{ $feature->feature }}</li>
                    @endforeach
                </ul>
            </div>
            <div class='mb-5 d-none d-md-block'>
                <a class='item-detail-btn rounded-pill px-4 py-2 fw-bold' href="{{ $item->brochure }}">Cek
                    Brosur</a>
            </div>
        </div>
    </div>
    @if ($item->video)
        <section class='item-detail-youtube p-5 d-lg-none d-block d-lg-flex align-items-center justify-content-around'>
            <h1 class='text-center fw-bold'>Tonton Detail dari Produk Ini</h1>
            <iframe style="width: 100%; height: auto" class='rounded' src="{{ $item->video }}" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </section>
        <section class='item-detail-youtube p-5 d-lg-block d-none d-lg-flex align-items-center justify-content-around'>
            <h1 class='text-center fw-bold'>Tonton Detail dari Produk Ini</h1>
            <iframe class='rounded' width="560" height="315" src="{{ $item->video }}" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </section>
    @endif
@endsection
