<?php

function addToCart() {

    // get id of item
    $id_product = $_POST['id_product'];
    // get id of user
    $id_user = $_POST['id_user'];

    $myPDO = new PDO('sqlite:./db/Scriptio.db');

    // check if item is already in cart
    $statement = $myPDO->prepare("SELECT * FROM cart_temp WHERE id_product = :id_product AND id_user = :id_user");
    $statement->bindParam(':id_product', $id_product);
    $statement->bindParam(':id_user', $id_user);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        // if item is already in cart, increase quantity by 1
        $statement = $myPDO->prepare("UPDATE cart_temp SET quantity = quantity + 1 WHERE id_product = :id_product AND id_user = :id_user");
        $statement->bindParam(':id_product', $id_product);
        $statement->bindParam(':id_user', $id_user);
        $statement->execute();
    } else {
        // if item is not in cart, add it to cart
        $statement = $myPDO->prepare("INSERT INTO cart_temp (id_product, id_user, quantity) VALUES (:id_product, :id_user, 1)");
        $statement->bindParam(':id_product', $id_product);
        $statement->bindParam(':id_user', $id_user);
        $statement->execute();
    }
    header("Location: /checkout");
    exit();

}

function deleteFromCart(){
    $id_product = $_POST['id_product'];
    $id_user = $_POST['id_user'];

    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $statement = $myPDO->prepare("DELETE FROM cart_temp WHERE id_product = :id_product AND id_user = :id_user");
    $statement->bindParam(':id_product', $id_product);
    $statement->bindParam(':id_user', $id_user);
    $statement->execute();
    header("Location: /checkout");
    exit();
}

function PurgeCart($id_user) {
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $statement = $myPDO->prepare("DELETE FROM cart_temp WHERE id_user = :id_user");
    $statement->bindParam(':id_user', $id_user);
    $statement->execute();
}

?>