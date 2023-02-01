@extends('admin.layout')

@section('container')
    <div class="container-xxl flex-grow-1 my-3">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner"
              style="
                box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);
                border-radius: 0.5rem;
              "
            >
            @foreach ($slide as $key => $item)
              <div class="carousel-item {{ $key == 1 ? 'active':''}}" style="width: 100%; height:79vh">
                <img src="{{ asset("upload/slide/".$item->gambar)}}" class="d-block w-100" alt="..." style="object-fit: cover; height:79vh">
                <div class="carousel-caption d-none d-md-block">
                  <h3>{{ $item->judul }}</h3>
                  <p>{{ $item->deskripsi }}</p>
                </div>
              </div>
            @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        {{-- Button Edit Beranda --}}
        <a href="/edit-beranda" type="button" class="btn btn-lg rounded-pill btn-icon btn-primary" 
        style="
              position: fixed;
              right: 5%;
              bottom:10%;
              display:block;
              z-index:10;
              ">
          <i class='bx bxs-pencil' style="margin-top: 9pt; font-size:1.5rem"></i>
        </a>
    </div>
@endsection