@extends('user.layout')

@section('container')
    <div class="container-xxl flex-grow-1 my-3">
        <div class="nav-align-top mb-2">
            <ul class="nav nav-pills mb-2 nav-fill gap-2" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#sekretaris" aria-controls="sekretaris" aria-selected="true">
                        <strong>Sekretaris</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#bendahara"
                        aria-controls="bendahara" aria-selected="false">
                        <strong>Bendahara</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#pokja1"
                        aria-controls="pokja1" aria-selected="false">
                        <strong>POKJA I</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#pokja2"
                        aria-controls="pokja2" aria-selected="true">
                        <strong>POKJA II</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#pokja3"
                        aria-controls="pokja3" aria-selected="false">
                        <strong>POKJA III</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#pokja4"
                        aria-controls="pokja4" aria-selected="false">
                        <strong>POKJA IV</strong>
                    </button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" style="height:72vh" id="sekretaris" role="tabpanel">
                    <div class="nav-align-bottom mb-2">
                        @php($id = 'Sekretaris')
                        <ul class="nav nav-pills mb-3" role="tablist">
                            @php($firstlink = true)
                            @foreach ($papan_data as $key => $item)
                                @if ($item->kategori == $id)
                                    <li class="nav-item">
                                        <button onclick="tabsclicked('{{ $item->nama_papan }}')" type="button"
                                            class="nav-link {{ $firstlink == true ? 'active' : '' }}" role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-{{ $item->nama_papan }}"
                                            aria-controls="navs-{{ $item->nama_papan }}"
                                            aria-selected="{{ $firstlink == true ? 'true' : '' }}">
                                            <strong>{{ $item->nama_papan }}</strong>
                                            {{ $firstlink = false }}
                                        </button>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="tab-content mb-3" id="tabContent" style="padding: 0">
                            @php($first = true)
                            @foreach ($papan_data as $item)
                                @php($idPapan = str_replace(' ', '', $item->nama_papan))
                                @if ($item->kategori == $id)
                                    <div class="tab-pane fade {{ $first == true ? 'active show' : '' }}"
                                        id="navs-{{ $item->nama_papan }}" role="tabpanel" style="height:65vh">
                                        {{ $first = false }}
                                        <img class="card-img" src="{{ asset('upload/papan_data/' . $item->file) }}"
                                            alt="Card image" style="height: 65vh">
                                    </div>
                                    @if (Request::is('admin/*'))
                                        <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#modal-{{ $idPapan }}"
                                        class="btn btn-lg rounded-pill btn-icon btn-primary"
                                        style="
                                                position: fixed;
                                                right: 5%;
                                                bottom:7%;
                                                display:block;
                                                z-index:1000;
                                                ">
                                            <i class="bx bxs-pencil" style="font-size:1.5rem"></i>
                                        </button>
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" style="height:72vh" id="bendahara" role="tabpanel">
                    <div class="nav-align-bottom mb-2">
                        @php($id = 'Bendahara')
                        <ul class="nav nav-pills mb-3" role="tablist">
                            @php($firstlink = true)
                            @foreach ($papan_data as $key => $item)
                                @if ($item->kategori == $id)
                                    <li class="nav-item">
                                        <button onclick="tabsclicked('{{ $item->nama_papan }}')" type="button"
                                            class="nav-link {{ $firstlink == true ? 'active' : '' }}" role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-{{ $item->nama_papan }}"
                                            aria-controls="navs-{{ $item->nama_papan }}"
                                            aria-selected="{{ $firstlink == true ? 'true' : '' }}">
                                            <strong>{{ $item->nama_papan }}</strong>
                                            {{ $firstlink = false }}
                                        </button>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="tab-content mb-3" id="tabContent" style="padding: 0">
                            @php($first = true)
                            @foreach ($papan_data as $item)
                                @php($idPapan = str_replace(' ', '', $item->nama_papan))
                                @if ($item->kategori == $id)
                                    <div class="tab-pane fade {{ $first == true ? 'active show' : '' }}"
                                        id="navs-{{ $item->nama_papan }}" role="tabpanel" style="height:65vh">
                                        {{ $first = false }}
                                        <img class="card-img" src="{{ asset('upload/papan_data/' . $item->file) }}"
                                            alt="Card image" style="height: 65vh">
                                        <button type="button" data-bs-toggle="modal"
                                            data-bs-target="#modal-{{ $idPapan }}"
                                            class="btn btn-lg rounded-pill btn-icon btn-primary"
                                            style="
                                                    position: fixed;
                                                    right: 5%;
                                                    bottom:7%;
                                                    display:block;
                                                    z-index:1000;
                                                    ">
                                            <i class="bx bxs-pencil" style="font-size:1.5rem"></i>
                                        </button>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pokja1" style="height:72vh" role="tabpanel">
                    <div class="nav-align-bottom mb-2">
                        @php($id = 'pokja1')
                        <ul class="nav nav-pills mb-3" role="tablist">
                            @php($firstlink = true)
                            @foreach ($papan_data as $key => $item)
                                @if ($item->kategori == $id)
                                    <li class="nav-item">
                                        <button onclick="tabsclicked('{{ $item->nama_papan }}')" type="button"
                                            class="nav-link {{ $firstlink == true ? 'active' : '' }}" role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-{{ $item->nama_papan }}"
                                            aria-controls="navs-{{ $item->nama_papan }}"
                                            aria-selected="{{ $firstlink == true ? 'true' : '' }}">
                                            <strong>{{ $item->nama_papan }}</strong>
                                            {{ $firstlink = false }}
                                        </button>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="tab-content mb-3" id="tabContent" style="padding: 0">
                            @php($first = true)
                            @foreach ($papan_data as $item)
                                @php($idPapan = str_replace(' ', '', $item->nama_papan))
                                @if ($item->kategori == $id)
                                    <div class="tab-pane fade {{ $first == true ? 'active show' : '' }}"
                                        id="navs-{{ $item->nama_papan }}" role="tabpanel" style="height:65vh">
                                        {{ $first = false }}
                                        <img class="card-img" src="{{ asset('upload/papan_data/' . $item->file) }}"
                                            alt="Card image" style="height: 65vh">
                                        <button type="button" data-bs-toggle="modal"
                                            data-bs-target="#modal-{{ $idPapan }}"
                                            class="btn btn-lg rounded-pill btn-icon btn-primary"
                                            style="
                                                    position: fixed;
                                                    right: 5%;
                                                    bottom:7%;
                                                    display:block;
                                                    z-index:1000;
                                                    ">
                                            <i class="bx bxs-pencil" style="font-size:1.5rem"></i>
                                        </button>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pokja2" style="height:72vh" role="tabpanel">
                    <div class="nav-align-bottom mb-2">
                        @php($id = 'pokja2')
                        <ul class="nav nav-pills mb-3" role="tablist">
                            @php($firstlink = true)
                            @foreach ($papan_data as $key => $item)
                                @if ($item->kategori == $id)
                                    <li class="nav-item">
                                        <button onclick="tabsclicked('{{ $item->nama_papan }}')" type="button"
                                            class="nav-link {{ $firstlink == true ? 'active' : '' }}" role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-{{ $item->nama_papan }}"
                                            aria-controls="navs-{{ $item->nama_papan }}"
                                            aria-selected="{{ $firstlink == true ? 'true' : '' }}">
                                            <strong>{{ $item->nama_papan }}</strong>
                                            {{ $firstlink = false }}
                                        </button>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="tab-content mb-3" id="tabContent" style="padding: 0">
                            @php($first = true)
                            @foreach ($papan_data as $item)
                                @php($idPapan = str_replace(' ', '', $item->nama_papan))
                                @if ($item->kategori == $id)
                                    <div class="tab-pane fade {{ $first == true ? 'active show' : '' }}"
                                        id="navs-{{ $item->nama_papan }}" role="tabpanel" style="height:65vh">
                                        {{ $first = false }}
                                        <img class="card-img" src="{{ asset('upload/papan_data/' . $item->file) }}"
                                            alt="Card image" style="height: 65vh">
                                        <button type="button" data-bs-toggle="modal"
                                            data-bs-target="#modal-{{ $idPapan }}"
                                            class="btn btn-lg rounded-pill btn-icon btn-primary"
                                            style="
                                                    position: fixed;
                                                    right: 5%;
                                                    bottom:7%;
                                                    display:block;
                                                    z-index:1000;
                                                    ">
                                            <i class="bx bxs-pencil" style="font-size:1.5rem"></i>
                                        </button>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pokja3" style="height:72vh" role="tabpanel">
                    <div class="nav-align-bottom mb-2">
                        @php($id = 'pokja3')
                        <ul class="nav nav-pills mb-3" role="tablist">
                            @php($firstlink = true)
                            @foreach ($papan_data as $key => $item)
                                @if ($item->kategori == $id)
                                    <li class="nav-item">
                                        <button onclick="tabsclicked('{{ $item->nama_papan }}')" type="button"
                                            class="nav-link {{ $firstlink == true ? 'active' : '' }}" role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-{{ $item->nama_papan }}"
                                            aria-controls="navs-{{ $item->nama_papan }}"
                                            aria-selected="{{ $firstlink == true ? 'true' : '' }}">
                                            <strong>{{ $item->nama_papan }}</strong>
                                            {{ $firstlink = false }}
                                        </button>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="tab-content mb-3" id="tabContent" style="padding: 0">
                            @php($first = true)
                            @foreach ($papan_data as $item)
                                @php($idPapan = str_replace(' ', '', $item->nama_papan))
                                @if ($item->kategori == $id)
                                    <div class="tab-pane fade {{ $first == true ? 'active show' : '' }}"
                                        id="navs-{{ $item->nama_papan }}" role="tabpanel" style="height:65vh">
                                        {{ $first = false }}
                                        <img class="card-img" src="{{ asset('upload/papan_data/' . $item->file) }}"
                                            alt="Card image" style="height: 65vh">
                                        <button type="button" data-bs-toggle="modal"
                                            data-bs-target="#modal-{{ $idPapan }}"
                                            class="btn btn-lg rounded-pill btn-icon btn-primary"
                                            style="
                                                    position: fixed;
                                                    right: 5%;
                                                    bottom:7%;
                                                    display:block;
                                                    z-index:1000;
                                                    ">
                                            <i class="bx bxs-pencil" style="font-size:1.5rem"></i>
                                        </button>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pokja4" style="height:72vh" role="tabpanel">
                    <div class="nav-align-bottom mb-2">
                        @php($id = 'pokja4')
                        <ul class="nav nav-pills mb-3" role="tablist">
                            @php($firstlink = true)
                            @foreach ($papan_data as $key => $item)
                                @if ($item->kategori == $id)
                                    <li class="nav-item">
                                        <button onclick="tabsclicked('{{ $item->nama_papan }}')" type="button"
                                            class="nav-link {{ $firstlink == true ? 'active' : '' }}" role="tab"
                                            data-bs-toggle="tab" data-bs-target="#navs-{{ $item->nama_papan }}"
                                            aria-controls="navs-{{ $item->nama_papan }}"
                                            aria-selected="{{ $firstlink == true ? 'true' : '' }}">
                                            <strong>{{ $item->nama_papan }}</strong>
                                            {{ $firstlink = false }}
                                        </button>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="tab-content mb-3" id="tabContent" style="padding: 0">
                            @php($first = true)
                            @foreach ($papan_data as $item)
                                @php($idPapan = str_replace(' ', '', $item->nama_papan))
                                @if ($item->kategori == $id)
                                    <div class="tab-pane fade {{ $first == true ? 'active show' : '' }}"
                                        id="navs-{{ $item->nama_papan }}" role="tabpanel" style="height:65vh">
                                        {{ $first = false }}
                                        <img class="card-img" src="{{ asset('upload/papan_data/' . $item->file) }}"
                                            alt="Card image" style="height: 65vh">
                                        <button type="button" data-bs-toggle="modal"
                                            data-bs-target="#modal-{{ $idPapan }}"
                                            class="btn btn-lg rounded-pill btn-icon btn-primary"
                                            style="
                                                    position: fixed;
                                                    right: 5%;
                                                    bottom:7%;
                                                    display:block;
                                                    z-index:1000;
                                                    ">
                                            <i class="bx bxs-pencil" style="font-size:1.5rem"></i>
                                        </button>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
