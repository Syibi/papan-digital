@extends('admin.layout')

@section('container')
    <div class="container-xxl flex-grow-1 my-3">
        <div class="card px-2"
            style=" height: 79vh; 
              background-repeat:no-repeat; 
              background-size: contain; 
              background-image:url({{ asset('assets/img/backgrounds/bg-slide.png') }});
              background-position:-2px;
              ">
            <div class="row px-1" style="height: 100%; background-image: {{ asset('assets/img/backgrounds/bg-slide.png') }}">
                <div class="col-7 my-auto h-90" style="padding-left:1px">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000">
                        <div class="carousel-indicators">
                            @foreach ($slide as $key => $item)
                                <button type="button" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"
                                    aria-current="true" aria-label="{{ $key + 1 }}">
                                </button>
                            @endforeach
                        </div>
                        <div class="carousel-inner" style="box-shadow: none; border-radius:0; ">
                            @foreach ($slide as $key => $item)
                                <div class="carousel-item {{ $key == 1 ? 'active' : '' }}" style="width: 100%;">
                                    @if ($item->tipe == 0)
                                        {{-- Slide Gambar --}}
                                        <img src="{{ asset('upload/slide/' . $item->file) }}" class="d-block w-100"
                                            alt="..."
                                            style="object-fit: fill;
                                              height:47vh;
                                              border-radius: 0 0.5rem 0.5rem 0;
                                              box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);">
                                    @else
                                        {{-- Slide Video --}}
                                        <video class="img-fluid" autoplay loop muted
                                            style="border-radius: 0 0.5rem 0.5rem 0;
                                              box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);">
                                            <source src={{ asset('upload/slide/' . $item->file) }}
                                                class="d-block w-100 h-100" type="video/mp4" />
                                        </video>
                                    @endif
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4 style="margin-bottom: 5pt">{{ $item->judul }}</h4>
                                        <p style="margin-bottom: 0">{{ $item->deskripsi }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-5 my-auto" style="padding-top:1%">
                    <div class="row mb-4">
                        <div class="col align-self-end">
                            <h4 class="m-0" style="color: #f77223; text-align:right;padding-right:20px">
                                <strong>{{ date('Y') }}</strong>
                            </h4>
                            <h5 class="m-0" style="text-transform: uppercase; text-align:right; padding-right:20px">
                                <strong>
                                    {{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM') }}
                                </strong>
                            </h5>
                        </div>
                    </div>
                    <div class="row px-2">

                        <div id="carouselExample" class="carousel slide" style="padding-right:22px">
                            <div class="carousel-inner" style="height: 62vh; border:none; box-shadow:none; border-radius:0">
                                <div class="carousel-item active" style="object-fit: contain">
                                    <img src="../assets/img/backgrounds/selamat datang.png" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item" style="object-fit: contain">
                                    <h3 style="color: #566a7f"><strong>Data Penduduk</strong></h3>
                                    <span>Berdasarkan Jenis Kelamin</span>
                                    <div class="row" style="padding-left:25px;padding-right:25px">
                                        {!! $chart_jk->container() !!}
                                    </div>
                                    <span>Berdasarkan Usia</span>
                                    {!! $chart_usia->container() !!}
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
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
    <script src="{{ $chart_jk->cdn() }}"></script>
    <script src="{{ $chart_usia->cdn() }}"></script>
    {{ $chart_jk->script() }}
    {{ $chart_usia->script() }}
@endsection
