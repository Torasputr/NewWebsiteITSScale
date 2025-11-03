@extends('layout.master')
@section('title', 'ITS Scale - Kontak')
@section('content')
    <section class='kontak-section p-5'>
        <div class='kontak-container row gap-3'>
            <div class='col-lg maps-container'>
                <iframe id='glc-maps' style="height: 100%; width: 100%"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5274253554453!2d106.69913377499017!3d-6.193920893793732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbdea069aed3%3A0xffd9d326462995c2!2sPT%20Internasional%20Teknik%20Solusindo!5e0!3m2!1sid!2sid!4v1719556703291!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <iframe id='cikarang-maps' style="height: 100%; width: 100%"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7574571592095!2d107.14480437499095!3d-6.29557159369352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699bfdd40d2a8f%3A0xb8638e15f4f56f48!2sPT.%20INTERNASIONAL%20TEKNIK%20SOLUSINDO!5e0!3m2!1sid!2sid!4v1719556979135!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class='col-lg'>
                <div class='temukan-kami'>
                    <div class='header'>
                        <h5 class='submenu text-start'>Temukan Kami</h5>
                    </div>
                    <div class='location'>
                        <div class='glc mt-3'>
                            <button id='glc-btn'>Green Lake City</button>
                            <h6 class='text'>
                                Rukan Crown Blok B.1, Jl. Green Lake City Boulevard No.01, RT.005/RW.008, Petir, Kec.
                                Cipondoh, Kota Tangerang, Banten 15147
                            </h6>
                            <div class="layanan-kami">
                                <div class="contents">
                                    <div class='row mt-1'>
                                        <div class='col-2 text'>
                                            <h6>Mobile</h6>
                                        </div>
                                        <div class='col-1 text'>
                                            <h6>:</h6>
                                        </div>
                                        <div class='col text'>
                                            <h6>0811-1910-3783</h6>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-2  text'>
                                            <h6>Telp</h6>
                                        </div>
                                        <div class='col-1 text'>
                                            <h6>:</h6>
                                        </div>
                                        <div class='col text'>
                                            <h6>021-54344618</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='cikarang mt-3'>
                            <button id='cikarang-btn'>Cikarang</button>
                            <h6 class='text'>
                                Jl. Raya Industri Jl. Jababeka Raya No.67, Pasirgombong, Kecamatan Cikarang Ut, Kabupaten
                                Bekasi, Jawa Barat 17530
                            </h6>
                            <div class="layanan-kami">
                                <div class="contents">
                                    <div class='row mt-1'>
                                        <div class='col-2 text'>
                                            <h6>Mobile</h6>
                                        </div>
                                        <div class='col-1 text'>
                                            <h6>:</h6>
                                        </div>
                                        <div class='col text'>
                                            <h6>0811-1272-0252</h6>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-2  text'>
                                            <h6>Telp</h6>
                                        </div>
                                        <div class='col-1 text'>
                                            <h6>:</h6>
                                        </div>
                                        <div class='col text'>
                                            <h6>021-54344618</h6>
                                        </div>
                                    </div>
                                    <div class='row mail mt-3'>
                                        <div class='col-2  text'>
                                            <h6>Mail</h6>
                                        </div>
                                        <div class='col-1 text'>
                                            <h6>:</h6>
                                        </div>
                                        <div class='col text'>
                                            <h6>marketing@itsscale.com</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='jam-operasional'>
                    <div class='header'>
                        <h5 class='submenu text-start'>Jam Operasional</h5>
                    </div>
                    <div class='contents'>
                        <div class='row align-items-center justify-content-start mt-3 text'>
                            <div class='col-2'>
                                <h6>Sen - Jum</h6>
                            </div>
                            <div class='col-1'>
                                <h6>:</h6>
                            </div>
                            <div class='col'>
                                <h6>8.30am - 5.30pm</h6>
                            </div>
                        </div>
                        <div class='row align-items-center justify-content-start text'>
                            <div class='col-2'>
                                <h6>Sabtu</h6>
                            </div>
                            <div class='col-1'>
                                <h6>:</h6>
                            </div>
                            <div class='col'>
                                <h6>9.30am - 12.30pm</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/contact.js') }}"></script>
@endsection
