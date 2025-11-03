@foreach ($positions as $position)
    <div class="modal fade" id="karirModal{{ $position->id }}" tabindex="-1" aria-labelledby="karirModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class='header-container'>
                        <img class='rounded' style="width: 100%; object-fit: cover;" src="{{ asset($position->image) }}"
                            alt="">
                        <h1 class='pt-3 fw-bold'>{{ $position->name }}</h1>
                    </div>
                </div>
                <div class="modal-body">
                    <h2 class='fw-bold'>Job Summary</h2>
                    <h5>{{ $position->jobdesc }}</h5>
                    <h2 class='fw-bold pt-2'>Tanggung Jawab</h2>
                    <ul>
                        @foreach ($position->responsibilities as $responsibility)
                            <li class='fs-5'>{{ $responsibility->responsibility }}</li>
                        @endforeach
                    </ul>
                    @if ($position->id == 2)
                        <h2 class='fw-bold'>Kualifikasi Teknis</h2>
                        @foreach ($position->specialqualifications as $specialqualification)
                            <li class='fs-5'>{{ $specialqualification->specialqualification }}</li>
                        @endforeach
                    @endif
                    <h2 class='fw-bold pt-2'>Kualifikasi</h2>
                    <ul>
                        @foreach ($position->qualifications as $qualification)
                            <li class='fs-5'>{{ $qualification->qualification }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="modal-footer">
                    <div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary openNextModal" data-bs-toggle="modal"
                            data-bs-target="#applicationFormModal" data-position-id="{{ $position->id }}">
                            Open Next Page
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
