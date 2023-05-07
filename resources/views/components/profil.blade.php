<img src="../assets/img/avatars/logo-desa.png" width="9%" class="mt-2 mx-auto d-block" />
<div class="divider" style="margin-left:5%; margin-right:5%">
    <div class="divider-text">Profil Desa</div>
</div>
<div>
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
            <input class="form-control-plaintext" type="text" id="profil" name="tahun_pembentukan" readonly="true"
                value="{{ $profil['tahun_pembentukan'] }}">
        </div>
        <div class="mb-1 col-5">
            <label for="kecamatan" class="form-label"><strong>Kecamatan</strong></label>
            <input class="form-control-plaintext" type="text" id="profil" name="kecamatan" readonly="true"
                value="{{ $profil['kecamatan'] }}">
        </div>
        <div class="mb-1 col-5">
            <label for="dasar_hukum" class="form_label"><strong>Dasar Hukum
                    Pembentukan</strong></label>
            <input class="form-control-plaintext" type="text" id="profil" name="dasar_hukum" readonly="true"
                value="{{ $profil['dasar_hukum'] }}">
        </div>
        <div class="mb-1 col-5">
            <label for="kabupaten" class="form-label"><strong>Kabupaten/Kota</strong></label>
            <input class="form-control-plaintext" type="text" id="profil" name="kabupaten" readonly="true"
                value="{{ $profil['kabupaten'] }}">
        </div>
        <div class="mb-1 col-5">
            <label for="kode_wilayah" class="form-label"><strong>Nomor Kode Wilayah</strong></label>
            <input class="form-control-plaintext" type="text" id="profil" name="kode_wilayah" readonly="true"
                value="{{ $profil['kode_wilayah'] }}">
        </div>
        <div class="mb-1 col-5">
            <label for="provinsi" class="form-label"><strong>Provinsi</strong></label>
            <input class="form-control-plaintext" type="text" id="profil" name="provinsi" readonly="true"
                value="{{ $profil['provinsi'] }}">
        </div>
    </div>
</div>
