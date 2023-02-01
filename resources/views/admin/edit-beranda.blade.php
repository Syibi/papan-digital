@extends('admin.layout')

@section('container')
    <div class="container-xxl flex-grow-1 my-3">
      @if (session('status'))
          <h6 class="alert alert-success alert-dismissible" role="alert">{{ session ('status') }}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></h6>
      @endif

      <div class="nav-align-top mb-4">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">
              Data Slide
            </button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">
              Tambah Slide
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
            <p>
              Icing pastry pudding oat cake. Lemon drops cotton candy caramels cake caramels sesame snaps
              powder. Bear claw candy topping.
            </p>
            <p class="mb-0">
              Tootsie roll fruitcake cookie. Dessert topping pie. Jujubes wafer carrot cake jelly. Bonbon
              jelly-o jelly-o ice cream jelly beans candy canes cake bonbon. Cookie jelly beans marshmallow
              jujubes sweet.
            </p>
            <div class="card mt-3">
              <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID.</th>
                      <th>Judul</th>
                      <th>Deskripsi</th>
                      <th>Status</th>
                      <th>Gambar</th>
                      {{-- <th>Actions</th> --}}
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    @foreach ($slide as $item)
                        <tr>
                          <td>{{ $item->id }}</td>
                          <td>{{ $item->judul }}</td>
                          <td>{{ $item->deskripsi }}</td>
                          <td>{{ $item->status }}</td>
                          <td>
                            <img src="{{ asset("upload/slide/".$item->gambar)}}" width="70px" height="70px" alt="image">
                          </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
          </div>
          </div>
          <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
            <p>
              Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice
              cream. Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream
              cheesecake fruitcake.
            </p>
            <p class="mb-0">
              Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah
              cotton candy liquorice caramels.
            </p>
            <form action="{{url('/tambah-beranda')}}" method="post" enctype="multipart/form-data">
              @csrf  
              <div class="row">
                <div class="col">
                  <div class="form-group mt-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul Slide" aria-describedby="judul">
                  </div>
                  <div class="form-group mt-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group mt-3">
                    <label for="gambar" class="form-label">Default file input example</label>
                    <input class="form-control" name="gambar" type="file" id="gambar">
                  </div>
                  <div class="form-check form-switch mt-3">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Aktifkan Slide</label>
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                  </div>
                  <div class="form-group mt-3 pt-4">
                    <div class="row justify-content-end">
                      <div class="col-auto" style="padding-left:0">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                      </div>
                      <div class="col-auto" style="padding-left: 0;">
                        <button type="cancel" class="btn btn-outline-primary">Batal</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection