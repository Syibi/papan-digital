<div class="container overflow-hidden">
    <img src="../assets/img/avatars/logo.png" width="9%" class="mt-2 mx-auto d-block" />
    <div class="divider">
        <div class="divider-text">Profil PKK Desa Tikusan</div>
    </div>
    <label class="form-label mt-2"><strong>Jumlah Kelompok</strong></label>
    <div class="row gx-5">
        <div class="col-sm-12">
            <div class="row">
                <div class="col">
                    <li class="d-flex mt-1 mb-1 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">PKK Dusun</h6>
                            </div>
                            <div class="user-progress">
                                <div class="input-group">
                                    <input class="form-control" name="pkk_dusun" type="text" id="data_pkk" readonly
                                        value="{{ $profil['pkk_dusun'] }}">
                                    <span class="input-group-text">kelompok</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-1 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">PKK RW</h6>
                            </div>
                            <div class="user-progress">
                                <div class="input-group">
                                    <input class="form-control" name="pkk_rw" type="text" id="data_pkk" readonly
                                        value="{{ $profil['pkk_rw'] }}">
                                    <span class="input-group-text">kelompok</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="col">
                    <li class="d-flex mt-1 mb-1 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">PKK RT</h6>
                            </div>
                            <div class="user-progress">
                                <div class="input-group">
                                    <input class="form-control" name="pkk_rt" type="text" id="data_pkk" readonly
                                        value="{{ $profil['pkk_rt'] }}">
                                    <span class="input-group-text">kelompok</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-1 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Dasa Wisma</h6>
                            </div>
                            <div class="user-progress">
                                <div class="input-group">
                                    <input class="form-control" name="dasa_wisma" type="text" id="data_pkk" readonly
                                        value="{{ $profil['dasa_wisma'] }}">
                                    <span class="input-group-text">kelompok</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-4">
            <label class="form-label mt-2"><strong>Jumlah Kartu Keluarga</strong></label>
            <div class="user-progress">
                <div class="input-group">
                    <input class="form-control" name="jml_kk" type="text" id="data_pkk" readonly
                        value="{{ $profil['jml_kk'] }}">
                    <span class="input-group-text">KK</span>
                </div>
            </div>
        </div>
        <div class="col-4">
            <label class="form-label mt-2"><strong>Jumlah Jiwa</strong></label>
            <div class="container overflow-hidden text-center" style="padding-left: 0">
                <div class="user-progress">
                    <div class="input-group">
                        <input class="form-control" name="jml_jiwa" type="text" id="data_pkk"
                            value="{{ $profil['jml_jiwa'] }}" readonly>
                        <span class="input-group-text">Jiwa</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <label class="form-label mt-4"><strong>Jumlah Kader</strong></label>
    <div class="row gx-5">
        <div class="col-sm-12">
            <div class="row">
                <div class="col">
                    <li class="d-flex mt-1 mb-1 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Anggota TP PKK</h6>
                            </div>
                            <div class="user-progress">
                                <div class="input-group">
                                    <input class="form-control" name="tp_pkk" type="text" id="data_pkk" readonly
                                        value="{{ $profil['tp_pkk'] }}">
                                    <span class="input-group-text">Jiwa</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-1 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Anggota Umum</h6>
                            </div>
                            <div class="user-progress">
                                <div class="input-group">
                                    <input class="form-control" name="umum" type="text" id="data_pkk"
                                        readonly value="{{ $profil['umum'] }}">
                                    <span class="input-group-text">jiwa</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="col">
                    <li class="d-flex mb-1 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Anggota Khusus</h6>
                            </div>
                            <div class="user-progress">
                                <div class="input-group">
                                    <input class="form-control" name="khusus" type="text" id="data_pkk"
                                        readonly value="{{ $profil['khusus'] }}">
                                    <span class="input-group-text">jiwa</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </div>
</div>
