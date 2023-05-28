<div id="carouselDesa" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" style="box-shadow: none; border-radius:0; ">
        @php($first = true)
        @foreach ($kategoriPkk as $item)
            @foreach ($prokerPkk as $itemProker)
                @if ($itemProker->kategori == $item->kategori)
                    <div class="carousel-item {{ $first == true ? 'active' : '' }}" style="width: 100%;"
                        data-bs-interval="5000">
                        {{ $first = false }}
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img class="card-img" src="{{ asset('upload/proker/' . $itemProker->file) }}"
                                    alt="Card image">
                                <p class="card-text mt-2"><small class="text-muted">Update :
                                        {{ $itemProker->updated_at }}</small>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body mt-0" style="padding-top: 0; padding-bottom:0">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="card-title">Nama Program</th>
                                                <td>: {{ $itemProker->program }}</td>
                                            </tr>
                                            <tr>
                                                <th>Kegiatan</th>
                                                <td>: {{ $itemProker->kegiatan }}</td>
                                            </tr>
                                            <tr>
                                                <th>Pelaksanaan</th>
                                                <td>: {{ $itemProker->pelaksanaan }}</td>
                                            </tr>
                                            <tr>
                                                <th>Sasaran</th>
                                                <td>: {{ $itemProker->sasaran }}</td>
                                            </tr>
                                            <tr>
                                                <th>Sumber Dana</th>
                                                <td>: {{ $itemProker->sumber_dana }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
    </div>
</div>
