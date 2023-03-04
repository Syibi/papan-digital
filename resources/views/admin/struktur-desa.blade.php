@extends('admin.layout')

@section('container')
    <div class="container-xxl flex-grow-1 my-3">
        <div class="nav-align-top mb-4">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-justified-struktur" aria-controls="navs-justified-struktur"
                        aria-selected="true">
                        Struktur Organisasi Desa
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-justified-data" aria-controls="navs-justified-data" aria-selected="false">
                        Data Aparat Desa
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-justified-tambah" aria-controls="navs-justified-tambah" aria-selected="false">
                        Tambah Aparat Desa
                    </button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="navs-justified-struktur" role="tabpanel">
                    <div id="chart_div"></div>
                </div>
                <div class="tab-pane fade" id="navs-justified-data" role="tabpanel">
                    <p>
                        Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice
                        cream. Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream
                        cheesecake fruitcake.
                    </p>
                    <p class="mb-0">
                        Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah
                        cotton candy liquorice caramels.
                    </p>
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
                                                    data-bs-target="#edit-slide{{ $item->id }}"
                                                    class="btn btn-icon btn-warning">
                                                    <span class="bx bx-edit-alt"></span>
                                                </button>
                                                <a href="{{ url('struktur-desa/' . $item->id . '/delete') }}" type="button"
                                                    class="btn btn-icon btn-danger">
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
                <div class="tab-pane fade" id="navs-justified-tambah" role="tabpanel">
                    <form action="{{ url('/struktur-desa/add') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
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
                                <div class="form-group mt-3 pt-4">
                                    <div class="modal-footer">
                                        <button type="cancel" class="btn btn-outline-secondary" data-bs-dismiss="modal">
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
    <script type="text/javascript">
        google.charts.load('current', {
            packages: ["orgchart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Nama');
            data.addColumn('string', 'Atasan');
            data.addColumn('string', 'ToolTip');

            // For each orgchart box, provide the name, manager, and tooltip to show.
            // data.addRows([
            //     [{
            //             'v': 'Mike',
            //             'f': 'Mike<div style="color:red; font-style:italic">President</div>'
            //         },
            //         '', 'The President'
            //     ],
            //     [{
            //             'v': 'Jim',
            //             'f': 'Jim<div style="color:red; font-style:italic">Vice President</div>'
            //         },
            //         'Mike', 'VP'
            //     ],
            //     ['Alice', 'Mike', ''],
            //     ['Bob', 'Jim', 'Bob Sponge'],
            //     ['Carol', 'Bob', ''],
            //     [{
            //             'v': 'Syifaul',
            //             'f': 'Syifaul<button onclick=test() style="color:red; font-style:italic">Vice President</button>'
            //         },
            //         'Jim', 'VP'
            //     ],
            // ]);

            let desa = {!! json_encode($grafik) !!};
            data.addRows(desa);


            // Create the chart.
            var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
            // Draw the chart, setting the allowHtml option to true for the tooltips.
            chart.draw(data, {
                'allowHtml': true
            });
        }

        function test() {
            console.log("hanya test");
        }
    </script>
@endsection
