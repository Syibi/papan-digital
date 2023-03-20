@extends('admin.layout')

@section('container')
    <div class="container-xxl flex-grow-1 my-3">
        <div class="nav-align-top mb-4">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-justified-struktur" aria-controls="navs-justified-struktur"
                        aria-selected="true">
                        <strong>Struktur Organisasi Desa</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-justified-data" aria-controls="navs-justified-data" aria-selected="false">
                        <strong>Data Aparat Desa</strong>
                    </button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="navs-justified-struktur" role="tabpanel">
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
                                    </tr>
                                @endforeach
                            </tbody>
                    </div>
                    </table>
                </div>
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
