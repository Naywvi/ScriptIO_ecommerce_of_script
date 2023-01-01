<?php

function getWishList($id_user){
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $stmt = $myPDO->query("SELECT * FROM wishlist WHERE id_user = '$id_user'");
    $row = $stmt->fetchAll();
    $stmt = null;
    $myPDO = null;
    return $row;
}

function removeFromWishlist(){
    $id_product = $_POST['id_product'];
    $id_user = $_POST['id_user'];
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $stmt = $myPDO->prepare("DELETE FROM wishlist WHERE id_product = :id_product AND id_user = :id_user");
    $stmt->bindParam(':id_product', $id_product);
    $stmt->bindParam(':id_user', $id_user);
    $stmt->execute();
    header("Location: /my-wish-list");
}

function printWishList($id_user){
    $wishlist = getWishList($id_user);
    foreach($wishlist as $wish){
        $item = getItem($wish['id_product']);
        echo ' <div class="card mb-3">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div class="d-flex flex-row align-items-center">
              <div>
                <img
                  src="'.$item['product_image'].'"
                  class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
              </div>
              <div class="ms-3">
                <h5>'.$item['product_name'].'</h5>
                <p class="small mb-0"></p>
              </div>
            </div>
            <div class="d-flex flex-row align-items-center">
              <div style="width: 50px;">
                <h5 class="fw-normal mb-0">'.$item['stock'].'</h5>
              </div>
              <div style="width: 80px;">
                <h5 class="mb-0">'.$item['price'].'</h5>
              </div>
              <form method="post">
              <input type="hidden" name="id_product" value="'.$item['id_product'].'">
              <input type="hidden" name="id_user" value="'.$item['id_user'].'">
              <button type="submit" name="wishlist-delete" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>';
    }
}

function getItem($id_product){
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $stmt = $myPDO->query("SELECT * FROM product WHERE id_product = $id_product");
    $row = $stmt->fetch();
    $stmt = null;
    $myPDO = null;
    return $row;
}

?>