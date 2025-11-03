@extends('layout.master')
@section('title', 'ITS Scale - ' . $category->name)
@section('content')
    <section class='prodindex'>
        <h3 class='submenu pt-5'>{{ $category->name }}</h3>
        <div class='row justify-content-center pt-lg-3 pb-lg-5                                   p-5 gap-5'>
            @foreach ($items as $item)
                <a href="/produk/{{ $category->alt }}/{{ $item->alt }}" class='col-lg-3'>
                    <div class='card p-3'>
                        <img class='rounded'
                            style="width: 100%; height: 200px; object-fit: scale-down; background-color: white; object-position: center;"
                            src="{{ asset($item->image) }}" alt="">
                        <div class='d-flex justify-content-between align-items-center pt-3'>
                            <h5 class='text'>{{ $item->brand->name }} {{ $item->name }}</h5>
                            <img style="height: 40px" src="{{ asset($item->brand->image) }}"
                                alt="{{ asset($item->brand->alt) }}">
                        </div>
                        <div>
                            <h6 class='fw-light'>{{ $item->subcategory->name }} | {{ $category->name }}</h6>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
