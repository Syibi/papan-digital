<label class="form-label ps-4"><strong>A. Kantor Desa</strong></label>
<div class="container overflow-hidden text-center">
    <div class="col-sm-3">
        <input class="form-control form-control-sm" style="width: 100px" name="kantor_desa" type="text" id="data_sarana"
            value="{{ $sarpras['kantor_desa'] }}    Unit" readonly>
    </div>
</div>

<label class="form-label ps-4 mt-2"><strong>b. Prasarana Kesehatan</strong></label>
<div class="container overflow-hidden text-center">
    <div class="row">
        <div class="col-sm-4">
            <li class="d-flex mt-1 mb-1 pb-1 align-items-center justify-content-between gap-2">
                <div class="me-2">
                    <h6 class="mb-0">Puskesmas</h6>
                </div>
                <input class="form-control form-control-sm" style="width: 100px" name="puskesmas" type="text"
                    id="data_sarana" value="{{ $sarpras['puskesmas'] }}  Unit" readonly>
            </li>
        </div>
        <div class="col-sm-4">
            <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                <div class="me-2">
                    <h6 class="mb-0">Poskesdes</h6>
                </div>
                <input class="form-control form-control-sm" style="width: 100px" name="poskesdes" type="text"
                    id="data_sarana" value="{{ $sarpras['poskesdes'] }}  Unit" readonly>
            </li>
        </div>
        <div class="col-sm-4">
            <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                <div class="me-2">
                    <h6 class="mb-0">Posyandu</h6>
                </div>
                <input class="form-control form-control-sm" style="width: 100px" name="posyandu" type="text"
                    id="data_sarana" value="{{ $sarpras['posyandu'] }}   Unit" readonly>
            </li>
        </div>
    </div>
</div>

<label class="form-label ps-4 mt-2"><strong>c. Prasarana Pendidikan</strong></label>
<div class="container overflow-hidden text-center">
    <div class="row">
        <div class="col-sm-4">
            <li class="d-flex mt-1 mb-1 pb-1 align-items-center justify-content-between gap-2">
                <div class="me-2">
                    <h6 class="mb-0">Perpus Desa</h6>
                </div>
                <input class="form-control form-control-sm" style="width: 100px" name="perpus" type="text"
                    id="data_sarana" value="{{ $sarpras['perpus'] }}   Unit" readonly>
            </li>
        </div>
        <div class="col-sm-4">
            <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                <div class="me-2">
                    <h6 class="mb-0">Gedung PAUD</h6>
                </div>
                <input class="form-control form-control-sm" style="width: 100px" name="gedung_paud" type="text"
                    id="data_sarana" value="{{ $sarpras['gedung_paud'] }} Unit" readonly>
            </li>
        </div>
        <div class="col-sm-4">
            <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                <div class="me-2">
                    <h6 class="mb-0">Gedung TK</h6>
                </div>
                <input class="form-control form-control-sm" style="width: 100px" name="gedung_tk" type="text"
                    id="data_sarana" value="{{ $sarpras['gedung_tk'] }} Unit" readonly>
            </li>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <li class="d-flex mt-1 mb-1 pb-1 align-items-center justify-content-between gap-2">
                <div class="me-2">
                    <h6 class="mb-0">Gedung SD</h6>
                </div>
                <input class="form-control form-control-sm" style="width: 100px" name="gedung_sd" type="text"
                    id="data_sarana" value="{{ $sarpras['gedung_sd'] }} Unit" readonly>
            </li>
        </div>
        <div class="col-sm-4">
            <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                <div class="me-2">
                    <h6 class="mb-0">Gedung SMP</h6>
                </div>
                <input class="form-control form-control-sm" style="width: 100px" name="gedung_smp" type="text"
                    id="data_sarana" value="{{ $sarpras['gedung_smp'] }} Unit" readonly>
            </li>
        </div>
        <div class="col-sm-4">
            <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                <div class="me-2">
                    <h6 class="mb-0">Gedung SMA</h6>
                </div>
                <input class="form-control form-control-sm" style="width: 100px" name="gedung_sma" type="text"
                    id="data_sarana" value="{{ $sarpras['gedung_sma'] }} Unit" readonly>
            </li>
        </div>
    </div>
</div>

<label class="form-label ps-4 mt-2"><strong>d. Prasarana Ibadah</strong></label>
<div class="container overflow-hidden text-center">
    <div class="row">
        <div class="col-sm-4">
            <li class="d-flex mt-1 mb-1 pb-1 align-items-center justify-content-between gap-2">
                <div class="me-2">
                    <h6 class="mb-0">Masjid</h6>
                </div>
                <input class="form-control form-control-sm" style="width: 100px" name="masjid" type="text"
                    id="data_sarana" value="{{ $sarpras['masjid'] }} Unit" readonly>
            </li>
        </div>
        <div class="col-sm-4">
            <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                <div class="me-2">
                    <h6 class="mb-0">Musholla</h6>
                </div>
                <input class="form-control form-control-sm" style="width: 100px" name="musholla" type="text"
                    id="data_sarana" value="{{ $sarpras['musholla'] }} Unit" readonly>
            </li>
        </div>
        <div class="col-sm-4">
            <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                <div class="me-2">
                    <h6 class="mb-0">Gereja</h6>
                </div>
                <input class="form-control form-control-sm" style="width: 100px" name="gereja" type="text"
                    id="data_sarana" value="{{ $sarpras['gereja'] }} Unit" readonly>
            </li>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <li class="d-flex mt-1 mb-1 pb-1 align-items-center justify-content-between gap-2">
                <div class="me-2">
                    <h6 class="mb-0">Pura</h6>
                </div>
                <input class="form-control form-control-sm" style="width: 100px" name="pura" type="text"
                    id="data_sarana" value="{{ $sarpras['pura'] }} Unit" readonly>
            </li>
        </div>
        <div class="col-sm-4">
            <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                <div>
                    <h6 class="mb-0">Vihara</h6>
                </div>
                <input class="form-control form-control-sm" style="width: 100px" name="vihara" type="text"
                    id="data_sarana" value="{{ $sarpras['vihara'] }} Unit" readonly>
            </li>
        </div>
        <div class="col-sm-4">
            <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                <div>
                    <h6 class="mb-0">Kelenteng</h6>
                </div>
                <input class="form-control form-control-sm" style="width: 100px" name="kelenteng" type="text"
                    id="data_sarana" value="{{ $sarpras['kelenteng'] }} Unit" readonly>
            </li>
        </div>
    </div>
</div>

<label class="form-label ps-4 mt-2"><strong>e. Prasarana Umum</strong></label>
<div class="container overflow-hidden text-center">
    <div class="row">
        <div class="col-sm-4">
            <li class="d-flex mt-1 mb-1 pb-1 align-items-center justify-content-between gap-2">
                <div class="me-2">
                    <h6 class="mb-0">Olahraga</h6>
                </div>
                <input class="form-control form-control-sm" style="width: 100px" name="olahraga" type="text"
                    id="data_sarana" value="{{ $sarpras['olahraga'] }} Unit" readonly>
            </li>
        </div>
        <div class="col-sm-4">
            <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                <div class="me-2">
                    <h6 class="mb-0">Kesenian/ Budaya</h6>
                </div>
                <input class="form-control form-control-sm" style="width: 100px" name="kesenian" type="text"
                    id="data_sarana" value="{{ $sarpras['kesenian'] }} Unit" readonly>
            </li>
        </div>
        <div class="col-sm-4">
            <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                <div class="me-2">
                    <h6 class="mb-0">Balai Pertemuan</h6>
                </div>
                <input class="form-control form-control-unit" style="width: 100px" name="balai" type="text"
                    id="data_sarana" value="{{ $sarpras['balai'] }} Unit" readonly>
            </li>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <li class="d-flex mt-1 mb-1 pb-1 align-items-center justify-content-between gap-2">
                <div class="me-2">
                    <h6 class="mb-0">Sumur Desa</h6>
                </div>
                <input class="form-control form-control-sm" style="width: 100px" name="sumur_desa" type="text"
                    id="data_sarana" value="{{ $sarpras['sumur_desa'] }} Unit" readonly>
            </li>
        </div>
        <div class="col-sm-4">
            <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                <div class="me-2">
                    <h6 class="mb-0">Pasar Desa</h6>
                </div>
                <input class="form-control form-control-sm" style="width: 100px" name="pasar_desa" type="text"
                    id="data_sarana" value="{{ $sarpras['pasar_desa'] }} Unit" readonly>
            </li>
        </div>
        <div class="col-sm-4">
            <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                <div>
                    <h6 class="mb-0">Lainnya</h6>
                </div>
                <input class="form-control form-control-sm" style="width: 100px" name="lainnya" type="text"
                    id="data_sarana" value="{{ $sarpras['lainnya'] }} Unit" readonly>
            </li>
        </div>
    </div>
</div>
<div class="mt-3" style="margin-left: 25px">
    <small class="text-muted"><em>
            Update : {{ $sarpras['updated_at'] }}
        </em></small>
</div>
