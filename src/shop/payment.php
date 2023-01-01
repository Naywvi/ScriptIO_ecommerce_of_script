<?php

function getID($email) {
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $statement = $myPDO->prepare("SELECT id_user FROM users WHERE email = :email");
    $statement->bindParam(':email', $email);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function cartSubmit() {

    //check validity of cookie and get user id

    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $statement = $myPDO->prepare("SELECT * FROM cart_temp WHERE id_user = :id_user");
    $statement->bindParam(':id_user', $_SESSION['id_user']);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    $statement = $myPDO->prepare("SELECT * FROM users WHERE id_user = :id_user");
    $statement->bindParam(':id_user', $_SESSION['id_user']);
    $statement->execute();
    $result2 = $statement->fetch(PDO::FETCH_ASSOC);

    $statement = $myPDO->prepare("SELECT * FROM product WHERE id_product = :id_product");
    $statement->bindParam(':id_product', $result['id_product']);
    $statement->execute();
    $result3 = $statement->fetch(PDO::FETCH_ASSOC);

    $statement = $myPDO->prepare("INSERT INTO notification (id_user, context, description, date) VALUES (:id_user, :context, :description, :date)");
    $statement->bindParam(':id_user', $_SESSION['id_user']);
    $context = "Order";
    $statement->bindParam(':context', $context);
    $description = "Your order has been confirmed. You will receive your order in 3-5 business days.\n\nYour order details:\n\n";
    foreach ($result as $key => $value) {
        $description .= $result3['name'] . " x" . $result['quantity'] . " - " . $result['price'] . "€\n";
    }
    $description .= "\nTotal: " . $result['price'] . "€\n\nThank you from the Scriptio Team";
    $statement->bindParam(':description', $description);
    $date = date("Y-m-d");
    $statement->bindParam(':date', $date);
    $statement->execute();

    $statement = $myPDO->prepare("DELETE FROM cart_temp WHERE id_user = :id_user");
    $statement->bindParam(':id_user', $_SESSION['id_user']);
    $statement->execute();

    $to = $result2['email'];
    $subject = "Order confirmation";
    $message = "Hello " . $result2['first_name'] . " " . $result2['last_name'] . ",\n\nYour order has been confirmed. You will receive your order in 3-5 business days.\n\nYour order details:\n\n";
    foreach ($result as $key => $value) {
        $message .= $result3['name'] . " x" . $result['quantity'] . " - " . $result['price'] . "€\n";
    }
    $message .= "\nTotal: " . $result['price'] . "€\n\nThank you from the Scriptio Team";
}

?>