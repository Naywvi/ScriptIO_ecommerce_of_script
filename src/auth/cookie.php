<?php
function getUserRole($email) {
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $statement = $myPDO->prepare("SELECT user_role FROM users WHERE email = :email");
    $statement->bindParam(':email', $email);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $myPDO = null;
    return $result['user_role'];
}

function getID($email) {
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $stmt = $myPDO->query("SELECT * FROM users WHERE email = '$email'");
    $row = $stmt->fetch();
    $stmt = null;
    $myPDO = null;
    return $row;
}

function sendCookie($row) {
    unset($_COOKIE['session']);
    setcookie('session', '', time() - 3600, '/');
    setcookie("session", $row['id_user'] . "-" . hash('ripemd160', $row['id_user'])  . "-" . hash('ripemd160', $row['last_connexion'])); // 86400 = 1 day, cookie id - lastConnexion of user and value is hashed 
}


?>