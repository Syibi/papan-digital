@extends('admin.layout')

@section('container')
    <div class="container-xxl flex-grow-1 my-3">
        <div class="nav-align-top mb-4">
            <ul class="nav nav-tabs nav-fill" role="tablist">
              <li class="nav-item">
                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-home" aria-controls="navs-justified-home" aria-selected="true">
                  <i class="tf-icons bx bx-home"></i> Home
                  <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-label-danger">3</span>
                </button>
              </li>
              <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-profile" aria-controls="navs-justified-profile" aria-selected="false">
                  <i class="tf-icons bx bx-user"></i> Profile
                </button>
              </li>
              <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-messages" aria-controls="navs-justified-messages" aria-selected="false">
                  <i class="tf-icons bx bx-message-square"></i> Messages
                </button>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade active show" id="navs-justified-home" role="tabpanel">
                <p>
                  Icing pastry pudding oat cake. Lemon drops cotton candy caramels cake caramels sesame snaps
                  powder. Bear claw candy topping.
                </p>
                <p class="mb-0">
                  Tootsie roll fruitcake cookie. Dessert topping pie. Jujubes wafer carrot cake jelly. Bonbon
                  jelly-o jelly-o ice cream jelly beans candy canes cake bonbon. Cookie jelly beans marshmallow
                  jujubes sweet.
                </p>
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
              <div class="tab-pane fade" id="navs-justified-profile" role="tabpanel">
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
              <div class="tab-pane fade" id="navs-justified-messages" role="tabpanel">
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