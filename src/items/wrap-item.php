<?php

function getUser($username){
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $stmt = $myPDO->query("SELECT * FROM users WHERE username = '$username'");
    $row = $stmt->fetch();
    $stmt = null;
    $myPDO = null;
    return $row;
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
function price($price){
    if($price == '0'){
        echo 'FREE';
    }else{
        echo $price,'$';
    }
}

function printItems($items,$query,$rubric,$user) {
    
    settype($index,'integer');
    foreach($items as $value){
        echo '
        <div class="card space-card background-code-widget code">
            <div class="row">

                <div class="col">
                    <div class="card-body">
                        <a href="item?item='.$value[0].'"><h5 style="color: #697de8 !important;" class="card-title white"><span class="cc-code">1 </span >'.$value[2].'</h5></a>
                        <p class="card-text white"><span class="cc-code">2 </span>'.$value[12].'</p>
                        <span class="cc-code">3 </span>
                        ';
                         echoTrust($value[10]);
                         echo '
                        <span class="green bold">- ';
                        price($value[6]);
                         echo'</span>
                    </div>
                    <figure>
                        <figcaption class="blockquote-footer code motz" style="color: #e5ce75 !important;">
                            '.$value[14].'
                        </figcaption>
                    </figure>

                    <icon class="icon">
                        <a href="wrap-item?profile='.$user.'&rubric='.$rubric.'&field='.$query.'&cart='.$value[0].'">
                            <span class="material-symbols-outlined white icon-" >shopping_basket</span>
                        </a>
                        <a href="wrap-item?profile='.$user.'&rubric='.$rubric.'&field='.$query.'&wishlist='.$value[0].'">
                            <span class="material-symbols-outlined white icon-">heart_plus</span>
                        </a>
                        <a href="#">
                            <span class="material-symbols-outlined white icon-">share</span>
                        </a>
                        <a href="#">
                            <span class="material-symbols-outlined red icon-">flag</span>
                        </a>
                    </icon>

                </div>
                    
                <div class="col col-3 img-card">
                    <img src="'.$value[7].'" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
        <div class="col w-100 background-code shadow-separator separator"></div>  
        ';
        $index += 1;
    }
}

function getGenre($genre_name){
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $stmt = $myPDO->query("SELECT * FROM genre WHERE name = '$genre_name'");
    $row = $stmt->fetch();
    $stmt = null;
    $myPDO = null;
    return $row;
}

function getItems($id_genre){
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $stmt = $myPDO->query("SELECT * FROM product WHERE id_genre = $id_genre");
    $row = $stmt->fetchAll();
    $stmt = null;
    $myPDO = null;
    return $row;
}

function addCart($cart,$id_user){
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $stmt = $myPDO->query("INSERT INTO cart_temp ('id_user','id_product','quantity') VALUES ($id_user,$cart,1)");
    $stmt = null;
    $myPDO = null;
}

function addWishList($wishlist,$id_user){
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $stmt = $myPDO->query("INSERT INTO wishlist ('id_user','id_product') VALUES ($id_user,$wishlist)");
    $stmt = null;
    $myPDO = null;
}

function getItemStock($id_product){
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $stmt = $myPDO->query("SELECT stock FROM product WHERE id_product = $id_product");
    $row = $stmt->fetch();
    $stmt = null;
    $myPDO = null;
    return $row;
}

function addFakeStock($onCart,$id_product){
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $stmt = $myPDO->query("UPDATE product SET on_cart = $onCart WHERE id_product = $id_product");
    $stmt = null;
    $myPDO = null;
}

function wrapItems(){

    if($query = htmlspecialchars($_GET["field"])){
        
        $rubric = htmlspecialchars($_GET["rubric"]);
        $user = htmlspecialchars($_GET["profile"]);

        if($cart = htmlspecialchars($_GET["cart"])){

            if($user != '0'){
                addCart($cart,$user);
                $onCart = getItemStock($cart);
                if ($onCart[0] === 'UNLIMITED'){}else{
                    addFakeStock($onCart[0]+1,$cart);
                }
            }else{
                echo '<script>You must log in to be able to add a product to your basket</script>';
            }
            
        }

        if($wishlist = htmlspecialchars($_GET["wishlist"])){

            if($user != '0'){
                addWishList($wishlist,$user);
            }else{
                echo '<script>You must log in to be able to add a product to your wishlist</script>';
            }
        }
        
        if($genre = getGenre($query)){
            if($items = getItems($genre[0])){
                printItems($items,$query,$rubric,$user);
            }else{
                echo '<script>alert("Construction section come back later")</script><meta http-equiv="refresh" content="0; /" />';
            }
        }else{
            echo '<meta http-equiv="refresh" content="0; /" />';
        }
    }else{
        echo '<meta http-equiv="refresh" content="0; /" />';
    }
}
function pop(){
    include_once('./src/notify.php');
    if(htmlspecialchars($_GET["wishlist"])){
        $add = green("Your product is added to your wishlist","Add to your wish list");
        toast($add);
    }else if(htmlspecialchars($_GET["cart"])){
        include_once('./src/notify.php');
            $add = green("Your product is added to your cart","Add to your cart");
            toast($add);
    }
}
?>