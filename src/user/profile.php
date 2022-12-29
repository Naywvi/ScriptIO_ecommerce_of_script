<?php
function echoHtmlProfileRight($user){

    if(strlen($user['picture']) != 0){
        echo '
        <div class="img-profil">
            <img src="' . $user['picture'] .'" alt=""></img>
        </div>';
    }else{
        echo '
        <div class="img-profil">
            <img src="https://cvhrma.org/wp-content/uploads/2015/07/default-profile-photo.jpg" alt=""></img>
        </div>';
    }

    echo '<div class="username"><span >Username | <a href="profile?user=' . $user['username'] .'">' . $user['username'] . '</a> </span></div> <section class="description-profil-card">';
            
    if(strlen($user['sale']) != 0){
        echo '<p>Total view   : ' . $user['sale'] . '</p>';
    }else{
        echo '<p>Total sales  : 0</p>';
    }

    if(strlen($user['view']) != 0){
        echo '<p>Total view   : ' . $user['view'] . '</p>';
    }else{
        echo '<p>Total profil view  : 0</p>';
    }

    echo'</section>';

    if(strlen($user['trust']) != 0){

        $rest = 5-$user['trust'];

        echo '
        <p id="trust">Trust</p>
        <div class="trust">';

        for ($i = 0; $i <= $user['trust']-1; $i++) {
            echo '<i class="fa fa-star yellow"></i>';
        }
        for ($i = 0; $i <= $rest-1; $i++) {
            echo '<i class="fa fa-star text-secondary"></i>';
        }
        
        echo'
        </div>';
    }

    if(strlen($user['lucky_phrase']) != 0){
        echo '
        <figcaption class="blockquote-footer motz">
            lucky phrase : ' . $user['lucky_phrase'] . '
            <p></p>
        </figcaption>
        ';
    }
}

function echoHtmlProfileLeft($user){
    settype($descChar,"string");
    settype($count,"integer");
    settype($sentence,"integer");
    settype($index,"integer");
    settype($use,"integer");
    $description = explode(" ", $user['description']);

    foreach($description as $value){
        $index +=1;

        if($use == 1){
            $use = 0;
        }else if($value == '!cyan'){
            $use = 1;
            $descChar .= '<span class="cyan">' . $description[$index] . ' </span>';
        }else if($value == '!cyan-light'){
            $use = 1;
            $descChar .= '<span class="cyan-light">' . $description[$index] . ' </span>';
        }else if($value == '!green'){
            $use = 1;
            $descChar .= '<span class="green">' . $description[$index] . ' </span>';
        }else if($value == '!red'){
            $use = 1;
            $descChar .= '<span class="red">' . $description[$index] . ' </span>';
        }else if($value == '!white'){
            $use = 1;
            $descChar .= '<span class="white">' . $description[$index] . ' </span>';
        }else if($value == '!yellow'){
            $use = 1;
            $descChar .= '<span class="yellow">' . $description[$index] . ' </span>';
        }else if($value == '!blink'){
            $use = 1;
            $descChar .= '<span class="blink">' . $description[$index] . ' </span>';
        }else if($value == '!comment'){
            $use = 1;
            $descChar .= '<span class="comment"> //' . $description[$index] . ' </span>';
        }else{
            $descChar .= $value . ' ';
            $count += 1;
        }

        if($count == 5 || $value == '&#10;'){
            $sentence += 1;
            echo'<li>' . $sentence . ' <span class="white">' . $descChar . '</span></li>';
            $descChar = '';
            $count = 0;
        }
    }
 
}

function queryUser($query){
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $stmt = $myPDO->query("SELECT * FROM users WHERE username = '$query'");
    $row = $stmt->fetch();
    $stmt = null;
    $myPDO = null;
    return $row;
}

function right(){
    $query = htmlspecialchars($_GET["user"]);
    if($query == $user['username']){
        echoHtmlProfileRight($user);
    }else{
        if($user_query = queryUser($query)){
            echoHtmlProfileRight($user_query);
        }else{
            echo '<meta http-equiv="refresh" content="0; /" />';
        }
    } 
}

function left(){
    $query = htmlspecialchars($_GET["user"]);
    if($query == $user['username']){
        //echoHtmlProfileLeft($user);
    }else{
        if($user_query = queryUser($query)){
            echoHtmlProfileLeft($user_query);
        }else{
            echo '<meta http-equiv="refresh" content="0; /" />';
        }
    } 
}

?>