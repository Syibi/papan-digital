@extends('user.layout')

@section('container')
    <div class="container-xxl flex-grow-1 mt-3 mb-1">
        <x-slide :slide=$slide :chartjk=$chart_jk :chartusia=$chart_usia :grafikdesa=$grafikdesa :grafikpkk1=$grafikpkk1
            :grafikpkk2=$grafikpkk2 :grafikpkk3=$grafikpkk3 :grafikpkk4=$grafikpkk4 :grafikpkk5=$grafikpkk5 :teks=$teks
            :profil=$profil :umum=$umum :penduduk=$penduduk :pendidikan=$pendidikan :pekerjaan=$pekerjaan :sarpras=$sarpras
            :kategoriDesa=$kategoriDesa :prokerDesa=$prokerDesa :profilPkk=$profilPkk :kategoriPkk=$kategoriPkk
            :prokerPkk=$prokerPkk :papandata=$papandata/>
    </div>
    <script src="{{ $chart_jk->cdn() }}"></script>
    <script src="{{ $chart_usia->cdn() }}"></script>
    {{ $chart_jk->script() }}
    {{ $chart_usia->script() }}
@endsection
