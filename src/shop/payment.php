<?php

function getID($email) {
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $statement = $myPDO->prepare("SELECT id_user FROM users WHERE email = :email");
    $statement->bindParam(':email', $email);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function submitCart() {

    //check validity of cookie and get user id
    $id_user = $_POST['id_user'];
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $statement = $myPDO->prepare("SELECT * FROM cart_temp WHERE id_user = :id_user"); // get cart_temp
    $statement->bindParam(':id_user', $id_user);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    $statement = $myPDO->prepare("INSERT INTO notification (id_user, context, description, date) VALUES (:id_user, :context, :description, :date)"); // insert notification in db (order history)
    $statement->bindParam(':id_user', $id_user);
    $context = "Last order";
    $statement->bindParam(':context', $context);

    $statement2 = $myPDO->prepare("SELECT * FROM product WHERE id_product = :id_product");
    $statement2->bindParam(':id_product', $result[0]['id_product']);
    $statement2->execute();
    $result2 = $statement2->fetch(PDO::FETCH_ASSOC);
    $download = $result2['script'];




    $description = "Your order has been confirmed. Here is your <a>".$download."</a>\n\nYour order details: &#160; &#160;";
    foreach ($result as $key => $value) {
        // get product name and quantity and price from product table
        $statement2 = $myPDO->prepare("SELECT product_name, price, stock FROM product WHERE id_product = :id_product");
        $statement2->bindParam(':id_product', $result[$key]['id_product']);
        $statement2->execute();
        $result2 = $statement2->fetch(PDO::FETCH_ASSOC);
       
        // check if product is in stock
        if ($result2['stock'] != "UNLIMITED") {
            if ($result2['stock'] - $result[$key]['quantity'] >= 0) {
                decrementProductStock($result[$key]['id_product'], $result[$key]['quantity']);
            } else {
                echo "<style>#message{display:unset !important;}</style>";
                header("Location: /checkout");
                
                exit();
            }
        }

        $description .= $result2['product_name'] . " x" . $result[$key]['quantity'] . " - " . $result2['price'] . "€&#160;";
        
        //add link to download script
        $description .= "Download link: <p><a href='http://localhost:8080/".$download."'>".$download."</a></p>&#160;";
    }
    $description .= "\nTotal: " . $result['price'] . "€&#160; &#160;Thank you from the Scriptio Team";
    $statement->bindParam(':description', $description);
    $date = date("Y-m-d");
    $statement->bindParam(':date', $date);
    $statement->execute();

    $statement = $myPDO->prepare("DELETE FROM cart_temp WHERE id_user = :id_user"); // delete cart_temp
    $statement->bindParam(':id_user', $id_user);
    $statement->execute();
   
    echo '<script>setTimeout(()=>{
        validPayment()
      },1)</script>';
}

function decrementProductStock($id_product, $quantity) {
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $statement = $myPDO->prepare("UPDATE product SET stock = :quantity WHERE id_product = :id_product");
    $statement->bindParam(':id_product', $id_product);
    $statement->bindParam(':quantity', $quantity);
    $statement->execute();
}

?>