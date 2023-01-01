<?php
    if(isset($_POST['register'])) { // if register form was submitted
        include_once('./src/auth/register.php');
        register();
    }

    if (isset($_POST['login'])) { // if login form was submitted
        include_once('./src/auth/login.php');
        login();
    }

    if (isset($_POST['reset-password'])) { // if login form was submitted
        include_once('./src/auth/reset-password.php');
        reset_password();
    }
    if (isset($_POST['manage-profile'])) { // if login form was submitted
        include_once('./src/user/manage-profile.php');
        manage(htmlspecialchars($_GET["profile"]));
    }
    if (isset($_POST['new-item'])) {
        include_once('./src/items/new-item.php');
        newItem();
    }

    if (isset($_POST['cart-add'])) {
        include_once('./src/shop/cart-shopping.php');
        addToCart();
    }

    if (isset($_POST['edit-item'])) {
        include_once('./src/items/modify-item.php');
        modifyItem();
    }
    if (isset($_POST['cart-submit'])) {
        include_once('./src/items/payment.php');
        submitCart();
    }
?>