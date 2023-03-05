@extends('admin.layout')

@section('container')
    <div class="container-xxl flex-grow-1 my-3">
        <div class="nav-align-top mb-4">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">
                        Galeri
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                        data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">
                        Tambah Dokumentasi
                    </button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
                    <div class="row text-center text-lg-start">
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100" data-bs-toggle="modal"
                                data-bs-target="#modalCenter">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300"
                                    alt="">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100" data-toggle="lightbox">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/aob0ukAYfuI/400x300"
                                    alt="">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EUfxH-pze7s/400x300"
                                    alt="">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/M185_qYH8vg/400x300"
                                    alt="">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/sesveuG_rNo/400x300"
                                    alt="">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/AvhMzHwiE_0/400x300"
                                    alt="">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/2gYsZUmockw/400x300"
                                    alt="">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EMSDtjVHdQ8/400x300"
                                    alt="">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/8mUEy0ABdNE/400x300"
                                    alt="">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/G9Rfc1qccH4/400x300"
                                    alt="">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/aJeH0KcFkuc/400x300"
                                    alt="">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/p2TQ-3Bh3Oo/400x300"
                                    alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                    <p>
                        Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice
                        cream. Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream
                        cheesecake fruitcake.
                    </p>
                    <p class="mb-0">
                        Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah
                        cotton candy liquorice caramels.
                    </p>
                    <form action="{{ url('/edit-beranda/add') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
                            <div class="col">
                                <div class="form-group mt-3">
                                    <label for="judul" class="form-label">Judul</label>
                                    <input type="text" class="form-control" name="judul" id="judul"
                                        placeholder="Masukkan Judul Slide" aria-describedby="judul">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mt-3">
                                    <label for="gambar" class="form-label">Tipe File</label>
                                    <div class="col-md">
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="radio" name="tipe"
                                                id="inlineRadio1" value="gambar">
                                            <label class="form-check-label" for="inlineRadio1">Gambar</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tipe"
                                                id="inlineRadio2" value="video">
                                            <label class="form-check-label" for="inlineRadio2">Video</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="gambar" class="form-label">Upload File</label>
                                    <input class="form-control" name="file" type="file" id="file">
                                </div>
                                <div class="form-check form-switch mt-3">
                                    <label class="form-check-label">Aktifkan Slide</label>
                                    <input class="form-check-input" type="checkbox" id="status" checked=""
                                        name="status">
                                </div>
                                <div class="form-group mt-3 pt-4">
                                    <div class="modal-footer">
                                        <button type="cancel" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                            Batal
                                        </button>
                                        <button type="submit" class="btn btn-primary">Tambah Slide</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalCenter" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Dokumentasi Kegiatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                                aria-current="true">
                            </li>
                            <li data-bs-target="#carouselExample" data-bs-slide-to="1" class=""></li>
                            <li data-bs-target="#carouselExample" data-bs-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="../assets/img/elements/13.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>First slide</h3>
                                    <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../assets/img/elements/2.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Second slide</h3>
                                    <p>In numquam omittam sea.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../assets/img/elements/18.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Third slide</h3>
                                    <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco mel no.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
