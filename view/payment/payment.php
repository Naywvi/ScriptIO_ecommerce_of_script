<head>
    <title>Script'iO - Payement</title>
    <link rel="stylesheet" href="./assets/css/payment.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"/>
</head>
<div class="container p-0 space">
    <nav class="navbar navbar-expand-lg navbar-light pt-3 px-md-4 px-2 top-payment">
        <div class="container-fluid"> <a class="navbar-brand" href="#">CART</a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse header-right" id="nav">
                    <ul class="d-flex mb-0">
                        <li class="nav-item pe-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon me-3"> <span class="fas fa-shopping-cart"></span> </div>
                                    <div class="cart">
                                        <small class="">3 items</small>
                                    </div>
                                </div>
                            </li>
                        <li class="nav-item me-3">
                            <div class="btn btn-outline-primary">Sign Up</div>
                        </li>
                        <li class="nav-item">
                            <div class="btn btn-primary">Login</div>
                        </li>
                    </ul>
            </div>
        </div>
    </nav>
    <div class="row px-md-4 px-2 pt-4">
        <div class="col-lg-8">
            <p class="pb-2 fw-bold">Order</p>
            <div class="card">
                <div>
                    <div class="table-responsive px-md-4 px-2 pt-3">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="border-bottom">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div> <img class="pic" src="https://images.pexels.com/photos/7322083/pexels-photo-7322083.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt=""> </div>
                                            <div class="ps-3 d-flex flex-column justify-content">
                                                <p class="fw-bold">Air<span class="ps-1">Red</span><span class="ps-1">Pants</span></p> <small class=" d-flex"> <span class=" text-muted">Color:</span> <span class=" fw-bold">Red/White</span> </small> <small class=""> <span class=" text-muted">Size:</span> <span class=" fw-bold">L</span> </small>
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
                                            <div class="round"> <span class=""> L </span> </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-bottom">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div> <img class="pic" src="https://images.pexels.com/photos/7322083/pexels-photo-7322083.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt=""> </div>
                                            <div class="ps-3 d-flex flex-column">
                                                <p class="fw-bold">Court<span class="ps-1">Dri-FIT</span></p> <small class=" d-flex"> <span class=" text-muted">Color:</span> <span class="fw-bold">Dark Blue</span> </small> <small class=""> <span class=" text-muted">Size:</span> <span class="fw-bold">L</span> </small>
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
                                            <div class="round"> <span class=""> L </span> </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div> <img class="pic" src="https://images.pexels.com/photos/7322083/pexels-photo-7322083.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt=""> </div>
                                            <div class="ps-3 d-flex flex-column">
                                                <p class="fw-bold"> Sportswear<span class="ps-1">Heritage</span><span class="ps-1">Windrunner</span></p> <small class=""> <span class=" text-muted">Color:</span> <span class="fw-bold">Blue/White</span> </small> <small class=""> <span class=" text-muted">Size:</span> <span class="fw-bold">L</span> </small>
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
                                            <div class="round"> <span class=""> L </span> </div>
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
            <div class="card px-md-3 px-2 pt-4">
                <div class="unregistered mb-4"> <span class="py-1">unregistered account</span> </div>
                <div class="d-flex justify-content-between pb-3"> <small class="text-muted">Transaction code</small>
                    <p class="">VC115665</p>
                </div>
                <div class="d-flex justify-content-between b-bottom"> <input type="text" class="ps-2" placeholder="COUPON CODE">
                    <div class="btn btn-primary">Apply</div>
                </div>
                <div class="d-flex flex-column b-bottom">
                    <div class="d-flex justify-content-between py-3"> <small class="text-muted">Order Summary</small>
                        <p>$122</p>
                    </div>
                    <div class="d-flex justify-content-between pb-3"> <small class="text-muted">Additional Service</small>
                        <p>$22</p>
                    </div>
                    <div class="d-flex justify-content-between"> <small class="text-muted">Total Amount</small>
                        <p>$132</p>
                    </div>
                </div>
                <div class="sale my-3"> <span>sale<span class="px-1">expiring</span><span>in</span>:</span><span class="red">21<span class="ps-1">hours</span>,31<span class="ps-1 ">minutes</span></span> </div>
            </div>
        </div>
    </div>
</div>
