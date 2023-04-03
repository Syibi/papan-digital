<div>
    <div class="row text-center text-lg-start">
        @foreach ($galeri as $key => $item)
            <div class="col-lg-3 col-md-4 col-6 mb-3">
                <span style="position: relative">
                    <a href="{{ url('admin/galeri-desa/' . $item->id . '/delete') }}" id="delete-btn" type="button"
                        class="btn btn-icon btn-danger hidden"
                        style="
                    display: inline-block;
                    position: absolute;
                    transform: translate(-50%,-50%);
                    top: 50%;
                    left: 50%;
                    z-index: 1000;
                    ">
                        <span class="tf-icons bx bx-trash" style="margin-top: 9px"></span></a>
                    <a href="#" class="d-block mb-4 h-100" data-bs-toggle="modal" data-bs-target="#modalCenter">
                        @if ($item->tipe == 0)
                            <img class="img-fluid img-thumbnail" style="width:100%;height:100%;object-fit:cover;"
                                src="{{ asset('upload/galeri/' . $item->file) }}">
                        @else
                            <video class="img-fluid img-thumbnail" autoplay loop muted
                                style="width:100%;height:100%;object-fit:cover;">
                                <source src={{ asset('upload/galeri/' . $item->file) }}
                                    class="d-block
                                w-100 h-100" type="video/mp4" />
                            </video>
                        @endif
                    </a>
                </span>
            </div>
        @endforeach
    </div>
    <div class="mt-4 d-flex justify-content-center">
        {!! $galeri->links() !!}
    </div>
</div>
