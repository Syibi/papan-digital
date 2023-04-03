@extends('user.layout')

@section('container')
    <div class="container-xxl flex-grow-1 my-3">
        <x-slide :slide=$slide :chartjk=$chart_jk :chartusia=$chart_usia />
    </div>
    <script src="{{ $chart_jk->cdn() }}"></script>
    <script src="{{ $chart_usia->cdn() }}"></script>
    {{ $chart_jk->script() }}
    {{ $chart_usia->script() }}
@endsection
