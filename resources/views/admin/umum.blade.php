@extends('admin.layout')

@section('container')
    <div class="container-xxl flex-grow-1 mt-3">
        <div class="nav-align-top mb-4">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-umum" aria-controls="navs-top-profile" aria-selected="false">
                        <strong>Data Umum</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-penduduk" aria-controls="navs-top-messages" aria-selected="false">
                        <strong>Data Penduduk</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-pendidikan" aria-controls="navs-top-messages" aria-selected="false">
                        <strong>Data Pendidikan</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-pekerjaan" aria-controls="navs-top-messages" aria-selected="false">
                        <strong>Data Pekerjaan</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-sarana" aria-controls="navs-top-messages" aria-selected="false">
                        <strong>Data Sarana Prasarana</strong>
                    </button>
                </li>
            </ul>
            {{-- Tab Content --}}
            <div class="tab-content">
                {{-- Tab Bidang Umum --}}
                <div class="tab-pane fade active show" id="navs-top-umum" role="tabpanel">
                    <form action="{{ url('admin/umum/updateumum') }}" method="post" enctype="multipart/form-data"
                        name="form_umum">
                        @csrf
                        @method('PUT')
                        <div class="row justify-content-evenly mx-2">
                            <div class="mb-1 col-12">
                                <label for="topologi_desa" class="form-label"><strong>Topologi Desa</strong></label>
                                <textarea class="form-control my-2" type="text" id="data_umum" name="topologi_desa" rows="2" readonly>{{ $umum['topologi_desa'] }}</textarea>
                            </div>
                            <div class="mb-1 col-6">
                                <label for="tingkat_perkembangan" class="form-label"><strong>Tingkat Perkembangan
                                        Desa</strong></label>
                                <input class="form-control" type="text" id="data_umum" name="tingkat_perkembangan"
                                    value="{{ $umum['tingkat_perkembangan'] }}" readonly>
                            </div>
                            <div class="mb-1 col-6">
                                <label for="luas_wilayah" class="form-label"><strong>Luas Wilayah</strong></label>
                                <div class="input-group">
                                    <input class="form-control my-1" name="luas_wilayah" type="text" id="data_umum"
                                        value="{{ $umum['luas_wilayah'] }}" readonly>
                                    <span class="input-group-text my-1">Hektar</span>
                                </div>
                            </div>
                            <div>
                                <label for="batas_wilayah" class="form-label"><strong>Batas Wilayah</strong></label>
                                <div class="mb-2 row">
                                    <label for="batas_wilayah_utara" class="col-sm-1 my-2">Sebelah Utara</label>
                                    <div class="col-5">
                                        <textarea class="form-control my-2" type="text" id="data_umum" name="batas_wilayah_utara" rows="2" readonly>{{ $umum['batas_wilayah_utara'] }}</textarea>
                                    </div>
                                    <label for="batas_wilayah_selatan" class="col-sm-1 my-2">Sebelah Selatan</label>
                                    <div class="col-5">
                                        <textarea class="form-control my-2" type="text" id="data_umum" name="batas_wilayah_selatan" rows="2" readonly>{{ $umum['batas_wilayah_selatan'] }}</textarea>
                                    </div>
                                    <label for="batas_wilayah_barat" class="col-sm-1 my-2">Sebelah Barat</label>
                                    <div class="col-5">
                                        <textarea class="form-control my-2" type="text" id="data_umum" name="batas_wilayah_barat" rows="2"
                                            readonly>{{ $umum['batas_wilayah_barat'] }}</textarea>
                                    </div>
                                    <label for="batas_wilayah_timur" class="col-sm-1 my-2">Sebelah Timur</label>
                                    <div class="col-5">
                                        <textarea class="form-control my-2" type="text" id="data_umum" name="batas_wilayah_timur" rows="2"
                                            readonly>{{ $umum['batas_wilayah_timur'] }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for="orbitrasi" class="form-label"><strong>Orbitrasi</strong></label>
                                <div class="mb-3 row">
                                    <label for="orbitrasi_kecamatan" class="col-sm-2 my-3">Kecamatan</label>
                                    <div class="col-4">
                                        <div class="input-group">
                                            <input class="form-control my-1" type="text" id="data_umum"
                                                name="orbitrasi_kecamatan" value="{{ $umum['orbitrasi_kecamatan'] }}"
                                                readonly>
                                            <span class="input-group-text my-1">Km</span>
                                        </div>
                                    </div>
                                    <label for="orbitrasi_kota" class="col-sm-2 my-3">Kota</label>
                                    <div class="col-4">
                                        <div class="input-group">
                                            <input class="form-control my-1" type="text" id="data_umum"
                                                name="orbitrasi_kota" value="{{ $umum['orbitrasi_kota'] }}" readonly>
                                            <span class="input-group-text my-1">Km</span>
                                        </div>
                                    </div>
                                    <label for="orbitrasi_kabupaten" class="col-sm-2 my-3">Kabupaten</label>
                                    <div class="col-4">
                                        <div class="input-group">
                                            <input class="form-control my-1" type="text" id="data_umum"
                                                name="orbitrasi_kabupaten" value="{{ $umum['orbitrasi_kabupaten'] }}"
                                                readonly>
                                            <span class="input-group-text my-1">Km</span>
                                        </div>
                                    </div>
                                    <label for="orbitrasi_provinsi" class="col-sm-2 my-3">Provinsi</label>
                                    <div class="col-4">
                                        <div class="input-group">
                                            <input class="form-control my-1" type="text" id="data_umum"
                                                name="orbitrasi_provinsi" value="{{ $umum['orbitrasi_provinsi'] }}"
                                                readonly>
                                            <span class="input-group-text my-1">Km</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 mx-2 float-end">
                            <button type="button" form="form_umum" class="btn btn-primary me-2" value="edit"
                                id="edit-umum" onclick="active('[id=data_umum]')">Edit</button>
                            <button type="button" class="btn btn-outline-secondary" value="cancel"
                                onclick="nonactive('[id=data_umum]')" id="cancel-umum">Cancel</button>
                            <button type="submit" class="btn btn-primary me-2" value="save"
                                onclick="nonactive('[id=data_umum]')" id="save-umum">Save Changes</button>
                        </div>
                    </form>
                </div>

                {{-- Tab Data Penduduk --}}
                <div class="tab-pane fade" id="navs-top-penduduk" role="tabpanel">
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
                    <form action="{{ url('admin/umum/updatependuduk') }}" method="post" enctype="multipart/form-data"
                        name="form_penduduk">
                        @csrf
                        @method('PUT')
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
                                            <span class="avatar-initial rounded bg-label-primary"><i
                                                    class='bx bx-male'></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">Laki-laki</h6>
                                            </div>
                                            <div class="user-progress">
                                                <div class="input-group">
                                                    <input class="form-control" name="laki_laki" type="text"
                                                        id="data_penduduk" value="{{ $penduduk['laki-laki'] }}" readonly>
                                                    <span class="input-group-text">Jiwa</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-2 pb-1">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label-danger"><i
                                                    class='bx bx-female'></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">Perempuan</h6>
                                            </div>
                                            <div class="user-progress">
                                                <div class="input-group">
                                                    <input class="form-control" name="perempuan" type="text"
                                                        id="data_penduduk" value="{{ $penduduk['perempuan'] }}" readonly>
                                                    <span class="input-group-text">Jiwa</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-sm-4 my-auto">
                                    {!! $chart_jk->container() !!}
                                </div>
                            </div>
                        </div>
                        <label for="batas_wilayah" class="form-label ps-4"><strong>Berdasarkan Usia</strong></label>
                        <div class="container overflow-hidden text-center">
                            <div class="row gx-5">
                                <div class="col-sm-7">
                                    <li class="d-flex mb-2 pb-1">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label-primary"><i
                                                    class='bx bx-male'></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">Usia 0-15 tahun</h6>
                                            </div>
                                            <div class="user-progress">
                                                <div class="input-group">
                                                    <input class="form-control" name="muda" type="text"
                                                        id="data_penduduk" value="{{ $penduduk['muda'] }}" readonly>
                                                    <span class="input-group-text">Jiwa</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-2 pb-1">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label-success"><i
                                                    class='bx bx-male'></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">Usia 15-65 tahun</h6>
                                            </div>
                                            <div class="user-progress">
                                                <div class="input-group">
                                                    <input class="form-control" name="dewasa" type="text"
                                                        id="data_penduduk" value="{{ $penduduk['dewasa'] }}" readonly>
                                                    <span class="input-group-text">Jiwa</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-2 pb-1">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded bg-label-warning"><i
                                                    class='bx bx-male'></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0">Usia 65 tahun keatas</h6>
                                            </div>
                                            <div class="user-progress">
                                                <div class="input-group">
                                                    <input class="form-control" name="tua" type="text"
                                                        id="data_penduduk" value="{{ $penduduk['tua'] }}" readonly>
                                                    <span class="input-group-text">Jiwa</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-sm-5 my-auto">
                                    {!! $chart_usia->container() !!}
                                </div>
                            </div>
                            <div class="d-flex">
                                <small class="text-muted"><em>
                                        Update : {{ $penduduk['updated_at'] }}
                                    </em></small>
                            </div>
                        </div>
                        <div class="mx-4 float-end">
                            <button type="button" form="form_penduduk" class="btn btn-primary me-2" value="edit"
                                id="edit-penduduk" onclick="active('[id=data_penduduk]')">Edit</button>
                            <button type="button" class="btn btn-outline-secondary" value="cancel"
                                onclick="nonactive('[id=data_penduduk]')" id="cancel-penduduk">Cancel</button>
                            <button type="submit" class="btn btn-primary me-2" value="save"
                                onclick="nonactive('[id=data_penduduk]')" id="save-penduduk">Save Changes</button>
                        </div>
                    </form>
                </div>

                {{-- Tab Data Pendidikan --}}
                <div class="tab-pane fade" id="navs-top-pendidikan" role="tabpanel">
                    <form action="{{ url('admin/umum/updatependidikan') }}" method="post" enctype="multipart/form-data"
                        name="form_pendidikan">
                        @csrf
                        @method('PUT')
                        <label class="form-label ps-4 mt-3"><strong>Lulusan Pendidikan
                                Umum</strong></label>
                        <div class="container overflow-hidden text-center">
                            <div class="row gx-5">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col">
                                            <li class="d-flex mt-1 mb-1 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-success"><i
                                                            class='bx bx-male'></i></span>
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">TK</h6>
                                                    </div>
                                                    <div class="user-progress">
                                                        <div class="input-group">
                                                            <input class="form-control" name="tk" type="text"
                                                                id="data_pendidikan" value="{{ $pendidikan['tk'] }}"
                                                                readonly>
                                                            <span class="input-group-text">Jiwa</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-1 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-danger"><i
                                                            class='bx bx-male'></i></span>
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">SD</h6>
                                                    </div>
                                                    <div class="user-progress">
                                                        <div class="input-group">
                                                            <input class="form-control" name="sd" type="text"
                                                                id="data_pendidikan" value="{{ $pendidikan['sd'] }}"
                                                                readonly>
                                                            <span class="input-group-text">Jiwa</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-1 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-dark"><i
                                                            class='bx bx-male'></i></span>
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">SMP</h6>
                                                    </div>
                                                    <div class="user-progress">
                                                        <div class="input-group">
                                                            <input class="form-control" name="smp" type="text"
                                                                id="data_pendidikan" value="{{ $pendidikan['smp'] }}"
                                                                readonly>
                                                            <span class="input-group-text">Jiwa</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-1 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-primary"><i
                                                            class='bx bx-male'></i></span>
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">SMA</h6>
                                                    </div>
                                                    <div class="user-progress">
                                                        <div class="input-group">
                                                            <input class="form-control" name="sma" type="text"
                                                                id="data_pendidikan" value="{{ $pendidikan['sma'] }}"
                                                                readonly>
                                                            <span class="input-group-text">Jiwa</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="col">
                                            <li class="d-flex mt-1 mb-1 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-warning"><i
                                                            class='bx bx-male'></i></span>
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Diploma</h6>
                                                    </div>
                                                    <div class="user-progress">
                                                        <div class="input-group">
                                                            <input class="form-control" name="diploma" type="text"
                                                                id="data_pendidikan" value="{{ $pendidikan['diploma'] }}"
                                                                readonly>
                                                            <span class="input-group-text">Jiwa</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-1 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-secondary"><i
                                                            class='bx bx-male'></i></span>
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Sarjana</h6>
                                                    </div>
                                                    <div class="user-progress">
                                                        <div class="input-group">
                                                            <input class="form-control" name="sarjana" type="text"
                                                                id="data_pendidikan" value="{{ $pendidikan['sarjana'] }}"
                                                                readonly>
                                                            <span class="input-group-text">Jiwa</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-1 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-info"><i
                                                            class='bx bx-male'></i></span>
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Pascasarjana</h6>
                                                    </div>
                                                    <div class="user-progress">
                                                        <div class="input-group">
                                                            <input class="form-control" name="pascasarjana"
                                                                type="text" id="data_pendidikan"
                                                                value="{{ $pendidikan['pascasarjana'] }}" readonly>
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
                        <label class="form-label ps-4 mt-4"><strong>Lulusan Pendidikan
                                Khusus</strong></label>
                        <div class="container overflow-hidden text-center">
                            <div class="row gx-5">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col">
                                            <li class="d-flex mt-1 mb-1 pb-1">
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Pondok Pesantren</h6>
                                                    </div>
                                                    <div class="user-progress">
                                                        <div class="input-group">
                                                            <input class="form-control" name="pondok" type="text"
                                                                id="data_pendidikan" value="{{ $pendidikan['pondok'] }}"
                                                                readonly>
                                                            <span class="input-group-text">Jiwa</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-1 pb-1">
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Pendidikan Keagamaan</h6>
                                                    </div>
                                                    <div class="user-progress">
                                                        <div class="input-group">
                                                            <input class="form-control" name="keagamaan" type="text"
                                                                id="data_pendidikan"
                                                                value="{{ $pendidikan['keagamaan'] }}" readonly>
                                                            <span class="input-group-text">Jiwa</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="col">
                                            <li class="d-flex mt-1 mb-1 pb-1">
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Sekolah Luar Biasa</h6>
                                                    </div>
                                                    <div class="user-progress">
                                                        <div class="input-group">
                                                            <input class="form-control" name="slb" type="text"
                                                                id="data_pendidikan" value="{{ $pendidikan['slb'] }}"
                                                                readonly>
                                                            <span class="input-group-text">Jiwa</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-1 pb-1">
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Kursus</h6>
                                                    </div>
                                                    <div class="user-progress">
                                                        <div class="input-group">
                                                            <input class="form-control" name="kursus" type="text"
                                                                id="data_pendidikan" value="{{ $pendidikan['kursus'] }}"
                                                                readonly>
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
                                        <input class="form-control" name="tidak_sekolah" type="text"
                                            id="data_pendidikan" value="{{ $pendidikan['tidak_sekolah'] }}" readonly>
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
                        <div class="mt-2 mx-4 float-end">
                            <button type="button" form="form_pendidikan" class="btn btn-primary me-2" value="edit"
                                id="edit-pendidikan" onclick="active('[id=data_pendidikan]')">Edit</button>
                            <button type="button" class="btn btn-outline-secondary" value="cancel"
                                onclick="nonactive('[id=data_pendidikan]')" id="cancel-pendidikan">Cancel</button>
                            <button type="submit" class="btn btn-primary me-2" value="save"
                                onclick="nonactive('[id=data_pendidikan]')" id="save-pendidikan">Save Changes</button>
                        </div>
                    </form>
                </div>

                {{-- Tab Data Pekerjaan --}}
                <div class="tab-pane fade" id="navs-top-pekerjaan" role="tabpanel">
                    <h5><strong>Daftar Pekerjaan / Mata Pencaharian</strong></h5>
                    <div class="row justify-content-center text-center mx-2 mt-3">
                        <div class="col-6 mt-2">
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Pegawai Negeri Sipil</h6>
                                </div>
                                <div class="user-progress">
                                    <div class="input-group">
                                        <input class="form-control" name="pns" type="text" id="data_pekerjaan"
                                            value="{{ $pendidikan['diploma'] }}" readonly>
                                        <span class="input-group-text">Jiwa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-2">
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">TNI/Polri</h6>
                                </div>
                                <div class="user-progress">
                                    <div class="input-group">
                                        <input class="form-control" name="tni-polri" type="text" id="data_pekerjaan"
                                            value="{{ $pendidikan['diploma'] }}" readonly>
                                        <span class="input-group-text">Jiwa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-2">
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Swasta</h6>
                                </div>
                                <div class="user-progress">
                                    <div class="input-group">
                                        <input class="form-control" name="swasta" type="text" id="data_pekerjaan"
                                            value="{{ $pendidikan['diploma'] }}" readonly>
                                        <span class="input-group-text">Jiwa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-2">
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Wiraswasta/Pedagang</h6>
                                </div>
                                <div class="user-progress">
                                    <div class="input-group">
                                        <input class="form-control" name="dagang" type="text" id="data_pekerjaan"
                                            value="{{ $pendidikan['diploma'] }}" readonly>
                                        <span class="input-group-text">Jiwa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-2">
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Petani</h6>
                                </div>
                                <div class="user-progress">
                                    <div class="input-group">
                                        <input class="form-control" name="petani" type="text" id="data_pekerjaan"
                                            value="{{ $pendidikan['diploma'] }}" readonly>
                                        <span class="input-group-text">Jiwa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-2">
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Tukang</h6>
                                </div>
                                <div class="user-progress">
                                    <div class="input-group">
                                        <input class="form-control" name="tukang" type="text" id="data_pekerjaan"
                                            value="{{ $pendidikan['diploma'] }}" readonly>
                                        <span class="input-group-text">Jiwa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-2">
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Buruh Tani</h6>
                                </div>
                                <div class="user-progress">
                                    <div class="input-group">
                                        <input class="form-control" name="buruh" type="text" id="data_pekerjaan"
                                            value="{{ $pendidikan['diploma'] }}" readonly>
                                        <span class="input-group-text">Jiwa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-2">
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Pensiunan</h6>
                                </div>
                                <div class="user-progress">
                                    <div class="input-group">
                                        <input class="form-control" name="pensiun" type="text" id="data_pekerjaan"
                                            value="{{ $pendidikan['diploma'] }}" readonly>
                                        <span class="input-group-text">Jiwa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-2">
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Nelayan</h6>
                                </div>
                                <div class="user-progress">
                                    <div class="input-group">
                                        <input class="form-control" name="nelayan" type="text" id="data_pekerjaan"
                                            value="{{ $pendidikan['diploma'] }}" readonly>
                                        <span class="input-group-text">Jiwa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-2">
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Peternak</h6>
                                </div>
                                <div class="user-progress">
                                    <div class="input-group">
                                        <input class="form-control" name="peternak" type="text" id="data_pekerjaan"
                                            value="{{ $pendidikan['diploma'] }}" readonly>
                                        <span class="input-group-text">Jiwa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-2">
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Jasa</h6>
                                </div>
                                <div class="user-progress">
                                    <div class="input-group">
                                        <input class="form-control" name="jasa" type="text" id="data_pekerjaan"
                                            value="{{ $pendidikan['diploma'] }}" readonly>
                                        <span class="input-group-text">Jiwa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-2">
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Pekerja Seni</h6>
                                </div>
                                <div class="user-progress">
                                    <div class="input-group">
                                        <input class="form-control" name="seni" type="text" id="data_pekerjaan"
                                            value="{{ $pendidikan['diploma'] }}" readonly>
                                        <span class="input-group-text">Jiwa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-2">
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Lainnya</h6>
                                </div>
                                <div class="user-progress">
                                    <div class="input-group">
                                        <input class="form-control" name="lain" type="text" id="data_pekerjaan"
                                            value="{{ $pendidikan['diploma'] }}" readonly>
                                        <span class="input-group-text">Jiwa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-2">
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Tidak Bekerja</h6>
                                </div>
                                <div class="user-progress">
                                    <div class="input-group">
                                        <input class="form-control" name="tidak-bekerja" type="text"
                                            id="data_pekerjaan" value="{{ $pendidikan['diploma'] }}" readonly>
                                        <span class="input-group-text">Jiwa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3" style="margin-left: 25px">
                        <small class="text-muted"><em>
                                Update : {{ $pendidikan['updated_at'] }}
                            </em></small>
                    </div>
                    <div class="mt-4 mx-4 float-end">
                        <button type="button" form="form_umum" class="btn btn-primary me-2" value="edit"
                            id="edit-pekerjaan" onclick="active('[id=data_pekerjaan]')">Edit</button>
                        <button type="button" class="btn btn-outline-secondary" value="cancel"
                            onclick="nonactive('[id=data_pekerjaan]')" id="cancel-pekerjaan">Cancel</button>
                        <button type="submit" class="btn btn-primary me-2" value="save"
                            onclick="nonactive('[id=data_pekerjaan]')" id="save-pekerjaan">Save Changes</button>
                    </div>
                </div>

                {{-- Tab Sarana --}}
                <div class="tab-pane fade" id="navs-top-sarana" role="tabpanel">
                    <label class="form-label ps-4"><strong>A. Kantor Desa</strong></label>
                    <div class="container overflow-hidden text-center">
                        <div class="col-sm-3">
                            <div class="user-progress">
                                <div class="input-group">
                                    <input class="form-control" name="kantor-desa" type="text" id="data_sarana"
                                        value="1" readonly>
                                    <span class="input-group-text">Buah</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <label class="form-label ps-4 mt-2"><strong>b. Prasarana Kesehatan</strong></label>
                    <div class="container overflow-hidden text-center">
                        <div class="row gx-5">
                            <div class="col">
                                <li class="d-flex mt-1 mb-1 pb-1 align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Puskesmas</h6>
                                    </div>
                                    <div class="user-progress">
                                        <div class="input-group">
                                            <input class="form-control" name="puskesmas" type="text" id="data_sarana"
                                                value="1" readonly>
                                            <span class="input-group-text">Buah</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="col">
                                <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Poskesdes</h6>
                                    </div>
                                    <div class="user-progress">
                                        <div class="input-group">
                                            <input class="form-control" name="poskesdes" type="text" id="data_sarana"
                                                value="1" readonly>
                                            <span class="input-group-text">Buah</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="col">
                                <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Posyandu</h6>
                                    </div>
                                    <div class="user-progress">
                                        <div class="input-group">
                                            <input class="form-control" name="posyandu" type="text" id="data_sarana"
                                                value="1" readonly>
                                            <span class="input-group-text">Buah</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </div>

                    <label class="form-label ps-4 mt-2"><strong>c. Prasarana Pendidikan</strong></label>
                    <div class="container overflow-hidden text-center">
                        <div class="row gx-5">
                            <div class="col">
                                <li class="d-flex mt-1 mb-1 pb-1 align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Perpus Desa</h6>
                                    </div>
                                    <div class="user-progress">
                                        <div class="input-group">
                                            <input class="form-control" name="perpus" type="text" id="data_sarana"
                                                value="1" readonly>
                                            <span class="input-group-text">Buah</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="col">
                                <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Gedung PAUD</h6>
                                    </div>
                                    <div class="user-progress">
                                        <div class="input-group">
                                            <input class="form-control" name="gedung-paud" type="text"
                                                id="data_sarana" value="1" readonly>
                                            <span class="input-group-text">Buah</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="col">
                                <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Gedung TK</h6>
                                    </div>
                                    <div class="user-progress">
                                        <div class="input-group">
                                            <input class="form-control" name="gedung-tk" type="text" id="data_sarana"
                                                value="1" readonly>
                                            <span class="input-group-text">Buah</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <li class="d-flex mt-1 mb-1 pb-1 align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Gedung SD</h6>
                                    </div>
                                    <div class="user-progress">
                                        <div class="input-group">
                                            <input class="form-control" name="gedung-sd" type="text" id="data_sarana"
                                                value="1" readonly>
                                            <span class="input-group-text">Buah</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="col">
                                <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Gedung SMP</h6>
                                    </div>
                                    <div class="user-progress">
                                        <div class="input-group">
                                            <input class="form-control" name="gedung-smp" type="text"
                                                id="data_sarana" value="1" readonly>
                                            <span class="input-group-text">Buah</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="col">
                                <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Gedung SMA</h6>
                                    </div>
                                    <div class="user-progress">
                                        <div class="input-group">
                                            <input class="form-control" name="gedung-sma" type="text"
                                                id="data_sarana" value="1" readonly>
                                            <span class="input-group-text">Buah</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </div>

                    <label class="form-label ps-4 mt-2"><strong>d. Prasarana Ibadah</strong></label>
                    <div class="container overflow-hidden text-center">
                        <div class="row gx-5">
                            <div class="col">
                                <li class="d-flex mt-1 mb-1 pb-1 align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Masjid</h6>
                                    </div>
                                    <div class="user-progress">
                                        <div class="input-group">
                                            <input class="form-control" name="masjid" type="text" id="data_sarana"
                                                value="1" readonly>
                                            <span class="input-group-text">Buah</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="col">
                                <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Musholla</h6>
                                    </div>
                                    <div class="user-progress">
                                        <div class="input-group">
                                            <input class="form-control" name="musholla" type="text" id="data_sarana"
                                                value="1" readonly>
                                            <span class="input-group-text">Buah</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="col">
                                <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Gereja</h6>
                                    </div>
                                    <div class="user-progress">
                                        <div class="input-group">
                                            <input class="form-control" name="gereja" type="text" id="data_sarana"
                                                value="1" readonly>
                                            <span class="input-group-text">Buah</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <li class="d-flex mt-1 mb-1 pb-1 align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Pura</h6>
                                    </div>
                                    <div class="user-progress">
                                        <div class="input-group">
                                            <input class="form-control" name="pura" type="text" id="data_sarana"
                                                value="1" readonly>
                                            <span class="input-group-text">Buah</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="col">
                                <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                                    <div>
                                        <h6 class="mb-0">Vihara</h6>
                                    </div>
                                    <div class="user-progress">
                                        <div class="input-group">
                                            <input class="form-control" name="vihara" type="text" id="data_sarana"
                                                value="1" readonly>
                                            <span class="input-group-text">Buah</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="col">
                                <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                                    <div>
                                        <h6 class="mb-0">kelenteng</h6>
                                    </div>
                                    <div class="user-progress">
                                        <div class="input-group">
                                            <input class="form-control" name="kelenteng" type="text" id="data_sarana"
                                                value="1" readonly>
                                            <span class="input-group-text">Buah</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </div>

                    <label class="form-label ps-4 mt-2"><strong>e. Prasarana Umum</strong></label>
                    <div class="container overflow-hidden text-center">
                        <div class="row gx-5">
                            <div class="col">
                                <li class="d-flex mt-1 mb-1 pb-1 align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Olahraga</h6>
                                    </div>
                                    <div class="user-progress">
                                        <div class="input-group">
                                            <input class="form-control" name="olahraga" type="text" id="data_sarana"
                                                value="1" readonly>
                                            <span class="input-group-text">Buah</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="col">
                                <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Kesenian/ Budaya</h6>
                                    </div>
                                    <div class="user-progress">
                                        <div class="input-group">
                                            <input class="form-control" name="kesenian" type="text" id="data_sarana"
                                                value="1" readonly>
                                            <span class="input-group-text">Buah</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="col">
                                <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Balai Pertemuan</h6>
                                    </div>
                                    <div class="user-progress">
                                        <div class="input-group">
                                            <input class="form-control" name="balai" type="text" id="data_sarana"
                                                value="1" readonly>
                                            <span class="input-group-text">Buah</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <li class="d-flex mt-1 mb-1 pb-1 align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Sumur Desa</h6>
                                    </div>
                                    <div class="user-progress">
                                        <div class="input-group">
                                            <input class="form-control" name="sumur-desa" type="text"
                                                id="data_sarana" value="1" readonly>
                                            <span class="input-group-text">Buah</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="col">
                                <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Pasar Desa</h6>
                                    </div>
                                    <div class="user-progress">
                                        <div class="input-group">
                                            <input class="form-control" name="pasar-desa" type="text"
                                                id="data_sarana" value="1" readonly>
                                            <span class="input-group-text">Buah</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <div class="col">
                                <li class="d-flex mb-1 pb-1 align-items-center justify-content-between gap-2">
                                    <div>
                                        <h6 class="mb-0">Lainnya</h6>
                                    </div>
                                    <div class="user-progress">
                                        <div class="input-group">
                                            <input class="form-control" name="lainnya" type="text" id="data_sarana"
                                                value="1" readonly>
                                            <span class="input-group-text">Buah</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3" style="margin-left: 25px">
                        <small class="text-muted"><em>
                                Update : {{ $pendidikan['updated_at'] }}
                            </em></small>
                    </div>
                    <div class="mt-2 mx-4 float-end">
                        <button type="button" form="form_umum" class="btn btn-primary me-2" value="edit"
                            id="edit-sarana" onclick="active('[id=data_sarana]')">Edit</button>
                        <button type="button" class="btn btn-outline-secondary" value="cancel"
                            onclick="nonactive('[id=data_sarana]')" id="cancel-sarana">Cancel</button>
                        <button type="submit" class="btn btn-primary me-2" value="save"
                            onclick="nonactive('[id=data_sarana]')" id="save-sarana">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        function active(idInput) {
            var a = document.querySelectorAll(idInput);
            a.forEach(element => {
                element.removeAttribute("readonly");
            });
        }

        function nonactive(idInput) {
            var a = document.querySelectorAll(idInput);
            a.forEach(element => {
                element.setAttribute("readonly", true)
            });
        }

        $("#cancel-umum, #save-umum, #cancel-pendidikan, #save-pendidikan, #cancel-penduduk, #save-penduduk, #cancel-pekerjaan, #save-pekerjaan, #cancel-sarana, #save-sarana")
            .hide();

        //  Button Umum
        $('#edit-umum').click(function() {
            $(this).hide();
            $('#save-umum, #cancel-umum').show();
        });

        $('#cancel-umum').click(function() {
            $('#edit-umum').show();
            $('#save-umum, #cancel-umum').hide();
        });

        $('#save-umum').click(function() {
            $(this).hide();
            $('#cancel-umum').hide();
            $('#edit-umum').show();
        });

        //  Button Penduduk
        $('#edit-penduduk').click(function() {
            $(this).hide();
            $('#save-penduduk, #cancel-penduduk').show();
        });

        $('#cancel-penduduk').click(function() {
            $('#edit-penduduk').show();
            $('#save-penduduk, #cancel-penduduk').hide();
        });

        $('#save-penduduk').click(function() {
            $(this).hide();
            $('#cancel-penduduk').hide();
            $('#edit-penduduk').show();
        });

        //  Button Pendidik
        $('#edit-pendidikan').click(function() {
            $(this).hide();
            $('#save-pendidikan, #cancel-pendidikan').show();
        });

        $('#cancel-pendidikan').click(function() {
            $('#edit-pendidikan').show();
            $('#save-pendidikan, #cancel-pendidikan').hide();
        });

        $('#save-pendidikan').click(function() {
            $(this).hide();
            $('#cancel-pendidikan').hide();
            $('#edit-pendidikan').show();
        });

        //  Button Pekerjaan
        $('#edit-pekerjaan').click(function() {
            $(this).hide();
            $('#save-pekerjaan, #cancel-pekerjaan').show();
        });

        $('#cancel-pekerjaan').click(function() {
            $('#edit-pekerjaan').show();
            $('#save-pekerjaan, #cancel-pekerjaan').hide();
        });

        $('#save-pekerjaan').click(function() {
            $(this).hide();
            $('#cancel-pekerjaan').hide();
            $('#edit-pekerjaan').show();
        });

        //  Button Sarana
        $('#edit-sarana').click(function() {
            $(this).hide();
            $('#save-sarana, #cancel-sarana').show();
        });

        $('#cancel-sarana').click(function() {
            $('#edit-sarana').show();
            $('#save-sarana, #cancel-sarana').hide();
        });

        $('#save-sarana').click(function() {
            $(this).hide();
            $('#cancel-saranan').hide();
            $('#edit-sarana').show();
        });
    </script>
    <script src="{{ $chart_jk->cdn() }}"></script>
    <script src="{{ $chart_usia->cdn() }}"></script>

    {{ $chart_jk->script() }}
    {{ $chart_usia->script() }}
@endsection
