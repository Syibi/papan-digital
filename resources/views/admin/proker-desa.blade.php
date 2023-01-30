@extends('admin.layout')

@section('container')
    <div class="container-xxl flex-grow-1 my-3">
        <div class="nav-align-top mb-4">
            <ul class="nav nav-pills nav-fill" role="tablist">
              <li class="nav-item">
                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-umum" aria-controls="navs-justified-home" aria-selected="true">
                  <i class="tf-icons bx bx-home"></i> Bidang Umum
                </button>
              </li>
              <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-pokja1" aria-controls="navs-justified-profile" aria-selected="false">
                  <i class="tf-icons bx bx-user"></i> POKJA I
                </button>
              </li>
              <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-pokja2" aria-controls="navs-justified-pokja2" aria-selected="false">
                  <i class="tf-icons bx bx-message-square"></i> POKJA II
                </button>
              </li>
              <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-pokja3" aria-controls="navs-justified-messages" aria-selected="false">
                  <i class="tf-icons bx bx-message-square"></i> POKJA III
                </button>
              </li>
              <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-pokja4" aria-controls="navs-justified-messages" aria-selected="false">
                  <i class="tf-icons bx bx-message-square"></i> POKJA IV
                </button>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade active show" id="navs-justified-umum" role="tabpanel">
                <p>
                  Icing pastry pudding oat cake. Lemon drops cotton candy caramels cake caramels sesame snaps
                  powder. Bear claw candy topping.
                </p>
                <p class="mb-0">
                  Tootsie roll fruitcake cookie. Dessert topping pie. Jujubes wafer carrot cake jelly. Bonbon
                  jelly-o jelly-o ice cream jelly beans candy canes cake bonbon. Cookie jelly beans marshmallow
                  jujubes sweet.
                </p>
                {{-- Accordion --}}
                <div class="col-md mb-4 mb-md-0">
                    <small class="text-light fw-semibold">Basic Accordion</small>
                    <div class="accordion mt-3" id="accordionExample">
                      <div class="card accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="false" aria-controls="accordionOne">
                            Accordion Item 1
                          </button>
                        </h2>
                        <div id="accordionOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample" style="">
                          <div class="accordion-body">
                            Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing
                            marzipan gummi bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping
                            soufflé. Wafer gummi bears marshmallow pastry pie.
                            <div class="row mb-2 mt-3">
                              <div class="col-sm-auto">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                                  Lihat Gambar
                                </button>
        
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
                                            <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true"></li>
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
                              </div>
                              <div class="col-sm-4">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#youTubeModal" data-thevideo='https://www.youtube.com/embed/EngW7tLk6R8'>
                                  Lihat Video
                                </button>
        
                                <!-- Modal -->
                                <div class="modal fade" id="youTubeModal" tabindex="-1" style="display: none;" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <iframe height="350" src="https://www.youtube.com/embed/EngW7tLk6R8"></iframe>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                            Accordion Item 2
                          </button>
                        </h2>
                        <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="">
                          <div class="accordion-body">
                            Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake
                            dragée ice cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies.
                            Jelly beans candy canes carrot cake. Fruitcake chocolate chupa chups.
                          </div>
                        </div>
                      </div>
                      <div class="card accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionThree" aria-expanded="false" aria-controls="accordionThree">
                            Accordion Item 3
                          </button>
                        </h2>
                        <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="">
                          <div class="accordion-body">
                            Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon
                            gingerbread marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake
                            dragée caramels. Ice cream wafer danish cookie caramels muffin.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="tab-pane fade" id="navs-justified-pokja1" role="tabpanel">
                <p>
                  Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice
                  cream. Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream
                  cheesecake fruitcake.
                </p>
                <p class="mb-0">
                  Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah
                  cotton candy liquorice caramels.
                </p>
              </div>
              <div class="tab-pane fade" id="navs-justified-pokja2" role="tabpanel">
                <p>
                  Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies
                  cupcake gummi bears cake chocolate.
                </p>
                <p class="mb-0">
                  Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet
                  roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly
                  jelly-o tart brownie jelly.
                </p>
              </div>
              <div class="tab-pane fade" id="navs-justified-pokja3" role="tabpanel">
                <p>
                  Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies
                  cupcake gummi bears cake chocolate.
                </p>
                <p class="mb-0">
                  Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet
                  roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly
                  jelly-o tart brownie jelly.
                </p>
              </div>
              <div class="tab-pane fade" id="navs-justified-pokja4" role="tabpanel">
                <p>
                  Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies
                  cupcake gummi bears cake chocolate.
                </p>
                <p class="mb-0">
                  Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet
                  roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly
                  jelly-o tart brownie jelly.
                </p>
              </div>
            </div>
          </div>
    </div>
@endsection