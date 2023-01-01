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

    function saveFile($file, $path) {
        if ($file['size'] > 10000000) { // check for file size (10MB)
            echo "File is too large";
            return false;
        }
        $path = $path . md5(rand(0,1000)); // generate random name for file and add it to path
        if (!move_uploaded_file($file["tmp_name"], $path)) { // save file
            //echo "Error saving file";
            return false;
        }


        return $path; // return path to file
    }

    function loadFile($path) {
        if (!file_exists($path)) { // check if file exists
            echo "File not found";
            return false;
        }
        return file_get_contents($path); // return file content
    }

    function GetIDGenre($genre_name){
        echo $genre_name;
        $myPDO = new PDO('sqlite:./db/Scriptio.db');
        $stmt = $myPDO->query("SELECT id_genre FROM genre WHERE name = '$genre_name'");
        $row = $stmt->fetch();
        $stmt = null;
        $myPDO = null;
        return $row;
    }

    function sendItem($id_user,$product_name,$id_genre,$product_description,$installation_steps,$price,$product_image,$script,$stock,$trust,$view,$short_description,$last_price,$motz_installation_steps,$buy,$on_cart){
        $myPDO = new PDO('sqlite:./db/Scriptio.db');
        $product_image = saveFile($product_image, './db/images/');
        $script = saveFile($script, './db/scripts/');
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
            $r = array(
                $_POST['product-name'],
                $_POST['category'],
                $_POST['short-description-right'],
                $_POST['installation-steps'],
                $_POST['price'],
                $_FILES['image'],
                $_FILES['script'],
                $_POST['stock'],
                $_POST['short-description-left'],
                $_POST['motz-installation-steps']
            );

            if($r[7] === '-1'){
                $r[7] = 'UNLIMITED';
            }

            if($r[1] === 'FREE'){
                
                $r[1] = 1;
            }else if($r[1] === 'Social networks'){
                
                $r[1] = 2;
            }else if($r[1] === 'Scrapping'){
                $r[1] = 3;
            }else if($r[1] === 'Emailing'){
                $r[1] = 4;
            }else if($r[1] === 'Web'){
                $r[1] = 5;
            }else if($r[1] === 'Windows'){
                $r[1] = 6;
            }else if($r[1] === 'Linux'){
                $r[1] = 7;
            }else if($r[1] === 'MacOS'){
                $r[1] = 8;
            }else if($r[1] === 'Mobile'){
                $r[1] = 9;
            }else if($r[1] === 'other'){
                $r[1] = 10;
            }else if($r[1] === 'Macro'){
                $r[1] = 11;
            }else{
                $r[1] = NULL;
            }
            
            if($r[4] === '-1'){
                $r[4] = 'FREE';
                $r[1] = '1';
            }
          
            settype($verification,'boolean');
            $verification = true;
            
            foreach($r as $value){
                if($_FILES['image'] || $_FILES['script']){

                }else if(strlen($value) == 0){
                    $verification = false;
                    break;
                }
            }
           
            if($verification){
                sendItem($user['id_user'],$r[0],$r[1],$r[2],$r[3],$r[4],$r[5],$r[6],$r[7],'NULL','NULL',$r[8],'NULL',$r[9],'NULL','NULL');
            }else{
                echo '<script>alert("Please fill in all required fields")</script>';
                return;
            }
            //echo '<script>alert("Publication successful, you will be redirected to the main page in 5 seconds")</script><meta http-equiv="refresh" content="5; /" />';
            
        }else{ 
            echo '<meta http-equiv="refresh" content="0; /" />';
        }
        
    }
?>