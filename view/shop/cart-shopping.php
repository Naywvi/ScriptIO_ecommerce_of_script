<head>
  <title>ScriptIO - My scripts</title>
  <link rel="stylesheet" href="./assets/css/cart-shopping.css" />
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid space">
    <div class="row justify-content-center ">
        <div class="col-xl-6 col-lg-8 col-md-10 col-12 mb-5 ">
        <table id="cart" class="table table-hover table-condensed background shadow space02">
    				<thead>
						<tr>
							<th class="column" style="width:50%">Product</th>
							<th class="column"  style="width:10%">Price</th>
							<th class="column"  style="width:8%">Quantity</th>
							<th class="column"  style="width:22%" class="text-center">Subtotal</th>
							<th class="column"  style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><a href="#"><img src="http://placehold.it/100x100" alt="..." class="img-responsive img"/></a></div>
									<div class="col-sm-10">
										<h4 class="nomargin">Product 1</h4>
										<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
									</div>
								</div>
							</td>
							<td data-th="Price" class="price">1.99 $</td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="1">
							</td>
							<td data-th="Subtotal" class="text-center price">1.99 $</td>
							<td class="actions" data-th="">
								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center price"><strong>Total 1.99</strong></td>
						</tr>
						<tr>
							<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center price"><strong>Total $1.99</strong></td>
							<td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
        </div>
    </div>
</div>
</body>