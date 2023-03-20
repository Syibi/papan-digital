@extends('admin.layout')

@section('container')
    <div class="container-xxl flex-grow-1 my-3">
        <div class="nav-align-top mb-2">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-galeri" aria-controls="navs-top-galeri" aria-selected="true">
                        Galeri
                    </button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="navs-top-galeri" role="tabpanel">
                    <div class="row text-center text-lg-start">
                        @foreach ($galeri as $key => $item)
                            <div class="col-lg-3 col-md-4 col-6 mb-3">
                                <span style="position: relative">
                                    <a href="{{ url('galeri-desa/' . $item->id . '/delete') }}" id="delete-btn"
                                        type="button" class="btn btn-icon btn-danger hidden"
                                        style="
                                    display: inline-block;
                                    position: absolute;
                                    transform: translate(-50%,-50%);
                                    top: 50%;
                                    left: 50%;
                                    z-index: 1000;
                                    ">
                                        <span class="tf-icons bx bx-trash" style="margin-top: 9px"></span></a>
                                    <a href="#" class="d-block mb-4 h-100" data-bs-toggle="modal"
                                        data-bs-target="#modalCenter">
                                        @if ($item->tipe == 0)
                                            <img class="img-fluid img-thumbnail"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                src="{{ asset('upload/galeri/' . $item->file) }}">
                                        @else
                                            <video class="img-fluid img-thumbnail" autoplay loop muted
                                                style="width:100%;height:100%;object-fit:cover;">
                                                <source src={{ asset('upload/galeri/' . $item->file) }}
                                                    class="d-block
                                                w-100 h-100"
                                                    type="video/mp4" />
                                            </video>
                                        @endif
                                    </a>
                                </span>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-4 d-flex justify-content-center">
                        {!! $galeri->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalCenter" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document" style="height: auto">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        style="background-color: #ff3e1d; color:white"></button>
                </div>
                <div class="modal-body" style="padding-top: 0">
                    <div id="carouselExample" class="carousel carousel-dark slide" data-bs-ride="true" style="height:75vh">
                        <div class="carousel-indicators">
                            @foreach ($allGaleri as $key => $item)
                                <button type="button" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"
                                    aria-current="true" aria-label="{{ $key + 1 }}">
                                </button>
                            @endforeach
                        </div>
                        <div class="carousel-inner" style="box-shadow: none; border-radius:0; height:62vh">
                            @foreach ($allGaleri as $key => $item)
                                <div class="carousel-item {{ $key == 1 ? 'active' : '' }}" style="width: 100%;">
                                    @if ($item->tipe == 0)
                                        {{-- Slide Gambar --}}
                                        <img src="{{ asset('upload/galeri/' . $item->file) }}" class="d-block w-100"
                                            alt="..."
                                            style="
                                            object-fit: contain;
                                            min-width: 100%; 
                                            min-height: 100%;
                                            width: auto; 
                                            height: auto; 
                                            box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);">
                                    @else
                                        {{-- Slide Video --}}
                                        <video class="img-fluid" autoplay loop
                                            style="
                                            position: absolute; 
                                            min-width: 100%; 
                                            min-height: 120%;
                                            width: auto; 
                                            height: auto; 
                                            background-size: cover;
                                            box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);">
                                            <source src={{ asset('upload/galeri/' . $item->file) }}
                                                class="d-block w-100 h-100" type="video/mp4" />
                                        </video>
                                    @endif
                                    <div class="carousel-caption d-none d-md-block" style="position: fixed; bottom:90px">
                                        <h4 style="margin-bottom: 0"><strong>{{ $item->caption }}</strong></h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
