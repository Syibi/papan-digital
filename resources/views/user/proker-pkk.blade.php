@extends('admin.layout')

@section('container')
    <div class="container-xxl flex-grow-1 my-3">
        <div class="nav-align-top mb-4">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @foreach ($kategori as $item)
                    <li class="nav-item">
                        <button onclick="tabsclicked('{{ $item->kategori }}')" type="button" class="nav-link" role="tab"
                            data-bs-toggle="tab" data-bs-target="#navs-{{ $item->kategori }}"
                            aria-controls="navs-{{ $item->kategori }}" aria-selected="false">
                            <strong>{{ $item->kategori }}</strong>
                        </button>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content" id="tabContent">
                @foreach ($kategori as $item)
                    <div class="tab-pane fade" id="navs-{{ $item->kategori }}" role="tabpanel">
                        <h5 class="mb-3">{{ $item->kategori }}</h5>
                        <div class="accordion mt-3" id="accordion{{ $item->id }}">
                            @php($no = 1)
                            @foreach ($proker as $itemProker)
                                @php($idProker = str_replace(' ', '', $itemProker->program))
                                @if ($itemProker->kategori == $item->kategori)
                                    <div class="card accordion-item">
                                        <h2 class="accordion-header" id="heading-{{ $idProker }}">
                                            <button type="button" class="accordion-button collapsed"
                                                data-bs-toggle="collapse" data-bs-target="#accordion-{{ $idProker }}"
                                                aria-expanded="false" aria-controls="accordion-{{ $idProker }}">
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
                                                        <div class="card-body mt-0"
                                                            style="padding-top: 0; padding-bottom:0">
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
                                                            <div class="modal-footer mt-3"
                                                                style="
                                                                padding: 0.25rem 0rem 0.25rem">
                                                                <a href="{{ url('proker-pkk/' . $itemProker->id . '/delete-proker') }}"
                                                                    type="button" class="btn btn-sm btn-outline-danger">
                                                                    <span class="bx bx-trash"></span> Hapus Proker
                                                                </a>
                                                            </div>
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
                    </li>
                @endforeach
            </div>
        </div>
        @foreach ($proker as $itemProker)
            @php($idProker = str_replace(' ', '', $itemProker->program))
            <!-- Modal show proker image-->
            <div class="modal fade" id="modalCenter-{{ $idProker }}" tabindex="-1" style="display: none;"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">
                                Dokumentasi
                                Kegiatan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('upload/proker/' . $itemProker->file) }}" class="d-block w-100"
                                alt="..."
                                style="
                                    object-fit: contain;
                                    min-width: 100%; 
                                    min-height: 100%;
                                    width: auto; 
                                    height: auto; 
                                    box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <script type="text/javascript">
        let allTab = Array.from(document.getElementById('tabContent').children);

        function tabsclicked(tabs) {
            var tabName = 'navs-' + tabs
            allTab.forEach(element => {
                var activeTab = element.classList;
                if (element.id == tabName) {
                    activeTab.add('active', 'show');
                } else {
                    activeTab.remove('active', 'show');
                }
            });
            // var activeTab = document.getElementById(tabName)
        }

        function checkAccordion(accordionid) {
            console.log(accordionid);
        }
    </script>
@endsection
