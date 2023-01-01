<?php

function getItem($id_product){
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $stmt = $myPDO->query("SELECT * FROM product WHERE id_product = $id_product");
    $row = $stmt->fetch();
    $stmt = null;
    $myPDO = null;
    return $row;
}
function echoBDesc($item){
    settype($descChar,"string");
    settype($count,"integer");
    settype($sentence,"integer");
    settype($index,"integer");
    settype($use,"integer");
    $description = explode(" ", $item);
    
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

        if($value == '#;'){
            $sentence += 1;
            echo'<li>' . $sentence . ' <span class="white">' . str_replace('#;', "",$descChar) . '</span></li>';
            $descChar = '';
        }
    }
 
}
function headerItem($item){
    echo'
    <div class="row justify-content-md-center">
            <div class="col col-lg-6 header-item background-white">
                <div class="item-button">
                    <a href="#item" >'.$item[2].'</a>
                </div>
                <div class="header-card">
                    <div> 
                        <span class="c-code">RUBRIC</span>
                    </div>
                </div>
            </div>
        </div>
    ';
}

function descTopItem($item){
    echo'
    <div class="row justify-content-md-center">
            <div class="col col-lg-3 shadow container-description background-white">
                <section class="img-card" id="item">
                    <img src="'.$item[7].'" alt""></img>
                </section>
                <div class="card-item">
                    <p class="title-card-item">'.$item[2].'</p>
                    <p class="description-card-item">
                    '.$item[12].'
                    </p>
                </div>
            </div>
            <div class="col col-lg-3 shadow container-code code">
                <ul >
                ';
                echoBDesc($item[5]);
                echo'
                </ul>
            </div>
        </div>
    ';

}

function echoTrust($trust){ 
  
    if(gettype($trust) == 'integer'){
        
        $rest = 5-$trust;

        for ($i = 0; $i <= $trust-1; $i++) {
            echo '<i class="fa fa-star yellow"></i>';
        }
        for ($i = 0; $i <= $rest-1; $i++) {
            echo '<i class="fa fa-star text-secondary"></i>';
        }

    }else{
        for ($i = 0; $i <= 4; $i++) {
            echo '<i class="fa fa-star text-secondary"></i>';
        }
    }
}

function getUser($id_user){
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $stmt = $myPDO->query("SELECT * FROM users WHERE id_user = '$id_user'");
    $row = $stmt->fetch();
    $stmt = null;
    $myPDO = null;
    return $row;
}

function descBotItem($item){
    $seller = getUser($item[1]);
    echo'
    <div class="row row justify-content-md-center">
            <div class="col col-lg-3 step-installation shadow container-code code container-step">
                <ul style="margin-top: 30px !important;">
                    ';
                    echoBDesc($item[4]);
                    echo'
                </ul>
            </div> 
                <div class="col col-lg-3 shadow background-white">
                    <div class="img-seller">
                        <img src="'.$seller['picture'].'" alt=""></img>
                    </div>
                    <div class="username"><span >Username | <a href="#">Naywvis</a> </span></div>
                    <section class="description-seller-card">
                        <p>Total sales  : ';
                        if($seller['sale'] ===NULL){
                            echo'0';
                        }else{
                            echo $seller['sale'];
                        }
                        echo '</p>
                        <p>Total view   : ';
                        if($seller['view'] === NULL ){
                            echo'1';
                        }else{
                            echo $seller['view'];
                        }
                        echo '</p>
                        <p id="trust">Trust</p>
                    </section>
                    <div class="trust">
                        ';
                        echoTrust($seller['trust']);
                        echo '
                    </div>
                    
                    ';
                    if($seller['lucky_phrase'] === NULL){
                       
                    }else{
                        echo 
                        '<figcaption class="blockquote-footer motz">
                        '.$seller['lucky_phrase'].'
                        </figcaption>';
                    }
                    
                    echo '
                </div>
        </div>
    ';
}

function echoItem($item){
    headerItem($item);
    descTopItem($item);
    descBotItem($item); 
} 

function item(){
    if($query = htmlspecialchars($_GET["item"])){
        
        if($item = getItem($query)){
            echoItem($item);
        }else{
            echo '<meta http-equiv="refresh" content="0; /" />';
        }
    }else{
        echo '<meta http-equiv="refresh" content="0; /" />';
    }
}

?>