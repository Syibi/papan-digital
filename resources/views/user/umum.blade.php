@extends('user.layout')

@section('container')
    <div class="container-xxl flex-grow-1 mt-3">
        <div class="nav-align-top mb-4">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-umum" aria-controls="navs-top-profile" aria-selected="false">
                        <strong>Bidang Umum</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-penduduk" aria-controls="navs-top-messages" aria-selected="false">
                        <strong>Data Penduduk</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-pendidikan" aria-controls="navs-top-messages" aria-selected="false">
                        <strong>Data Pendidikan</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-pekerjaan" aria-controls="navs-top-messages" aria-selected="false">
                        <strong>Data Pekerjaan</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-sarana" aria-controls="navs-top-messages" aria-selected="false">
                        <strong>Data Sarana Prasarana</strong>
                    </button>
                </li>
            </ul>
            <div class="tab-content">
                {{-- Tab Data Umum --}}
                <div class="tab-pane fade active show" id="navs-top-umum" role="tabpanel">
                    <x-tabUmum :umum=$umum />
                </div>

                {{-- Tab Data Penduduk --}}
                <div class="tab-pane fade" id="navs-top-penduduk" role="tabpanel">
                    <x-tabPenduduk :penduduk=$penduduk :chartjk=$chart_jk :chartusia=$chart_usia />
                </div>

                {{-- Tab Data Pendidikan --}}
                <div class="tab-pane fade" id="navs-top-pendidikan" role="tabpanel">
                    <x-tabPendidikan :pendidikan=$pendidikan />
                </div>

                {{-- Tab Data Pekerjaan --}}
                <div class="tab-pane fade" id="navs-top-pekerjaan" role="tabpanel">
                    <x-tabPekerjaan :pekerjaan=$pekerjaan />
                </div>

                {{-- Tab Sarana --}}
                <div class="tab-pane fade" id="navs-top-sarana" role="tabpanel">
                    <x-tabSarpras :sarpras=$sarpras />
                </div>
            </div>
        </div>
    </div>
    <script src="{{ $chart_jk->cdn() }}"></script>
    <script src="{{ $chart_usia->cdn() }}"></script>

    {{ $chart_jk->script() }}
    {{ $chart_usia->script() }}
@endsection
