<?php
    include_once('./view/_header.php');

    $request = "$_SERVER[REQUEST_URI]";
    
    if($request == '/admin'){include_once('./view/admin/panel-home.php');}
    if($request == '/admin-manage-item'){include_once('./view/admin/admin-manage-item.php');}

    if($request == '/audit'){include_once('./view/audit/audit-script.php');}

    if($request == '/item'){
        include_once('./view/items/item-profil.php');
        include_once('./view/comment/comment.php');
    }
    if($request == '/wrap-item'){include_once('./view/items/wrap-item.php');}
    //if($request == '/wrap-item-theme'){include_once('./view/items/wrap-item-theme.php');}

    if($request == '/singin'){include_once('./view/connexion/login.php');}
    if($request == '/singup'){include_once('./view/connexion/register.php');}
    if($request == '/reset-password'){include_once('./view/connexion/reset-password.php');}
    if($request == '/link-verification-email'){include_once('./view/connexion/verification-email.php');}

    if($request == '/my-script'){include_once('./view/shop/cart-shopping.php');}
    if($request == '/my-wish-list'){include_once('./view/shop/wish-list.php');}

    if($request == '/profile-management'){include_once('./view/user/manage-profile.php');}
    if($request == '/profile'){include_once('./view/user/profile.php');}

    if($request == '/best-seller'){include_once('./view/best-seller.php');}
    if($request == '/policy-privacy'){include_once('./view/policy-privacy.php');}

    if($request == '/'){include_once('./view/home.php');}
    if ($request == '/contact'){include_once('./view/contact.php');}
    //else{include_once('./view/home.php');};
    include_once('./view/management-website-page/cookie.php');
    include_once('./view/_footer.php');
    include_once('./view/_script.php');
    include_once('./view/_end-page.php');

// lien_actuel = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
