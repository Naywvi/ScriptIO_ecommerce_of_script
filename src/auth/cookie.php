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
    $cookie_name = getUserRole($email);
    // hash the id to make it harder to guess 
    $cookie_value = password_hash(getID($email), PASSWORD_DEFAULT);
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}

?>