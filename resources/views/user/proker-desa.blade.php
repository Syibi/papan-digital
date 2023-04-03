@extends('user.layout')

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
                <x-proker :kategori=$kategori :proker=$proker />
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
        }
    </script>
@endsection
