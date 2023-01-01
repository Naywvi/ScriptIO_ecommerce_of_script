<head>
    <title>Script'iO - My scripts</title>
    <link rel="stylesheet" href="./assets/css/wish-list.css"/>
 </head>



 
 <section class="h-100 h-custom" style="margin-top: 4% !important; margin-bottom: 20% !important;">
   <div class="container py-5 h-100">
     <div class="row d-flex justify-content-center align-items-center h-100">
       <div class="col">
         <div class="card code">
           <div class="card-body p-4">
 
             <div class="row">
 
               <div class="col">

                 <h5 class="mb-3"><a href="#!" class="text-body"><i
                       class="fas fa-long-arrow-alt-left me-2 icon-arrow"></i>Continue shopping</a></h5>
                 <hr>
 
                 <div class="d-flex justify-content-between align-items-center mb-4">
                   <div>
                     <p class="mb-1">My wish list</p>
                     <!-- <p class="mb-0">You have 4 items in the list</p> -->
                   </div>
                 </div>
 
                  <?php

                  include 'src/shop/wish-list.php';

                  // fetch wish list items
                  $id_user = $user['id_user'];
                  // print wish list items
                  printWishList($id_user);

                 ?>
                      
               </div>
               
 
             </div>
 
           </div>
         </div>
       </div>
     </div>
   </div>
   <script src="./assets/js/payment.js"></script>
 </section>
    
 