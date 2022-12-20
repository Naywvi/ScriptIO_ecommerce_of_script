<?php
    include_once('./view/_header.php');

    $request = "$_SERVER[REQUEST_URI]";
    
    if($request == '/login'){
        include_once('./view/login/login.php');
    }else{
        include_once('./view/home.php');

        echo "$_SERVER[REQUEST_URI]";
    };
    include_once('./view/_footer.php');
    include_once('./view/_script.php');
    include_once('./view/_end-page.php');

     

?>
