@extends('admin.layout')

@section('container')
    <div class="container-xxl flex-grow-1 my-3">
        <div class="nav-align-top mb-4">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @foreach ($kategori as $item)
                @php ($idTab = str_replace(' ', '', $item->kategori))
                    <li class="nav-item">
                        <button onclick="tabsclicked('{{ $idTab }}')" type="button" class="nav-link" role="tab"
                            data-bs-toggle="tab" data-bs-target="#navs-{{ $idTab }}"
                            aria-controls="navs-{{ $idTab }}" aria-selected="false">
                            <strong>{{ $item->kategori }}</strong>
                        </button>
                    </li>
                @endforeach
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-tambah-kategori" aria-controls="navs-tambah-kategori" aria-selected="false">
                        <i class='bx bx-folder-plus' style="font-size: 1.5rem"></i>
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="tabContent">
                <x-proker :kategori=$kategori :proker=$proker :tipe=$tipe />

                <div class="tab-pane fade" id="navs-tambah-kategori" role="tabpanel">
                    <h5>Tambah Kategori Proker</h5>
                    <div>
                        <form action="{{ url('admin/proker-desa/add-kategori') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <label for="kategori" class="form-label">Nama Kategori</label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control" id="kategori" aria-describedby="kategori"
                                        name="kategori">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        Masukkan Nama Kategori Program Kerja "contoh : Bidang Umum, POKJA I".
                                    </div>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary">Tambah Kategori</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive text-nowrap mt-3">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama kategori Proker</th>
                                    {{-- <th>Jumlah Proker</th> --}}
                                    <th>Aksi</th>
                                    {{-- <th>Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @php($no = 1)
                                @foreach ($kategori as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->kategori }}</td>
                                        <td>
                                            <div class="demo-inline-spacing">
                                                <a href="{{ url('admin/proker-desa/' . $item->id . '/delete') }}"
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
            </div>
        </div>

        {{-- Button Tambah Proker --}}
        <button type="button" data-bs-toggle="modal" data-bs-target="#modal"
            class="btn btn-lg rounded-pill btn-icon btn-primary"
            style="
                position: fixed;
                right: 5%;
                bottom:5%;
                display:block;
                z-index:1000;
                ">
            <i class='bx bx-list-plus' style="font-size:1.5rem"></i>
        </button>

        {{-- Modal show add proker --}}
        <div class="modal fade" id="modal" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <form action="{{ url('admin/proker-desa/add-proker') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">Tambah Program Kerja</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="program" class="form-label">Program</label>
                                    <input type="text" name="program" id="program" class="form-control"
                                        placeholder="masukkan nama program">
                                </div>
                                <div class="col mb-3">
                                    <label for="kategori" class="form-label">Kategori</label>
                                    <select class="form-select" id="kategori" aria-label="kategori" name="kategori">
                                        @foreach ($kategori as $item)
                                            <option value="{{ $item->kategori }}">{{ $item->kategori }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <label for="kegiatan" class="form-label">Kegiatan</label>
                                <input type="text" name="kegiatan" id="kegiatan" class="form-control"
                                    placeholder="masukkan detail kegiatan">
                            </div>
                            <div class="col mb-3">
                                <label for="sasaran" class="form-label">Sasaran</label>
                                <input type="text" name="sasaran" id="sasaran" class="form-control"
                                    placeholder="masukkan sasaran program kerja">
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="pelaksanaan" class="form-label">Pelaksanaan</label>
                                    <input type="text" id="pelaksanaan" name="pelaksanaan" class="form-control"
                                        placeholder="masukkan waktu pelaksanaan">
                                </div>
                                <div class="col mb-0">
                                    <label for="sumber_dana" class="form-label">Sumber Dana</label>
                                    <input type="text" id="sumber_dana" name="sumber_dana" class="form-control"
                                        placeholder="masukkan asal sumber dana">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <div class="form-group mt-3">
                                        <label for="dokumentasi" class="form-label">Dokumentasi</label>
                                        <div class="col-md">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="dokumentasi"
                                                    id="inlineRadio1" value="dokumentasi">
                                                <label class="form-check-label" for="inlineRadio1">Ada</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="dokumentasi"
                                                    id="inlineRadio2" value="non-dokumentasi" checked="">
                                                <label class="form-check-label" for="inlineRadio2">Tidak Ada</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-0">
                                    <div class="form-group mt-3">
                                        <label for="file" class="form-label">File Dokumentasi</label>
                                        <input class="form-control" name="file" type="file" id="file"
                                            value="{{ $item->file }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @foreach ($proker as $itemProker)
            @php($idProker = str_replace(' ', '', $itemProker->program))
            <!-- Modal show proker image-->
            <div class="modal fade" id="modalCenter-{{ $idProker }}" tabindex="-1" style="display: none;"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">
                                Dokumentasi
                                Kegiatan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('upload/proker/' . $itemProker->file) }}" class="d-block w-100"
                                alt="..."
                                style="
                                    object-fit: contain;
                                    min-width: 100%; 
                                    min-height: 100%;
                                    width: auto; 
                                    height: auto; 
                                    box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <script type="text/javascript">
        let allTab = Array.from(document.getElementById('tabContent').children);

        function tabsclicked(tabs) {
            var tabName = 'navs-' + tabs
            allTab.forEach(element => {
                var activeTab = element.classList;
                if (element.id == tabName) {
                    activeTab.add('active', 'show');
                } else {
                    activeTab.remove('active', 'show');
                }
            });
            // var activeTab = document.getElementById(tabName)
        }
    </script>
@endsection
