<div>
    <div class="card px-2" style=" height: 86vh; overflow:hidden">
        <div class="row px-1" style="height: 100%;">
            <div id="tabContent" class="tab-content" style="height: 94%; overflow:hidden; padding:0; border-radius: 0">
                {{-- Tab HomePage --}}
                <div class="tab-pane fade active show" id="welcome" role="tabpanel" style="height:100%;">
                    <video id="videoBg" autoplay loop muted
                        style="  
                            margin:0; display: block; min-height:100%; min-width:100%; overflow:hidden">
                        <source src="/upload/slide/slide2.mp4" type="video/mp4">
                    </video>
                    <div style="position:absolute; top:0; width:100%">
                        <div class="row"
                            style="background-image:url({{ asset('assets/img/backgrounds/bg-welcome.png') }}); height:81vh; background-size:cover;">
                            <div class="col-6">
                                <img src="{{ asset('assets/img/backgrounds/tag-welcome.png') }}" class="d-block w-100"
                                    alt="..."
                                    style="object-fit: contain;
                                        height: 60vh;
                                        margin-top: 12%;">
                            </div>
                            <div class="col-6">
                                <img src="{{ asset('assets/img/backgrounds/deco-welcome.png') }}" class="d-block w-100"
                                    alt="..."
                                    style="object-fit: contain;
                                        height:53vh;
                                        margin-top:22%">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Tab Data --}}
                @foreach ($slide as $key => $item)
                    @if ($item->tipe == 2)
                        <div class="tab-pane fade" id="tab_{{ $item->file }}" role="tabpanel">
                            @switch($item->file)
                                @case('profil_desa')
                                    <div class="singleslide"
                                        style="background-image: url({{ asset('assets/img/backgrounds/bg-singleslide.png') }});height:94%; width:100%; background-size:cover; position:absolute; top:0; padding-top:20px">
                                        <div class="row mb-3">
                                            <div class="col-md-5 mx-auto d-flex justify-content-center align-content-center"
                                                style="background-color: #24293D; border-radius:10px">
                                                <h4 style="margin-bottom: 10px; margin-top:10px; color:white"><strong>Profil
                                                        Desa TIkusan</strong></h4>
                                            </div>
                                        </div>
                                        <x-Profil :profil=$profil />
                                    </div>
                                @break

                                @case('bidang_umum')
                                    <div class="singleslide"
                                        style="background-image: url({{ asset('assets/img/backgrounds/bg-singleslide.png') }});height:94%; width:100%; background-size:cover; position:absolute; top:0; padding:30px 30px 30px 30px">
                                        <div class="col-md-5 mb-5 mx-auto d-flex justify-content-center align-content-center"
                                            style="background-color: #24293D; border-radius:10px">
                                            <h4 style="margin-bottom: 10px; margin-top:10px; color:white"><strong>Data Bidang
                                                    Umum</strong></h4>
                                        </div>
                                        <x-slideBidangUmum :umum=$umum />
                                    </div>
                                @break

                                @case('data_pendidikan')
                                    <div class="singleslide"
                                        style="background-image: url({{ asset('assets/img/backgrounds/bg-singleslide.png') }});height:94%; width:100%; background-size:cover; position:absolute; top:0; padding:30px 30px 30px 30px">
                                        <div class="col-md-5 mb-4 mx-auto d-flex justify-content-center align-content-center"
                                            style="background-color: #24293D; border-radius:10px">
                                            <h4 style="margin-bottom: 10px; margin-top:10px; color:white"><strong>Data
                                                    Pendidikan</strong></h4>
                                        </div>
                                        <x-slideDataPendidikan :pendidikan=$pendidikan />
                                    </div>
                                @break

                                @case('data_penduduk')
                                    <div class="singleslide"
                                        style="background-image: url({{ asset('assets/img/backgrounds/bg-singleslide.png') }});height:94%; width:100%; background-size:cover; position:absolute; top:0; padding:30px 30px 30px 30px">
                                        <div class="col-md-6 mb-4 mx-auto d-flex justify-content-center align-content-center"
                                            style="background-color: #24293D; border-radius:10px">
                                            <h4 style="margin-bottom: 10px; margin-top:10px; color:white"><strong>Data
                                                    Penduduk</strong></h4>
                                        </div>
                                        <x-slideDataPenduduk :penduduk=$penduduk :chartjk=$chartjk :chartusia=$chartusia />
                                    </div>
                                @break

                                @case('data_pekerjaan')
                                    <div class="singleslide"
                                        style="background-image: url({{ asset('assets/img/backgrounds/bg-singleslide.png') }});height:94%; width:100%; background-size:cover; position:absolute; top:0; padding:30px 30px 30px 30px">
                                        <div class="col-md-5 mb-4 mx-auto d-flex justify-content-center align-content-center"
                                            style="background-color: #24293D; border-radius:10px">
                                            <h4 style="margin-bottom: 10px; margin-top:10px; color:white"><strong>Data
                                                    Pekerjaan</strong></h4>
                                        </div>
                                        <x-slideDataPekerjaan :pekerjaan=$pekerjaan />
                                    </div>
                                @break

                                @case('data_sarpras')
                                    <div class="singleslide"
                                        style="background-image: url({{ asset('assets/img/backgrounds/bg-singleslide.png') }});height:94%; width:100%; background-size:cover; position:absolute; top:0; padding:30px 30px 30px 30px">
                                        <div class="col-md-5 mx-auto d-flex justify-content-center align-content-center"
                                            style="background-color: #24293D; border-radius:10px">
                                            <h4 style="margin-bottom: 10px; margin-top:10px; color:white"><strong>Data Sarana
                                                    Prasarana</strong></h4>
                                        </div>
                                        <x-slideDataSarpras :sarpras=$sarpras />
                                    </div>
                                @break

                                @case('struktur_desa')
                                    <div class="singleslide"
                                        style="background-image: url({{ asset('assets/img/backgrounds/bg-singleslide.png') }});height:94%; width:100%; background-size:cover; position:absolute; top:0; padding:20px 30px 30px 30px">
                                        <div class="row">
                                            <div class="col-md-5 mx-auto d-flex justify-content-center align-content-center"
                                                style="background-color: #24293D; border-radius:10px">
                                                <h4 style="margin-bottom: 10px; margin-top:10px; color:white"><strong>Struktur
                                                        Organisasi Desa Tikusan</strong></h4>
                                            </div>
                                        </div>
                                        <div class="mt-3" id="chart_div_desa"></div>
                                    </div>
                                @break

                                @case('proker_desa')
                                    <div class="singleslide"
                                        style="background-image: url({{ asset('assets/img/backgrounds/bg-singleslide.png') }});height:94%; width:100%; background-size:cover; position:absolute; top:0; padding:30px 30px 30px 30px">
                                        <div class="col-md-6 mb-5 mx-auto d-flex justify-content-center align-content-center"
                                            style="background-color: #24293D; border-radius:10px">
                                            <h4 style="margin-bottom: 10px; margin-top:10px; color:white"><strong>Program Kerja
                                                    Desa Tikusan</strong></h4>
                                        </div>
                                        <x-slideProkerDesa :kategoriDesa=$kategoriDesa :prokerDesa=$prokerDesa />
                                    </div>
                                @break

                                @case('profil_pkk')
                                    <div class="singleslide"
                                        style="background-image: url({{ asset('assets/img/backgrounds/bg-singleslide.png') }});height:94%; width:100%; background-size:cover; position:absolute; top:0; padding:30px 30px 30px 30px">
                                        <div class="col-md-6 mx-auto d-flex justify-content-center align-content-center"
                                            style="background-color: #24293D; border-radius:10px">
                                            <h4 style="margin-bottom: 10px; margin-top:10px; color:white"><strong>Profil PKK
                                                    Desa Tikusan</strong></h4>
                                        </div>
                                        <x-profilPkk :profilPkk=$profilPkk />
                                    </div>
                                @break

                                @case('struktur_pkk')
                                    <div class="singleslide"
                                        style="background-image: url({{ asset('assets/img/backgrounds/bg-singleslide.png') }});height:94%; width:100%; background-size:cover; position:absolute; top:0; padding:20px 30px 30px 30px">
                                        <div class="row">
                                            <div id="carouselDesa" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner" style="box-shadow: none; border-radius:0; ">
                                                    <div class="carousel-item active" style="width: 100%;"
                                                        data-bs-interval="7000">
                                                        <div class="col-md-6 mx-auto d-flex justify-content-center align-content-center"
                                                            style="background-color: #24293D; border-radius:10px">
                                                            <h4 style="margin-bottom: 10px; margin-top:10px; color:white">
                                                                <strong>Struktur Organisasi PKK Desa Tikusan</strong><br /><span
                                                                    style="display:flex; justify-content:center"><small>Bidang
                                                                        Umum</small></span>
                                                            </h4>
                                                        </div>
                                                        <div class="mt-3" id="chart_div_pkk1"></div>
                                                    </div>
                                                    <div class="carousel-item" style="width: 100%;"
                                                        data-bs-interval="7000">
                                                        <div class="col-md-6 mx-auto d-flex justify-content-center align-content-center"
                                                            style="background-color: #24293D; border-radius:10px">
                                                            <h4
                                                                style="margin-bottom: 10px; margin-top:10px; color:white">
                                                                <strong>Struktur Organisasi PKK Desa
                                                                    Tikusan</strong><br /><span
                                                                    style="display:flex; justify-content:center"><small>POKJA
                                                                        I</small></span>
                                                            </h4>
                                                        </div>
                                                        <div class="mt-3" id="chart_div_pkk2"></div>
                                                    </div>
                                                    <div class="carousel-item" style="width: 100%;"
                                                        data-bs-interval="7000">
                                                        <div class="col-md-6 mx-auto d-flex justify-content-center align-content-center"
                                                            style="background-color: #24293D; border-radius:10px">
                                                            <h4
                                                                style="margin-bottom: 10px; margin-top:10px; color:white; justify-content:center">
                                                                <strong>Struktur Organisasi PKK Desa
                                                                    Tikusan</strong><br /><span
                                                                    style="display:flex; justify-content:center"><small>POKJA
                                                                        II</small></span>
                                                            </h4>
                                                        </div>
                                                        <div class="mt-3" id="chart_div_pkk3"></div>
                                                    </div>
                                                    <div class="carousel-item" style="width: 100%;"
                                                        data-bs-interval="7000">
                                                        <div class="col-md-6 mx-auto d-flex justify-content-center align-content-center"
                                                            style="background-color: #24293D; border-radius:10px">
                                                            <h4
                                                                style="margin-bottom: 10px; margin-top:10px; color:white">
                                                                <strong>Struktur Organisasi PKK Desa
                                                                    Tikusan</strong><br /><span
                                                                    style="display:flex; justify-content:center"><small>POKJA
                                                                        III</small></span>
                                                            </h4>
                                                        </div>
                                                        <div class="mt-3" id="chart_div_pkk4"></div>
                                                    </div>
                                                    <div class="carousel-item" style="width: 100%;"
                                                        data-bs-interval="7000">
                                                        <div class="col-md-6 mx-auto d-flex justify-content-center align-content-center"
                                                            style="background-color: #24293D; border-radius:10px">
                                                            <h4
                                                                style="margin-bottom: 10px; margin-top:10px; color:white">
                                                                <strong>Struktur Organisasi PKK Desa
                                                                    Tikusan</strong><br /><span
                                                                    style="display:flex; justify-content:center"><small>POKJA
                                                                        IV</small></span>
                                                            </h4>
                                                        </div>
                                                        <div class="mt-3" id="chart_div_pkk5"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @break

                                @case('proker_pkk')
                                    <div class="singleslide"
                                        style="background-image: url({{ asset('assets/img/backgrounds/bg-singleslide.png') }});height:94%; width:100%; background-size:cover; position:absolute; top:0; padding:30px 30px 30px 30px">
                                        <x-slideProkerPkk :kategoriPkk=$kategoriPkk :prokerPkk=$prokerPkk />
                                    </div>
                                @break

                                @case('papan_data_sekretaris')
                                    <div class="singleslide"
                                        style="background-image: url({{ asset('assets/img/backgrounds/bg-singleslide.png') }});height:94%; width:100%; background-size:cover; position:absolute; top:0; padding:30px">
                                        @php($title = 'Sekretaris')
                                        @php($id = 'Sekretaris')
                                        <x-papanData :title=$title :papandata=$papandata :id=$id />
                                    </div>
                                @break

                                @case('papan_data_bendahara')
                                    <div class="singleslide"
                                        style="background-image: url({{ asset('assets/img/backgrounds/bg-singleslide.png') }});height:94%; width:100%; background-size:cover; position:absolute; top:0; padding:30px">
                                        @php($title = 'Bendahara')
                                        @php($id = 'Bendahara')
                                        <x-papanData :title=$title :papandata=$papandata :id=$id />
                                    </div>
                                @break

                                @case('papan_data_pokja1')
                                    <div class="singleslide"
                                        style="background-image: url({{ asset('assets/img/backgrounds/bg-singleslide.png') }});height:94%; width:100%; background-size:cover; position:absolute; top:0; padding:30px">
                                        @php($title = 'POKJA 1')
                                        @php($id = 'pokja1')
                                        <x-papanData :title=$title :papandata=$papandata :id=$id />
                                    </div>
                                @break

                                @case('papan_data_pokja2')
                                    <div class="singleslide"
                                        style="background-image: url({{ asset('assets/img/backgrounds/bg-singleslide.png') }});height:94%; width:100%; background-size:cover; position:absolute; top:0; padding:30px">
                                        @php($title = 'POKJA 2')
                                        @php($id = 'pokja2')
                                        <x-papanData :title=$title :papandata=$papandata :id=$id />
                                    </div>
                                @break

                                @case('papan_data_pokja3')
                                    <div class="singleslide"
                                        style="background-image: url({{ asset('assets/img/backgrounds/bg-singleslide.png') }});height:94%; width:100%; background-size:cover; position:absolute; top:0; padding:30px">
                                        @php($title = 'POKJA 3')
                                        @php($id = 'pokja3')
                                        <x-papanData :title=$title :papandata=$papandata :id=$id />
                                    </div>
                                @break

                                @case('papan_data_pokja4')
                                    <div class="singleslide"
                                        style="background-image: url({{ asset('assets/img/backgrounds/bg-singleslide.png') }});height:94%; width:100%; background-size:cover; position:absolute; top:0; padding:30px">
                                        @php($title = 'POKJA 4')
                                        @php($id = 'pokja4')
                                        <x-papanData :title=$title :papandata=$papandata :id=$id />
                                    </div>
                                @break

                                @default
                            @endswitch
                        </div>
                    @endif
                @endforeach
                {{-- Tab Video --}}
                <div class="tab-pane fade" id="video" role="tabpanel">
                    <div class="singleslide"
                        style="background-image: url({{ asset('assets/img/backgrounds/bg-singleslide.png') }});height:94%; width:100%; background-size:cover; position:absolute; top:0; padding:30px 30px 30px 30px">
                        <div class="col-sm-6 mx-auto d-flex justify-content-center align-content-center"
                            style="background-color: #24293D; border-radius:10px">
                            <h4 id="videoTitle" style="margin-top:10px; margin-bottom:10px; color:white">
                            </h4>
                        </div>
                        <p class="d-flex justify-content-center align-content-center mt-2 mb-4" id="videoDesc"
                            style="color: #24293D; font-weight:700"></p>
                        <video class="img-fluid d-flex justify-content-center align-content-center" id="videoSrc"
                            autoplay loop muted
                            style="border-radius: 0.5rem 0.5rem 0.5rem 0.5rem; box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45); height:60vh; margin:auto">
                        </video>
                    </div>
                </div>
                {{-- Tab Gambar --}}
                <div class="tab-pane fade" id="gambar" role="tabpanel">
                    <div class="singleslide"
                        style="background-image: url({{ asset('assets/img/backgrounds/bg-singleslide.png') }});height:94%; width:100%; background-size:cover; position:absolute; top:0; padding:30px 30px 30px 30px">
                        <div class="col-sm-6 mx-auto d-flex justify-content-center align-content-center"
                            style="background-color: #24293D; border-radius:10px">
                            <h4 id="imgTitle" style="margin-top:10px; margin-bottom:10px; color:white">
                            </h4>
                        </div>
                        <p class="d-flex justify-content-center align-content-center mt-2 mb-4" id="imgDesc"
                            style="color: #24293D; font-weight:700"></p>
                        <img id="gambarSrc" class="d-block w-100" alt="..."
                            style="object-fit: fill;
                            height:60vh;
                            border-radius: 0.5rem 0.5rem 0.5rem 0.5rem;
                            box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);">
                    </div>
                </div>
            </div>
            {{-- Running Teks --}}
            <div class="col-12 my-auto" style="height:6%">
                <div class="row h-100">
                    <div class="col-1 d-flex justify-content-center align-item-center"
                        style="width:10%!important; padding:0%; border-radius: 0 0 0 10px; background-color:#F57821">
                        <div class="d-flex justify-content-center align-item-center"
                            style="width:100%; height: 80%; background-color:#25283B">
                            <p class="d-flex my-auto justify-content-center" style="color: white"><strong><span
                                        id='ct'></span></strong>
                        </div>
                        </p>
                    </div>
                    <div class="col-11 scrolling-text my-auto align-item-center"
                        style="width:90%!important; padding-left:10px; padding-right:10px ">
                        <div class="text">
                            <div class="scroll-text">
                                @foreach ($teks as $item)
                                    <strong><span>{{ $item->teks }}</span><span>|</span></strong>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    google.charts.load('current', {
        packages: ["orgchart"]
    });
    google.charts.setOnLoadCallback(drawChartDesa);
    google.charts.setOnLoadCallback(drawChartPkk1);
    google.charts.setOnLoadCallback(drawChartPkk2);
    google.charts.setOnLoadCallback(drawChartPkk3);
    google.charts.setOnLoadCallback(drawChartPkk4);
    google.charts.setOnLoadCallback(drawChartPkk5);

    // Gambar struktur desa
    function drawChartDesa() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Nama');
        data.addColumn('string', 'Atasan');
        data.addColumn('string', 'ToolTip');
        let desa = {!! json_encode($grafikdesa) !!};
        data.addRows(desa);
        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div_desa'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {
            'allowHtml': true,
            'allowCollapse': true
        });
    }
    // Gambar struktur pkk
    function drawChartPkk1() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Nama');
        data.addColumn('string', 'Atasan');
        data.addColumn('string', 'ToolTip');
        let pkk = {!! json_encode($grafikpkk1) !!};
        data.addRows(pkk);
        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div_pkk1'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {
            'allowHtml': true,
            'allowCollapse': true
        });
    }
    // Gambar struktur pkk
    function drawChartPkk1() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Nama');
        data.addColumn('string', 'Atasan');
        data.addColumn('string', 'ToolTip');
        let pkk = {!! json_encode($grafikpkk1) !!};
        data.addRows(pkk);
        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div_pkk1'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {
            'allowHtml': true,
            'allowCollapse': true
        });
    }
    // Gambar struktur pkk
    function drawChartPkk2() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Nama');
        data.addColumn('string', 'Atasan');
        data.addColumn('string', 'ToolTip');
        let pkk = {!! json_encode($grafikpkk2) !!};
        data.addRows(pkk);
        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div_pkk2'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {
            'allowHtml': true,
            'allowCollapse': true
        });
    }
    // Gambar struktur pkk
    function drawChartPkk3() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Nama');
        data.addColumn('string', 'Atasan');
        data.addColumn('string', 'ToolTip');
        let pkk = {!! json_encode($grafikpkk3) !!};
        data.addRows(pkk);
        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div_pkk3'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {
            'allowHtml': true,
            'allowCollapse': true
        });
    }
    // Gambar struktur pkk
    function drawChartPkk4() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Nama');
        data.addColumn('string', 'Atasan');
        data.addColumn('string', 'ToolTip');
        let pkk = {!! json_encode($grafikpkk4) !!};
        data.addRows(pkk);
        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div_pkk4'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {
            'allowHtml': true,
            'allowCollapse': true
        });
    }
    // Gambar struktur pkk
    function drawChartPkk5() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Nama');
        data.addColumn('string', 'Atasan');
        data.addColumn('string', 'ToolTip');
        let pkk = {!! json_encode($grafikpkk5) !!};
        data.addRows(pkk);
        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div_pkk5'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {
            'allowHtml': true,
            'allowCollapse': true
        });
    }

    // Time Script
    function display_c() {
        var refresh = 1000; // Refresh rate in milli seconds
        mytime = setTimeout('display_ct()', refresh)
    }

    function display_ct() {
        var x = new Date()
        var hour = x.getHours();
        var minute = x.getMinutes();
        var second = x.getSeconds();
        if (hour < 10) {
            hour = '0' + hour;
        }
        if (minute < 10) {
            minute = '0' + minute;
        }
        if (second < 10) {
            second = '0' + second;
        }
        var x3 = hour + ':' + minute + ':' + second
        document.getElementById('ct').innerHTML = x3;
        display_c();
    }

    // tab carousel
    let allTab = Array.from(document.getElementById('tabContent').children);
    var gambarSrc = document.getElementById('gambarSrc');
    var judulGambar = document.getElementById('imgTitle');
    var deskGambar = document.getElementById('imgDesc');
    var judulVideo = document.getElementById('videoTitle');
    var deskVideo = document.getElementById('videoDesc');
    var videoSrc = document.getElementById('videoSrc');
    var welcome = document.getElementById('welcome').classList;
    let slide = {!! json_encode($slide) !!};
    let currentNumber = 0;
    let currentTab = "";
    let delay = 10000;

    function Loop() {
        setTimeout(function() {
            if (currentNumber < slide.length) {
                // assign current number and delay
                delay = slide[currentNumber].durasi;

                // check tipe and looping tabs
                allTab.forEach(element => {
                    var activeTab = element.classList;
                    if (slide[currentNumber].status == 1) {
                        if (slide[currentNumber].tipe == 0) {
                            var Src = "{{ url('') }}" + "/upload/slide/" + (slide[currentNumber]
                                .file);
                            if (element.id == "gambar") {
                                gambarSrc.setAttribute("src", Src);
                                judulGambar.innerText = (slide[currentNumber].judul);
                                deskGambar.innerText = (slide[currentNumber].deskripsi);
                                activeTab.add('active', 'show');
                            } else {
                                activeTab.remove('active', 'show');
                            }
                        } else if (slide[currentNumber].tipe == 1) {
                            var Src = "{{ url('') }}" + "/upload/slide/" + (slide[currentNumber]
                                .file);
                            if (element.id == "video") {
                                videoSrc.setAttribute("src", Src);
                                judulVideo.innerText = (slide[currentNumber].judul);
                                deskVideo.innerText = (slide[currentNumber].deskripsi);
                                activeTab.add('active', 'show');
                            } else {
                                activeTab.remove('active', 'show');
                            }
                        } else if (slide[currentNumber].tipe == 2) {
                            currentTab = "tab_" + slide[currentNumber].file;
                            if (element.id == currentTab) {
                                activeTab.add('active', 'show');
                            } else {
                                activeTab.remove('active', 'show');
                            }
                        }
                    }
                });
                // add number for looping 
                currentNumber++;
            } else {
                // reset current number
                allTab.forEach(element => {
                    var activeTab = element.classList;
                    if (element.id == "welcome") {
                        welcome.add('active', 'show');
                    } else {
                        activeTab.remove('active', 'show');
                    }
                })
                currentNumber = 0;
            }
            Loop();
        }, delay)
    }
    Loop();
</script>
