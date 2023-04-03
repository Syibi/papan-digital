<div class="row gx-5 text-center">
    <div class="col-sm-6">
        <div class="card-title mb-0">
            <h3 class="m-0 me-2">Jumlah Penduduk</h3>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="row justify-content-center">
            <div class="col-3">
                <div class="d-flex flex-column align-items-center gap-1">
                    <h2 class="mb-1">
                        {{ $penduduk['laki-laki'] + $penduduk['perempuan'] }}
                    </h2>
                    <span>Jiwa</span>
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex flex-column align-items-center gap-1">
                    <h2 class="mb-1">{{ $penduduk['jml_kk'] }}</h2>
                    <span>KK</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-4" style="padding-right: 0">
        <label class="form-label ps-4 mt-2"><strong>Jumlah Kartu Keluarga</strong></label>
        <div class="container overflow-hidden text-center">
            <div class="user-progress">
                <div class="input-group">
                    <input class="form-control" name="jml_kk" type="text" id="data_penduduk"
                        value="{{ $penduduk['jml_kk'] }}" readonly>
                    <span class="input-group-text">KK</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4" style="padding-left: 0">
        <label class="form-label ps-4 mt-2"><strong>Jumlah Warga Miskin</strong></label>
        <div class="container overflow-hidden text-center" style="padding-left: 0">
            <div class="user-progress">
                <div class="input-group">
                    <input class="form-control" name="miskin" type="text" id="data_penduduk"
                        value="{{ $penduduk['miskin'] }}" readonly>
                    <span class="input-group-text">Jiwa</span>
                </div>
            </div>
        </div>
    </div>
</div>
<label class="form-label ps-4 mt-4"><strong>Berdasarkan Jenis
        Kelamin</strong></label>
<div class="container overflow-hidden text-center">
    <div class="row gx-4">
        <div class="col-sm-7">
            <li class="d-flex mb-2 mt-3 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-male'></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                        <h6 class="mb-0">Laki-laki</h6>
                    </div>
                    <div class="user-progress">
                        <div class="input-group">
                            <input class="form-control" name="laki_laki" type="text" id="data_penduduk"
                                value="{{ $penduduk['laki-laki'] }}" readonly>
                            <span class="input-group-text">Jiwa</span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="d-flex mb-2 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-danger"><i class='bx bx-female'></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                        <h6 class="mb-0">Perempuan</h6>
                    </div>
                    <div class="user-progress">
                        <div class="input-group">
                            <input class="form-control" name="perempuan" type="text" id="data_penduduk"
                                value="{{ $penduduk['perempuan'] }}" readonly>
                            <span class="input-group-text">Jiwa</span>
                        </div>
                    </div>
                </div>
            </li>
        </div>
        <div class="col-sm-4 my-auto">
            {!! $chartjk->container() !!}
        </div>
    </div>
</div>
<label for="batas_wilayah" class="form-label ps-4"><strong>Berdasarkan Usia</strong></label>
<div class="container overflow-hidden text-center">
    <div class="row gx-5">
        <div class="col-sm-7">
            <li class="d-flex mb-2 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-male'></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                        <h6 class="mb-0">Usia 0-15 tahun</h6>
                    </div>
                    <div class="user-progress">
                        <div class="input-group">
                            <input class="form-control" name="muda" type="text" id="data_penduduk"
                                value="{{ $penduduk['muda'] }}" readonly>
                            <span class="input-group-text">Jiwa</span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="d-flex mb-2 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-success"><i class='bx bx-male'></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                        <h6 class="mb-0">Usia 15-65 tahun</h6>
                    </div>
                    <div class="user-progress">
                        <div class="input-group">
                            <input class="form-control" name="dewasa" type="text" id="data_penduduk"
                                value="{{ $penduduk['dewasa'] }}" readonly>
                            <span class="input-group-text">Jiwa</span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="d-flex mb-2 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-warning"><i class='bx bx-male'></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                        <h6 class="mb-0">Usia 65 tahun keatas</h6>
                    </div>
                    <div class="user-progress">
                        <div class="input-group">
                            <input class="form-control" name="tua" type="text" id="data_penduduk"
                                value="{{ $penduduk['tua'] }}" readonly>
                            <span class="input-group-text">Jiwa</span>
                        </div>
                    </div>
                </div>
            </li>
        </div>
        <div class="col-sm-5 my-auto">
            {!! $chartusia->container() !!}
        </div>
    </div>
    <div class="d-flex">
        <small class="text-muted"><em>
                Update : {{ $penduduk['updated_at'] }}
            </em></small>
    </div>
</div>
