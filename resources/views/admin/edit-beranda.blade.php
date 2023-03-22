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
                                        <th>Status</th>
                                        <th>Tipe</th>
                                        <th>File</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @php($no = 1)
                                    @foreach ($slide as $item)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->judul }}</td>
                                            <td>{{ $item->deskripsi }}</td>
                                            <td>{{ $item->status == '1' ? 'Aktif' : 'Non Aktif' }}</td>
                                            <td>{{ $item->tipe == '0' ? 'Gambar' : 'Video' }}</td>
                                            <td>
                                                <img src="{{ asset('upload/slide/' . $item->file) }}" width="120px"
                                                    height="70px" alt="image">
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
                            </div>
                            <div class="col">
                                <div class="form-group mt-3">
                                    <label for="gambar" class="form-label">Tipe File</label>
                                    <div class="col-md">
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="radio" name="tipe" id="inlineRadio1"
                                                value="gambar">
                                            <label class="form-check-label" for="inlineRadio1">Gambar</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tipe" id="inlineRadio2"
                                                value="video">
                                            <label class="form-check-label" for="inlineRadio2">Video</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="gambar" class="form-label">Upload File</label>
                                    <input class="form-control" name="file" type="file" id="file">
                                </div>
                                <div class="form-check form-switch mt-3">
                                    <label class="form-check-label">Aktifkan Slide</label>
                                    <input class="form-check-input" type="checkbox" id="status" checked=""
                                        name="status">
                                </div>
                                <div class="form-group mt-3 pt-4">
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
            </div>
        </div>
    </div>

    @php($no = 1)
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
                                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3">{{ $item->deskripsi }}</textarea>
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
