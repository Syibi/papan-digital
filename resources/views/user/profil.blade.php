@extends('user.layout')

@section('container')
    <div class="container-xxl flex-grow-1 mt-3">
        <div class="card" style="padding: 20px">
            <img src="../assets/img/avatars/logo-desa.png" width="9%" class="mt-2 mx-auto d-block" />
            <div class="divider">
                <div class="divider-text">Profil Desa</div>
            </div>
            <x-Profil :profil=$profil />
        </div>
    </div>
@endsection
