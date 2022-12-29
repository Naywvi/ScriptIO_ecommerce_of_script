<?php

include './src/auth/cookie.php';


function login() {
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    
    //print data from form
    // print_r(var_dump($_POST));
    $email = $_POST['email'];
    $user_password = $_POST['user_password'];

    //check if user exists
    $statement = $myPDO->prepare("SELECT * FROM users WHERE email = :email");
    $statement->bindParam(':email', $email);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    

    if ($result) {
        if (password_verify($user_password, $result['user_password'])) {
            //send cookie to user
            $row = getID($email);

            //**Forced to place last_connexion here -> bug 
            $lastC = date("j-n-Y");
            $pdo = new PDO('sqlite:./db/Scriptio.db');
            $sql = 'UPDATE users 
                    SET last_connexion=:lastC 
                    WHERE id_user = 14';
            $statement = $pdo->prepare($sql);
            $statement->bindParam(':lastC', $lastC, PDO::PARAM_STR);
            $statement->bindParam(':lastC', $row['id_user'], PDO::PARAM_INT);

            $pdo = null;
            //**Forced to place last_connexion here -> bug 
            
            sendCookie($row);

            $row = null;
        } else {
            echo "Invalid credentials";
            exit();
        }
    } else {
        echo "Invalid credentials";
        exit();
    }
}


?>