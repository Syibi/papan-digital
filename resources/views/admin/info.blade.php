@extends('admin.layout')

@section('container')
  <div class="container-xxl flex-grow-1 my-3">
    <div class="nav-align-top mb-4">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-profil" aria-controls="navs-top-home" aria-selected="true">
            Profil Desa
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-umum" aria-controls="navs-top-profile" aria-selected="false">
            Data Umum
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-penduduk" aria-controls="navs-top-messages" aria-selected="false">
            Data Penduduk 
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-pekerjaan" aria-controls="navs-top-messages" aria-selected="false">
            Data Pekerjaan
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-pendidikan" aria-controls="navs-top-messages" aria-selected="false">
            Data Pendidikan
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-sarana" aria-controls="navs-top-messages" aria-selected="false">
            Data Sarana Prasarana
          </button>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade active show" id="navs-top-profil" role="tabpanel">
            <img src="../assets/img/avatars/logo-desa.png" width="9%" class="mt-2 mb-2 mx-auto d-block"/>
            <div class="divider">
              <div class="divider-text">Profil Desa</div>
            </div>
          <form action="{{url('/info/updateprofil')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT');
            <div class="row mx-3 justify-content-evenly">
              <div class="mb-1 col-5">
                <label for="nama_desa" class="form-label">Nama Desa</label>
                <input class="form-control-plaintext" type="text" id="profil" name="nama_desa" readonly="true" value="{{ $profil["nama_desa"] }}">
              </div>
              <div class="mb-1 col-5">
                <label for="kode_pos" class="form-label">Nomer Kode Pos</label>
                <input class="form-control-plaintext" type="text" id="profil" name="kode_pos" readonly="true" 
                value="{{ $profil["kode_pos"]}}">
              </div>
              <div class="mb-1 col-5">
                <label for="tahun_pembentukan" class="form-label">Tahun Pembentukan</label>
                <input class="form-control-plaintext" type="text" id="profil" name="tahun_pembentukan" readonly="true" value="{{ $profil["tahun_pembentukan"]}}" >
              </div>
              <div class="mb-1 col-5">
                <label for="kecamatan" class="form-label">Kecamatan</label>
                <input class="form-control-plaintext" type="text" id="profil" name="kecamatan" readonly="true" 
                value="{{ $profil["kecamatan"] }}">
              </div>
              <div class="mb-1 col-5">
                <label for="dasar_hukum" class="form_label">Dasar Hukum Pembentukan</label>
                <input class="form-control-plaintext" type="text" id="profil" name="dasar_hukum" readonly="true" 
                value="{{ $profil["dasar_hukum"] }}">
              </div>
              <div class="mb-1 col-5">
                <label for="kabupaten" class="form-label">Kabupaten/Kota</label>
                <input class="form-control-plaintext" type="text" id="profil" name="kabupaten" readonly="true" 
                value="{{ $profil["kabupaten"] }}">
              </div>
              <div class="mb-1 col-5">
                <label for="kode_wilayah" class="form-label">Nomor Kode Wilayah</label>
                <input class="form-control-plaintext" type="text" id="profil" name="kode_wilayah" readonly="true" 
                value="{{ $profil["kode_wilayah"] }}">
              </div>
              <div class="mb-1 col-5">
                <label for="provinsi" class="form-label">Provinsi</label>
                <input class="form-control-plaintext" type="text" id="profil" name="provinsi" readonly="true" 
                value="{{ $profil["provinsi"] }}">
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
          <p>
            Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice
            cream. Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream
            cheesecake fruitcake.
          </p>
          <p class="mb-0">
            Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah
            cotton candy liquorice caramels.
          </p>
        </div>
        <div class="tab-pane fade" id="navs-top-penduduk" role="tabpanel">
          <p>
            Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies
            cupcake gummi bears cake chocolate.
          </p>
          <p class="mb-0">
            Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet
            roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly
            jelly-o tart brownie jelly.
          </p>
        </div>
        <div class="tab-pane fade" id="navs-top-pekerjaan" role="tabpanel">
          <p>
            Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice
            cream. Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream
            cheesecake fruitcake.
          </p>
          <p class="mb-0">
            Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah
            cotton candy liquorice caramels.
          </p>
        </div>
        <div class="tab-pane fade" id="navs-top-pendidikan" role="tabpanel">
          <p>
            Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies
            cupcake gummi bears cake chocolate.
          </p>
          <p class="mb-0">
            Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet
            roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly
            jelly-o tart brownie jelly.
          </p>
        </div>
        <div class="tab-pane fade" id="navs-top-sarana" role="tabpanel">
          <p>
            Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice
            cream. Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream
            cheesecake fruitcake.
          </p>
          <p class="mb-0">
            Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah
            cotton candy liquorice caramels.
          </p>
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
    $("#cancel, #save").hide();
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