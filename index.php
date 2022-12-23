<?php
    $uri = $_SERVER['REQUEST_URI'];
    $query = $_SERVER['QUERY_STRING'];
    $uri = str_replace($query,"","$uri");
    $uri = str_replace("?","","$uri");
    $uri = str_replace("/","","$uri");
    
    include_once('./public/_header.php');
    
    if($uri == 'admin'){include_once('./public/admin/panel-home.php');}
    if($uri == 'admin-manage-item'){include_once('./public/admin/admin-manage-item.php');}

    if($uri == 'audit'){include_once('./public/audit/audit-script.php');}

    if($uri == 'item'){
        include_once('./public/items/item-profil.php');
        include_once('./public/comment/comment.php');
    }
    if($uri == 'wrap-item'){include_once('./public/items/wrap-item.php');}

    if($uri == 'signin'){include_once('./public/auth/login.php');}
    if($uri == 'signup'){include_once('./public/auth/register.php');}
    if($uri == 'reset-password'){include_once('./public/auth/reset-password.php');}
    if($uri == 'link-verification-email'){include_once('./public/auth/verification-email.php');}

    if($uri == 'my-scripts'){include_once('./public/shop/cart-shopping.php');}
    if($uri == 'my-wish-list'){include_once('./public/shop/wish-list.php');}

    if($uri == 'profile-management'){include_once('./public/user/manage-profile.php');}
    if($uri == 'profile'){include_once('./public/user/profile.php');}

    if($uri == 'privacy-policy'){include_once('./public/privacy-policy.php');}

    if($uri == ''){include_once('./public/home.php');}

    //else{include_once('./public/home.php');};
    include_once('./public/management-website-page/cookie.php');
    include_once('./public/_footer.php');
    include_once('./public/_script.php');
    include_once('./public/_end-page.php');
    
    //https://bootsnipp.com/snippets/A3p9E
    
    ?>
