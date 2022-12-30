<?php
function getNot($user_id){
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $statement = $myPDO->query("SELECT * FROM notification WHERE id_user = $user_id");
    $result = $statement->fetchAll();
    $myPDO = null;
    return $result;
}
function notification($user){
    if($user['username'] == htmlspecialchars($_GET["profile"])){
        if($id = htmlspecialchars($_GET["commentid"])){
            delete($id);
        }

        if($rows_notification = getNot($user['id_user'])){

        settype($index, 'integer');
        
            foreach($rows_notification as $v){
                    foreach($rows_notification[$index] as $p){
                    
                        echo '<li style="border-bottom-width: 1px;border-bottom-style: solid;">';
                        if($rows_notification[$index][2] === 'Last order'){
                            echo '<a href="#!" style="color: green;">'.$rows_notification[$index][2].'</a>';
                        }else if($rows_notification[$index][2] === 'Audit'){
                            echo '<a href="#!" style="color: #0f971e;font-weight: bold;">'.$rows_notification[$index][2].'</a>';
                        }else if($rows_notification[$index][2] === 'Message from the staff'){
                            echo '<a href="#!" style="color: #a21327;font-weight: bold;">'.$rows_notification[$index][2].'</a>';
                        }else if($rows_notification[$index][2] === 'Customer feedback'){
                            echo '<a href="#!" style="color: #355dd5;font-style: oblique;">'.$rows_notification[$index][2].'</a>';
                        }else{
                            echo '<a href="#!"> '.$rows_notification[$index][2].'</a>';
                        }
                        echo'
                            <a href="#!" class="float-end">'.$rows_notification[$index][4].'</a>
                            <p class="mt-2">'.$rows_notification[$index][3].'</p>
                            <a href="?profile=',$user['username'],'&commentid=',$rows_notification[$index][0],'" class="float-end text-danger">delete notification</a>
                        </li>
                        ';
                        break;
                    } 
                    $index += 1;
                }
        }else{
            echo '
            <li>
            <a href="#!" class="float-end">today</a>
            <p class="mt-2">You don\'t have any notification at the moment</p>
            </li>
            ';
        }
    }else{
        echo '<meta http-equiv="refresh" content="0; /" />';
    }
}
function delete($id){
    $myPDO = new PDO('sqlite:./db/Scriptio.db');
    $statement = $myPDO->query("DELETE FROM notification WHERE id_notification = $id");
    $myPDO = null;
    $statement = null;
}
//select count(*) from notification where id_user = 16
?>