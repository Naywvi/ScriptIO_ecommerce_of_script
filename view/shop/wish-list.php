<head>
  <title>ScriptIO - My scripts</title>
  <link rel="stylesheet" href="./assets/css/wish-list.css" />
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<div class="container-fluid space">
    <div class="row justify-content-center ">
        <div class="col-xl-6 col-lg-8 col-md-10 col-12 mb-5 ">
        <table id="cart" class="table table-hover table-condensed background shadow space02">
    				<thead>
						<tr>
							<th class="column" style="width:50%">Product</th>
							<th class="column"  style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"></div>
									<div class="col-sm-10">
										<h4 class="nomargin"><a href="#">Product 1</a></h4>
										<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
									</div>
								</div>
							</td>
							<td data-th="Price" class="price"></td>
							<td data-th="Quantity">

							</td>
							<td data-th="Subtotal" class="text-center price"></td>
							<td class="actions" data-th="">
                                <button class="btn btn-sm add"><span class="material-symbols-outlined ">add_circle</span></i></button>	
								<button class="btn btn-sm remove"><span class="material-symbols-outlined ">do_not_disturb_on</span></i></button>
							</td>
						</tr>
					</tbody>
					<tfoot>

						<tr>
							<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
						</tr>
					</tfoot>
				</table>
        </div>
    </div>
</div>
</body>