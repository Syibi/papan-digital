<div class="col-md-6 mb-2 mx-auto d-flex justify-content-center align-content-center"
    style="background-color: #24293D; border-radius:10px">
    <h4 style="margin-bottom: 10px; margin-top:10px; color:white"><strong>Papan Data {{ $title }}</strong></h4>
</div>
<div id="carouselDesa" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" style="box-shadow: none; border-radius:0; ">
        @php($first = true)
        @foreach ($papandata as $key => $item)
            @if ($item->kategori == $id)
                <div class="carousel-item {{ $first == true ? 'active' : '' }}" style="width: 100%;"
                    data-bs-interval="5000">
                    {{ $first = false }}
                    <p class="d-flex justify-content-center align-content-center mt-2 mb-4"
                        style="color: #24293D; font-weight:700">{{ $item->nama_papan }}</p>
                    <img class="d-block w-100" alt="..."
                        style="object-fit: contain;
                            height:60vh;
                            border-radius: 0.5rem 0.5rem 0.5rem 0.5rem;
                            background-color:white"
                        src="{{ asset('upload/papan_data/' . $item->file) }}">
                </div>
            @endif
        @endforeach
    </div>
</div>
