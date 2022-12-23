<?php
    $uri = $_SERVER['REQUEST_URI'];
    $query = $_SERVER['QUERY_STRING'];
    $uri = str_replace($query,"","$uri");
    $uri = str_replace("?","","$uri");
    $uri = str_replace("/","","$uri");
    
    include_once('./view/_header.php');
    
    if($uri == 'admin'){include_once('./view/admin/panel-home.php');}
    if($uri == 'admin-manage-item'){include_once('./view/admin/admin-manage-item.php');}

    if($uri == 'audit'){include_once('./view/audit/audit-script.php');}

    if($uri == 'item'){
        include_once('./view/items/item-profil.php');
        include_once('./view/comment/comment.php');
    }
    if($uri == 'wrap-item'){include_once('./view/items/wrap-item.php');}

    if($uri == 'singin'){include_once('./view/connexion/login.php');}
    if($uri == 'singup'){include_once('./view/connexion/register.php');}
    if($uri == 'reset-password'){include_once('./view/connexion/reset-password.php');}
    if($uri == 'link-verification-email'){include_once('./view/connexion/verification-email.php');}

    if($uri == 'my-scripts'){include_once('./view/shop/cart-shopping.php');}
    if($uri == 'my-wish-list'){include_once('./view/shop/wish-list.php');}

    if($uri == 'profile-management'){include_once('./view/user/manage-profile.php');}
    if($uri == 'profile'){include_once('./view/user/profile.php');}

    if($uri == 'policy-privacy'){include_once('./view/policy-privacy.php');}

    if($uri == ''){include_once('./view/home.php');}

    //else{include_once('./view/home.php');};
    include_once('./view/management-website-page/cookie.php');
    include_once('./view/_footer.php');
    include_once('./view/_script.php');
    include_once('./view/_end-page.php');
    
    //https://bootsnipp.com/snippets/A3p9E
    
    ?>
