<div class="row justify-content-evenly mx-2">
    <div class="mb-1 col-12">
        <label for="topologi_desa" class="form-label"><strong>Topologi Desa</strong></label>
        <textarea class="form-control my-2" type="text" id="data_umum" name="topologi_desa" rows="2" readonly>{{ $umum['topologi_desa'] }}</textarea>
    </div>
    <div class="mb-1 col-6">
        <label for="tingkat_perkembangan" class="form-label"><strong>Tingkat Perkembangan
                Desa</strong></label>
        <input class="form-control" type="text" id="data_umum" name="tingkat_perkembangan"
            value="{{ $umum['tingkat_perkembangan'] }}" readonly>
    </div>
    <div class="mb-1 col-6">
        <label for="luas_wilayah" class="form-label"><strong>Luas Wilayah</strong></label>
        <div class="input-group">
            <input class="form-control my-1" name="luas_wilayah" type="text" id="data_umum"
                value="{{ $umum['luas_wilayah'] }}" readonly>
            <span class="input-group-text my-1">Hektar</span>
        </div>
    </div>
    <div>
        <label for="batas_wilayah" class="form-label"><strong>Batas Wilayah</strong></label>
        <div class="mb-2 row">
            <label for="batas_wilayah_utara" class="col-sm-1 my-2">Sebelah Utara</label>
            <div class="col-5">
                <textarea class="form-control my-2" type="text" id="data_umum" name="batas_wilayah_utara" rows="2" readonly>{{ $umum['batas_wilayah_utara'] }}</textarea>
            </div>
            <label for="batas_wilayah_selatan" class="col-sm-1 my-2">Sebelah Selatan</label>
            <div class="col-5">
                <textarea class="form-control my-2" type="text" id="data_umum" name="batas_wilayah_selatan" rows="2" readonly>{{ $umum['batas_wilayah_selatan'] }}</textarea>
            </div>
            <label for="batas_wilayah_barat" class="col-sm-1 my-2">Sebelah Barat</label>
            <div class="col-5">
                <textarea class="form-control my-2" type="text" id="data_umum" name="batas_wilayah_barat" rows="2" readonly>{{ $umum['batas_wilayah_barat'] }}</textarea>
            </div>
            <label for="batas_wilayah_timur" class="col-sm-1 my-2">Sebelah Timur</label>
            <div class="col-5">
                <textarea class="form-control my-2" type="text" id="data_umum" name="batas_wilayah_timur" rows="2" readonly>{{ $umum['batas_wilayah_timur'] }}</textarea>
            </div>
        </div>
    </div>
    <div>
        <label for="orbitrasi" class="form-label"><strong>Orbitrasi</strong></label>
        <div class="mb-3 row">
            <label for="orbitrasi_kecamatan" class="col-sm-2 my-3">Kecamatan</label>
            <div class="col-4">
                <div class="input-group">
                    <input class="form-control my-1" type="text" id="data_umum" name="orbitrasi_kecamatan"
                        value="{{ $umum['orbitrasi_kecamatan'] }}" readonly>
                    <span class="input-group-text my-1">Km</span>
                </div>
            </div>
            <label for="orbitrasi_kota" class="col-sm-2 my-3">Kota</label>
            <div class="col-4">
                <div class="input-group">
                    <input class="form-control my-1" type="text" id="data_umum" name="orbitrasi_kota"
                        value="{{ $umum['orbitrasi_kota'] }}" readonly>
                    <span class="input-group-text my-1">Km</span>
                </div>
            </div>
            <label for="orbitrasi_kabupaten" class="col-sm-2 my-3">Kabupaten</label>
            <div class="col-4">
                <div class="input-group">
                    <input class="form-control my-1" type="text" id="data_umum" name="orbitrasi_kabupaten"
                        value="{{ $umum['orbitrasi_kabupaten'] }}" readonly>
                    <span class="input-group-text my-1">Km</span>
                </div>
            </div>
            <label for="orbitrasi_provinsi" class="col-sm-2 my-3">Provinsi</label>
            <div class="col-4">
                <div class="input-group">
                    <input class="form-control my-1" type="text" id="data_umum" name="orbitrasi_provinsi"
                        value="{{ $umum['orbitrasi_provinsi'] }}" readonly>
                    <span class="input-group-text my-1">Km</span>
                </div>
            </div>
        </div>
    </div>
</div>
