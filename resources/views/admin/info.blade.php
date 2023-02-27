@extends('admin.layout')

@section('container')
  <div class="container-xxl flex-grow-1 mt-3">
    <div class="nav-align-top mb-4">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-profil" aria-controls="navs-top-home" aria-selected="true">
            <strong>Profil Desa</strong>
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-umum" aria-controls="navs-top-profile" aria-selected="false">
            <strong>Data Umum</strong>
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-penduduk" aria-controls="navs-top-messages" aria-selected="false">
            <strong>Data Penduduk</strong> 
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-pekerjaan" aria-controls="navs-top-messages" aria-selected="false">
            <strong>Data Pekerjaan</strong>
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-pendidikan" aria-controls="navs-top-messages" aria-selected="false">
            <strong>Data Pendidikan</strong>
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-sarana" aria-controls="navs-top-messages" aria-selected="false">
            <strong>Data Sarana Prasarana</strong>
          </button>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade active show" id="navs-top-profil" role="tabpanel">
            <img src="../assets/img/avatars/logo-desa.png" width="9%" class="mt-2 mx-auto d-block"/>
            <div class="divider">
              <div class="divider-text">Profil Desa</div>
            </div>
          <form action="{{url('/info/addprofil')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mx-3 justify-content-evenly">
              <div class="mb-1 col-5">
                <label for="nama_desa" class="form-label"><strong>Nama Desa</strong></label>
                <input class="form-control-plaintext" type="text" id="profil" name="nama_desa" readonly="true" 
                value="{{ $profil["nama_desa"] }}"
                >
              </div>
              <div class="mb-1 col-5">
                <label for="kode_pos" class="form-label"><strong>Nomer Kode Pos</strong></label>
                <input class="form-control-plaintext" type="text" id="profil" name="kode_pos" readonly="true" 
                value="{{ $profil["kode_pos"]}}"
                >
              </div>
              <div class="mb-1 col-5">
                <label for="tahun_pembentukan" class="form-label"><strong>Tahun Pembentukan</strong></label>
                <input class="form-control-plaintext" type="text" id="profil" name="tahun_pembentukan" readonly="true" 
                value="{{ $profil["tahun_pembentukan"]}}" 
                >
              </div>
              <div class="mb-1 col-5">
                <label for="kecamatan" class="form-label"><strong>Kecamatan</strong></label>
                <input class="form-control-plaintext" type="text" id="profil" name="kecamatan" readonly="true" 
                value="{{ $profil["kecamatan"] }}"
                >
              </div>
              <div class="mb-1 col-5">
                <label for="dasar_hukum" class="form_label"><strong>Dasar Hukum Pembentukan</strong></label>
                <input class="form-control-plaintext" type="text" id="profil" name="dasar_hukum" readonly="true" 
                value="{{ $profil["dasar_hukum"] }}"
                >
              </div>
              <div class="mb-1 col-5">
                <label for="kabupaten" class="form-label"><strong>Kabupaten/Kota</strong></label>
                <input class="form-control-plaintext" type="text" id="profil" name="kabupaten" readonly="true" 
                value="{{ $profil["kabupaten"] }}"
                >
              </div>
              <div class="mb-1 col-5">
                <label for="kode_wilayah" class="form-label"><strong>Nomor Kode Wilayah</strong></label>
                <input class="form-control-plaintext" type="text" id="profil" name="kode_wilayah" readonly="true" 
                value="{{ $profil["kode_wilayah"] }}"
                >
              </div>
              <div class="mb-1 col-5">
                <label for="provinsi" class="form-label"><strong>Provinsi</strong></label>
                <input class="form-control-plaintext" type="text" id="profil" name="provinsi" readonly="true" 
                value="{{ $profil["provinsi"] }}"
                >
              </div>
            </div>
            <div class="mt-2 float-end">
                <button type="button" class="btn btn-primary me-2" value="edit" id="edit" onclick="active()">Edit</button>
                <button type="button" class="btn btn-outline-secondary" value="cancel" onclick="nonactive()" id="cancel" >Cancel</button>
                <button type="submit" class="btn btn-primary me-2" value="save" onclick="nonactive()" id="save" >Save Changes</button>
            </div>
          </form>
        </div>
        <div class="tab-pane fade" id="navs-top-umum" role="tabpanel">
          <form action="{{url('/info/updateumum')}}" method="post" enctype="multipart/form-data" name="form_umum">
            @csrf
            @method('PUT')
            <div class="row justify-content-evenly mx-2">
              <div class="mb-1 col-12">
                <label for="topologi_desa" class="form-label"><strong>Topologi Desa</strong></label>
                <textarea class="form-control my-2" type="text" id="topologi_desa" name="topologi_desa" rows="2" 
                >{{ $umum["topologi_desa"] }}</textarea>
              </div>
              <div class="mb-1 col-6">
                <label for="tingkat_perkembangan" class="form-label"><strong>Tingkat Perkembangan Desa</strong></label>
                <input class="form-control" type="text" id="tingkat_perkembangan" name="tingkat_perkembangan" value="{{ $umum["tingkat_perkembangan"] }}">
              </div>
              <div class="mb-1 col-6">
                <label for="luas_wilayah" class="form-label"><strong>Luas Wilayah</strong></label>
                <div class="input-group">
                  <input class="form-control my-1" name="luas_wilayah" type="text" id="luas_wilayah" 
                  value="{{ $umum["luas_wilayah"] }}">
                  <span class="input-group-text my-1">Hektar</span>
                </div>
              </div>
              <div>
                <label for="batas_wilayah" class="form-label"><strong>Batas Wilayah</strong></label>
                <div class="mb-2 row">
                  <label for="batas_wilayah_utara" class="col-sm-1 my-2">Sebelah Utara</label>
                  <div class="col-5">
                    <textarea class="form-control my-2" type="text" id="batas_wilayah_utara" 
                    name="batas_wilayah_utara" rows="2">{{ $umum["batas_wilayah_utara"] }}</textarea>
                  </div>
                  <label for="batas_wilayah_selatan" class="col-sm-1 my-2">Sebelah Selatan</label>
                  <div class="col-5">
                    <textarea class="form-control my-2" type="text" id="batas_wilayah_selatan" 
                    name="batas_wilayah_selatan" rows="2">{{ $umum["batas_wilayah_selatan"] }}</textarea>
                  </div>
                  <label for="batas_wilayah_barat" class="col-sm-1 my-2">Sebelah Barat</label>
                  <div class="col-5">
                    <textarea class="form-control my-2" type="text" id="batas_wilayah_barat" 
                    name="batas_wilayah_barat" rows="2">{{ $umum["batas_wilayah_barat"] }}</textarea>
                  </div>
                  <label for="batas_wilayah_timur" class="col-sm-1 my-2">Sebelah Timur</label>
                  <div class="col-5">
                    <textarea class="form-control my-2" type="text" id="batas_wilayah_timur" 
                    name="batas_wilayah_timur" rows="2">{{ $umum["batas_wilayah_timur"] }}</textarea>
                  </div>
                </div>
              </div>
              <div>
                <label for="orbitrasi" class="form-label"><strong>Orbitrasi</strong></label>
                <div class="mb-3 row">
                  <label for="orbitrasi_kecamatan" class="col-sm-2 my-3">Kecamatan</label>
                  <div class="col-4">
                    <div class="input-group">
                      <input class="form-control my-1" type="text" id="orbitrasi_kecamatan" name="orbitrasi_kecamatan" 
                      value="{{ $umum["orbitrasi_kecamatan"] }}">
                      <span class="input-group-text my-1">Km</span>
                    </div>
                  </div>
                  <label for="orbitrasi_kota" class="col-sm-2 my-3">Kota</label>
                  <div class="col-4">
                    <div class="input-group">
                      <input class="form-control my-1" type="text" id="orbitrasi_kota" name="orbitrasi_kota"
                      value="{{ $umum["orbitrasi_kota"] }}">
                      <span class="input-group-text my-1">Km</span>
                    </div>
                  </div>
                  <label for="orbitrasi_kabupaten" class="col-sm-2 my-3">Kabupaten</label>
                  <div class="col-4">
                    <div class="input-group">
                      <input class="form-control my-1" type="text" id="orbitrasi_kabupaten" name="orbitrasi_kabupaten"
                      value="{{ $umum["orbitrasi_kabupaten"] }}">
                      <span class="input-group-text my-1">Km</span>
                    </div>
                  </div>
                  <label for="orbitrasi_provinsi" class="col-sm-2 my-3">Provinsi</label>
                  <div class="col-4">
                    <div class="input-group">
                      <input class="form-control my-1" type="text" id="orbitrasi_provinsi" name="orbitrasi_provinsi"
                      value="{{ $umum["orbitrasi_provinsi"] }}">
                      <span class="input-group-text my-1">Km</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-2 mx-2 float-end">
                <button type="button" form="form_umum" class="btn btn-primary me-2" value="edit" id="edit-umum" onclick="active()">Edit</button>
                <button type="button" class="btn btn-outline-secondary" value="cancel" onclick="nonactive()" id="cancel-umum" >Cancel</button>
                <button type="submit" class="btn btn-primary me-2" value="save" onclick="nonactive()" id="save-umum" >Save Changes</button>
            </div>
          </form>
        </div>

        {{-- Tab Data Penduduk --}}
        <div class="tab-pane fade" id="navs-top-penduduk" role="tabpanel">
          <div class="row gx-5 pt-4 text-center">
            <div class="col-sm-6">
              <div class="card-title mb-0">
                <h3 class="m-0 me-2">Jumlah Penduduk</h3>
                <small class="text-muted"><em>Update : Senin, 17 Februari 2023</em></small>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex flex-column align-items-center gap-1">
                <h2 class="mb-1">8,258</h2>
                <span>Jiwa</span>
              </div>
            </div>
          </div>
          <label for="batas_wilayah" class="form-label ps-4 mt-2"><strong>Berdasarkan Jenis Kelamin</strong></label>
          <div class="container overflow-hidden text-center">
            <div class="row gx-5">
              <div class="col-sm-7">
                <li class="d-flex mt-3 mb-2 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-male'></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Laki-laki</h6>
                    </div>
                    <div class="user-progress">
                      <div class="input-group">
                        <input class="form-control" name="luas_wilayah" type="text" id="luas_wilayah" value="1234">
                        <span class="input-group-text">Jiwa</span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-2 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-danger"><i class='bx bx-female'></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Perempuan</h6>
                    </div>
                    <div class="user-progress">
                      <div class="input-group">
                        <input class="form-control" name="luas_wilayah" type="text" id="luas_wilayah" value="1234">
                        <span class="input-group-text">Jiwa</span>
                      </div>
                    </div>
                  </div>
                </li>
              </div>
              <div class="col-sm-5 my-auto">
                <svg id="SvgjsSvg1162" width="130" height="137.55" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1164" class="apexcharts-inner apexcharts-graphical" transform="translate(-7, 0)"><defs id="SvgjsDefs1163"><clipPath id="gridRectMasknetql33q"><rect id="SvgjsRect1166" width="150" height="173" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasknetql33q"></clipPath><clipPath id="nonForecastMasknetql33q"></clipPath><clipPath id="gridRectMarkerMasknetql33q"><rect id="SvgjsRect1167" width="145" height="172" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1168" class="apexcharts-pie"><g id="SvgjsG1169" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1170" r="44.835365853658544" cx="70.5" cy="70.5" fill="transparent"></circle><g id="SvgjsG1171" class="apexcharts-slices"><g id="SvgjsG1172" class="apexcharts-series apexcharts-pie-series" seriesName="Electronic" rel="1" data:realIndex="0"><path id="SvgjsPath1173" d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" fill="rgba(105,108,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="153" data:startAngle="0" data:strokeWidth="5" data:value="85" data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" stroke="#ffffff"></path></g><g id="SvgjsG1174" class="apexcharts-series apexcharts-pie-series" seriesName="Sports" rel="2" data:realIndex="1"><path id="SvgjsPath1175" d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" fill="rgba(133,146,163,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="27" data:startAngle="153" data:strokeWidth="5" data:value="15" data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" stroke="#ffffff"></path></g><g id="SvgjsG1176" class="apexcharts-series apexcharts-pie-series" seriesName="Decor" rel="3" data:realIndex="2"><path id="SvgjsPath1177" d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" fill="rgba(3,195,236,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="90" data:startAngle="180" data:strokeWidth="5" data:value="50" data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" stroke="#ffffff"></path></g><g id="SvgjsG1178" class="apexcharts-series apexcharts-pie-series" seriesName="Fashion" rel="4" data:realIndex="3"><path id="SvgjsPath1179" d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" fill="rgba(113,221,55,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="90" data:startAngle="270" data:strokeWidth="5" data:value="50" data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" stroke="#ffffff"></path></g></g></g><g id="SvgjsG1180" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1181" font-family="Helvetica, Arial, sans-serif" x="70.5" y="90.5" text-anchor="middle" dominant-baseline="auto" font-size="0.8125rem" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif; fill: rgb(161, 172, 184);">Weekly</text><text id="SvgjsText1182" font-family="Public Sans" x="70.5" y="71.5" text-anchor="middle" dominant-baseline="auto" font-size="1.5rem" font-weight="400" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">38%</text></g></g><line id="SvgjsLine1183" x1="0" y1="0" x2="141" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1184" x1="0" y1="0" x2="141" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1165" class="apexcharts-annotations"></g></svg>
              </div>
            </div>
          </div>
          <label for="batas_wilayah" class="form-label ps-4"><strong>Berdasarkan Usia</strong></label>
          <div class="container overflow-hidden text-center">
            <div class="row gx-5">
              <div class="col-sm-7">
                <li class="d-flex mt-3 mb-2 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-male'></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Usia 0-15 tahun</h6>
                    </div>
                    <div class="user-progress">
                      <div class="input-group">
                        <input class="form-control" name="luas_wilayah" type="text" id="luas_wilayah" value="1234">
                        <span class="input-group-text">Jiwa</span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-2 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-success"><i class='bx bx-male'></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Usia 15-65 tahun</h6>
                    </div>
                    <div class="user-progress">
                      <div class="input-group">
                        <input class="form-control" name="luas_wilayah" type="text" id="luas_wilayah" value="1234">
                        <span class="input-group-text">Jiwa</span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-2 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-warning"><i class='bx bx-male'></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Usia 65 tahun keatas</h6>
                    </div>
                    <div class="user-progress">
                      <div class="input-group">
                        <input class="form-control" name="luas_wilayah" type="text" id="luas_wilayah" value="1234">
                        <span class="input-group-text">Jiwa</span>
                      </div>
                    </div>
                  </div>
                </li>
              </div>
              <div class="col-sm-5 my-auto">
                <svg id="SvgjsSvg1162" width="130" height="137.55" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1164" class="apexcharts-inner apexcharts-graphical" transform="translate(-7, 0)"><defs id="SvgjsDefs1163"><clipPath id="gridRectMasknetql33q"><rect id="SvgjsRect1166" width="150" height="173" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasknetql33q"></clipPath><clipPath id="nonForecastMasknetql33q"></clipPath><clipPath id="gridRectMarkerMasknetql33q"><rect id="SvgjsRect1167" width="145" height="172" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1168" class="apexcharts-pie"><g id="SvgjsG1169" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1170" r="44.835365853658544" cx="70.5" cy="70.5" fill="transparent"></circle><g id="SvgjsG1171" class="apexcharts-slices"><g id="SvgjsG1172" class="apexcharts-series apexcharts-pie-series" seriesName="Electronic" rel="1" data:realIndex="0"><path id="SvgjsPath1173" d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" fill="rgba(105,108,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="153" data:startAngle="0" data:strokeWidth="5" data:value="85" data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" stroke="#ffffff"></path></g><g id="SvgjsG1174" class="apexcharts-series apexcharts-pie-series" seriesName="Sports" rel="2" data:realIndex="1"><path id="SvgjsPath1175" d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" fill="rgba(133,146,163,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="27" data:startAngle="153" data:strokeWidth="5" data:value="15" data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" stroke="#ffffff"></path></g><g id="SvgjsG1176" class="apexcharts-series apexcharts-pie-series" seriesName="Decor" rel="3" data:realIndex="2"><path id="SvgjsPath1177" d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" fill="rgba(3,195,236,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="90" data:startAngle="180" data:strokeWidth="5" data:value="50" data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" stroke="#ffffff"></path></g><g id="SvgjsG1178" class="apexcharts-series apexcharts-pie-series" seriesName="Fashion" rel="4" data:realIndex="3"><path id="SvgjsPath1179" d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" fill="rgba(113,221,55,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="90" data:startAngle="270" data:strokeWidth="5" data:value="50" data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" stroke="#ffffff"></path></g></g></g><g id="SvgjsG1180" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1181" font-family="Helvetica, Arial, sans-serif" x="70.5" y="90.5" text-anchor="middle" dominant-baseline="auto" font-size="0.8125rem" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif; fill: rgb(161, 172, 184);">Weekly</text><text id="SvgjsText1182" font-family="Public Sans" x="70.5" y="71.5" text-anchor="middle" dominant-baseline="auto" font-size="1.5rem" font-weight="400" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">38%</text></g></g><line id="SvgjsLine1183" x1="0" y1="0" x2="141" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1184" x1="0" y1="0" x2="141" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1165" class="apexcharts-annotations"></g></svg>
              </div>
            </div>
          </div>
          <div class="mt-2 mx-4 float-end">
            <button type="button" form="form_umum" class="btn btn-primary me-2" value="edit" id="edit-penduduk" onclick="active()">Edit</button>
            <button type="button" class="btn btn-outline-secondary" value="cancel" onclick="nonactive()" id="cancel-penduduk" >Cancel</button>
            <button type="submit" class="btn btn-primary me-2" value="save" onclick="nonactive()" id="save-penduduk" >Save Changes</button>
          </div>
        </div>
        {{-- Akhir Tab Data Penduduk --}}

        <div class="tab-pane fade" id="navs-top-pekerjaan" role="tabpanel">
          <div class="row gx-5 pt-4 text-center">
            <div class="col-sm-6">
              <div class="card-title mb-0">
                <h3 class="m-0 me-2">Jumlah Penduduk</h3>
                <small class="text-muted"><em>Update : Senin, 17 Februari 2023</em></small>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex flex-column align-items-center gap-1">
                <h2 class="mb-1">8,258</h2>
                <span>Jiwa</span>
              </div>
            </div>
          </div>
          <label for="batas_wilayah" class="form-label ps-4 mt-2"><strong>Berdasarkan Jenis Kelamin</strong></label>
          <div class="container overflow-hidden text-center">
            <div class="row gx-5">
              <div class="col-sm-7">
                <li class="d-flex mt-3 mb-2 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-male'></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Laki-laki</h6>
                    </div>
                    <div class="user-progress">
                      <div class="input-group">
                        <input class="form-control" name="luas_wilayah" type="text" id="luas_wilayah" value="1234">
                        <span class="input-group-text">Jiwa</span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-2 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-danger"><i class='bx bx-female'></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Perempuan</h6>
                    </div>
                    <div class="user-progress">
                      <div class="input-group">
                        <input class="form-control" name="luas_wilayah" type="text" id="luas_wilayah" value="1234">
                        <span class="input-group-text">Jiwa</span>
                      </div>
                    </div>
                  </div>
                </li>
              </div>
              <div class="col-sm-5 my-auto">
                <svg id="SvgjsSvg1162" width="130" height="137.55" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1164" class="apexcharts-inner apexcharts-graphical" transform="translate(-7, 0)"><defs id="SvgjsDefs1163"><clipPath id="gridRectMasknetql33q"><rect id="SvgjsRect1166" width="150" height="173" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasknetql33q"></clipPath><clipPath id="nonForecastMasknetql33q"></clipPath><clipPath id="gridRectMarkerMasknetql33q"><rect id="SvgjsRect1167" width="145" height="172" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1168" class="apexcharts-pie"><g id="SvgjsG1169" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1170" r="44.835365853658544" cx="70.5" cy="70.5" fill="transparent"></circle><g id="SvgjsG1171" class="apexcharts-slices"><g id="SvgjsG1172" class="apexcharts-series apexcharts-pie-series" seriesName="Electronic" rel="1" data:realIndex="0"><path id="SvgjsPath1173" d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" fill="rgba(105,108,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="153" data:startAngle="0" data:strokeWidth="5" data:value="85" data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" stroke="#ffffff"></path></g><g id="SvgjsG1174" class="apexcharts-series apexcharts-pie-series" seriesName="Sports" rel="2" data:realIndex="1"><path id="SvgjsPath1175" d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" fill="rgba(133,146,163,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="27" data:startAngle="153" data:strokeWidth="5" data:value="15" data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" stroke="#ffffff"></path></g><g id="SvgjsG1176" class="apexcharts-series apexcharts-pie-series" seriesName="Decor" rel="3" data:realIndex="2"><path id="SvgjsPath1177" d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" fill="rgba(3,195,236,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="90" data:startAngle="180" data:strokeWidth="5" data:value="50" data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" stroke="#ffffff"></path></g><g id="SvgjsG1178" class="apexcharts-series apexcharts-pie-series" seriesName="Fashion" rel="4" data:realIndex="3"><path id="SvgjsPath1179" d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" fill="rgba(113,221,55,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="90" data:startAngle="270" data:strokeWidth="5" data:value="50" data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" stroke="#ffffff"></path></g></g></g><g id="SvgjsG1180" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1181" font-family="Helvetica, Arial, sans-serif" x="70.5" y="90.5" text-anchor="middle" dominant-baseline="auto" font-size="0.8125rem" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif; fill: rgb(161, 172, 184);">Weekly</text><text id="SvgjsText1182" font-family="Public Sans" x="70.5" y="71.5" text-anchor="middle" dominant-baseline="auto" font-size="1.5rem" font-weight="400" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">38%</text></g></g><line id="SvgjsLine1183" x1="0" y1="0" x2="141" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1184" x1="0" y1="0" x2="141" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1165" class="apexcharts-annotations"></g></svg>
              </div>
            </div>
          </div>
          <label for="batas_wilayah" class="form-label ps-4"><strong>Berdasarkan Usia</strong></label>
          <div class="container overflow-hidden text-center">
            <div class="row gx-5">
              <div class="col-sm-7">
                <li class="d-flex mt-3 mb-2 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-male'></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Usia 0-15 tahun</h6>
                    </div>
                    <div class="user-progress">
                      <div class="input-group">
                        <input class="form-control" name="luas_wilayah" type="text" id="luas_wilayah" value="1234">
                        <span class="input-group-text">Jiwa</span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-2 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-success"><i class='bx bx-male'></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Usia 15-65 tahun</h6>
                    </div>
                    <div class="user-progress">
                      <div class="input-group">
                        <input class="form-control" name="luas_wilayah" type="text" id="luas_wilayah" value="1234">
                        <span class="input-group-text">Jiwa</span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-2 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-warning"><i class='bx bx-male'></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Usia 65 tahun keatas</h6>
                    </div>
                    <div class="user-progress">
                      <div class="input-group">
                        <input class="form-control" name="luas_wilayah" type="text" id="luas_wilayah" value="1234">
                        <span class="input-group-text">Jiwa</span>
                      </div>
                    </div>
                  </div>
                </li>
              </div>
              <div class="col-sm-5 my-auto">
                <svg id="SvgjsSvg1162" width="130" height="137.55" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1164" class="apexcharts-inner apexcharts-graphical" transform="translate(-7, 0)"><defs id="SvgjsDefs1163"><clipPath id="gridRectMasknetql33q"><rect id="SvgjsRect1166" width="150" height="173" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasknetql33q"></clipPath><clipPath id="nonForecastMasknetql33q"></clipPath><clipPath id="gridRectMarkerMasknetql33q"><rect id="SvgjsRect1167" width="145" height="172" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1168" class="apexcharts-pie"><g id="SvgjsG1169" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1170" r="44.835365853658544" cx="70.5" cy="70.5" fill="transparent"></circle><g id="SvgjsG1171" class="apexcharts-slices"><g id="SvgjsG1172" class="apexcharts-series apexcharts-pie-series" seriesName="Electronic" rel="1" data:realIndex="0"><path id="SvgjsPath1173" d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" fill="rgba(105,108,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="153" data:startAngle="0" data:strokeWidth="5" data:value="85" data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" stroke="#ffffff"></path></g><g id="SvgjsG1174" class="apexcharts-series apexcharts-pie-series" seriesName="Sports" rel="2" data:realIndex="1"><path id="SvgjsPath1175" d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" fill="rgba(133,146,163,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="27" data:startAngle="153" data:strokeWidth="5" data:value="15" data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" stroke="#ffffff"></path></g><g id="SvgjsG1176" class="apexcharts-series apexcharts-pie-series" seriesName="Decor" rel="3" data:realIndex="2"><path id="SvgjsPath1177" d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" fill="rgba(3,195,236,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="90" data:startAngle="180" data:strokeWidth="5" data:value="50" data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" stroke="#ffffff"></path></g><g id="SvgjsG1178" class="apexcharts-series apexcharts-pie-series" seriesName="Fashion" rel="4" data:realIndex="3"><path id="SvgjsPath1179" d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" fill="rgba(113,221,55,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="90" data:startAngle="270" data:strokeWidth="5" data:value="50" data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" stroke="#ffffff"></path></g></g></g><g id="SvgjsG1180" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1181" font-family="Helvetica, Arial, sans-serif" x="70.5" y="90.5" text-anchor="middle" dominant-baseline="auto" font-size="0.8125rem" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif; fill: rgb(161, 172, 184);">Weekly</text><text id="SvgjsText1182" font-family="Public Sans" x="70.5" y="71.5" text-anchor="middle" dominant-baseline="auto" font-size="1.5rem" font-weight="400" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">38%</text></g></g><line id="SvgjsLine1183" x1="0" y1="0" x2="141" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1184" x1="0" y1="0" x2="141" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1165" class="apexcharts-annotations"></g></svg>
              </div>
            </div>
          </div>
          <div class="mt-2 mx-4 float-end">
            <button type="button" form="form_umum" class="btn btn-primary me-2" value="edit" id="edit-penduduk" onclick="active()">Edit</button>
            <button type="button" class="btn btn-outline-secondary" value="cancel" onclick="nonactive()" id="cancel-penduduk" >Cancel</button>
            <button type="submit" class="btn btn-primary me-2" value="save" onclick="nonactive()" id="save-penduduk" >Save Changes</button>
          </div>
        </div>

        <div class="tab-pane fade" id="navs-top-pendidikan" role="tabpanel">
          <div class="row gx-5 pt-4 text-center">
            <div class="col-sm-6">
              <div class="card-title mb-0">
                <h3 class="m-0 me-2">Jumlah Penduduk</h3>
                <small class="text-muted"><em>Update : Senin, 17 Februari 2023</em></small>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex flex-column align-items-center gap-1">
                <h2 class="mb-1">8,258</h2>
                <span>Jiwa</span>
              </div>
            </div>
          </div>
          <label for="batas_wilayah" class="form-label ps-4 mt-2"><strong>Berdasarkan Jenis Kelamin</strong></label>
          <div class="container overflow-hidden text-center">
            <div class="row gx-5">
              <div class="col-sm-7">
                <li class="d-flex mt-3 mb-2 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-male'></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Laki-laki</h6>
                    </div>
                    <div class="user-progress">
                      <div class="input-group">
                        <input class="form-control" name="luas_wilayah" type="text" id="luas_wilayah" value="1234">
                        <span class="input-group-text">Jiwa</span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-2 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-danger"><i class='bx bx-female'></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Perempuan</h6>
                    </div>
                    <div class="user-progress">
                      <div class="input-group">
                        <input class="form-control" name="luas_wilayah" type="text" id="luas_wilayah" value="1234">
                        <span class="input-group-text">Jiwa</span>
                      </div>
                    </div>
                  </div>
                </li>
              </div>
              <div class="col-sm-5 my-auto">
                <svg id="SvgjsSvg1162" width="130" height="137.55" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1164" class="apexcharts-inner apexcharts-graphical" transform="translate(-7, 0)"><defs id="SvgjsDefs1163"><clipPath id="gridRectMasknetql33q"><rect id="SvgjsRect1166" width="150" height="173" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasknetql33q"></clipPath><clipPath id="nonForecastMasknetql33q"></clipPath><clipPath id="gridRectMarkerMasknetql33q"><rect id="SvgjsRect1167" width="145" height="172" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1168" class="apexcharts-pie"><g id="SvgjsG1169" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1170" r="44.835365853658544" cx="70.5" cy="70.5" fill="transparent"></circle><g id="SvgjsG1171" class="apexcharts-slices"><g id="SvgjsG1172" class="apexcharts-series apexcharts-pie-series" seriesName="Electronic" rel="1" data:realIndex="0"><path id="SvgjsPath1173" d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" fill="rgba(105,108,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="153" data:startAngle="0" data:strokeWidth="5" data:value="85" data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" stroke="#ffffff"></path></g><g id="SvgjsG1174" class="apexcharts-series apexcharts-pie-series" seriesName="Sports" rel="2" data:realIndex="1"><path id="SvgjsPath1175" d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" fill="rgba(133,146,163,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="27" data:startAngle="153" data:strokeWidth="5" data:value="15" data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" stroke="#ffffff"></path></g><g id="SvgjsG1176" class="apexcharts-series apexcharts-pie-series" seriesName="Decor" rel="3" data:realIndex="2"><path id="SvgjsPath1177" d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" fill="rgba(3,195,236,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="90" data:startAngle="180" data:strokeWidth="5" data:value="50" data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" stroke="#ffffff"></path></g><g id="SvgjsG1178" class="apexcharts-series apexcharts-pie-series" seriesName="Fashion" rel="4" data:realIndex="3"><path id="SvgjsPath1179" d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" fill="rgba(113,221,55,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="90" data:startAngle="270" data:strokeWidth="5" data:value="50" data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" stroke="#ffffff"></path></g></g></g><g id="SvgjsG1180" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1181" font-family="Helvetica, Arial, sans-serif" x="70.5" y="90.5" text-anchor="middle" dominant-baseline="auto" font-size="0.8125rem" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif; fill: rgb(161, 172, 184);">Weekly</text><text id="SvgjsText1182" font-family="Public Sans" x="70.5" y="71.5" text-anchor="middle" dominant-baseline="auto" font-size="1.5rem" font-weight="400" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">38%</text></g></g><line id="SvgjsLine1183" x1="0" y1="0" x2="141" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1184" x1="0" y1="0" x2="141" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1165" class="apexcharts-annotations"></g></svg>
              </div>
            </div>
          </div>
          <label for="batas_wilayah" class="form-label ps-4"><strong>Berdasarkan Usia</strong></label>
          <div class="container overflow-hidden text-center">
            <div class="row gx-5">
              <div class="col-sm-7">
                <li class="d-flex mt-3 mb-2 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-male'></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Usia 0-15 tahun</h6>
                    </div>
                    <div class="user-progress">
                      <div class="input-group">
                        <input class="form-control" name="luas_wilayah" type="text" id="luas_wilayah" value="1234">
                        <span class="input-group-text">Jiwa</span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-2 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-success"><i class='bx bx-male'></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Usia 15-65 tahun</h6>
                    </div>
                    <div class="user-progress">
                      <div class="input-group">
                        <input class="form-control" name="luas_wilayah" type="text" id="luas_wilayah" value="1234">
                        <span class="input-group-text">Jiwa</span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-2 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-warning"><i class='bx bx-male'></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Usia 65 tahun keatas</h6>
                    </div>
                    <div class="user-progress">
                      <div class="input-group">
                        <input class="form-control" name="luas_wilayah" type="text" id="luas_wilayah" value="1234">
                        <span class="input-group-text">Jiwa</span>
                      </div>
                    </div>
                  </div>
                </li>
              </div>
              <div class="col-sm-5 my-auto">
                <svg id="SvgjsSvg1162" width="130" height="137.55" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1164" class="apexcharts-inner apexcharts-graphical" transform="translate(-7, 0)"><defs id="SvgjsDefs1163"><clipPath id="gridRectMasknetql33q"><rect id="SvgjsRect1166" width="150" height="173" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasknetql33q"></clipPath><clipPath id="nonForecastMasknetql33q"></clipPath><clipPath id="gridRectMarkerMasknetql33q"><rect id="SvgjsRect1167" width="145" height="172" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1168" class="apexcharts-pie"><g id="SvgjsG1169" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1170" r="44.835365853658544" cx="70.5" cy="70.5" fill="transparent"></circle><g id="SvgjsG1171" class="apexcharts-slices"><g id="SvgjsG1172" class="apexcharts-series apexcharts-pie-series" seriesName="Electronic" rel="1" data:realIndex="0"><path id="SvgjsPath1173" d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" fill="rgba(105,108,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="153" data:startAngle="0" data:strokeWidth="5" data:value="85" data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" stroke="#ffffff"></path></g><g id="SvgjsG1174" class="apexcharts-series apexcharts-pie-series" seriesName="Sports" rel="2" data:realIndex="1"><path id="SvgjsPath1175" d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" fill="rgba(133,146,163,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="27" data:startAngle="153" data:strokeWidth="5" data:value="15" data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" stroke="#ffffff"></path></g><g id="SvgjsG1176" class="apexcharts-series apexcharts-pie-series" seriesName="Decor" rel="3" data:realIndex="2"><path id="SvgjsPath1177" d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" fill="rgba(3,195,236,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="90" data:startAngle="180" data:strokeWidth="5" data:value="50" data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" stroke="#ffffff"></path></g><g id="SvgjsG1178" class="apexcharts-series apexcharts-pie-series" seriesName="Fashion" rel="4" data:realIndex="3"><path id="SvgjsPath1179" d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" fill="rgba(113,221,55,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="90" data:startAngle="270" data:strokeWidth="5" data:value="50" data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" stroke="#ffffff"></path></g></g></g><g id="SvgjsG1180" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1181" font-family="Helvetica, Arial, sans-serif" x="70.5" y="90.5" text-anchor="middle" dominant-baseline="auto" font-size="0.8125rem" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif; fill: rgb(161, 172, 184);">Weekly</text><text id="SvgjsText1182" font-family="Public Sans" x="70.5" y="71.5" text-anchor="middle" dominant-baseline="auto" font-size="1.5rem" font-weight="400" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">38%</text></g></g><line id="SvgjsLine1183" x1="0" y1="0" x2="141" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1184" x1="0" y1="0" x2="141" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1165" class="apexcharts-annotations"></g></svg>
              </div>
            </div>
          </div>
          <div class="mt-2 mx-4 float-end">
            <button type="button" form="form_umum" class="btn btn-primary me-2" value="edit" id="edit-penduduk" onclick="active()">Edit</button>
            <button type="button" class="btn btn-outline-secondary" value="cancel" onclick="nonactive()" id="cancel-penduduk" >Cancel</button>
            <button type="submit" class="btn btn-primary me-2" value="save" onclick="nonactive()" id="save-penduduk" >Save Changes</button>
          </div>
        </div>
        <div class="tab-pane fade" id="navs-top-sarana" role="tabpanel">
          <div class="row gx-5 pt-4 text-center">
            <div class="col-sm-6">
              <div class="card-title mb-0">
                <h3 class="m-0 me-2">Jumlah Penduduk</h3>
                <small class="text-muted"><em>Update : Senin, 17 Februari 2023</em></small>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex flex-column align-items-center gap-1">
                <h2 class="mb-1">8,258</h2>
                <span>Jiwa</span>
              </div>
            </div>
          </div>
          <label for="batas_wilayah" class="form-label ps-4 mt-2"><strong>Berdasarkan Jenis Kelamin</strong></label>
          <div class="container overflow-hidden text-center">
            <div class="row gx-5">
              <div class="col-sm-7">
                <li class="d-flex mt-3 mb-2 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-male'></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Laki-laki</h6>
                    </div>
                    <div class="user-progress">
                      <div class="input-group">
                        <input class="form-control" name="luas_wilayah" type="text" id="luas_wilayah" value="1234">
                        <span class="input-group-text">Jiwa</span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-2 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-danger"><i class='bx bx-female'></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Perempuan</h6>
                    </div>
                    <div class="user-progress">
                      <div class="input-group">
                        <input class="form-control" name="luas_wilayah" type="text" id="luas_wilayah" value="1234">
                        <span class="input-group-text">Jiwa</span>
                      </div>
                    </div>
                  </div>
                </li>
              </div>
              <div class="col-sm-5 my-auto">
                <svg id="SvgjsSvg1162" width="130" height="137.55" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1164" class="apexcharts-inner apexcharts-graphical" transform="translate(-7, 0)"><defs id="SvgjsDefs1163"><clipPath id="gridRectMasknetql33q"><rect id="SvgjsRect1166" width="150" height="173" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasknetql33q"></clipPath><clipPath id="nonForecastMasknetql33q"></clipPath><clipPath id="gridRectMarkerMasknetql33q"><rect id="SvgjsRect1167" width="145" height="172" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1168" class="apexcharts-pie"><g id="SvgjsG1169" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1170" r="44.835365853658544" cx="70.5" cy="70.5" fill="transparent"></circle><g id="SvgjsG1171" class="apexcharts-slices"><g id="SvgjsG1172" class="apexcharts-series apexcharts-pie-series" seriesName="Electronic" rel="1" data:realIndex="0"><path id="SvgjsPath1173" d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" fill="rgba(105,108,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="153" data:startAngle="0" data:strokeWidth="5" data:value="85" data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" stroke="#ffffff"></path></g><g id="SvgjsG1174" class="apexcharts-series apexcharts-pie-series" seriesName="Sports" rel="2" data:realIndex="1"><path id="SvgjsPath1175" d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" fill="rgba(133,146,163,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="27" data:startAngle="153" data:strokeWidth="5" data:value="15" data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" stroke="#ffffff"></path></g><g id="SvgjsG1176" class="apexcharts-series apexcharts-pie-series" seriesName="Decor" rel="3" data:realIndex="2"><path id="SvgjsPath1177" d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" fill="rgba(3,195,236,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="90" data:startAngle="180" data:strokeWidth="5" data:value="50" data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" stroke="#ffffff"></path></g><g id="SvgjsG1178" class="apexcharts-series apexcharts-pie-series" seriesName="Fashion" rel="4" data:realIndex="3"><path id="SvgjsPath1179" d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" fill="rgba(113,221,55,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="90" data:startAngle="270" data:strokeWidth="5" data:value="50" data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" stroke="#ffffff"></path></g></g></g><g id="SvgjsG1180" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1181" font-family="Helvetica, Arial, sans-serif" x="70.5" y="90.5" text-anchor="middle" dominant-baseline="auto" font-size="0.8125rem" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif; fill: rgb(161, 172, 184);">Weekly</text><text id="SvgjsText1182" font-family="Public Sans" x="70.5" y="71.5" text-anchor="middle" dominant-baseline="auto" font-size="1.5rem" font-weight="400" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">38%</text></g></g><line id="SvgjsLine1183" x1="0" y1="0" x2="141" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1184" x1="0" y1="0" x2="141" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1165" class="apexcharts-annotations"></g></svg>
              </div>
            </div>
          </div>
          <label for="batas_wilayah" class="form-label ps-4"><strong>Berdasarkan Usia</strong></label>
          <div class="container overflow-hidden text-center">
            <div class="row gx-5">
              <div class="col-sm-7">
                <li class="d-flex mt-3 mb-2 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-male'></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Usia 0-15 tahun</h6>
                    </div>
                    <div class="user-progress">
                      <div class="input-group">
                        <input class="form-control" name="luas_wilayah" type="text" id="luas_wilayah" value="1234">
                        <span class="input-group-text">Jiwa</span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-2 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-success"><i class='bx bx-male'></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Usia 15-65 tahun</h6>
                    </div>
                    <div class="user-progress">
                      <div class="input-group">
                        <input class="form-control" name="luas_wilayah" type="text" id="luas_wilayah" value="1234">
                        <span class="input-group-text">Jiwa</span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-2 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-warning"><i class='bx bx-male'></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Usia 65 tahun keatas</h6>
                    </div>
                    <div class="user-progress">
                      <div class="input-group">
                        <input class="form-control" name="luas_wilayah" type="text" id="luas_wilayah" value="1234">
                        <span class="input-group-text">Jiwa</span>
                      </div>
                    </div>
                  </div>
                </li>
              </div>
              <div class="col-sm-5 my-auto">
                <svg id="SvgjsSvg1162" width="130" height="137.55" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1164" class="apexcharts-inner apexcharts-graphical" transform="translate(-7, 0)"><defs id="SvgjsDefs1163"><clipPath id="gridRectMasknetql33q"><rect id="SvgjsRect1166" width="150" height="173" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasknetql33q"></clipPath><clipPath id="nonForecastMasknetql33q"></clipPath><clipPath id="gridRectMarkerMasknetql33q"><rect id="SvgjsRect1167" width="145" height="172" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1168" class="apexcharts-pie"><g id="SvgjsG1169" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1170" r="44.835365853658544" cx="70.5" cy="70.5" fill="transparent"></circle><g id="SvgjsG1171" class="apexcharts-slices"><g id="SvgjsG1172" class="apexcharts-series apexcharts-pie-series" seriesName="Electronic" rel="1" data:realIndex="0"><path id="SvgjsPath1173" d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" fill="rgba(105,108,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="153" data:startAngle="0" data:strokeWidth="5" data:value="85" data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" stroke="#ffffff"></path></g><g id="SvgjsG1174" class="apexcharts-series apexcharts-pie-series" seriesName="Sports" rel="2" data:realIndex="1"><path id="SvgjsPath1175" d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" fill="rgba(133,146,163,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="27" data:startAngle="153" data:strokeWidth="5" data:value="15" data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" stroke="#ffffff"></path></g><g id="SvgjsG1176" class="apexcharts-series apexcharts-pie-series" seriesName="Decor" rel="3" data:realIndex="2"><path id="SvgjsPath1177" d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" fill="rgba(3,195,236,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="90" data:startAngle="180" data:strokeWidth="5" data:value="50" data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" stroke="#ffffff"></path></g><g id="SvgjsG1178" class="apexcharts-series apexcharts-pie-series" seriesName="Fashion" rel="4" data:realIndex="3"><path id="SvgjsPath1179" d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" fill="rgba(113,221,55,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="90" data:startAngle="270" data:strokeWidth="5" data:value="50" data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" stroke="#ffffff"></path></g></g></g><g id="SvgjsG1180" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1181" font-family="Helvetica, Arial, sans-serif" x="70.5" y="90.5" text-anchor="middle" dominant-baseline="auto" font-size="0.8125rem" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif; fill: rgb(161, 172, 184);">Weekly</text><text id="SvgjsText1182" font-family="Public Sans" x="70.5" y="71.5" text-anchor="middle" dominant-baseline="auto" font-size="1.5rem" font-weight="400" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">38%</text></g></g><line id="SvgjsLine1183" x1="0" y1="0" x2="141" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1184" x1="0" y1="0" x2="141" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1165" class="apexcharts-annotations"></g></svg>
              </div>
            </div>
          </div>
          <div class="mt-2 mx-4 float-end">
            <button type="button" form="form_umum" class="btn btn-primary me-2" value="edit" id="edit-penduduk" onclick="active()">Edit</button>
            <button type="button" class="btn btn-outline-secondary" value="cancel" onclick="nonactive()" id="cancel-penduduk" >Cancel</button>
            <button type="submit" class="btn btn-primary me-2" value="save" onclick="nonactive()" id="save-penduduk" >Save Changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
    function active(){
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

    $("#cancel, #save, #cancel-umum, #save-umum, #cancel-penduduk, #save-penduduk").hide();

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

    //  Button Umum
    $('#edit-umum').click(function() {
        $(this).hide();
        $('#save-umum, #cancel-umum').show();
      });

    $('#cancel-umum').click(function() {
      $('#edit-umum').show();
      $('#save-umum, #cancel-umum').hide();
    });
      
    $('#save-umum').click(function() {
      $(this).hide();
      $('#cancel-umum').hide();
      $('#edit-umum').show();
    });

    //  Button Penduduk
    $('#edit-penduduk').click(function() {
        $(this).hide();
        $('#save-penduduk, #cancel-penduduk').show();
      });

    $('#cancel-penduduk').click(function() {
      $('#edit-penduduk').show();
      $('#save-penduduk, #cancel-penduduk').hide();
    });
      
    $('#save-penduduk').click(function() {
      $(this).hide();
      $('#cancel-penduduk').hide();
      $('#edit-penduduk').show();
    });

    </script>
@endsection