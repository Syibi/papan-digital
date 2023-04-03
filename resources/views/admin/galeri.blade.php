@extends('admin.layout')

@section('container')
    <div class="container-xxl flex-grow-1 my-3">
        <div class="nav-align-top mb-2">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-galeri" aria-controls="navs-top-galeri" aria-selected="true">
                        <strong>Galeri</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-tambah" aria-controls="navs-top-tambah" aria-selected="false">
                        <strong>Tambah Dokumentasi</strong>
                    </button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="navs-top-galeri" role="tabpanel">
                    <x-galeri :galeri=$galeri />
                </div>
                <div class="tab-pane fade" id="navs-top-tambah" role="tabpanel">
                    <form action="{{ url('admin/galeri-desa/add') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
                            <div class="col">
                                <div class="form-group mt-3">
                                    <label for="judul" class="form-label">Caption</label>
                                    <input type="text" class="form-control" name="caption" id="caption"
                                        placeholder="Masukkan Judul Slide" aria-describedby="caption">
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

    <!-- Modal -->
    <div class="modal fade" id="modalCenter" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document" style="height: auto">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        style="background-color: #ff3e1d; color:white"></button>
                </div>
                <div class="modal-body" style="padding-top: 0">
                    <div id="carouselExample" class="carousel carousel-dark slide" data-bs-ride="true" style="height:75vh">
                        <div class="carousel-indicators">
                            @foreach ($allGaleri as $key => $item)
                                <button type="button" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"
                                    aria-current="true" aria-label="{{ $key + 1 }}">
                                </button>
                            @endforeach
                        </div>
                        <div class="carousel-inner" style="box-shadow: none; border-radius:0; height:62vh">
                            @foreach ($allGaleri as $key => $item)
                                <div class="carousel-item {{ $key == 1 ? 'active' : '' }}" style="width: 100%;">
                                    @if ($item->tipe == 0)
                                        {{-- Slide Gambar --}}
                                        <img src="{{ asset('upload/galeri/' . $item->file) }}" class="d-block w-100"
                                            alt="..."
                                            style="
                                            object-fit: contain;
                                            min-width: 100%; 
                                            min-height: 100%;
                                            width: auto; 
                                            height: auto; 
                                            box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);">
                                    @else
                                        {{-- Slide Video --}}
                                        <video class="img-fluid" autoplay loop
                                            style="
                                            position: absolute; 
                                            min-width: 100%; 
                                            min-height: 120%;
                                            width: auto; 
                                            height: auto; 
                                            background-size: cover;
                                            box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);">
                                            <source src={{ asset('upload/galeri/' . $item->file) }}
                                                class="d-block w-100 h-100" type="video/mp4" />
                                        </video>
                                    @endif
                                    <div class="carousel-caption d-none d-md-block" style="position: fixed; bottom:90px">
                                        <h4 style="margin-bottom: 0"><strong>{{ $item->caption }}</strong></h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Button Edit Beranda --}}
    <button id="edit-delete" onClick="deleteBtn()" type="button" class="btn btn-lg rounded-pill btn-icon btn-primary"
        style="
                  position: fixed;
                  right: 5%;
                  bottom:5%;
                  display:block;
                  z-index:1000;
                  ">
        <i class='bx bx-trash' style="font-size:1.5rem"></i>
    </button>
    <script>
        let a = document.querySelectorAll('[id = delete-btn]');
        let isEditing = false;
        console.log(a);

        function deleteBtn() {
            a.forEach(element => {
                var delBtn = element.classList;
                delBtn.contains('hidden') ? delBtn.remove('hidden') : delBtn.add(
                    'hidden');

            });
        };
    </script>
@endsection
