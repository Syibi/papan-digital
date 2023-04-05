@extends('admin.layout')

@section('container')
    <div class="container-xxl flex-grow-1 my-3">
        <div class="nav-align-top mb-4">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-justified-profil" aria-controls="navs-justified-profil" aria-selected="true">
                        <strong>Profil PKK</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-justified-struktur" aria-controls="navs-justified-struktur"
                        aria-selected="false">
                        <strong>Struktur Organisasi PKK</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-justified-data" aria-controls="navs-justified-data" aria-selected="false">
                        <strong>Data Anggota PKK</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-justified-tambah" aria-controls="navs-justified-tambah" aria-selected="false">
                        <strong>Tambah Anggota PKK</strong>
                    </button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="navs-justified-profil" role="tabpanel">
                    <form action="{{ url('/admin/profil-pkk/add') }}" method="post" enctype="multipart/form-data"
                        name="form_pkk">
                        @csrf
                        {{-- @method('PUT') --}}
                        <x-profilPkk :profil=$profil />
                        <div class="mt-4 mx-4 float-end">
                            <button type="button" form="form_pkk" class="btn btn-primary me-2" value="edit"
                                id="edit-pkk" onclick="active('[id=data_pkk]')">Edit</button>
                            <button type="button" class="btn btn-outline-secondary" value="cancel"
                                onclick="nonactive('[id=data_pkk]')" id="cancel-pkk">Cancel</button>
                            <button type="submit" class="btn btn-primary me-2" value="save"
                                onclick="nonactive('[id=data_pkk]')" id="save-pkk">Save Changes</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="navs-justified-struktur" role="tabpanel">
                    <div id="chart_div"></div>
                </div>
                <div class="tab-pane fade" id="navs-justified-data" role="tabpanel">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Penanggung Jawab</th>
                                    <th>Link</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @php($no = 1)
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->jabatan }}</td>
                                        <td>{{ $item->atasan }}</td>
                                        <td>{{ $item->link }}</td>
                                        <td>
                                            <div class="demo-inline-spacing">
                                                <button type="button" data-bs-toggle="modal"
                                                    data-bs-target="#edit-profil{{ $item->id }}"
                                                    class="btn btn-icon btn-warning">
                                                    <span class="bx bx-edit-alt"></span>
                                                </button>
                                                <a href="{{ url('admin/struktur-pkk/' . $item->id . '/delete') }}"
                                                    type="button" class="btn btn-icon btn-danger">
                                                    <span class="bx bx-trash"></span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </div>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="navs-justified-tambah" role="tabpanel">
                <form action="{{ url('admin/struktur-pkk/add') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-1">
                        <div class="col">
                            <div class="form-group mt-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama"
                                    placeholder="Masukkan Nama" aria-describedby="nama">
                            </div>
                            <div class="form-group mt-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" class="form-control" name="jabatan" id="jabatan"
                                    placeholder="Masukkan Jabatan" aria-describedby="jabatan">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group mt-3">
                                <label for="atasan" class="form-label">Penanggung Jawab</label>
                                <select id="atasan" class="form-select" name="atasan">
                                    <option value="-"> </option>
                                    @foreach ($sorted as $item)
                                        <option value="{{ $item }}">{{ $item }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="link" class="form-label">link</label>
                                <input type="text" class="form-control" name="link" id="link"
                                    placeholder="Masukkan link" aria-describedby="link">
                            </div>
                            <div class="form-group mt-3">
                                <label for="gambar" class="form-label">File Gambar</label>
                                <input class="form-control" name="file" type="file" id="file">
                            </div>
                            <div class="form-group mt-3 pt-4">
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-outline-secondary">
                                        Batal
                                    </button>
                                    <button type="submit" class="btn btn-primary">Tambah Data</button>
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
    @foreach ($data as $item)
        <!-- Modal Edit Slide -->
        <div class="modal fade" id="edit-profil{{ $item->id }}" tabindex="-1" style="display: none;"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form action="{{ url('admin/struktur-pkk/' . $item->id . '/update') }}" method="post"
                    enctype="multipart/form-data" id="editModal_{{ $item->id }}">
                    @csrf
                    @method('PUT');
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modalCenterTitle">Profil ke-{{ $no++ }}</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control"
                                        value="{{ $item->nama }}">
                                </div>
                            </div>
                            <div class="row g-2 mb-2">
                                <div class="col mb-0">
                                    <label for="nama" class="form-label">Jabatan</label>
                                    <input type="text" name="jabatan" id="jabatan" class="form-control"
                                        value="{{ $item->jabatan }}">
                                </div>
                                <div class="col mb-0">
                                    <label for="nama" class="form-label">Penanggung Jawab</label>
                                    <input type="text" name="atasan" id="atasan" class="form-control"
                                        value="{{ $item->atasan }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nama" class="form-label">Link</label>
                                    <input type="text" name="link" id="link" class="form-control"
                                        value="{{ $item->link }}">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="gambar" class="form-label">File Gambar</label>
                                <input class="form-control" name="file" type="file" id="file"
                                    value="{{ $item->file }}">
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
    @endforeach
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
        $("#cancel-pkk, #save-pkk")
            .hide();

        //  Button Pkk
        $('#edit-pkk').click(function() {
            $(this).hide();
            $('#save-pkk, #cancel-pkk').show();
        });

        $('#cancel-pkk').click(function() {
            $('#edit-pkk').show();
            $('#save-pkk, #cancel-pkk').hide();
        });

        $('#save-pkk').click(function() {
            $(this).hide();
            $('#cancel-pkk').hide();
            $('#edit-pkk').show();
        });

        // Function organizational chart Google API
        google.charts.load('current', {
            packages: ["orgchart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Nama');
            data.addColumn('string', 'Atasan');
            data.addColumn('string', 'ToolTip');
            let desa = {!! json_encode($grafik) !!};
            data.addRows(desa);
            // Create the chart.
            var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
            // Draw the chart, setting the allowHtml option to true for the tooltips.
            chart.draw(data, {
                'allowHtml': true,
                'allowCollapse': true
            });
        }
    </script>
@endsection
