<?php

function getIdUser($username){
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $stmt = $myPDO->query("SELECT id_user,user_password FROM users WHERE username = '$username'");
    $row = $stmt->fetch();
    $stmt = null;
    $myPDO = null;
    return $row;
}

function manage($user){
    $row_user = array(
        $_POST['first-name'],
        $_POST['last-name'],
        $_POST['compagny'],
        $_POST['phone'],
        $_POST['email'],
        $_POST['lucky-phrase'],
        $_POST['picture'],
        $_POST['description'],
        'first_name',
        'last_name',
        'compagny',
        'phone_number',
        'email',
        'lucky_phrase',
        'picture',
        'description'
    );

    $row_address = array(
        $_POST['address'],
        $_POST['postal-code'],
        $_POST['city'],
        $_POST['country'],
        'address',
        'postal_code',
        'city',
        'country'
    );

    $row_password = array(
        $_POST['last-password'],
        $_POST['new-password'],
        'last-password',
        'new-password',
    );
    
    settype($indexX,'integer');

    foreach($row_user as $value){
        if(strlen($value) != 0 && $indexX <= 7){
            $index += 1;
            $field = $row_user[8+$indexX];
            $myPDO = new PDO('sqlite:./db/Scriptio.db');
            $stmt = $myPDO->query("UPDATE users SET $field = '$value' WHERE username = '$user'");
            $stmt = null;
            $myPDO = null;
        }
        $indexX +=1;
    }

    $indexX =0;
    $id_user = getIdUser($user);
    $id = $id_user[0];
    $id_p = $id_user[1];

    foreach($row_address as $v){
        if(strlen($v) != 0 && $indexX <= 3){
            $field = $row_address[$indexX+4];
            $myPDO = new PDO('sqlite:./db/Scriptio.db');
            if($field == 'city' || $field == 'address'|| $field == 'country'){
                $stmt = $myPDO->query("UPDATE address SET $field = '$v' WHERE id_user = $id");
            }else{
                $stmt = $myPDO->query("UPDATE address SET $field = '$v' WHERE id_user = $id");
            }
            $stmt = null;
            $myPDO = null;
        }
        $indexX +=1;
    }
    $indexX =0;
    foreach($row_password as $p){
        if(strlen($p) != 0 && $indexX <= 1){
            $index += 1;
            $field = $row_password[2+$indexX];
            if($field == 'last-password'){
                if(password_verify($p, $id_p)){
                    $new_password = password_hash($row_password[1], PASSWORD_DEFAULT);
                    $myPDO = new PDO('sqlite:./db/Scriptio.db');
                    $stmt = $myPDO->query("UPDATE users SET user_password = '$new_password' WHERE id_user = '$id'");
                    $stmt = null;
                    $myPDO = null;
                }else{
                    echo '<script>alert("bad password")</script>';
                }
            }else{

            }
            
            
        }
        $indexX +=1;
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

function takeAdress($query){
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $stmt = $myPDO->query("SELECT * FROM address WHERE id_user = $query");
    $row = $stmt->fetch();
    $stmt = null;
    $myPDO = null;
    return $row;
}
function password($password){
    echo'
    <div class="row mb-4">

        <div class="col">
            <div class="form-outline">
               <input type="password" id="form6Example1" class="form-control" placeholder="last password" name="last-password"/>
               <label class="form-label" for="form6Example1" >Last password</label>
               <figure id="message-last-password" style="display:none;">
                    <p style="color:red !important;">wrong password or username</p>
                </figure>            
            </div>
        </div>

        <div class="col">
            <div class="form-outline">
                <input type="password" id="form6Example2" class="form-control" placeholder="new password" name="new-password"/>
                <label class="form-label" for="form6Example1" >New password</label>
            </div>
        </div>

    </div>
    ';
}
function firstname($fn){
    echo'
    <div class="row mb-4">
  
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" class="form-control" placeholder="'.$fn.'" name="first-name"/>
        <label class="form-label" for="form6Example1" >First name</label>
      </div>
    </div>
    ';
}
function lastname($ln){
    echo'
    <div class="col">
        <div class="form-outline">
            <input type="text" id="form6Example2" class="form-control" placeholder="'.$ln.'" name="last-name"/>
            <label class="form-label" for="form6Example2" >Last name</label>
        </div>
    </div>
    </div>
    ';
}
function username($us){
    echo'
    <div class="form-outline mb-4">
        <input type="text" id="username" class="form-control" placeholder="'.$us.'" disabled/>
        <label class="form-label" for="username">Username</label>
    </div>
    ';
}
function birthday($bd){
    echo'
    <div class="form-outline mb-4">
        <input type="text" id="birthday" class="form-control" placeholder="'.$bd.'" disabled/>
        <label class="form-label" for="birthday">Birthday</label>
    </div>
    ';
}
function compagny($cp){
    echo'
    <div class="form-outline mb-4">
        <input type="text" id="company" class="form-control" placeholder="'.$cp.'" name="compagny"/>
        <label class="form-label" for="company">Company name</label>
    </div>
    ';
}//INSERT INTO address VALUES (1,15,'fr','30 rue rouge','paris',75)
function address($ad){
    echo'
        
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline mb-4">
                    <input type="text" id="address" class="form-control" placeholder="'.$ad['address'].'" name="address"/>
                    <label class="form-label" for="address">Address</label>
                </div>

                <div class="form-outline">
                    <input type="text" id="form6Example1" class="form-control" placeholder="'.$ad['city'].'" name="city"/>
                    <label class="form-label" for="form6Example1" >city</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline mb-4">
                    <input type="text" id="form6Example2" class="form-control" placeholder="'.$ad['postal_code'].'" name="postal-code"/>
                    <label class="form-label" for="form6Example2" >Postal code</label>
                </div>

                <div class="form-outline">
                    <input type="text" id="form6Example2" class="form-control" placeholder="'.$ad['country'].'" name="country"/>
                    <label class="form-label" for="form6Example2" >Country</label>
                </div>
            </div>
        </div>
    ';
}

function email($em){
    echo'
    <div class="form-outline mb-4 ">
        <div class="email">
            <input type="email" class="form-control email-left" placeholder="'.$em.'" disabled/>
            <input type="email" id="email" class="form-control email-right" placeholder="New email" name="email"/>
        </div>
    <label class="form-label" for="email">Email</label>
    </div>
    ';
}

function phone($ph){
    echo'
    <div class="form-outline mb-4">
    <div class="number">
        <input type="text" class="form-control number-left" placeholder="'.$ph.'" disabled/>
        <input type="text" id="phone" class="form-control number-right" placeholder="New phone number" name="phone"/>
        </div>
        <label class="form-label" for="phone">Phone</label>
    </div>
    ';
}

function luckyphrase($lk){
    echo'
    <div class="form-outline mb-4">
        <input type="text" id="company" class="form-control" placeholder="'.$lk.'" name="lucky-phrase"/>
        <label class="form-label" for="company">Lucky phrase</label>
    </div>
    ';
}
function form($user){
    $query = htmlspecialchars($_GET["profile"]);
    if($query == $user['username']){
        $address = takeAdress($user['id_user']);
        password($user['password']);
        firstname($user['first_name']);
        lastname($user['last_name']);
        username($user['username']);
        birthday($user['birthday']);
        compagny($user['compagny']);
        address($address);
        email($user['email']);
        phone($user['phone_number']);
        luckyphrase($user['lucky_phrase']);
    }else{
        echo '<meta http-equiv="refresh" content="0; /" />';
    } 
}
?>