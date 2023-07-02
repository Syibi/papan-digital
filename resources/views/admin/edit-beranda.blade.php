@extends('admin.layout')

@section('container')
    <div class="container-xxl flex-grow-1 my-3">
        @if (session('status'))
            <h6 class="alert alert-success alert-dismissible" role="alert">{{ session('status') }}<button type="button"
                    class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></h6>
        @endif

        <div class="nav-align-top mb-4">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">
                        <strong>Data Slide</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">
                        <strong>Tambah Slide</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-text" aria-controls="navs-top-text" aria-selected="false">
                        <strong>Edit Running Text</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-musik" aria-controls="navs-top-musik" aria-selected="false">
                        <strong>Ganti Musik</strong>
                    </button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
                    <div class="mt-0">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Durasi</th>
                                        <th>Status</th>
                                        <th>Tipe</th>
                                        <th>File</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @php($no = ($slide->currentpage() - 1) * $slide->perpage() + 1)
                                    @foreach ($slide as $item)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td style="padding-left:0;">{{ $item->judul }}</td>
                                            <td style="padding-left:0; padding-right:0">{{ $item->deskripsi }}</td>
                                            <td>{{ $item->durasi }}</td>
                                            @if ($item->status == '1')
                                                <td class="text-success">Aktif</td>
                                            @else
                                                <td class="text-danger">Non Aktif</td>
                                            @endif
                                            <td style="padding-left:0; padding-right:0">
                                                {{ $item->tipe == '0' ? 'Gambar' : ($item->tipe == '1' ? 'Video' : 'Tab') }}
                                            </td>
                                            <td>
                                                <img src="{{ asset('upload/slide/' . $item->file) }}" width="80px"
                                                    height="50px" alt="image">
                                            </td>
                                            <td>
                                                <div class="demo-inline-spacing">
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#edit-slide{{ $item->id }}"
                                                        class="btn btn-icon btn-warning">
                                                        <span class="bx bx-edit-alt"></span>
                                                    </button>
                                                    <a href="{{ url('admin/edit-beranda/' . $item->id . '/delete') }}"
                                                        type="button" class="btn btn-icon btn-danger">
                                                        <span class="bx bx-trash"></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="mt-4 d-flex justify-content-center">
                                {!! $slide->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                    <form action="{{ url('admin/edit-beranda/add') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-0">
                            <div class="col">
                                <div class="form-group mt-3">
                                    <label for="judul" class="form-label">Judul</label>
                                    <input type="text" class="form-control" name="judul" id="judul"
                                        placeholder="Masukkan Judul Slide" aria-describedby="judul">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
                                    <div id="defaultFormControlHelp" class="form-text">
                                        Masukkan Deskripsi Slide, jika tidak ada isi "-".
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="durasi" class="form-label">Durasi</label>
                                    <input type="text" class="form-control" name="durasi" id="durasi"
                                        placeholder="Masukkan Durasi Slide (milisecond)" aria-describedby="durasi">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mt-3">
                                    <label for="gambar" class="form-label">Tipe File</label>
                                    <div class="col-md">
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="radio" name="tipe"
                                                id="inlineRadio1" value="gambar" onchange="active()">
                                            <label class="form-check-label" for="inlineRadio1">Gambar</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tipe"
                                                id="inlineRadio2" value="video" onchange="active()">
                                            <label class="form-check-label" for="inlineRadio2">Video</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tipe"
                                                id="inlineRadio3" value="tab" onchange="disable()">
                                            <label class="form-check-label" for="inlineRadio2">Tab</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-4">
                                    <label for="tab" class="form-label">Pilihan Tab</label>
                                    <select id="tab" class="form-select" aria-label="tab" name="tab" disabled>
                                        <option> - </option>
                                        <option value="profil_desa">Profil Desa</option>
                                        <option value="bidang_umum">Bidang Umum</option>
                                        <option value="data_pendidikan">Data Pendidikan</option>
                                        <option value="data_penduduk">Data Penduduk</option>
                                        <option value="data_pekerjaan">Data Pekerjaan</option>
                                        <option value="data_sarpras">Data Sarana Prasarana</option>
                                        <option value="struktur_desa">Struktur Desa</option>
                                        <option value="data_aparat_desa">Data Aparat Desa</option>
                                        <option value="proker_desa">Program Kerja Desa</option>
                                        <option value="profil_pkk">Profil PKK</option>
                                        <option value="struktur_pkk">Struktur PKK</option>
                                        <option value="data_anggota_pkk">Data Anggota PKK</option>
                                        <option value="proker_pkk">Program Kerja PKK</option>
                                        <option value="papan_data_sekretaris">Papan Data Sekretaris PKK</option>
                                        <option value="papan_data_bendahara">Papan Data Bendahara PKK</option>
                                        <option value="papan_data_pokja1">Papan Data POKJA 1 PKK</option>
                                        <option value="papan_data_pokja2">Papan Data POKJA 2 PKK</option>
                                        <option value="papan_data_pokja3">Papan Data POKJA 3 PKK</option>
                                        <option value="papan_data_pokja4">Papan Data POKJA 4 PKK</option>
                                    </select>
                                </div>
                                <div class="form-group mt-4">
                                    <label for="gambar" class="form-label">Upload File</label>
                                    <input class="form-control" name="file" type="file" id="file" disabled>
                                </div>
                                <div class="form-check form-switch mt-4">
                                    <label class="form-check-label">Aktifkan Slide</label>
                                    <input class="form-check-input" type="checkbox" id="status" checked=""
                                        name="status">
                                </div>
                                <div class="form-group mt-4 pt-4">
                                    <div class="modal-footer">
                                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                            Batal
                                        </button>
                                        <button type="submit" class="btn btn-primary">Tambah Slide</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="navs-top-text" role="tabpanel">
                    <h5>Tambah Running Text</h5>
                    <div>
                        <form action="{{ url('admin/edit-teks/add') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="running_text" class="form-label">Teks</label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control" id="running_text"
                                        aria-describedby="kategori" name="running_text">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        Masukkan Isi Running Text.
                                    </div>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary">Tambah Teks</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive text-nowrap mt-3">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Teks</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @php($no = 1)
                                @foreach ($teks as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->teks }}</td>
                                        <td>
                                            <div class="demo-inline-spacing">
                                                <a href="{{ url('admin/edit-teks/' . $item->id . '/delete') }}"
                                                    type="button" class="btn btn-icon btn-danger"
                                                    style="margin-top: 0 !important">
                                                    <span class="bx bx-trash"></span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-top-musik" role="tabpanel">
                    <form action="{{ url('/admin/edit-musik/add') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="kategori" class="form-label">Upload File</label>
                        <div class="row">
                            <div class="col-6">
                                <input class="form-control" name="file" type="file" id="file">
                                <div id="defaultFormControlHelp" class="form-text">
                                    Upload file musik.
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary">Update Musik</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @php($no = ($slide->currentpage() - 1) * $slide->perpage() + 1)
    @foreach ($slide as $item)
        <!-- Modal Edit Slide -->
        <div class="modal fade" id="edit-slide{{ $item->id }}" tabindex="-1" style="display: none;"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form action="{{ url('admin/edit-beranda/' . $item->id . '/update') }}" method="post"
                    enctype="multipart/form-data" id="editModal_{{ $item->id }}">
                    @csrf
                    @method('PUT');
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modalCenterTitle">Slide ke-{{ $no++ }}</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-1">
                                    <label for="nameWithTitle" class="form-label">Judul</label>
                                    <input type="text" name="judul" id="judul" class="form-control"
                                        value="{{ $item->judul }}">
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="2">{{ $item->deskripsi }}</textarea>
                            </div>
                            <div class="form-group mt-2">
                                <label for="durasi" class="form-label">Durasi</label>
                                <input type="text" class="form-control" name="durasi" id="durasi"
                                    aria-describedby="durasi" value="{{ $item->durasi }}">
                            </div>
                            <div class="row g-3">
                                <div class="col-7 mb-0">
                                    <div class="form-group mt-3">
                                        <label for="gambar" class="form-label">Tipe File</label>
                                        <div class="col-md">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tipe"
                                                    id="inlineRadio1" value="gambar"
                                                    {{ $item->tipe == 0 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="inlineRadio1">Gambar</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tipe"
                                                    id="inlineRadio2" value="video"
                                                    {{ $item->tipe == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="inlineRadio2">Video</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5 mt-5">
                                    <div class="form-check form-switch mt-3">
                                        <label class="form-check-label">Aktifkan Slide</label>
                                        <input class="form-check-input" type="checkbox" id="status" name="status"
                                            {{ $item->status == '1' ? 'checked' : '' }}>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-8 mb-0">
                                    <div class="form-group mt-3">
                                        <label for="gambar" class="form-label">File Gambar</label>
                                        <input class="form-control" name="file" type="file" id="file"
                                            value="{{ $item->file }}">
                                    </div>
                                </div>
                                <div class="col-4 mt-5">
                                    <img src="{{ asset('upload/slide/' . $item->file) }}" width="120px" height="70px"
                                        alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="cancel" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Batal
                            </button>
                            <button type="submit" class="btn btn-primary" form="editModal_{{ $item->id }}">Simpan
                                Perubahan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- Button Edit Beranda --}}
        <a href="/admin/beranda" type="button" class="btn btn-lg rounded-pill btn-icon btn-primary"
            style="
              position: fixed;
              right: 5%;
              bottom:5%;
              display:block;
              z-index:10;
              ">
            <i class='bx bx-play' style="margin-top:6pt; font-size:2rem"></i>
        </a>
    @endforeach
@endsection
<script type="text/javascript">
    function active() {
        var a = document.getElementById('file');
        a.removeAttribute("disabled");
        var b = document.getElementById('tab');
        b.setAttribute("disabled", true)
    }

    function disable() {
        var a = document.getElementById('tab')
        a.removeAttribute("disabled");
        var b = document.getElementById('file');
        b.setAttribute("disabled", true)
    }
</script>
