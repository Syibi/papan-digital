@foreach ($kategori as $item)
@php ($idTab = str_replace(' ', '', $item->kategori))
    <div class="tab-pane fade" id="navs-{{ $idTab }}" role="tabpanel">
        <h5 class="mb-3">{{ $item->kategori }}</h5>
        <div class="accordion mt-3" id="accordion{{ $item->id }}">
            @php($no = 1)
            @foreach ($proker as $itemProker)
                @php($idProker = str_replace(' ', '', $itemProker->program))
                @if ($itemProker->kategori == $item->kategori)
                    <div class="card accordion-item">
                        <h2 class="accordion-header" id="heading-{{ $idProker }}">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#accordion-{{ $idProker }}" aria-expanded="false"
                                aria-controls="accordion-{{ $idProker }}">
                                <strong>{{ $no++ }}. {{ $itemProker->program }}</strong>
                            </button>
                        </h2>
                        <div id="accordion-{{ $idProker }}" class="accordion-collapse collapse"
                            aria-labelledby="heading-{{ $idProker }}"
                            data-bs-parent="#accordion{{ $item->id }}" style="">
                            <div class="accordion-body">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <a href="#modalCenter-{{ $idProker }}" data-bs-toggle="modal"
                                            type="button">
                                            <img class="card-img card-img-left"
                                                src="{{ asset('upload/proker/' . $itemProker->file) }}"
                                                alt="Card image">
                                        </a>
                                        <p class="card-text mt-2"><small class="text-muted">Update :
                                                {{ $itemProker->updated_at }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-8">
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
                                            @if (Request::is('admin/*'))
                                                <div class="modal-footer mt-3"
                                                    style="
                                                    padding: 0.25rem 0rem 0.25rem">
                                                    <a href="{{ url('admin/' . $tipe . '/' . $itemProker->id . '/delete-proker') }}"
                                                        type="button" class="btn btn-sm btn-outline-danger">
                                                        <span class="bx bx-trash"></span> Hapus Proker
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endforeach
