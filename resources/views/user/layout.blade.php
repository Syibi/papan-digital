<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>PD Tikusan | {{ $title }}</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/avatars/logo-desa.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ URL::asset('../assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/pages/org-chart.css" class="template-customizer-theme-css">

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="../assets/js/config.js"></script>
</head>

<body onload=display_ct();>
    @include('sweetalert::alert')
    <!-- Layout wrapper -->
    <div id="loading">
        <img id="loading-image" src="../assets/img/Hourglass.gif" alt="Loading..." />
    </div>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <img src="../assets/img/monitor.png" alt="" width="40vh" style="margin-right:10pt">
                    <div class="row ml-2">
                        <span>
                            <h4 style="white-space: nowrap; margin:0">Papan Digital</h4>
                        </span>
                        <span>Desa Tikusan</span>
                    </div>
                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item {{ $title === 'Beranda' ? 'active' : '' }}">
                        <a href="/" class="menu-link">
                            <i class='menu-icon tf-icons bx bxs-dashboard'></i>
                            <div data-i18n="Analytics">Beranda</div>
                        </a>
                    </li>
                    <li
                        class="menu-item 
                        {{ $title === 'Profil Desa' || $title === 'Data Umum' || $title === 'Data Kewenangan' ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-pie-chart-alt-2"></i>
                            <div data-i18n="Authentications">Informasi Desa</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item {{ $title === 'Profil Desa' ? 'active' : '' }}">
                                <a href="/profil" class="menu-link">
                                    <div data-i18n="Account">Profil Desa</div>
                                </a>
                            </li>
                            <li class="menu-item {{ $title === 'Data Umum' ? 'active' : '' }}">
                                <a href="/umum" class="menu-link">
                                    <div data-i18n="Notifications">Data Umum</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item {{ $title === 'Galeri Desa' ? 'active' : '' }}">
                        <a href="/galeri-desa" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-image"></i>
                            <div data-i18n="Galery">Galeri Desa</div>
                        </a>
                    </li>
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Perangkat Desa</span>
                    </li>
                    <li class="menu-item {{ $title === 'Struktur Desa' ? 'active' : '' }}">
                        <a href="/struktur-desa" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-network-chart"></i>
                            <div data-i18n="Account Settings">Struktur Organisasi</div>
                        </a>
                    </li>
                    <li class="menu-item {{ $title === 'Proker Desa' ? 'active' : '' }}">
                        <a href="/proker-desa" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Authentications">Program Kerja</div>
                        </a>
                    </li>
                    <!-- Components -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Perangkat PKK</span>
                    </li>
                    <!-- Cards -->
                    <li class="menu-item {{ $title === 'Profil PKK' ? 'active' : '' }}">
                        <a href="/profil-pkk" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-network-chart"></i>
                            <div data-i18n="Basic">Profil PKK</div>
                        </a>
                    </li>
                    <!-- User interface -->
                    <li class="menu-item {{ $title === 'Papan Data' ? 'active' : '' }}">
                        <a href="/papan-data" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="User interface">Papan Data</div>
                        </a>
                    </li>
                    <!-- User interface -->
                    <li class="menu-item {{ $title === 'Proker PKK' ? 'active' : '' }}">
                        <a href="/proker-pkk" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="User interface">Program Kerja</div>
                        </a>
                    </li>
                </ul>
                <div class="col-sm-3" style="margin-left: 2vw; margin-bottom:4vh">
                    <audio id="myAudio" src="{{ url('') }}/../upload/musik/{{ $musik['file'] }}" autoplay
                        loop>
                    </audio>
                    <button id="menu-sound" type="button" class="btn btn-primary" data-bs-toggle="button"
                        autocomplete="off" aria-pressed="false" onClick="togglePlay()">
                        <i class='bx bxs-volume-full'></i>
                    </button>
                </div>
                <footer class="col-sm-8" style="margin-left: 2vw; margin-bottom:1vh">
                    <div class="mb-2">
                        <a href="" target="_blank" class="footer-link fw-bolder">Desa Tikusan</a> ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                    </div>
                </footer>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <strong>
                                    {{ \Carbon\Carbon::now()->isoFormat('dddd,') }}
                                    <span
                                        style="color: #f77223">{{ \Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</span>
                                </strong>
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar mb-2">
                                        <img src="../assets/img/avatars/logo-desa.png" alt class="w-px-31 h-auto" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="../assets/img/avatars/user.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">Desa Tikusan</span>
                                                    <small class="text-muted">User</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/login">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Masuk Administrator</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>
                <!-- / Navbar -->
                <div class="content-wrapper">
                    @yield('container')
                </div>

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script type="text/javascript">
        $(window).on('load', function() {
            $('#loading').hide();
        });

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

        // Audio Script
        var myAudio = document.getElementById("myAudio");
        var isPlaying = false;

        function togglePlay() {
            isPlaying ? myAudio.pause() : myAudio.play();
        };

        myAudio.onplaying = function() {
            isPlaying = true;
        };
        myAudio.onpause = function() {
            isPlaying = false;
        };

        $('#menu-sound').click(function() {
            $(this).find('i').toggleClass('bx bx-volume-mute').toggleClass('bx bxs-volume-full');
        });
    </script>
</body>

</html>
