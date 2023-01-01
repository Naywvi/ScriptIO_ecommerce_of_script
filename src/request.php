<?php
    $error = true;

    if($uri == 'admin'){include_once('./public/admin/panel-home.php'); $error = false ;}
    if($uri == 'admin-manage-item'){include_once('./public/admin/admin-manage-item.php');$error = false ;}

    if($uri == 'audit'){include_once('./public/audit/audit-script.php');$error = false ;}

    if($uri == 'new-item'){include_once('./public/items/new-item.php');$error = false ;}
    if($uri == 'item'){
        $error = false ;
        include_once('./public/items/item-profil.php');
        include_once('./public/comment/comment.php');
    }
    if($uri == 'wrap-item'){include_once('./public/items/wrap-item.php');$error = false ;}
    if($uri == 'modify-item'){include_once('./public/items/modify-item.php');$error = false ;}

    if($uri == 'signin'){include_once('./public/auth/login.php');$error = false ;}
    if($uri == 'signup'){include_once('./public/auth/register.php');$error = false ;}
    if($uri == 'reset-password'){include_once('./public/auth/reset-password.php');$error = false ;}
    if($uri == 'link-verification-email'){include_once('./public/auth/verification-email.php');$error = false ;}

    if($uri == 'checkout'){include_once('./public/shop/payment.php');$error = false ;}
    if($uri == 'my-wish-list'){include_once('./public/shop/wish-list.php');$error = false ;}

    if($uri == 'profile-management'){include_once('./public/user/manage-profile.php');$error = false ;}
    if($uri == 'profile'){include_once('./public/user/profile.php');$error = false ;}
    if($uri == 'history'){include_once('./public/user/history.php');$error = false ;}
    if($uri == 'manage-product'){include_once('./public/user/manage-product.php');$error = false ;}

    if($uri == 'privacy-policy'){include_once('./public/privacy-policy.php');$error = false ;}

    if($uri == ''){include_once('./public/home.php');$error = false ;}
    
    if($error){include_once('./public/404.php');}
    
?>