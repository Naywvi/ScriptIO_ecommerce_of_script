<?php

function getUserRole($email) {
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $statement = $myPDO->prepare("SELECT user_role FROM users WHERE email = :email");
    $statement->bindParam(':email', $email);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result['user_role'];
}

function getID($email) {
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $statement = $myPDO->prepare("SELECT id_user FROM users WHERE email = :email");
    $statement->bindParam(':email', $email);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result['id_user'];
}

function sendCookie($email) {
    setcookie($email, password_hash(getID($email), PASSWORD_DEFAULT), time() + (86400 * 30), "/"); // 86400 = 1 day, cookie name is email of user and value is hashed id of user
}

?>