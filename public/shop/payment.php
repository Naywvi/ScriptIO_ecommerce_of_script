<head>
   <title>Script'iO - Checkout</title>
   <link rel="stylesheet" href="./assets/css/cart.css"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"/>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"/>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>
<section class="h-100 h-custom" style="margin-top: 4% !important;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card code">
          <div class="card-body p-4">

            <div class="row">

              <div class="col-lg-7">
                <h5 class="mb-3"><a href="#!" class="text-body"><i
                      class="fas fa-long-arrow-alt-left me-2 icon-arrow"></i>Continue shopping</a></h5>
                <hr>

                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">Shopping cart</p>
                    <!-- <p class="mb-0">You have 4 items in your cart</p> -->
                  </div>
                </div>

                <?php

                $email = $user['email'];
                $myPDO = new PDO('sqlite:./db/Scriptio.db');

                $id_user = $myPDO->prepare("SELECT id_user FROM users WHERE email = :email");
                $id_user->bindParam(':email', $email);

                $id_user->execute();

                $id = $id_user->fetch(PDO::FETCH_ASSOC);

                $id = $id['id_user'];

                $statement = $myPDO->prepare("SELECT * FROM cart_temp WHERE id_user = :id");

                $statement->bindParam(':id', $id);

                $statement->execute();

                $result = $statement->fetchAll(PDO::FETCH_ASSOC);

                $total = 0;
                $index = 0;
                foreach ($result as $row) {
                  $index++;
                  //get price from product table 
                  $id_product = $row['id_product'];

                  $product = $myPDO->prepare("SELECT price FROM product WHERE id_product = :id_product"); // get product data
                  $product->bindParam(':id_product', $id_product);
                  $product->execute();
                  $product_data = $product->fetch(PDO::FETCH_ASSOC);

                  if ($product_data['price'] != 0 && $product_data['price'] != 'FREE') {
                    $total += $row['quantity'] * $product_data['price']; // get total price
                  }


                  //get product information

                  $id_product = $row['id_product'];

                  $product = $myPDO->prepare("SELECT * FROM product WHERE id_product = :id_product");

                  $product->bindParam(':id_product', $id_product);

                  $product->execute();

                  $product_data = $product->fetch(PDO::FETCH_ASSOC);

                  $name = $product_data['product_name'];
                  $price = $product_data['price'];
                  $image = $product_data['product_image'];
                    echo '<div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                          <div>
                            <img src="'.$image.'" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                          </div>
                          <div class="ms-3">
                            <h5>'.$product_data['product_name'].'</h5>
                            <p class="small mb-0"></p>
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                          <div style="width: 50px;">
                            <h5 class="fw-normal mb-0">'.$row['quantity'].'</h5>
                          </div>
                          <div style="width: 80px;">
                            <h5 class="mb-0">$'.$product_data['price'].'
                            </h5>
                          </div>
                          <form method="post">
                            <input type="hidden" name="id_product" value="'.$product_data['id_product'].'">
                            <input type="hidden" name="id_user" value="'.$id.'">
                            <button type="submit" name="cart-delete" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>';      
                }

                


               echo '<!-- <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <img
                            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                            class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                        </div>
                        <div class="ms-3">
                          <h5>Iphone 11 pro</h5>
                          <p class="small mb-0">256GB, Navy Blue</p>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <div style="width: 50px;">
                          <h5 class="fw-normal mb-0">2</h5>
                        </div>
                        <div style="width: 80px;">
                          <h5 class="mb-0">$900</h5>
                        </div>
                        <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </div>
                  </div>
                </div> -->
                     
              </div>
              <div class="col-lg-5">

                <div class="card bg-primary text-white rounded-3" style="background-color: #7d92a8 !important;">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h5 class="mb-0">Card details</h5>
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                        class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
                    </div>

                    <p class="small mb-2">Card type</p>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-visa fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-amex fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>

                    <form class="mt-4">
                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                          placeholder="Cardholder Name" />
                        <label class="form-label" for="typeName">Cardholder Name</label>
                      </div>

                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                          placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                        <label class="form-label" for="typeText">Card Number</label>
                      </div>

                      <div class="row mb-4">
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="text" id="typeExp" class="form-control form-control-lg"
                              placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                            <label class="form-label" for="typeExp">Expiration</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="password" id="typeText" class="form-control form-control-lg"
                              placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                            <label class="form-label" for="typeText">Cvv</label>
                          </div>
                        </div>
                      </div>

                    </form>

                    <hr class="my-4">

                    <div class="form-outline mb-6 reduction-code">
                        <input type="text" id="form4Example1" class="form-control" placeholder="Reduction code"/>
                    </div>
<!-- 
                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Subtotal</p>
                      <p class="mb-2">$4798.00</p>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Shipping</p>
                      <p class="mb-2">$20.00</p>
                    </div> -->';

                    echo '<div class="d-flex justify-content-between mb-4">
                      <p class="mb-2">Total</p>
                      <p class="mb-2">'.$total.'</p>
                    </div>';

          echo '<form method="post">
					<a hre="#">
          <input type="hidden" name="id_user" value="'.$id.'">
						<button type="submit" class="btn btn-info btn-block btn-lg" name="cart-submit">
						<div class="d-flex justify-content-between">
							<span>'.$total.'</span>';
          ?>
							<span >Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
							
						</div>
						</button>
					<a>
              </form>
						
                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./assets/js/payment.js"></script>
</section>
   
