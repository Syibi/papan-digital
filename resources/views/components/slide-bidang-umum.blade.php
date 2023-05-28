<div class="row justify-content-evenly mx-2" style="padding-left: 100px">
    <div class="mb-3 col-12">
        <strong style="mb-2">Topologi Desa : </strong>
        <p>{{ $umum['topologi_desa'] }}</p>
    </div>
    <div class="mb-3 col-6">
        <strong style="mb-2">Tingkat Perkembangan Desa : </strong>
        <p>{{ $umum['tingkat_perkembangan'] }}</p>
    </div>
    <div class="mb-3 col-6">
        <strong style="mb-2">Luas Wilayah</strong>
        <p>{{ $umum['luas_wilayah'] }} Hektar</p>
    </div>
    <div>
        <strong class="mb-3">Batas Wilayah</strong>
        <div class="mb-2 row">
            <div class="col-6">
                <p>Sebelah Utara : {{ $umum['batas_wilayah_utara'] }} <br />Sebelah Selatan :
                    {{ $umum['batas_wilayah_selatan'] }}</p>
            </div>
            <div class="col-6">
                <p>Sebelah Barat : {{ $umum['batas_wilayah_barat'] }} <br />Sebelah Timur :
                    {{ $umum['batas_wilayah_timur'] }}</p>
            </div>
        </div>
    </div>
    <div>
        <strong class="mb-3">Orbitrasi</strong>
        <div class="mb-2 row">
            <div class="col-6">
                <p>Kecamatan : {{ $umum['orbitrasi_kecamatan'] }} Km <br /> Kota : {{ $umum['orbitrasi_kota'] }} Km</p>
            </div>
            <div class="col-6">
                <p>Kabupaten : {{ $umum['orbitrasi_kabupaten'] }} Km <br /> Provinsi :
                    {{ $umum['orbitrasi_provinsi'] }}
                    Km</p>
            </div>
        </div>
    </div>
</div>
