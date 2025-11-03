@extends('layout.master')
@section('title', 'ITS Scale - Karir')
@section('content')
    <section class='karir-container'>
        <section class='karir banner-container'></section>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            {{-- @elseif (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div> --}}
        @endif
        <div class='p-5'>
            <div class="row justify-content-evenly gap-3">
                @foreach ($positions as $position)
                    <div class='col-lg-4 karir-card p-3 rounded mb-lg-5 mb-1'>
                        <div>
                            <h4 class='text'>{{ $position->name }}</h4>
                        </div>
                        <div class='d-flex justify-content-center'>
                            <button class='btn fw-bold rounded-pill px-4 fs-6 fs-lg-6 daftar-sekarang-btn'
                                data-bs-toggle="modal" data-bs-target="#karirModal{{ $position->id }}"
                                data-position-name="{{ $position->name }}" data-position-id="{{ $position->id }}">
                                DAFTAR SEKARANG
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <script src="{{ asset('js/karir.js') }}"></script>

    @include('karir.modal')
    @include('karir.form')
@endsection
