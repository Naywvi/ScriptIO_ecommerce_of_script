<?php

function addCategory() { // Add category to database 
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $name = $_POST['category-name'];
    $statement = $myPDO->prepare("INSERT INTO genre (name) VALUES (:name)");
    $statement->bindParam(':name', $name);
    $statement->execute();
}

function deleteCategory() { // Delete category from database
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $category = $_POST['category-name'];
    $statement = $myPDO->prepare("DELETE FROM genre WHERE name = :category");
    $statement->bindParam(':category', $category);
    $statement->execute();
}

function deleteItem() { // Delete item from user's cart
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $product_name = $_POST['product_name'];
    $statement = $myPDO->prepare("DELETE FROM product WHERE product_name = :product_name");
    $statement->bindParam(':product_name', $product_name);
    $statement->execute();
}

function banUser() { // Ban user from website NEED TO ADD BANNED COLUMN TO USER TABLE and add to login.php to check if banned
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $username = $_POST['ban-username'];
    $statement = $myPDO->prepare("UPDATE users SET banned = 1 WHERE username = :username");
    $statement->bindParam(':username', $username);
    $statement->execute();
}

function unbanUser() { // Unban user from website NEED TO ADD BANNED COLUMN TO USER TABLE and add to login.php to check if banned
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $username = $_POST['unban-username'];
    $statement = $myPDO->prepare("UPDATE users SET banned = 0 WHERE username = :username");
    $statement->bindParam(':username', $username);
    $statement->execute();
}

function sendNotification() { // Send notification to user
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $description = $_POST['notification'];
    $context = "Message from admin:";
    $username = $_POST['username'];

    $statement = $myPDO->prepare("SELECT id_user FROM users WHERE username = :username"); // get id_user from username
    $statement->bindParam(':username', $username);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $id_user = $result['id_user'];

    $statement = $myPDO->prepare("INSERT INTO notification (id_user, description, context) VALUES (:id_user, :description, :context)");
    $statement->bindParam(':id_user', $id_user);
    $statement->bindParam(':description', $description);
    $statement->bindParam(':context', $context);
    $statement->execute();

}

?>