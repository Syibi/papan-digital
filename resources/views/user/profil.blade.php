@extends('user.layout')

@section('container')
    <div class="container-xxl flex-grow-1 mt-3">
        <div class="card" style="padding: 20px">
            <x-Profil :profil=$profil />
        </div>
    </div>
@endsection
