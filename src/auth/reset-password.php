<?php

function verify($email, $user_password){
    $db = new PDO('sqlite:./db/Scriptio.db');

    $sql = 'SELECT * FROM users WHERE email =:email';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();

    $db= null;
    return $stmt->fetch();
}
function reset_password(){
    $email = $_POST['reset-email'];
    $user_password = $_POST['password'];

    
    $row = verify($email, $user_password);
    
    if($row){
        if (password_verify($user_password, $row['user_password'])) {
                //send email ? --->
                echo "<style>#message_valid{display:unset !important;}</style>";
            } else {
                echo "<style>#message_error{display:unset !important;}</style>";;
            }
        $result = null;

    }else{
        echo "<style>#message_error{display:unset !important;}</style>";
    }

    
};

?>