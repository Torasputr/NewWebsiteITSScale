<div class="modal fade" id="applicationFormModal" tabindex="-1" aria-labelledby="applicationFormModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header karir-form-header pr-96">
                <h1 class="modal-title p-3" id="applicationFormModalLabel">Apply for Position</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="applicationForm" method="POST" enctype="multipart/form-data" action="">
                    @csrf
                    <div class='p-3'>
                        <h2 class='fw-bold'>Data Diri</h2>
                        <div class='p-3'>
                            <div class='row'>
                                <div class='col-2'>
                                    <label for="cv">Link Google Drive CV</label>
                                </div>
                                <div class='col'>
                                    <input style="width: 100%" type="text" name="cv" id="cv"
                                        value={{ old('cv') }}>
                                </div>
                            </div>
                            <div class='row pt-3'>
                                <div class='col-2'>
                                    <label for="name">Nama Lengkap</label>
                                </div>
                                <div class='col'>
                                    <input style="width: 100%" type="text" name="name" id="name"
                                        value={{ old('name') }}>
                                </div>
                            </div>
                            <div class='row pt-3'>
                                <div class='col-2'>
                                    <label for="email">Email</label>
                                </div>
                                <div class='col'>
                                    <input style="width: 100%" type="text" name="email" id="email"
                                        value={{ old('email') }}>
                                </div>
                            </div>
                            <div class='row pt-3'>
                                <div class='col-2'>
                                    <label for="phone">No. Telepon</label>
                                </div>
                                <div class='col'>
                                    <input style="width: 100%" type="text" name='phone' id="phone"
                                        value={{ old('phone') }}>
                                </div>
                            </div>
                            <div class='row pt-3'>
                                <div class='col-2'>
                                    <label for="address">Alamat</label>
                                </div>
                                <div class='col'>
                                    <input style="width: 100%" type="text" name='address' id="address"
                                        value={{ old('address') }}>
                                </div>
                            </div>
                            <div class='row pt-3'>
                                <div class='col-2'>
                                    <label for="currentCompany">Perusahaan Sekarang</label>
                                </div>
                                <div class='col'>
                                    <input style="width: 100%" type="text" name='currentCompany' id="currentCompany"
                                        value={{ old('currentCompany') }}>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='p-3'>
                        <h2 class='fw-bold'>Tautan</h2>
                        <div class='p-3'>
                            <div class='row'>
                                <div class='col-2'>
                                    <label for="linkedin">LinkedIn URL</label>
                                </div>
                                <div class='col'>
                                    <input style="width: 100%" type="text" name='linkedin' id="linkedin"
                                        value={{ old('linkedin') }}>
                                </div>
                            </div>
                            <div class='row pt-3'>
                                <div class='col-2'>
                                    <label for="portfolio">Portfolio URL</label>
                                </div>
                                <div class='col'>
                                    <input style="width: 100%" type="text" name="portfolio" id="portfolio"
                                        value={{ old('portfolio') }}>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Application</button>
                </form>
            </div>
        </div>
    </div>
</div>
