<?php

function insertItem() {
    $myPDO = new PDO('sqlite:./db/Scriptio.db');

    //print data from form
    // print_r(var_dump($_POST));

    $item_name = $_POST['item_name'];
    $item_description = $_POST['item_description'];
    $item_price = $_POST['item_price'];
    $item_quantity = $_POST['item_quantity'];
    $item_category = $_POST['item_category'];
    $item_image = $_POST['item_image'];
    $item_status = "available";
    $id_user = $_POST['id_user'];

    $statement = $myPDO->prepare("INSERT INTO items (item_name, item_description, item_price, item_quantity, item_category, item_image, item_status, id_user) VALUES (:item_name, :item_description, :item_price, :item_quantity, :item_category, :item_image, :item_status, :id_user)");
    $statement->bindParam(':item_name', $item_name);
    $statement->bindParam(':item_description', $item_description);
    $statement->bindParam(':item_price', $item_price);
    $statement->bindParam(':item_quantity', $item_quantity);
    $statement->bindParam(':item_category', $item_category);
    $statement->bindParam(':item_image', $item_image);
    $statement->bindParam(':item_status', $item_status);
    $statement->bindParam(':id_user', $id_user);
    $statement->execute();
}

?>