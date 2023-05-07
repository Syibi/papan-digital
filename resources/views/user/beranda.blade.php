@extends('user.layout')

@section('container')
    <div class="container-xxl flex-grow-1 mt-3 mb-1">
        <x-slide :slide=$slide :chartjk=$chart_jk :chartusia=$chart_usia :grafik=$grafik :teks=$teks :profil=$profil />
    </div>
    <script src="{{ $chart_jk->cdn() }}"></script>
    <script src="{{ $chart_usia->cdn() }}"></script>
    {{ $chart_jk->script() }}
    {{ $chart_usia->script() }}
@endsection
