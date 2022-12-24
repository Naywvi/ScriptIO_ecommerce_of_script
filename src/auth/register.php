<?php

function register() {
    $myPDO = new PDO('sqlite:./../db/Scriptio.db');

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];
    
    //check if user exists
    $statement = $myPDO->prepare("SELECT * FROM users WHERE username = :username");
    $statement->bindParam(':username', $username);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    
    echo "test";
    if ($result) {
        echo "Invalid credentials";
        exit();
    } else {
        $statement = $myPDO->prepare("INSERT INTO users (firstname, lastname, username, password, email, birthday) VALUES (:firstname, :lastname, :username, :password, :email, :birthday)");
        $statement->bindParam(':firstname', $firstname);
        $statement->bindParam(':lastname', $lastname);
        $statement->bindParam(':username', $username);
        $statement->bindParam(':password', $password);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':birthday', $birthday);
        $statement->execute();
    }
}





?>