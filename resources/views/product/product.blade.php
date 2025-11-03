@extends('layout.master')
@section('title', 'ITS Scale - Produk')
@section('content')
    <section class='product-section p-5'>
        <h3 class='submenu'>Kategori Produk</h3>
        <div class='row justify-content-evenly'>
            @foreach ($categories as $category)
                <div class='col-lg-4 col-12 mb-2 mb-lg-4'>
                    <a href="/produk/{{ $category->alt }}">
                        <div class='card p-3'>
                            <div class='rounded'>
                                <img style="width: 100%" class='rounded' src={{ asset($category->image) }} alt="">
                            </div>
                            <div class='pt-3 name'>
                                <h4 class='fw-semibold'>{{ $category->name }}</h4>
                                <h6 class='fw-light'>{{ $category->description }}</h6>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
