@extends('admin.layout')

@section('container')
    <div class="container-xxl flex-grow-1 my-3">
        <x-slide :slide=$slide :chartjk=$chart_jk :chartusia=$chart_usia />

        {{-- Button Edit Beranda --}}
        <a href="/admin/edit-beranda" type="button" class="btn btn-lg rounded-pill btn-icon btn-primary"
            style="
              position: fixed;
              right: 5%;
              bottom:5%;
              display:block;
              z-index:10;
              ">
            <i class='bx bxs-pencil' style="margin-top: 9pt; font-size:1.5rem"></i>
        </a>
    </div>
    <script src="{{ $chart_jk->cdn() }}"></script>
    <script src="{{ $chart_usia->cdn() }}"></script>
    {{ $chart_jk->script() }}
    {{ $chart_usia->script() }}
@endsection
