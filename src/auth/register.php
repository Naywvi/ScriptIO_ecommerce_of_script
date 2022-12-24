<?php

function register() {
    $myPDO = new PDO('sqlite:./db/Scriptio.db');

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];
    $phone_number = $_POST['phone_number'];
    $user_role = "user";
    
    //check if user exists
    $statement = $myPDO->prepare("SELECT * FROM users WHERE username = :username");
    $statement->bindParam(':username', $username);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        echo "Invalid credentials";
        exit();
    } else {
        $statement = $myPDO->prepare("INSERT INTO users (firstname, lastname, username, user_password, email, birthday, phone_number, user_role) VALUES (:firstname, :lastname, :username, :user_password, :email, :birthday, :phone_number, :user_role)");
        $statement->bindParam(':firstname', $firstname);
        $statement->bindParam(':lastname', $lastname);
        $statement->bindParam(':username', $username);
        $statement->bindParam(':user_password', $user_password);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':birthday', $birthday);
        $statement->bindParam(':phone_number', $phone_number);
        $statement->bindParam(':user_role', $user_role);
        $statement->execute();
        header("Location: /signin");
    }
}





?>