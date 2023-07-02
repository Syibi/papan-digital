@extends('admin.layout')

@section('container')
    <div class="container-xxl flex-grow-1 my-3">
        <div class="nav-align-top mb-2">
            <ul class="nav nav-pills mb-2 nav-fill gap-2" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#sekretaris" aria-controls="sekretaris" aria-selected="true">
                        <strong>Sekretaris</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#bendahara"
                        aria-controls="bendahara" aria-selected="false">
                        <strong>Bendahara</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#pokja1"
                        aria-controls="pokja1" aria-selected="false">
                        <strong>POKJA I</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#pokja2"
                        aria-controls="pokja2" aria-selected="true">
                        <strong>POKJA II</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#pokja3"
                        aria-controls="pokja3" aria-selected="false">
                        <strong>POKJA III</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#pokja4"
                        aria-controls="pokja4" aria-selected="false">
                        <strong>POKJA IV</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-tambah-kategori" aria-controls="navs-tambah-kategori" aria-selected="false">
                        <i class='bx bx-folder-plus' style="font-size: 1.5rem"></i>
                    </button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" style="height:72vh" id="sekretaris" role="tabpanel">
                    <div class="nav-align-bottom mb-2">
                        @php($id = 'Sekretaris')
                        <ul class="nav nav-pills mb-3" role="tablist">
                            @php($firstlink = true)
                            @foreach ($papan_data as $key => $item)
                                @if ($item->kategori == $id)
                                    <li class="nav-item">
                                        <button onclick="tabsclicked('{{ $item->nama_papan }}')" type="button"
                                            class="nav-link {{ $firstlink == true ? 'active' : '' }}" role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-{{ $item->nama_papan }}"
                                            aria-controls="navs-{{ $item->nama_papan }}"
                                            aria-selected="{{ $firstlink == true ? 'true' : '' }}">
                                            <strong>{{ $item->nama_papan }}</strong>
                                            {{ $firstlink = false }}
                                        </button>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="tab-content mb-3" id="tabContent" style="padding: 0">
                            @php($first = true)
                            @foreach ($papan_data as $item)
                                @php($idPapan = str_replace(' ', '', $item->nama_papan))
                                @if ($item->kategori == $id)
                                    <div class="tab-pane fade {{ $first == true ? 'active show' : '' }}"
                                        id="navs-{{ $item->nama_papan }}" role="tabpanel" style="height:65vh">
                                        {{ $first = false }}
                                        <img class="card-img" src="{{ asset('upload/papan_data/' . $item->file) }}"
                                            alt="Card image" style="height: 65vh">
                                        <button type="button" data-bs-toggle="modal"
                                            data-bs-target="#modal-{{ $idPapan }}"
                                            class="btn btn-lg rounded-pill btn-icon btn-primary"
                                            style="
                                                    position: fixed;
                                                    right: 5%;
                                                    bottom:7%;
                                                    display:block;
                                                    z-index:1000;
                                                    ">
                                            <i class="bx bxs-pencil" style="font-size:1.5rem"></i>
                                        </button>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" style="height:72vh" id="bendahara" role="tabpanel">
                    <div class="nav-align-bottom mb-2">
                        @php($id = 'Bendahara')
                        <ul class="nav nav-pills mb-3" role="tablist">
                            @php($firstlink = true)
                            @foreach ($papan_data as $key => $item)
                                @if ($item->kategori == $id)
                                    <li class="nav-item">
                                        <button onclick="tabsclicked('{{ $item->nama_papan }}')" type="button"
                                            class="nav-link {{ $firstlink == true ? 'active' : '' }}" role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-{{ $item->nama_papan }}"
                                            aria-controls="navs-{{ $item->nama_papan }}"
                                            aria-selected="{{ $firstlink == true ? 'true' : '' }}">
                                            <strong>{{ $item->nama_papan }}</strong>
                                            {{ $firstlink = false }}
                                        </button>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="tab-content mb-3" id="tabContent" style="padding: 0">
                            @php($first = true)
                            @foreach ($papan_data as $item)
                                @php($idPapan = str_replace(' ', '', $item->nama_papan))
                                @if ($item->kategori == $id)
                                    <div class="tab-pane fade {{ $first == true ? 'active show' : '' }}"
                                        id="navs-{{ $item->nama_papan }}" role="tabpanel" style="height:65vh">
                                        {{ $first = false }}
                                        <img class="card-img" src="{{ asset('upload/papan_data/' . $item->file) }}"
                                            alt="Card image" style="height: 65vh">
                                        <button type="button" data-bs-toggle="modal"
                                            data-bs-target="#modal-{{ $idPapan }}"
                                            class="btn btn-lg rounded-pill btn-icon btn-primary"
                                            style="
                                                    position: fixed;
                                                    right: 5%;
                                                    bottom:7%;
                                                    display:block;
                                                    z-index:1000;
                                                    ">
                                            <i class="bx bxs-pencil" style="font-size:1.5rem"></i>
                                        </button>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pokja1" style="height:72vh" role="tabpanel">
                    <div class="nav-align-bottom mb-2">
                        @php($id = 'pokja1')
                        <ul class="nav nav-pills mb-3" role="tablist">
                            @php($firstlink = true)
                            @foreach ($papan_data as $key => $item)
                                @if ($item->kategori == $id)
                                    <li class="nav-item">
                                        <button onclick="tabsclicked('{{ $item->nama_papan }}')" type="button"
                                            class="nav-link {{ $firstlink == true ? 'active' : '' }}" role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-{{ $item->nama_papan }}"
                                            aria-controls="navs-{{ $item->nama_papan }}"
                                            aria-selected="{{ $firstlink == true ? 'true' : '' }}">
                                            <strong>{{ $item->nama_papan }}</strong>
                                            {{ $firstlink = false }}
                                        </button>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="tab-content mb-3" id="tabContent" style="padding: 0">
                            @php($first = true)
                            @foreach ($papan_data as $item)
                                @php($idPapan = str_replace(' ', '', $item->nama_papan))
                                @if ($item->kategori == $id)
                                    <div class="tab-pane fade {{ $first == true ? 'active show' : '' }}"
                                        id="navs-{{ $item->nama_papan }}" role="tabpanel" style="height:65vh">
                                        {{ $first = false }}
                                        <img class="card-img" src="{{ asset('upload/papan_data/' . $item->file) }}"
                                            alt="Card image" style="height: 65vh">
                                        <button type="button" data-bs-toggle="modal"
                                            data-bs-target="#modal-{{ $idPapan }}"
                                            class="btn btn-lg rounded-pill btn-icon btn-primary"
                                            style="
                                                    position: fixed;
                                                    right: 5%;
                                                    bottom:7%;
                                                    display:block;
                                                    z-index:1000;
                                                    ">
                                            <i class="bx bxs-pencil" style="font-size:1.5rem"></i>
                                        </button>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pokja2" style="height:72vh" role="tabpanel">
                    <div class="nav-align-bottom mb-2">
                        @php($id = 'pokja2')
                        <ul class="nav nav-pills mb-3" role="tablist">
                            @php($firstlink = true)
                            @foreach ($papan_data as $key => $item)
                                @if ($item->kategori == $id)
                                    <li class="nav-item">
                                        <button onclick="tabsclicked('{{ $item->nama_papan }}')" type="button"
                                            class="nav-link {{ $firstlink == true ? 'active' : '' }}" role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-{{ $item->nama_papan }}"
                                            aria-controls="navs-{{ $item->nama_papan }}"
                                            aria-selected="{{ $firstlink == true ? 'true' : '' }}">
                                            <strong>{{ $item->nama_papan }}</strong>
                                            {{ $firstlink = false }}
                                        </button>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="tab-content mb-3" id="tabContent" style="padding: 0">
                            @php($first = true)
                            @foreach ($papan_data as $item)
                                @php($idPapan = str_replace(' ', '', $item->nama_papan))
                                @if ($item->kategori == $id)
                                    <div class="tab-pane fade {{ $first == true ? 'active show' : '' }}"
                                        id="navs-{{ $item->nama_papan }}" role="tabpanel" style="height:65vh">
                                        {{ $first = false }}
                                        <img class="card-img" src="{{ asset('upload/papan_data/' . $item->file) }}"
                                            alt="Card image" style="height: 65vh">
                                        <button type="button" data-bs-toggle="modal"
                                            data-bs-target="#modal-{{ $idPapan }}"
                                            class="btn btn-lg rounded-pill btn-icon btn-primary"
                                            style="
                                                    position: fixed;
                                                    right: 5%;
                                                    bottom:7%;
                                                    display:block;
                                                    z-index:1000;
                                                    ">
                                            <i class="bx bxs-pencil" style="font-size:1.5rem"></i>
                                        </button>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pokja3" style="height:72vh" role="tabpanel">
                    <div class="nav-align-bottom mb-2">
                        @php($id = 'pokja3')
                        <ul class="nav nav-pills mb-3" role="tablist">
                            @php($firstlink = true)
                            @foreach ($papan_data as $key => $item)
                                @if ($item->kategori == $id)
                                    <li class="nav-item">
                                        <button onclick="tabsclicked('{{ $item->nama_papan }}')" type="button"
                                            class="nav-link {{ $firstlink == true ? 'active' : '' }}" role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-{{ $item->nama_papan }}"
                                            aria-controls="navs-{{ $item->nama_papan }}"
                                            aria-selected="{{ $firstlink == true ? 'true' : '' }}">
                                            <strong>{{ $item->nama_papan }}</strong>
                                            {{ $firstlink = false }}
                                        </button>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="tab-content mb-3" id="tabContent" style="padding: 0">
                            @php($first = true)
                            @foreach ($papan_data as $item)
                                @php($idPapan = str_replace(' ', '', $item->nama_papan))
                                @if ($item->kategori == $id)
                                    <div class="tab-pane fade {{ $first == true ? 'active show' : '' }}"
                                        id="navs-{{ $item->nama_papan }}" role="tabpanel" style="height:65vh">
                                        {{ $first = false }}
                                        <img class="card-img" src="{{ asset('upload/papan_data/' . $item->file) }}"
                                            alt="Card image" style="height: 65vh">
                                        <button type="button" data-bs-toggle="modal"
                                            data-bs-target="#modal-{{ $idPapan }}"
                                            class="btn btn-lg rounded-pill btn-icon btn-primary"
                                            style="
                                                    position: fixed;
                                                    right: 5%;
                                                    bottom:7%;
                                                    display:block;
                                                    z-index:1000;
                                                    ">
                                            <i class="bx bxs-pencil" style="font-size:1.5rem"></i>
                                        </button>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pokja4" style="height:72vh" role="tabpanel">
                    <div class="nav-align-bottom mb-2">
                        @php($id = 'pokja4')
                        <ul class="nav nav-pills mb-3" role="tablist">
                            @php($firstlink = true)
                            @foreach ($papan_data as $key => $item)
                                @if ($item->kategori == $id)
                                    <li class="nav-item">
                                        <button onclick="tabsclicked('{{ $item->nama_papan }}')" type="button"
                                            class="nav-link {{ $firstlink == true ? 'active' : '' }}" role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-{{ $item->nama_papan }}"
                                            aria-controls="navs-{{ $item->nama_papan }}"
                                            aria-selected="{{ $firstlink == true ? 'true' : '' }}">
                                            <strong>{{ $item->nama_papan }}</strong>
                                            {{ $firstlink = false }}
                                        </button>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="tab-content mb-3" id="tabContent" style="padding: 0">
                            @php($first = true)
                            @foreach ($papan_data as $item)
                                @php($idPapan = str_replace(' ', '', $item->nama_papan))
                                @if ($item->kategori == $id)
                                    <div class="tab-pane fade {{ $first == true ? 'active show' : '' }}"
                                        id="navs-{{ $item->nama_papan }}" role="tabpanel" style="height:65vh">
                                        {{ $first = false }}
                                        <img class="card-img" src="{{ asset('upload/papan_data/' . $item->file) }}"
                                            alt="Card image" style="height: 65vh">
                                        <button type="button" data-bs-toggle="modal"
                                            data-bs-target="#modal-{{ $idPapan }}"
                                            class="btn btn-lg rounded-pill btn-icon btn-primary"
                                            style="
                                                    position: fixed;
                                                    right: 5%;
                                                    bottom:7%;
                                                    display:block;
                                                    z-index:1000;
                                                    ">
                                            <i class="bx bxs-pencil" style="font-size:1.5rem"></i>
                                        </button>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-tambah-kategori" role="tabpanel">
                    <h5>Tambah Kategori Proker</h5>
                    <div>
                        <form action="{{ url('admin/papan-data/add-papan') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-4 mb-3">
                                    <label for="nama_papan" class="form-label">Nama Papan Data</label>
                                    <input type="text" class="form-control" id="nama_papan"
                                        aria-describedby="nama_papan" name="nama_papan">
                                </div>
                                <div class="col-4 mb-3">
                                    <label for="kategori" class="form-label">Kategori</label>
                                    <select id="kategori" class="form-select" aria-describedby="kategori"
                                        name="kategori">
                                        <option>-</option>
                                        <option value="Sekretaris">Sekretaris</option>
                                        <option value="Bendahara">Bendahara</option>
                                        <option value="pokja1">pokja1</option>
                                        <option value="pokja2">pokja2</option>
                                        <option value="pokja3">pokja3</option>
                                        <option value="pokja4">pokja4</option>
                                    </select>
                                </div>
                                <div class="col-4 mb-3">
                                    <label for="file" class="form-label">Upload Data</label>
                                    <input class="form-control" type="file" id="file" aria-describedby="file"
                                        name="file">
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary">Tambah Kategori</button>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive text-nowrap mt-3">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Papan Data</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @php($no = 1)
                                @foreach ($papan_data as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->nama_papan }}</td>
                                        <td>{{ $item->kategori }}</td>
                                        <td>
                                            <div class="demo-inline-spacing">
                                                <a href="{{ url('admin/papan-data/' . $item->id . '/delete') }}"
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
            @foreach ($papan_data as $item)
                @php($idPapan = str_replace(' ', '', $item->nama_papan))
                <!-- Modal show proker image-->
                <div class="modal fade" id="modal-{{ $idPapan }}" tabindex="-1" style="display: none;"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form action="{{ url('admin/papan-data/' . $item->id . '/update') }}" method="post"
                                enctype="multipart/form-data" id="editModal_{{ $item->id }}">
                                @csrf
                                @method('PUT');
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalCenterTitle">{{ $item->nama_papan }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nama_papan" class="form-label">Nama Papan</label>
                                            <input type="text" name="nama_papan" id="nama_papan" class="form-control"
                                                value="{{ $item->nama_papan }}">
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="kategori" class="form-label">Kategori</label>
                                            <input type="text" name="kategori" id="kategori" class="form-control"
                                                value="{{ $item->kategori }}" readonly>
                                        </div>
                                        <div class="col mb-0">
                                            <label for="file" class="form-label">Upload Data</label>
                                            <input class="form-control" type="file" id="file"
                                                aria-describedby="file" name="file">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="cancel" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Batal
                                    </button>
                                    <button form="editModal_{{ $item->id }}" type="submit"
                                        class="btn btn-primary">Simpan Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
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
        }
    </script>
@endsection
