<?php
    function getUser($user){
        $myPDO = new PDO('sqlite:./db/Scriptio.db');
        $stmt = $myPDO->query("SELECT * FROM users WHERE username = '$user'");
        $row = $stmt->fetch();
        $stmt = null;
        $myPDO = null;
        return $row;
    }

    function getPrice($id_product){
        $myPDO = new PDO('sqlite:./db/Scriptio.db');
        $stmt = $myPDO->query("SELECT price FROM product WHERE id_product = $id_product");
        $row = $stmt->fetch();
        $stmt = null;
        $myPDO = null;
        return $row;
    }

    function sendItem($id_user,$product_name,$id_genre,$product_description,$installation_steps,$price,$product_image,$script,$stock,$trust,$view,$short_description,$last_price,$motz_installation_steps,$buy,$on_cart){
        $myPDO = new PDO('sqlite:./db/Scriptio.db');
        $stmt = $myPDO->query("INSERT INTO product ('id_user','product_name','id_genre','product_description','installation_steps','price','product_image','script','stock','trust','view','short_description','last_price','motz_installation_steps','buy','on_cart') VALUES ('$id_user','$product_name','$id_genre','$product_description','$installation_steps','$price','$product_image','$script','$stock','$trust','$view','$short_description','$last_price','$motz_installation_steps','$buy','$on_cart')");
        $row = $stmt->fetch();
        $stmt = null;
        $myPDO = null;
        return $row;
    }

    function newItem(){
        
        $query = htmlspecialchars($_GET["profile"]);
        $user = getUser($query);
        if($user['username'] === $query){
            echo 'ok';
            $r = array(
                $_POST['product-name'],
                $_POST['category'],
                $_POST['short-description-right'],
                $_POST['installation-steps'],
                $_POST['price'],
                $_POST['image'],
                $_POST['script'],
                $_POST['stock'],
                $_POST['short-description-left'],
                $_POST['motz-installation-steps']
            );
            
            if($r[4] === '0'){
                $r[4] = 'FREE';
            }

            if($r[7] === '0'){
                $r[7] = 'UNLIMITED';
            }
            settype($verification,'boolean');
            $verification = true;

            foreach($row_post as $value){
                if(strlen($value) == 0){
                    $verification = false;
                    break;
                }
            }

            if($verification){
                sendItem($user['id_user'],$r[0],$r[1],$r[2],$r[3],$r[4],$r[5],$r[6],$r[7],'NULL','NULL',$r[8],'NULL',$r[9],'NULL','NULL');
            }else{
                //echo '<script>alert("Please fill in all required fields")</script>';
            }
            echo '<script>alert("Publication successful, you will be redirected to the main page in 5 seconds")</script><meta http-equiv="refresh" content="5; /" />';
            
        }else{ 
            echo '<meta http-equiv="refresh" content="0; /" />';
        }
        
    }
?>