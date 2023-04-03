@extends('admin.layout')

@section('container')
    <div class="container-xxl flex-grow-1 mt-3">
        <div class="nav-align-top mb-4">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-umum" aria-controls="navs-top-profile" aria-selected="false">
                        <strong>Data Umum</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-penduduk" aria-controls="navs-top-messages" aria-selected="false">
                        <strong>Data Penduduk</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-pendidikan" aria-controls="navs-top-messages" aria-selected="false">
                        <strong>Data Pendidikan</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-pekerjaan" aria-controls="navs-top-messages" aria-selected="false">
                        <strong>Data Pekerjaan</strong>
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-sarana" aria-controls="navs-top-messages" aria-selected="false">
                        <strong>Data Sarana Prasarana</strong>
                    </button>
                </li>
            </ul>
            {{-- Tab Content --}}
            <div class="tab-content">
                {{-- Tab Bidang Umum --}}
                <div class="tab-pane fade active show" id="navs-top-umum" role="tabpanel">
                    <form action="{{ url('admin/umum/updateumum') }}" method="post" enctype="multipart/form-data"
                        name="form_umum">
                        @csrf
                        @method('PUT')
                        <x-tabUmum :umum=$umum />
                        <div class="mt-2 mx-2 float-end">
                            <button type="button" form="form_umum" class="btn btn-primary me-2" value="edit"
                                id="edit-umum" onclick="active('[id=data_umum]')">Edit</button>
                            <button type="button" class="btn btn-outline-secondary" value="cancel"
                                onclick="nonactive('[id=data_umum]')" id="cancel-umum">Cancel</button>
                            <button type="submit" class="btn btn-primary me-2" value="save"
                                onclick="nonactive('[id=data_umum]')" id="save-umum">Save Changes</button>
                        </div>
                    </form>
                </div>

                {{-- Tab Data Penduduk --}}
                <div class="tab-pane fade" id="navs-top-penduduk" role="tabpanel">
                    <form action="{{ url('admin/umum/updatependuduk') }}" method="post" enctype="multipart/form-data"
                        name="form_penduduk">
                        @csrf
                        @method('PUT')
                        <x-tabPenduduk :penduduk=$penduduk :chartjk=$chart_jk :chartusia=$chart_usia />
                        <div class="mx-4 float-end">
                            <button type="button" form="form_penduduk" class="btn btn-primary me-2" value="edit"
                                id="edit-penduduk" onclick="active('[id=data_penduduk]')">Edit</button>
                            <button type="button" class="btn btn-outline-secondary" value="cancel"
                                onclick="nonactive('[id=data_penduduk]')" id="cancel-penduduk">Cancel</button>
                            <button type="submit" class="btn btn-primary me-2" value="save"
                                onclick="nonactive('[id=data_penduduk]')" id="save-penduduk">Save Changes</button>
                        </div>
                    </form>
                </div>

                {{-- Tab Data Pendidikan --}}
                <div class="tab-pane fade" id="navs-top-pendidikan" role="tabpanel">
                    <form action="{{ url('admin/umum/updatependidikan') }}" method="post" enctype="multipart/form-data"
                        name="form_pendidikan">
                        @csrf
                        @method('PUT')
                        <x-tabPendidikan :pendidikan=$pendidikan />
                        <div class="mt-2 mx-4 float-end">
                            <button type="button" form="form_pendidikan" class="btn btn-primary me-2" value="edit"
                                id="edit-pendidikan" onclick="active('[id=data_pendidikan]')">Edit</button>
                            <button type="button" class="btn btn-outline-secondary" value="cancel"
                                onclick="nonactive('[id=data_pendidikan]')" id="cancel-pendidikan">Cancel</button>
                            <button type="submit" class="btn btn-primary me-2" value="save"
                                onclick="nonactive('[id=data_pendidikan]')" id="save-pendidikan">Save Changes</button>
                        </div>
                    </form>
                </div>

                {{-- Tab Data Pekerjaan --}}
                <div class="tab-pane fade" id="navs-top-pekerjaan" role="tabpanel">
                    <form action="{{ url('admin/umum/updatepekerjaan') }}" method="post" enctype="multipart/form-data"
                        name="form_pekerjaan">
                        @csrf
                        @method('PUT')
                        <x-tabPekerjaan :pekerjaan=$pekerjaan />
                        <div class="mt-4 mx-4 float-end">
                            <button type="button" form="form_umum" class="btn btn-primary me-2" value="edit"
                                id="edit-pekerjaan" onclick="active('[id=data_pekerjaan]')">Edit</button>
                            <button type="button" class="btn btn-outline-secondary" value="cancel"
                                onclick="nonactive('[id=data_pekerjaan]')" id="cancel-pekerjaan">Cancel</button>
                            <button type="submit" class="btn btn-primary me-2" value="save"
                                onclick="nonactive('[id=data_pekerjaan]')" id="save-pekerjaan">Save Changes</button>
                        </div>
                    </form>
                </div>

                {{-- Tab Sarana --}}
                <div class="tab-pane fade" id="navs-top-sarana" role="tabpanel">
                    <form action="{{ url('admin/umum/updatesarpras') }}" method="post" enctype="multipart/form-data"
                        name="form_pekerjaan">
                        @csrf
                        @method('PUT')
                        <x-tabSarpras :sarpras=$sarpras />
                        <div class="mt-2 mx-4 float-end">
                            <button type="button" form="form_umum" class="btn btn-primary me-2" value="edit"
                                id="edit-sarana" onclick="active('[id=data_sarana]')">Edit</button>
                            <button type="button" class="btn btn-outline-secondary" value="cancel"
                                onclick="nonactive('[id=data_sarana]')" id="cancel-sarana">Cancel</button>
                            <button type="submit" class="btn btn-primary me-2" value="save"
                                onclick="nonactive('[id=data_sarana]')" id="save-sarana">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        function active(idInput) {
            var a = document.querySelectorAll(idInput);
            a.forEach(element => {
                element.removeAttribute("readonly");
            });
        }

        function nonactive(idInput) {
            var a = document.querySelectorAll(idInput);
            a.forEach(element => {
                element.setAttribute("readonly", true)
            });
        }

        $("#cancel-umum, #save-umum, #cancel-pendidikan, #save-pendidikan, #cancel-penduduk, #save-penduduk, #cancel-pekerjaan, #save-pekerjaan, #cancel-sarana, #save-sarana")
            .hide();

        //  Button Umum
        $('#edit-umum').click(function() {
            $(this).hide();
            $('#save-umum, #cancel-umum').show();
        });

        $('#cancel-umum').click(function() {
            $('#edit-umum').show();
            $('#save-umum, #cancel-umum').hide();
        });

        $('#save-umum').click(function() {
            $(this).hide();
            $('#cancel-umum').hide();
            $('#edit-umum').show();
        });

        //  Button Penduduk
        $('#edit-penduduk').click(function() {
            $(this).hide();
            $('#save-penduduk, #cancel-penduduk').show();
        });

        $('#cancel-penduduk').click(function() {
            $('#edit-penduduk').show();
            $('#save-penduduk, #cancel-penduduk').hide();
        });

        $('#save-penduduk').click(function() {
            $(this).hide();
            $('#cancel-penduduk').hide();
            $('#edit-penduduk').show();
        });

        //  Button Pendidik
        $('#edit-pendidikan').click(function() {
            $(this).hide();
            $('#save-pendidikan, #cancel-pendidikan').show();
        });

        $('#cancel-pendidikan').click(function() {
            $('#edit-pendidikan').show();
            $('#save-pendidikan, #cancel-pendidikan').hide();
        });

        $('#save-pendidikan').click(function() {
            $(this).hide();
            $('#cancel-pendidikan').hide();
            $('#edit-pendidikan').show();
        });

        //  Button Pekerjaan
        $('#edit-pekerjaan').click(function() {
            $(this).hide();
            $('#save-pekerjaan, #cancel-pekerjaan').show();
        });

        $('#cancel-pekerjaan').click(function() {
            $('#edit-pekerjaan').show();
            $('#save-pekerjaan, #cancel-pekerjaan').hide();
        });

        $('#save-pekerjaan').click(function() {
            $(this).hide();
            $('#cancel-pekerjaan').hide();
            $('#edit-pekerjaan').show();
        });

        //  Button Sarana
        $('#edit-sarana').click(function() {
            $(this).hide();
            $('#save-sarana, #cancel-sarana').show();
        });

        $('#cancel-sarana').click(function() {
            $('#edit-sarana').show();
            $('#save-sarana, #cancel-sarana').hide();
        });

        $('#save-sarana').click(function() {
            $(this).hide();
            $('#cancel-saranan').hide();
            $('#edit-sarana').show();
        });
    </script>
    <script src="{{ $chart_jk->cdn() }}"></script>
    <script src="{{ $chart_usia->cdn() }}"></script>

    {{ $chart_jk->script() }}
    {{ $chart_usia->script() }}
@endsection
