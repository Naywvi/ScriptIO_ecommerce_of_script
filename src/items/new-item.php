<?php

function newItem() {
    $myPDO = new PDO('sqlite:./db/Scriptio.db');

    // print data from form
    // print_r(var_dump($_POST));


    $product_name = $_POST['product_name'];
    $product_description = $_POST['product_description'];
    $price = $_POST['price'];
    $installation_steps = $_POST['installation_steps'];
    $product_image = $_POST['product_image'];
    $script = $_POST['script'];
    $stock = -1;
    $id_genre = 0;

    //get user id from database
    $statement = $myPDO->prepare("SELECT id_user FROM users WHERE email = :email");
    $statement->bindParam(':email', $_COOKIE['email']);

    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $id_user = $result['id_user'];

    $statement = $myPDO->prepare("INSERT INTO product (product_name, id_user, id_genre, product_description, price, installation_steps, product_image, script, stock) VALUES (:product_name, :id_user, :id_genre, :product_description, :price, :installation_steps, :product_image, :script, :stock)");
    $statement->bindParam(':product_name', $product_name);
    $statement->bindParam(':id_user', $id_user);
    $statement->bindParam(':product_description', $product_description);
    $statement->bindParam(':price', $price);
    $statement->bindParam(':installation_steps', $installation_steps);
    $statement->bindParam(':product_image', $product_image);
    $statement->bindParam(':script', $script);
    $statement->bindParam(':stock', $stock);
    $statement->bindParam(':id_genre', $id_genre);

    $statement->execute();
}

?>