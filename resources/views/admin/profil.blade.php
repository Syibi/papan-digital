@extends('admin.layout')

@section('container')
    <div class="container-xxl flex-grow-1 mt-3">
        <div class="card" style="padding: 20px">
            <img src="../assets/img/avatars/logo-desa.png" width="9%" class="mt-2 mx-auto d-block" />
            <div class="divider">
                <div class="divider-text">Profil Desa</div>
            </div>
            <form action="{{ url('/profil/addprofil') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mx-3 justify-content-evenly">
                    <div class="mb-1 col-5">
                        <label for="nama_desa" class="form-label"><strong>Nama Desa</strong></label>
                        <input class="form-control-plaintext" type="text" id="profil" name="nama_desa" readonly="true"
                            value="{{ $profil['nama_desa'] }}">
                    </div>
                    <div class="mb-1 col-5">
                        <label for="kode_pos" class="form-label"><strong>Nomer Kode Pos</strong></label>
                        <input class="form-control-plaintext" type="text" id="profil" name="kode_pos" readonly="true"
                            value="{{ $profil['kode_pos'] }}">
                    </div>
                    <div class="mb-1 col-5">
                        <label for="tahun_pembentukan" class="form-label"><strong>Tahun Pembentukan</strong></label>
                        <input class="form-control-plaintext" type="text" id="profil" name="tahun_pembentukan"
                            readonly="true" value="{{ $profil['tahun_pembentukan'] }}">
                    </div>
                    <div class="mb-1 col-5">
                        <label for="kecamatan" class="form-label"><strong>Kecamatan</strong></label>
                        <input class="form-control-plaintext" type="text" id="profil" name="kecamatan" readonly="true"
                            value="{{ $profil['kecamatan'] }}">
                    </div>
                    <div class="mb-1 col-5">
                        <label for="dasar_hukum" class="form_label"><strong>Dasar Hukum
                                Pembentukan</strong></label>
                        <input class="form-control-plaintext" type="text" id="profil" name="dasar_hukum"
                            readonly="true" value="{{ $profil['dasar_hukum'] }}">
                    </div>
                    <div class="mb-1 col-5">
                        <label for="kabupaten" class="form-label"><strong>Kabupaten/Kota</strong></label>
                        <input class="form-control-plaintext" type="text" id="profil" name="kabupaten" readonly="true"
                            value="{{ $profil['kabupaten'] }}">
                    </div>
                    <div class="mb-1 col-5">
                        <label for="kode_wilayah" class="form-label"><strong>Nomor Kode Wilayah</strong></label>
                        <input class="form-control-plaintext" type="text" id="profil" name="kode_wilayah"
                            readonly="true" value="{{ $profil['kode_wilayah'] }}">
                    </div>
                    <div class="mb-1 col-5">
                        <label for="provinsi" class="form-label"><strong>Provinsi</strong></label>
                        <input class="form-control-plaintext" type="text" id="profil" name="provinsi" readonly="true"
                            value="{{ $profil['provinsi'] }}">
                    </div>
                </div>
                <div class="mt-2 float-end">
                    <button type="button" class="btn btn-primary me-2" value="edit" id="edit"
                        onclick="active()">Edit</button>
                    <button type="button" class="btn btn-outline-secondary" value="cancel" onclick="nonactive()"
                        id="cancel">Cancel</button>
                    <button type="submit" class="btn btn-primary me-2" value="save" onclick="nonactive()"
                        id="save">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        function active() {
            var a = document.querySelectorAll('[id = profil]');
            a.forEach(element => {
                element.className = "form-control";
                element.removeAttribute("readonly");
            });
        }

        function nonactive() {
            var a = document.querySelectorAll('[id = profil]');
            a.forEach(element => {
                element.className = "form-control-plaintext";
                element.setAttribute("readonly", true)
            });
        }

        $("#cancel, #save").hide();

        // Button profil
        $('#edit').click(function() {
            $(this).hide();
            $('#save, #cancel').show();
        });

        $('#cancel').click(function() {
            $('#edit').show();
            $('#save, #cancel').hide();
        });

        $('#save').click(function() {
            $(this).hide();
            $('#cancel').hide();
            $('#edit').show();
        });
    </script>
@endsection
