<label class="form-label ps-4 mt-3"><strong>Lulusan Pendidikan
        Umum</strong></label>
<div class="container overflow-hidden text-center">
    <div class="row gx-5">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-4">
                    <li class="d-flex mt-1 mb-1 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-success"><i class='bx bx-male'></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-3">
                            <div class="me-2">
                                <h6 class="mb-0">TK</h6>
                            </div>
                            <div class="user-progress">
                                <div class="input-group">
                                    <input class="form-control" name="tk" type="text" id="data_pendidikan"
                                        value="{{ $pendidikan['tk'] }}" readonly style="width:70px">
                                    <span class="input-group-text"
                                        style="padding-left:5px; padding-right:5px">Jiwa</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-1 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-danger"><i class='bx bx-male'></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-3">
                            <div class="me-2">
                                <h6 class="mb-0">SD</h6>
                            </div>
                            <div class="user-progress">
                                <div class="input-group">
                                    <input class="form-control" name="sd" type="text" id="data_pendidikan"
                                        value="{{ $pendidikan['sd'] }}" readonly style="width:70px">
                                    <span class="input-group-text"
                                        style="padding-left:5px; padding-right:5px">Jiwa</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-1 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-dark"><i class='bx bx-male'></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-3">
                            <div class="me-2">
                                <h6 class="mb-0">SMP</h6>
                            </div>
                            <div class="user-progress">
                                <div class="input-group">
                                    <input class="form-control" name="smp" type="text" id="data_pendidikan"
                                        value="{{ $pendidikan['smp'] }}" readonly style="width:70px">
                                    <span class="input-group-text"
                                        style="padding-left:5px; padding-right:5px">Jiwa</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="col-4">
                    <li class="d-flex mb-1 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-male'></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-3">
                            <div class="me-2">
                                <h6 class="mb-0">SMA</h6>
                            </div>
                            <div class="user-progress">
                                <div class="input-group">
                                    <input class="form-control" name="sma" type="text" id="data_pendidikan"
                                        value="{{ $pendidikan['sma'] }}" readonly style="width:70px">
                                    <span class="input-group-text"
                                        style="padding-left:5px; padding-right:5px">Jiwa</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mt-1 mb-1 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-warning"><i class='bx bx-male'></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-3">
                            <div class="me-2">
                                <h6 class="mb-0">Diploma</h6>
                            </div>
                            <div class="user-progress">
                                <div class="input-group">
                                    <input class="form-control" name="diploma" type="text" id="data_pendidikan"
                                        value="{{ $pendidikan['diploma'] }}" readonly style="width:70px">
                                    <span
                                        class="input-group-text"style="padding-left:5px; padding-right:5px">Jiwa</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="col-4">
                    <li class="d-flex mb-1 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-secondary"><i class='bx bx-male'></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-3">
                            <div class="me-2">
                                <h6 class="mb-0">Sarjana</h6>
                            </div>
                            <div class="user-progress">
                                <div class="input-group">
                                    <input class="form-control" name="sarjana" type="text" id="data_pendidikan"
                                        value="{{ $pendidikan['sarjana'] }}" readonly style="width:70px">
                                    <span class="input-group-text"
                                        style="padding-left:5px; padding-right:5px">Jiwa</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-1 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-info"><i class='bx bx-male'></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-3">
                            <div class="me-2">
                                <h6 class="mb-0">Pascasarjana</h6>
                            </div>
                            <div class="user-progress">
                                <div class="input-group">
                                    <input class="form-control" name="pascasarjana" type="text"
                                        id="data_pendidikan" value="{{ $pendidikan['pascasarjana'] }}" readonly
                                        style="width:70px">
                                    <span class="input-group-text"
                                        style="padding-left:5px; padding-right:5px">Jiwa</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </div>
</div>
<label class="form-label ps-4 mt-4"><strong>Lulusan Pendidikan
        Khusus</strong></label>
<div class="container overflow-hidden text-center">
    <div class="row gx-5">
        <div class="col-sm-12">
            <div class="row">
                <div class="col">
                    <li class="d-flex mt-1 mb-1 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Pondok Pesantren</h6>
                            </div>
                            <div class="user-progress">
                                <div class="input-group">
                                    <input class="form-control" name="pondok" type="text" id="data_pendidikan"
                                        value="{{ $pendidikan['pondok'] }}" readonly>
                                    <span class="input-group-text">Jiwa</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-1 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Pend. Keagamaan</h6>
                            </div>
                            <div class="user-progress">
                                <div class="input-group">
                                    <input class="form-control" name="keagamaan" type="text" id="data_pendidikan"
                                        value="{{ $pendidikan['keagamaan'] }}" readonly>
                                    <span class="input-group-text">Jiwa</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="col">
                    <li class="d-flex mt-1 mb-1 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Sekolah Luar Biasa</h6>
                            </div>
                            <div class="user-progress">
                                <div class="input-group">
                                    <input class="form-control" name="slb" type="text" id="data_pendidikan"
                                        value="{{ $pendidikan['slb'] }}" readonly>
                                    <span class="input-group-text">Jiwa</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-1 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Kursus</h6>
                            </div>
                            <div class="user-progress">
                                <div class="input-group">
                                    <input class="form-control" name="kursus" type="text" id="data_pendidikan"
                                        value="{{ $pendidikan['kursus'] }}" readonly>
                                    <span class="input-group-text">Jiwa</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </div>
</div>
<label class="form-label ps-4 mt-4"><strong>Tidak Lulus / Tidak Sekolah </strong></label>
<div class="container overflow-hidden text-center">
    <div class="col-sm-3">
        <div class="user-progress">
            <div class="input-group">
                <input class="form-control" name="tidak_sekolah" type="text" id="data_pendidikan"
                    value="{{ $pendidikan['tidak_sekolah'] }}" readonly>
                <span class="input-group-text">Jiwa</span>
            </div>
        </div>
    </div>
</div>
<div class="mt-3" style="margin-left: 27px">
    <small class="text-muted"><em>
            Update : {{ $pendidikan['updated_at'] }}
        </em></small>
</div>
