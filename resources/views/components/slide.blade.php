<div>
    <div class="card px-2"
        style=" height: 79vh; 
      background-repeat:no-repeat; 
      background-size: contain; 
      background-image:url({{ asset('assets/img/backgrounds/bg-slide.png') }});
      background-position:-2px;
      ">
        <div class="row px-1" style="height: 100%; background-image: {{ asset('assets/img/backgrounds/bg-slide.png') }}">
            <div class="col-7 my-auto h-90" style="padding-left:1px">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
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
                            <div class="carousel-item {{ $key == 1 ? 'active' : '' }}" style="width: 100%;"
                                data-bs-interval="20000">
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

                {{-- Carousel Kanan --}}
                <div class="row px-2">
                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" style="padding-right:22px">
                        <div class="carousel-inner" style="height: 62vh; border:none; box-shadow:none; border-radius:0">
                            <div class="carousel-item active" style="object-fit: contain">
                                <img src="../assets/img/backgrounds/selamat datang.png" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item" style="object-fit: contain">
                                <h3 style="color: #566a7f"><strong>Data Penduduk</strong></h3>
                                <span>Berdasarkan Jenis Kelamin</span>
                                <div class="row" style="padding-left:25px;padding-right:25px">
                                    {!! $chartjk->container() !!}
                                </div>
                                <span>Berdasarkan Usia</span>
                                {!! $chartusia->container() !!}
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
</div>
