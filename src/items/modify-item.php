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

    function edit($field,$value,$id_product){
        $myPDO = new PDO('sqlite:./db/Scriptio.db');
        $stmt = $myPDO->query("UPDATE product SET $field = $value WHERE id_product = $id_product");
        $row = $stmt->fetch();
        $stmt = null;
        $myPDO = null;
        return $row;
    }

    function modifyItem(){
        $query = htmlspecialchars($_GET["profile"]);
        $id_product = htmlspecialchars($_GET["product"]);
        $user = getUser($query);
        if($user['username'] === $query){
            $row_post = array(
                $_POST['new-category'],
                $_POST['new-product-name'],
                $_POST['new-short-description-left'],
                $_POST['new-short-description-right'],
                $_POST['new-installation-steps'],
                $_POST['new-motz-installation-steps'],
                $_POST['new-image'],
                $_POST['new-price']
            );

            $row_table = array(
                'id_genre',
                'product_name',
                'short_description',
                'product_description',
                'installation_steps',
                'product_image',
                'price',
                'last_price',
            );

            settype($index,'integer');
            $index = 0;
            foreach($row_post as $value){
                
                if(strlen($value) != 0){

                    if($row_table[$index-1] === 'price'){
                        $price = getPrice($id_product);
                        edit($row_table[$index-1],$value,$id_product);
                        edit($row_table[$index],$price[0],$id_product);
                    }else{
                        edit($row_table[$index-1],"'".$value."'",$id_product);
                    }
                }
                $index += 1;
            }
            echo '<meta http-equiv="refresh" content="0; /manage-product?profile='.$user['username'].'" />';
            
        }else{ 
            echo '<meta http-equiv="refresh" content="0; /" />';
        }
    }
?>