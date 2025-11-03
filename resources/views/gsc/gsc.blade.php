@extends('layout.master')
@section('title', 'ITS Scale - Klaim Garansi')
@section('content')
    <section class='gsc-container'>
        <div class='banner-container gsc d-flex align-items-center'>
            <div class='p-5 title'>
                <h1 class='fw-bold'>GYUMO</h1>
                <h1 class='fw-bold'>Service Center</h1>
            </div>
        </div>
        <div class='informasi-layanan-container'>
            <div>
                <h3 class="submenu p-3">Informasi Layanan</h3>
            </div>
            <div class='d-flex align-items-center justify-content-center row py-3 gap-5'>
                <div class='info col-md-4'>
                    <div class='d-flex justify-content-center'>
                        <i class="icon fa-solid fa-award text-center"></i>
                    </div>
                    <h3 class='text-center fw-bold mt-2'>Klaim Garansi</h3>
                    <h5 class='px-lg-0 px-5' style="text-align: justify">
                        Setelah memastikan Serial Number Anda memiliki masa garansi yang masih aktif, silahkan dilanjutkan
                        dengan
                        pengisian form untuk klaim garansi.
                    </h5>
                </div>
                <div class='info col-md-4'>
                    <div class='d-flex justify-content-center'>
                        <i class="fa-solid fa-gear icon"></i>
                    </div>
                    <h3 class='text-center fw-bold mt-2'>Servis</h3>
                    <h5 class='px-lg-0 px-5' style="text-align: justify">
                        Terdapat 2 jasa servis yang kami berikan, pertama servis <span class='fst-italic'>on-site</span> dan
                        kedua servis <span class='fst-italic'>off-site</span>. Silahkan isi form untuk mengajukan servis
                        produk.
                    </h5>
                </div>
            </div>
        </div>
        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Error Messages -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class='pengisian-form-container px-5'>
            <h3 class='submenu text-start'>Pengisian Form</h3>
            <div class='p-5 pt-3 service'>
                <form action="/gsc/post" method="POST">
                    @csrf
                    <div class='row'>
                        <div class='col-lg-6'>
                            <div>
                                <label for="type" class='fw-bold fs-6'>Jenis:</label>
                                <select style="width: 100%" name="type" class='fs-6' id="type-select">
                                    <option value="on-site">On-site</option>
                                    <option value="off-site">Off-site</option>
                                </select>
                            </div>
                            <div class='mt-3'>
                                <label for="sn" class='fw-bold fs-6'>Serial Number/Nomor Invoice:</label>
                                <input class="px-1" type="text" style="width: 100%" name='sn'
                                    placeholder="Harus Isi" value={{ old('sn') }}>
                            </div>
                            <div class='mt-3'>
                                <label for="name" class='fw-bold fs-6'>Nama Barang:</label>
                                <input class="px-1" type="text" style="width: 100%" name='name'
                                    placeholder="Opsional" value={{ old('name') }}>
                            </div>
                            <div class='mt-3'>
                                <label for="name" class='fw-bold fs-6'>Nama Sales:</label>
                                <input class="px-1" type="text" style="width: 100%" name='sales'
                                    placeholder="Opsional" value={{ old('sales') }}>
                            </div>
                        </div>
                        <div class='col-lg-6'>
                            <div>
                                <label for="company" class='fw-bold fs-6'>Nama Perusahaan:</label>
                                <input class="px-1" type="text" style="width: 100%" name="company"
                                    placeholder="Harus Isi" value={{ old('company') }}>
                            </div>
                            <div class='mt-3'>
                                <label for="address" class='fw-bold fs-6'>Alamat Perusahaan:</label>
                                <input class="px-1" type="text" style="width: 100%" name='address'
                                    placeholder="Harus Isi" value={{ old('address') }}>
                            </div>
                            <div class='mt-3'>
                                <label for="phone" class='fw-bold fs-6'>Nomor Telepon:</label>
                                <input class="px-1" type="text" style="width: 100%" name='phone'
                                    placeholder="Harus Isi" value={{ old('phone') }}>
                            </div>
                            <div class='mt-3 tanggal-temu' id="tanggal-temu" style="display: none;">
                                <label for="tanggal" class='fw-bold fs-6'>Tanggal Temu:</label>
                                <input class="px-1" type="date" style="width: 100%" name='tanggal'
                                    placeholder="Harus Isi" value="{{ old('tanggal') }}" id="tanggal">
                            </div>
                        </div>
                    </div>
                    <div class='pt-5'>
                        <textarea class="px-1" style="width: 100%" name="keterangan" id="" cols="30" rows="10"
                            placeholder="Keterangan" value={{ old('keterangan') }}></textarea>
                    </div>
                    <div class='d-flex justify-content-center pt-5'>
                        <button class='px-5 fw-bold rounded-pill'>Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/gsc.js') }}"></script>
@endsection
