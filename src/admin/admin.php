<?php

function addCategory() { // Add category to database
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $category = $_POST['category'];
    $statement = $myPDO->prepare("INSERT INTO genre (name) VALUES (:category)");
    $statement->bindParam(':category', $category);
    $statement->execute();
}

function deleteCategory() { // Delete category from database
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $category = $_POST['category'];
    $statement = $myPDO->prepare("DELETE FROM genre WHERE name = :category");
    $statement->bindParam(':category', $category);
    $statement->execute();
}

function deleteItem() { // Delete item from user's cart
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $product_name = $_POST['product_name'];
    $statement = $myPDO->prepare("DELETE FROM product WHERE name = :product_name");
    $statement->bindParam(':product_name', $product_name);
    $statement->execute();
}

function banUser() { // Ban user from website NEED TO ADD BANNED COLUMN TO USER TABLE and add to login.php to check if banned
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $user = $_POST['username'];
    $statement = $myPDO->prepare("UPDATE user SET banned = 1 WHERE username = :user");
    $statement->bindParam(':user', $user);
    $statement->execute();
}

function sendNotification() { // NEED TO CHECK
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $item = $_POST['item'];
    $statement = $myPDO->prepare("SELECT * FROM item WHERE name = :item");
    $statement->bindParam(':item', $item);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $id = $result['id'];
    $statement = $myPDO->prepare("SELECT * FROM user");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $row) {
        $statement = $myPDO->prepare("INSERT INTO notification (user_id, item_id) VALUES (:user_id, :item_id)");
        $statement->bindParam(':user_id', $row['id']);
        $statement->bindParam(':item_id', $id);
        $statement->execute();
    }
}

?>