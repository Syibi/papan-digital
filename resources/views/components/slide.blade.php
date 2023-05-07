<div>
    <div class="card px-2" style=" height: 86vh;">
        <div class="row px-1" style="height: 100%;">
            <div id="carouselExample" class="carousel slide" data-bs-slide="caraousel" style="height: 94%;padding:0">
                <div class="carousel-inner" style="height: 100%; border-radius: 0.5rem 0.5rem 0 0">
                    <div class="carousel-item active" style="height: 100%">
                        <div class="row" style="height: 100%">
                            <div class="col-5"
                                style="padding-left:0; background-image:url({{ asset('assets/img/backgrounds/deco.png') }});      background-repeat:no-repeat; background-size: cover; background-position-x: right; overflow:hidden">
                                <div class="content"
                                    style="background-image: url({{ asset('assets/img/backgrounds/home.jpg') }})">
                                </div>
                            </div>
                            <div class="col-7" style="background-color:green">

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 100%">
                        <div class="row" style="height: 100%">
                            <div class="col-12" style="background-color: red">
                                <x-Profil :profil=$profil />
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
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
    // $('.carousel').carousel({
    //     interval: 2000
    // })
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
</script>
