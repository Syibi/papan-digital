<div id="carouselPKK" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" style="box-shadow: none; border-radius:0; ">
        @php($first = true)
        @foreach ($kategoriPkk as $item)
            @foreach ($prokerPkk as $itemProker)
                @if ($itemProker->kategori == $item->kategori)
                    <div class="carousel-item {{ $first == true ? 'active' : '' }}" style="width: 100%;"
                        data-bs-interval="2000">
                        {{ $first = false }}
                        <img src="{{ asset('upload/proker/' . $itemProker->file) }}" class="d-block w-100" alt="..."
                            style="object-fit: fill;
                            height:47vh;
                            border-radius: 0 0.5rem 0.5rem 0;
                            box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);">
                        <div class="carousel-caption d-none d-md-block">
                            <h4 style="margin-bottom: 5pt">Kategori : {{ $item->kategori }}</h4>
                            <p style="margin-bottom: 0">Nama Program : {{ $itemProker->program }}</p>
                            <p style="margin-bottom: 0">Kegiatan : {{ $itemProker->kegiatan }}</p>
                            <p style="margin-bottom: 0">Pelaksanaan : {{ $itemProker->pelaksanaan }}</p>
                            <p style="margin-bottom: 0">Sasaran : {{ $itemProker->sasaran }}</p>
                            <p style="margin-bottom: 0">Sumber Dana : {{ $itemProker->sumber_dana }}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
    </div>
</div>
