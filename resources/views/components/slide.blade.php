<div>
    <div class="card px-2" style=" height: 86vh;">
        <div class="row px-1" style="height: 100%;">
            <div id="tabContent" class="tab-content" style="height: 94%; overflow:hidden">
                @foreach ($slide as $key => $item)
                    {{-- Tab Data --}}
                    @if ($item->tipe == 2)
                        <div class="tab-pane fade" id="tab_{{ $item->file }}" role="tabpanel">
                            @switch($item->file)
                                @case('data_pendidikan')
                                    <x-tabPendidikan :pendidikan=$pendidikan />
                                @break

                                @case('data_penduduk')
                                    <x-tabPenduduk :penduduk=$penduduk :chartjk=$chart_jk :chartusia=$chart_usia />
                                @break

                                @default
                            @endswitch
                        </div>
                    @endif
                @endforeach
                {{-- Tab Video --}}
                <div class="tab-pane fade" id="video" role="tabpanel">
                    <video class="img-fluid" id="videoSrc" autoplay loop muted
                        style="border-radius: 0 0.5rem 0.5rem 0; box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);">
                    </video>
                </div>
                {{-- Tab Gambar --}}
                <div class="tab-pane fade" id="gambar" role="tabpanel">
                    <img id="gambarSrc" class="d-block w-100" alt="..."
                        style="object-fit: fill;
                                height:80vh;
                                border-radius: 0 0.5rem 0.5rem 0;
                                box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);">
                </div>
            </div>
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
    var videoSrc = document.getElementById('videoSrc');
    let slide = {!! json_encode($slide) !!};
    let currentNumber = 0;
    let currentTab = "";
    let delay = 5000;

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
                                gambarSrc.setAttribute("src", Src)
                                activeTab.add('active', 'show');
                            } else {
                                activeTab.remove('active', 'show');
                            }
                        } else if (slide[currentNumber].tipe == 1) {
                            var Src = "{{ url('') }}" + "/upload/slide/" + (slide[currentNumber]
                                .file);
                            if (element.id == "video") {
                                videoSrc.setAttribute("src", Src)
                                activeTab.add('active', 'show');
                            } else {
                                activeTab.remove('active', 'show');
                            }
                        } else if (slide[currentNumber].tipe == 2) {
                            currentTab = "tab_" + slide[currentNumber].file;
                            if (element.id == currentTab) {
                                console.log("masuk pak eko");
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
                currentNumber = 0;
            }
            Loop();
        }, delay)
    }
    Loop();
</script>
