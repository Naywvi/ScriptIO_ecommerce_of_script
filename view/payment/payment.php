<head>
   <title>Script'iO - Payement</title>
   <link rel="stylesheet" href="./assets/css/payment.css"/>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"/>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"/>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"/>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>
<div class="container p-0 space code-00">
   <nav class="navbar navbar-expand-lg navbar-light pt-3 px-md-4 px-2 top-payment code-00 white">
      <div class="container-fluid">
         <a class="navbar-brand cyan text-dec" href="#">Your future scripts</a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
         <div class="collapse navbar-collapse header-right" id="nav">
            <ul class="d-flex mb-0">
               <li class="nav-item pe-3">
                  <div class="d-flex align-items-center">
                     <div class="icon me-3 cyan"> <span class="fas fa-shopping-cart"></span> </div>
                     <div class="cart">
                        <small class="">3 items</small>
                     </div>
                  </div>
               </li>
               <li class="nav-item me-3">
                  <div class="btn btn-outline-primary"><a href="/sign-up" class="text-dec">Sign Up</a></div>
               </li>
               <li class="nav-item">
                  <div class="btn btn-primary"><a href="/sign-up" class="white text-dec">Sign Up</a></div>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <div class="row px-md-4 px-2 pt-4 pad-bot">
      <div class="col-lg-8">
         <p class="pb-2 fw-bold">Order</p>
         <div class="card">
            <div>
               <div class="table-responsive px-md-4 px-2 pt-3 code-01">
                  <table class="table table-borderless">
                     <tbody>
                        <tr class="border-bottom">
                           <td>
                              <div class="d-flex align-items-center">
                                 <div> <img class="pic" src="https://images.pexels.com/photos/7322083/pexels-photo-7322083.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt=""> </div>
                                 <div class="ps-3 d-flex flex-column justify-content">
                                    <p class="fw-bold">Air<span class="ps-1">Red</span><span class="ps-1">Pants</span></p>
                                    <small class=" d-flex"> <span class=" text-muted">Color:</span> <span class=" fw-bold">Red/White</span> </small> <small class=""> <span class=" text-muted">Size:</span> <span class=" fw-bold">L</span> </small>
                                 </div>
                              </div>
                           </td>
                           <td>
                              <div class="d-flex">
                                 <p class="pe-3"><span class="red">$45.00</span></p>
                                 <p class="text-muted text-decoration-line-through">$55.00</p>
                              </div>
                           </td>
                           <td>
                              <div class="d-flex align-items-center"> <span class="pe-3 text-muted">Quantity</span> <span class="pe-3"> <input class="ps-2" type="number" value="2"></span>
                              </div>
                           </td>
                        </tr>
                        <tr class="border-bottom">
                           <td>
                              <div class="d-flex align-items-center">
                                 <div> <img class="pic" src="https://images.pexels.com/photos/7322083/pexels-photo-7322083.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt=""> </div>
                                 <div class="ps-3 d-flex flex-column">
                                    <p class="fw-bold">Court<span class="ps-1">Dri-FIT</span></p>
                                    <small class=" d-flex"> <span class=" text-muted">Color:</span> <span class="fw-bold">Dark Blue</span> </small> <small class=""> <span class=" text-muted">Size:</span> <span class="fw-bold">L</span> </small>
                                 </div>
                              </div>
                           </td>
                           <td>
                              <div class="d-flex">
                                 <p class="pe-3"><span class="red">$45.00</span></p>
                                 <p class="text-muted text-decoration-line-through">$55.00</p>
                              </div>
                           </td>
                           <td>
                              <div class="d-flex align-items-center"> <span class="pe-3 text-muted">Quantity</span> <span class="pe-3"> <input class="ps-2" type="number" value="2"></span>
                              </div>
                           </td>
                        </tr>
                        <tr class="">
                           <td>
                              <div class="d-flex align-items-center">
                                 <div> <img class="pic" src="https://images.pexels.com/photos/7322083/pexels-photo-7322083.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt=""> </div>
                                 <div class="ps-3 d-flex flex-column">
                                    <p class="fw-bold"> Sportswear<span class="ps-1">Heritage</span><span class="ps-1">Windrunner</span></p>
                                    <small class=""> <span class=" text-muted">Color:</span> <span class="fw-bold">Blue/White</span> </small> <small class=""> <span class=" text-muted">Size:</span> <span class="fw-bold">L</span> </small>
                                 </div>
                              </div>
                           </td>
                           <td>
                              <div class="d-flex">
                                 <p class="pe-3"><span class="red">$45.00</span></p>
                                 <p class="text-muted text-decoration-line-through">$55.00</p>
                              </div>
                           </td>
                           <td>
                              <div class="d-flex align-items-center"> <span class="pe-3 text-muted">Quantity</span> <span class="pe-3"> <input class="ps-2" type="number" value="2"></span>
                              </div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 payment-summary">
         <p class="fw-bold pt-lg-0 pt-4 pb-2">Payment Summary</p>
         <div class="card px-md-3 px-2 pt-4 code-01">
            <div class="unregistered mb-4 danger"> <span class="py-1">unregistered account</span> </div>
            <div class="d-flex justify-content-between pb-3">
               <small class="text-muted">Transaction code</small>
               <p class="cyan">VC115665</p>
            </div>
            <div class="d-flex justify-content-between b-bottom">
               <input type="text" class="ps-2" placeholder="COUPON CODE">
               <div class="btn btn-primary">Apply</div>
            </div>
            <div class="d-flex flex-column b-bottom">
               <div class="d-flex justify-content-between py-3">
                  <small class="text-muted">Order Summary</small>
                  <p class="green">$122</p>
               </div>
               <div class="d-flex justify-content-between pb-3">
                  <small class="text-muted">Additional Service</small>
                  <p class="green">$22</p>
               </div>
               <div class="d-flex justify-content-between">
                  <small class="text-muted">Total Amount</small>
                  <p class="green">$132</p>
               </div>
            </div>
            <div class="sale my-3"> <span>sale<span class="px-1">expiring</span><span>in</span>:</span><span class="red">21<span class="ps-1">hours</span>,31<span class="ps-1 ">minutes</span></span> </div>
         </div>
      </div>
   </div>
   <div class="row space-card payment-color">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                            <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Credit Card </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fab fa-paypal mr-2"></i> Paypal </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Net Banking </a> </li>
                        </ul>
                    </div> <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form role="form" onsubmit="event.preventDefault()">
                                <div class="form-group"> <label for="username">
                                        <h6>Card Owner</h6>
                                    </label> <input type="text" name="username" placeholder="Card Owner Name" required class="form-control "> </div>
                                <div class="form-group"> <label for="cardNumber">
                                        <h6>Card number</h6>
                                    </label>
                                    <div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control " required>
                                        <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> <label><span class="hidden-xs">
                                                    <h6>Expiration Date</h6>
                                                </span></label>
                                            <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                            </label> <input type="text" required class="form-control"> </div>
                                    </div>
                                </div>
                                <div class="card-footer"> <button onclick="validrPayment()" type="button" class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment </button>
                            </form>
                        </div>
                    </div> <!-- End -->
                    <!-- Paypal info -->
                    <div id="paypal" class="tab-pane fade pt-3">
                        <h6 class="pb-2">Select your paypal account type</h6>
                        <div class="form-group "> <label class="radio-inline"> <input type="radio" name="optradio" checked> Domestic </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5">International </label></div>
                        <p> <button type="button" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i> Log into my Paypal</button> </p>
                        <p class="text-muted"> Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                    </div> <!-- End -->
                    <!-- bank transfer info -->
                    <div id="net-banking" class="tab-pane fade pt-3">
                        <div class="form-group "> <label for="Select Your Bank">
                                <h6>Select your Bank</h6>
                            </label> <select class="form-control" id="ccmonth">
                                <option value="" selected disabled>--Please select your Bank--</option>
                                <option>Bank 1</option>
                                <option>Bank 2</option>
                                <option>Bank 3</option>
                                <option>Bank 4</option>
                                <option>Bank 5</option>
                                <option>Bank 6</option>
                                <option>Bank 7</option>
                                <option>Bank 8</option>
                                <option>Bank 9</option>
                                <option>Bank 10</option>
                            </select> </div>
                        <div class="form-group">
                            <p> <button type="button" class="btn btn-primary "><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button> </p>
                        </div>
                        <p class="text-muted">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                    </div> <!-- End -->
                    <!-- End -->
                </div>
            </div>
        </div>
      </div>
   </div>
   <script src="./assets/js/payment.js"></script>

</div>
