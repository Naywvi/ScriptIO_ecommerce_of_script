<?php

function getID($email) {
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $statement = $myPDO->prepare("SELECT id_user FROM users WHERE email = :email");
    $statement->bindParam(':email', $email);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result;
}

?>