@extends('admin.layout')

@section('container')
    <div class="container-xxl flex-grow-1 my-3">
        <div class="card px-2"
            style=" height: 79vh; 
              background-repeat:no-repeat; 
              background-size: contain; 
              background-image:url({{ asset('assets/img/backgrounds/bg-slide.png') }});
              background-position:-2px;
              ">
            <div class="row px-1" style="height: 100%; background-image: {{ asset('assets/img/backgrounds/bg-slide.png') }}">
                <div class="col-7 my-auto h-90" style="padding-left:1px">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000">
                        <div class="carousel-indicators">
                            @foreach ($slide as $key => $item)
                                <button type="button" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"
                                    aria-current="true" aria-label="{{ $key + 1 }}">
                                </button>
                            @endforeach
                        </div>
                        <div class="carousel-inner" style="box-shadow: none; border-radius:0; ">
                            @foreach ($slide as $key => $item)
                                <div class="carousel-item {{ $key == 1 ? 'active' : '' }}" style="width: 100%;">
                                    @if ($item->tipe == 0)
                                        {{-- Slide Gambar --}}
                                        <img src="{{ asset('upload/slide/' . $item->file) }}" class="d-block w-100"
                                            alt="..."
                                            style="object-fit: fill;
                                              height:47vh;
                                              border-radius: 0 0.5rem 0.5rem 0;
                                              box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);">
                                    @else
                                        {{-- Slide Video --}}
                                        <video class="img-fluid" autoplay loop muted
                                            style="border-radius: 0 0.5rem 0.5rem 0;
                                              box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);">
                                            <source src={{ asset('upload/slide/' . $item->file) }}
                                                class="d-block w-100 h-100" type="video/mp4" />
                                        </video>
                                    @endif
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>{{ $item->judul }}</h3>
                                        <p>{{ $item->deskripsi }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-5" style="padding-top:1%">
                    <div class="card-header">
                        <div class="card-title mb-0 text-end">
                            <h4 class="m-0" style="color: #f77223"><strong>{{ date('Y') }}</strong></h4>
                            <h5 class="m-0" style="text-transform: uppercase"><strong>
                                    {{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM') }}
                                </strong>
                            </h5>
                        </div>
                    </div>
                    <div class="card-body mt-4" style="padding-left: 10px">
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" style="box-shadow: none; border-radius:0; ">
                                <div class="carousel-item active">
                                    <div class="d-flex justify-content-between align-items-center mb-3"
                                        style="position: relative;">
                                        <div class="d-flex flex-column align-items-center gap-1">
                                            <h2 class="mb-2 text-black">8,258</h2>
                                            <span>Total Orders</span>
                                        </div>
                                        <div id="orderStatisticsChart" style="min-height: 137.55px;">
                                            <div id="apexcharts1016nlv1"
                                                class="apexcharts-canvas apexcharts1016nlv1 apexcharts-theme-light"
                                                style="width: 130px; height: 137.55px;"><svg id="SvgjsSvg7335"
                                                    width="130" height="137.55" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <g id="SvgjsG7337" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(-7, 0)">
                                                        <defs id="SvgjsDefs7336">
                                                            <clipPath id="gridRectMask1016nlv1">
                                                                <rect id="SvgjsRect7339" width="150" height="173"
                                                                    x="-4.5" y="-2.5" rx="0"
                                                                    ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff">
                                                                </rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMask1016nlv1"></clipPath>
                                                            <clipPath id="nonForecastMask1016nlv1"></clipPath>
                                                            <clipPath id="gridRectMarkerMask1016nlv1">
                                                                <rect id="SvgjsRect7340" width="145" height="172"
                                                                    x="-2" y="-2" rx="0"
                                                                    ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff">
                                                                </rect>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="SvgjsG7341" class="apexcharts-pie">
                                                            <g id="SvgjsG7342" transform="translate(0, 0) scale(1)">
                                                                <circle id="SvgjsCircle7343" r="44.835365853658544"
                                                                    cx="70.5" cy="70.5" fill="transparent">
                                                                </circle>
                                                                <g id="SvgjsG7344" class="apexcharts-slices">
                                                                    <g id="SvgjsG7345"
                                                                        class="apexcharts-series apexcharts-pie-series"
                                                                        seriesName="Electronic" rel="1"
                                                                        data:realIndex="0">
                                                                        <path id="SvgjsPath7346"
                                                                            d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z"
                                                                            fill="rgba(105,108,255,1)" fill-opacity="1"
                                                                            stroke-opacity="1" stroke-linecap="butt"
                                                                            stroke-width="5" stroke-dasharray="0"
                                                                            class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                            index="0" j="0"
                                                                            data:angle="153" data:startAngle="0"
                                                                            data:strokeWidth="5" data:value="85"
                                                                            data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z"
                                                                            stroke="#ffffff"></path>
                                                                    </g>
                                                                    <g id="SvgjsG7347"
                                                                        class="apexcharts-series apexcharts-pie-series"
                                                                        seriesName="Sports" rel="2"
                                                                        data:realIndex="1">
                                                                        <path id="SvgjsPath7348"
                                                                            d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z"
                                                                            fill="rgba(133,146,163,1)" fill-opacity="1"
                                                                            stroke-opacity="1" stroke-linecap="butt"
                                                                            stroke-width="5" stroke-dasharray="0"
                                                                            class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                            index="0" j="1" data:angle="27"
                                                                            data:startAngle="153" data:strokeWidth="5"
                                                                            data:value="15"
                                                                            data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z"
                                                                            stroke="#ffffff"></path>
                                                                    </g>
                                                                    <g id="SvgjsG7349"
                                                                        class="apexcharts-series apexcharts-pie-series"
                                                                        seriesName="Decor" rel="3"
                                                                        data:realIndex="2">
                                                                        <path id="SvgjsPath7350"
                                                                            d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z"
                                                                            fill="rgba(3,195,236,1)" fill-opacity="1"
                                                                            stroke-opacity="1" stroke-linecap="butt"
                                                                            stroke-width="5" stroke-dasharray="0"
                                                                            class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                                            index="0" j="2" data:angle="90"
                                                                            data:startAngle="180" data:strokeWidth="5"
                                                                            data:value="50"
                                                                            data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z"
                                                                            stroke="#ffffff"></path>
                                                                    </g>
                                                                    <g id="SvgjsG7351"
                                                                        class="apexcharts-series apexcharts-pie-series"
                                                                        seriesName="Fashion" rel="4"
                                                                        data:realIndex="3">
                                                                        <path id="SvgjsPath7352"
                                                                            d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z"
                                                                            fill="rgba(113,221,55,1)" fill-opacity="1"
                                                                            stroke-opacity="1" stroke-linecap="butt"
                                                                            stroke-width="5" stroke-dasharray="0"
                                                                            class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                                            index="0" j="3" data:angle="90"
                                                                            data:startAngle="270" data:strokeWidth="5"
                                                                            data:value="50"
                                                                            data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z"
                                                                            stroke="#ffffff"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG7353" class="apexcharts-datalabels-group"
                                                                transform="translate(0, 0) scale(1)" style="opacity: 1;">
                                                                <text id="SvgjsText7354"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="70.5" y="90.5" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="0.8125rem"
                                                                    font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-datalabel-label"
                                                                    style="font-family: Helvetica, Arial, sans-serif; fill: rgb(161, 172, 184);">Weekly</text><text
                                                                    id="SvgjsText7355" font-family="Public Sans"
                                                                    x="70.5" y="71.5" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="1.5rem"
                                                                    font-weight="400" fill="#566a7f"
                                                                    class="apexcharts-text apexcharts-datalabel-value"
                                                                    style="font-family: &quot;Public Sans&quot;;">38%</text>
                                                            </g>
                                                        </g>
                                                        <line id="SvgjsLine7356" x1="0" y1="0"
                                                            x2="141" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine7357" x1="0" y1="0"
                                                            x2="141" y2="0" stroke-dasharray="0"
                                                            stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                    </g>
                                                    <g id="SvgjsG7338" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-dark"
                                                    style="left: 41.2344px; top: -0.046875px;">
                                                    <div class="apexcharts-tooltip-series-group apexcharts-active"
                                                        style="order: 1; display: flex; background-color: rgb(105, 108, 255);">
                                                        <span class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(105, 108, 255); display: none;"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label">Electronic:
                                                                </span><span
                                                                    class="apexcharts-tooltip-text-y-value">85</span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group"
                                                        style="order: 2; display: none; background-color: rgb(105, 108, 255);">
                                                        <span class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(105, 108, 255); display: none;"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label">Electronic:
                                                                </span><span
                                                                    class="apexcharts-tooltip-text-y-value">85</span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group"
                                                        style="order: 3; display: none; background-color: rgb(105, 108, 255);">
                                                        <span class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(105, 108, 255); display: none;"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label">Electronic:
                                                                </span><span
                                                                    class="apexcharts-tooltip-text-y-value">85</span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group"
                                                        style="order: 4; display: none; background-color: rgb(105, 108, 255);">
                                                        <span class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(105, 108, 255); display: none;"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label">Electronic:
                                                                </span><span
                                                                    class="apexcharts-tooltip-text-y-value">85</span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 373px; height: 139px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                    <ul class="p-0 m-0">
                                        <li class="d-flex mb-4 pb-1">
                                            <div class="avatar flex-shrink-0 me-3">
                                                <span class="avatar-initial rounded bg-label-primary"><i
                                                        class="bx bx-mobile-alt"></i></span>
                                            </div>
                                            <div
                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0 text-black">Electronic</h6>
                                                    <small class="text-muted">Mobile, Earbuds, TV</small>
                                                </div>
                                                <div class="user-progress">
                                                    <small class="fw-semibold">82.5k</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 pb-1">
                                            <div class="avatar flex-shrink-0 me-3">
                                                <span class="avatar-initial rounded bg-label-success"><i
                                                        class="bx bx-closet"></i></span>
                                            </div>
                                            <div
                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0 text-black">Fashion</h6>
                                                    <small class="text-muted">T-shirt, Jeans, Shoes</small>
                                                </div>
                                                <div class="user-progress">
                                                    <small class="fw-semibold">23.8k</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 pb-1">
                                            <div class="avatar flex-shrink-0 me-3">
                                                <span class="avatar-initial rounded bg-label-info"><i
                                                        class="bx bx-home-alt"></i></span>
                                            </div>
                                            <div
                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0 text-black">Decor</h6>
                                                    <small class="text-muted">Fine Art, Dining</small>
                                                </div>
                                                <div class="user-progress">
                                                    <small class="fw-semibold">849k</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="avatar flex-shrink-0 me-3">
                                                <span class="avatar-initial rounded bg-label-secondary"><i
                                                        class="bx bx-football"></i></span>
                                            </div>
                                            <div
                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0 text-black">Sports</h6>
                                                    <small class="text-muted">Football, Cricket Kit</small>
                                                </div>
                                                <div class="user-progress">
                                                    <small class="fw-semibold">99</small>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="carousel-item">
                                    <div class="tab-pane fade show active" id="navs-tabs-line-card-income"
                                        role="tabpanel" style="position: relative;">
                                        <div class="d-flex p-4 pt-3">
                                            <div class="avatar flex-shrink-0 me-3">
                                                <img src="../assets/img/icons/unicons/wallet.png" alt="User">
                                            </div>
                                            <div>
                                                <small class="text-muted d-block">Total Balance</small>
                                                <div class="d-flex align-items-center">
                                                    <h6 class="mb-0 me-1 text-black">$459.10</h6>
                                                    <small class="text-success fw-semibold">
                                                        <i class="bx bx-chevron-up"></i>
                                                        42.9%
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="incomeChart" style="min-height: 215px;">
                                            <div id="apexchartsntqexsgs"
                                                class="apexcharts-canvas apexchartsntqexsgs apexcharts-theme-light"
                                                style="width: 420px; height: 215px;"><svg id="SvgjsSvg4152"
                                                    width="420" height="215" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev"
                                                    class="apexcharts-svg apexcharts-zoomable hovering-zoom"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <g id="SvgjsG4154" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(0, 10)">
                                                        <defs id="SvgjsDefs4153">
                                                            <clipPath id="gridRectMaskntqexsgs">
                                                                <rect id="SvgjsRect4159" width="408.635009765625"
                                                                    height="175.73" x="-3" y="-1"
                                                                    rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                    fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskntqexsgs"></clipPath>
                                                            <clipPath id="nonForecastMaskntqexsgs"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskntqexsgs">
                                                                <rect id="SvgjsRect4160" width="430.635009765625"
                                                                    height="201.73" x="-14" y="-14"
                                                                    rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                    fill="#fff"></rect>
                                                            </clipPath>
                                                            <linearGradient id="SvgjsLinearGradient4180" x1="0"
                                                                y1="0" x2="0" y2="1">
                                                                <stop id="SvgjsStop4181" stop-opacity="0.5"
                                                                    stop-color="rgba(105,108,255,0.5)" offset="0">
                                                                </stop>
                                                                <stop id="SvgjsStop4182" stop-opacity="0.25"
                                                                    stop-color="rgba(195,196,255,0.25)" offset="0.95">
                                                                </stop>
                                                                <stop id="SvgjsStop4183" stop-opacity="0.25"
                                                                    stop-color="rgba(195,196,255,0.25)" offset="1">
                                                                </stop>
                                                            </linearGradient>
                                                        </defs>
                                                        <line id="SvgjsLine4158" x1="402.135009765625" y1="0"
                                                            x2="402.135009765625" y2="173.73" stroke="#b6b6b6"
                                                            stroke-dasharray="3" stroke-linecap="butt"
                                                            class="apexcharts-xcrosshairs" x="402.135009765625"
                                                            y="0" width="1" height="173.73" fill="#b1b9c4"
                                                            filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                        <g id="SvgjsG4186" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG4187" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, -4)"><text id="SvgjsText4189"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="0" y="202.73" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan4190"></tspan>
                                                                    <title></title>
                                                                </text><text id="SvgjsText4192"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="57.519287109375" y="202.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan4193">Jan</tspan>
                                                                    <title>Jan</title>
                                                                </text><text id="SvgjsText4195"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="115.03857421875" y="202.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan4196">Feb</tspan>
                                                                    <title>Feb</title>
                                                                </text><text id="SvgjsText4198"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="172.557861328125" y="202.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan4199">Mar</tspan>
                                                                    <title>Mar</title>
                                                                </text><text id="SvgjsText4201"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="230.0771484375" y="202.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan4202">Apr</tspan>
                                                                    <title>Apr</title>
                                                                </text><text id="SvgjsText4204"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="287.596435546875" y="202.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan4205">May</tspan>
                                                                    <title>May</title>
                                                                </text><text id="SvgjsText4207"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="345.11572265625" y="202.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan4208">Jun</tspan>
                                                                    <title>Jun</title>
                                                                </text><text id="SvgjsText4210"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="402.635009765625" y="202.73"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan4211">Jul</tspan>
                                                                    <title>Jul</title>
                                                                </text></g>
                                                        </g>
                                                        <g id="SvgjsG4214" class="apexcharts-grid">
                                                            <g id="SvgjsG4215" class="apexcharts-gridlines-horizontal">
                                                                <line id="SvgjsLine4217" x1="0" y1="0"
                                                                    x2="402.635009765625" y2="0" stroke="#eceef1"
                                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4218" x1="0" y1="43.4325"
                                                                    x2="402.635009765625" y2="43.4325" stroke="#eceef1"
                                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4219" x1="0" y1="86.865"
                                                                    x2="402.635009765625" y2="86.865" stroke="#eceef1"
                                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4220" x1="0"
                                                                    y1="130.29749999999999" x2="402.635009765625"
                                                                    y2="130.29749999999999" stroke="#eceef1"
                                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine4221" x1="0" y1="173.73"
                                                                    x2="402.635009765625" y2="173.73" stroke="#eceef1"
                                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG4216" class="apexcharts-gridlines-vertical"></g>
                                                            <line id="SvgjsLine4223" x1="0" y1="173.73"
                                                                x2="402.635009765625" y2="173.73" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine4222" x1="0" y1="1"
                                                                x2="0" y2="173.73" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG4161"
                                                            class="apexcharts-area-series apexcharts-plot-series">
                                                            <g id="SvgjsG4162" class="apexcharts-series"
                                                                seriesName="seriesx1" data:longestSeries="true"
                                                                rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath4184"
                                                                    d="M 0 173.73L 0 112.92450000000001C 20.131750488281245 112.92450000000001 37.387536621093744 125.95425 57.51928710937499 125.95425C 77.65103759765624 125.95425 94.90682373046874 86.86500000000001 115.03857421874999 86.86500000000001C 135.17032470703123 86.86500000000001 152.42611083984374 121.611 172.557861328125 121.611C 192.68961181640623 121.611 209.94539794921874 34.74600000000001 230.07714843749997 34.74600000000001C 250.20889892578123 34.74600000000001 267.4646850585937 104.238 287.596435546875 104.238C 307.7281860351562 104.238 324.9839721679688 65.14875 345.11572265625 65.14875C 365.2474731445312 65.14875 382.5032592773438 91.20825 402.635009765625 91.20825C 402.635009765625 91.20825 402.635009765625 91.20825 402.635009765625 173.73M 402.635009765625 91.20825z"
                                                                    fill="url(#SvgjsLinearGradient4180)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMaskntqexsgs)"
                                                                    pathTo="M 0 173.73L 0 112.92450000000001C 20.131750488281245 112.92450000000001 37.387536621093744 125.95425 57.51928710937499 125.95425C 77.65103759765624 125.95425 94.90682373046874 86.86500000000001 115.03857421874999 86.86500000000001C 135.17032470703123 86.86500000000001 152.42611083984374 121.611 172.557861328125 121.611C 192.68961181640623 121.611 209.94539794921874 34.74600000000001 230.07714843749997 34.74600000000001C 250.20889892578123 34.74600000000001 267.4646850585937 104.238 287.596435546875 104.238C 307.7281860351562 104.238 324.9839721679688 65.14875 345.11572265625 65.14875C 365.2474731445312 65.14875 382.5032592773438 91.20825 402.635009765625 91.20825C 402.635009765625 91.20825 402.635009765625 91.20825 402.635009765625 173.73M 402.635009765625 91.20825z"
                                                                    pathFrom="M -1 217.1625L -1 217.1625L 57.51928710937499 217.1625L 115.03857421874999 217.1625L 172.557861328125 217.1625L 230.07714843749997 217.1625L 287.596435546875 217.1625L 345.11572265625 217.1625L 402.635009765625 217.1625">
                                                                </path>
                                                                <path id="SvgjsPath4185"
                                                                    d="M 0 112.92450000000001C 20.131750488281245 112.92450000000001 37.387536621093744 125.95425 57.51928710937499 125.95425C 77.65103759765624 125.95425 94.90682373046874 86.86500000000001 115.03857421874999 86.86500000000001C 135.17032470703123 86.86500000000001 152.42611083984374 121.611 172.557861328125 121.611C 192.68961181640623 121.611 209.94539794921874 34.74600000000001 230.07714843749997 34.74600000000001C 250.20889892578123 34.74600000000001 267.4646850585937 104.238 287.596435546875 104.238C 307.7281860351562 104.238 324.9839721679688 65.14875 345.11572265625 65.14875C 365.2474731445312 65.14875 382.5032592773438 91.20825 402.635009765625 91.20825"
                                                                    fill="none" fill-opacity="1" stroke="#696cff"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMaskntqexsgs)"
                                                                    pathTo="M 0 112.92450000000001C 20.131750488281245 112.92450000000001 37.387536621093744 125.95425 57.51928710937499 125.95425C 77.65103759765624 125.95425 94.90682373046874 86.86500000000001 115.03857421874999 86.86500000000001C 135.17032470703123 86.86500000000001 152.42611083984374 121.611 172.557861328125 121.611C 192.68961181640623 121.611 209.94539794921874 34.74600000000001 230.07714843749997 34.74600000000001C 250.20889892578123 34.74600000000001 267.4646850585937 104.238 287.596435546875 104.238C 307.7281860351562 104.238 324.9839721679688 65.14875 345.11572265625 65.14875C 365.2474731445312 65.14875 382.5032592773438 91.20825 402.635009765625 91.20825"
                                                                    pathFrom="M -1 217.1625L -1 217.1625L 57.51928710937499 217.1625L 115.03857421874999 217.1625L 172.557861328125 217.1625L 230.07714843749997 217.1625L 287.596435546875 217.1625L 345.11572265625 217.1625L 402.635009765625 217.1625">
                                                                </path>
                                                                <g id="SvgjsG4163" class="apexcharts-series-markers-wrap"
                                                                    data:realIndex="0">
                                                                    <g id="SvgjsG4165" class="apexcharts-series-markers"
                                                                        clip-path="url(#gridRectMarkerMaskntqexsgs)">
                                                                        <circle id="SvgjsCircle4166" r="6"
                                                                            cx="0" cy="112.92450000000001"
                                                                            class="apexcharts-marker no-pointer-events wmj6p9v3m"
                                                                            stroke="transparent" fill="transparent"
                                                                            fill-opacity="1" stroke-width="4"
                                                                            stroke-opacity="0.9" rel="0"
                                                                            j="0" index="0"
                                                                            default-marker-size="6"></circle>
                                                                        <circle id="SvgjsCircle4167" r="6"
                                                                            cx="57.51928710937499" cy="125.95425"
                                                                            class="apexcharts-marker no-pointer-events w7wvzdcun"
                                                                            stroke="transparent" fill="transparent"
                                                                            fill-opacity="1" stroke-width="4"
                                                                            stroke-opacity="0.9" rel="1"
                                                                            j="1" index="0"
                                                                            default-marker-size="6"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG4168" class="apexcharts-series-markers"
                                                                        clip-path="url(#gridRectMarkerMaskntqexsgs)">
                                                                        <circle id="SvgjsCircle4169" r="6"
                                                                            cx="115.03857421874999" cy="86.86500000000001"
                                                                            class="apexcharts-marker no-pointer-events wbxwjk94k"
                                                                            stroke="transparent" fill="transparent"
                                                                            fill-opacity="1" stroke-width="4"
                                                                            stroke-opacity="0.9" rel="2"
                                                                            j="2" index="0"
                                                                            default-marker-size="6"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG4170" class="apexcharts-series-markers"
                                                                        clip-path="url(#gridRectMarkerMaskntqexsgs)">
                                                                        <circle id="SvgjsCircle4171" r="6"
                                                                            cx="172.557861328125" cy="121.611"
                                                                            class="apexcharts-marker no-pointer-events wio4gchm3"
                                                                            stroke="transparent" fill="transparent"
                                                                            fill-opacity="1" stroke-width="4"
                                                                            stroke-opacity="0.9" rel="3"
                                                                            j="3" index="0"
                                                                            default-marker-size="6"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG4172" class="apexcharts-series-markers"
                                                                        clip-path="url(#gridRectMarkerMaskntqexsgs)">
                                                                        <circle id="SvgjsCircle4173" r="6"
                                                                            cx="230.07714843749997" cy="34.74600000000001"
                                                                            class="apexcharts-marker no-pointer-events wthxsmprr"
                                                                            stroke="transparent" fill="transparent"
                                                                            fill-opacity="1" stroke-width="4"
                                                                            stroke-opacity="0.9" rel="4"
                                                                            j="4" index="0"
                                                                            default-marker-size="6"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG4174" class="apexcharts-series-markers"
                                                                        clip-path="url(#gridRectMarkerMaskntqexsgs)">
                                                                        <circle id="SvgjsCircle4175" r="6"
                                                                            cx="287.596435546875" cy="104.238"
                                                                            class="apexcharts-marker no-pointer-events wwlfbfwzo"
                                                                            stroke="transparent" fill="transparent"
                                                                            fill-opacity="1" stroke-width="4"
                                                                            stroke-opacity="0.9" rel="5"
                                                                            j="5" index="0"
                                                                            default-marker-size="6"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG4176" class="apexcharts-series-markers"
                                                                        clip-path="url(#gridRectMarkerMaskntqexsgs)">
                                                                        <circle id="SvgjsCircle4177" r="6"
                                                                            cx="345.11572265625" cy="65.14875"
                                                                            class="apexcharts-marker no-pointer-events wz4vrczv9l"
                                                                            stroke="transparent" fill="transparent"
                                                                            fill-opacity="1" stroke-width="4"
                                                                            stroke-opacity="0.9" rel="6"
                                                                            j="6" index="0"
                                                                            default-marker-size="6"></circle>
                                                                    </g>
                                                                    <g id="SvgjsG4178" class="apexcharts-series-markers"
                                                                        clip-path="url(#gridRectMarkerMaskntqexsgs)">
                                                                        <circle id="SvgjsCircle4179" r="6"
                                                                            cx="402.635009765625" cy="91.20825"
                                                                            class="apexcharts-marker no-pointer-events wve67b70x"
                                                                            stroke="#696cff" fill="#ffffff"
                                                                            fill-opacity="1" stroke-width="4"
                                                                            stroke-opacity="0.9" rel="7"
                                                                            j="7" index="0"
                                                                            default-marker-size="6"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG4164" class="apexcharts-datalabels"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine4224" x1="0" y1="0"
                                                            x2="402.635009765625" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine4225" x1="0" y1="0"
                                                            x2="402.635009765625" y2="0" stroke-dasharray="0"
                                                            stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG4226" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG4227" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG4228" class="apexcharts-point-annotations"></g>
                                                        <rect id="SvgjsRect4229" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"
                                                            class="apexcharts-zoom-rect"></rect>
                                                        <rect id="SvgjsRect4230" width="0" height="0"
                                                            x="0" y="0" rx="0" ry="0"
                                                            opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"
                                                            class="apexcharts-selection-rect"></rect>
                                                    </g>
                                                    <rect id="SvgjsRect4157" width="0" height="0"
                                                        x="0" y="0" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fefefe"></rect>
                                                    <g id="SvgjsG4212" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-8, 0)">
                                                        <g id="SvgjsG4213" class="apexcharts-yaxis-texts-g"></g>
                                                    </g>
                                                    <g id="SvgjsG4155" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 107.5px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light"
                                                    style="left: 280.635px; top: 94.7083px;">
                                                    <div class="apexcharts-tooltip-title"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        Jul</div>
                                                    <div class="apexcharts-tooltip-series-group apexcharts-active"
                                                        style="order: 1; display: flex;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(105, 108, 255);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label">series-1:
                                                                </span><span
                                                                    class="apexcharts-tooltip-text-y-value">29</span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                                    style="left: 379.041px; top: 185.73px;">
                                                    <div class="apexcharts-xaxistooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 19.1875px;">
                                                        Jul</div>
                                                </div>
                                                <div
                                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center pt-4 gap-2">
                                            <div class="flex-shrink-0" style="position: relative;">
                                                <div id="expensesOfWeek" style="min-height: 57.7px;">
                                                    <div id="apexchartso08r1q5q"
                                                        class="apexcharts-canvas apexchartso08r1q5q apexcharts-theme-light"
                                                        style="width: 60px; height: 57.7px;"><svg id="SvgjsSvg4231"
                                                            width="60" height="57.7"
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                            style="background: transparent;">
                                                            <g id="SvgjsG4233"
                                                                class="apexcharts-inner apexcharts-graphical"
                                                                transform="translate(-10, -10)">
                                                                <defs id="SvgjsDefs4232">
                                                                    <clipPath id="gridRectMasko08r1q5q">
                                                                        <rect id="SvgjsRect4235" width="86"
                                                                            height="87" x="-3" y="-1"
                                                                            rx="0" ry="0" opacity="1"
                                                                            stroke-width="0" stroke="none"
                                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="forecastMasko08r1q5q"></clipPath>
                                                                    <clipPath id="nonForecastMasko08r1q5q"></clipPath>
                                                                    <clipPath id="gridRectMarkerMasko08r1q5q">
                                                                        <rect id="SvgjsRect4236" width="84"
                                                                            height="89" x="-2" y="-2"
                                                                            rx="0" ry="0" opacity="1"
                                                                            stroke-width="0" stroke="none"
                                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="SvgjsG4237" class="apexcharts-radialbar">
                                                                    <g id="SvgjsG4238">
                                                                        <g id="SvgjsG4239" class="apexcharts-tracks">
                                                                            <g id="SvgjsG4240"
                                                                                class="apexcharts-radialbar-track apexcharts-track"
                                                                                rel="1">
                                                                                <path id="apexcharts-radialbarTrack-0"
                                                                                    d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247"
                                                                                    fill="none" fill-opacity="1"
                                                                                    stroke="rgba(236,238,241,0.85)"
                                                                                    stroke-opacity="1"
                                                                                    stroke-linecap="round"
                                                                                    stroke-width="2.0408536585365864"
                                                                                    stroke-dasharray="0"
                                                                                    class="apexcharts-radialbar-area"
                                                                                    data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247">
                                                                                </path>
                                                                            </g>
                                                                        </g>
                                                                        <g id="SvgjsG4242">
                                                                            <g id="SvgjsG4246"
                                                                                class="apexcharts-series apexcharts-radial-series"
                                                                                seriesName="seriesx1" rel="1"
                                                                                data:realIndex="0">
                                                                                <path id="SvgjsPath4247"
                                                                                    d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095"
                                                                                    fill="none" fill-opacity="0.85"
                                                                                    stroke="rgba(105,108,255,0.85)"
                                                                                    stroke-opacity="1"
                                                                                    stroke-linecap="round"
                                                                                    stroke-width="4.081707317073173"
                                                                                    stroke-dasharray="0"
                                                                                    class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                                    data:angle="234" data:value="65"
                                                                                    index="0" j="0"
                                                                                    data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095">
                                                                                </path>
                                                                            </g>
                                                                            <circle id="SvgjsCircle4243"
                                                                                r="18.881402439024395" cx="40"
                                                                                cy="40"
                                                                                class="apexcharts-radialbar-hollow"
                                                                                fill="transparent"></circle>
                                                                            <g id="SvgjsG4244"
                                                                                class="apexcharts-datalabels-group"
                                                                                transform="translate(0, 0) scale(1)"
                                                                                style="opacity: 1;"><text
                                                                                    id="SvgjsText4245"
                                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                                    x="40" y="45"
                                                                                    text-anchor="middle"
                                                                                    dominant-baseline="auto"
                                                                                    font-size="13px" font-weight="400"
                                                                                    fill="#697a8d"
                                                                                    class="apexcharts-text apexcharts-datalabel-value"
                                                                                    style="font-family: Helvetica, Arial, sans-serif;">$65</text>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <line id="SvgjsLine4248" x1="0" y1="0"
                                                                    x2="80" y2="0" stroke="#b6b6b6"
                                                                    stroke-dasharray="0" stroke-width="1"
                                                                    stroke-linecap="butt"
                                                                    class="apexcharts-ycrosshairs">
                                                                </line>
                                                                <line id="SvgjsLine4249" x1="0" y1="0"
                                                                    x2="80" y2="0" stroke-dasharray="0"
                                                                    stroke-width="0" stroke-linecap="butt"
                                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                            </g>
                                                            <g id="SvgjsG4234" class="apexcharts-annotations"></g>
                                                        </svg>
                                                        <div class="apexcharts-legend"></div>
                                                    </div>
                                                </div>
                                                <div class="resize-triggers">
                                                    <div class="expand-trigger">
                                                        <div style="width: 61px; height: 59px;"></div>
                                                    </div>
                                                    <div class="contract-trigger"></div>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="mb-n1 mt-1">Expenses This Week</p>
                                                <small class="text-muted">$39 less than last week</small>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 421px; height: 377px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Button Edit Beranda --}}
        <a href="/edit-beranda" type="button" class="btn btn-lg rounded-pill btn-icon btn-primary"
            style="
              position: fixed;
              right: 5%;
              bottom:10%;
              display:block;
              z-index:10;
              ">
            <i class='bx bxs-pencil' style="margin-top: 9pt; font-size:1.5rem"></i>
        </a>
    </div>
@endsection
