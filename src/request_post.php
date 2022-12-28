<?php
    if(isset($_POST['register'])) { // if register form was submitted
        include_once('./src/auth/register.php');
        register();
    }

    if (isset($_POST['login'])) { // if login form was submitted
        include_once('./src/auth/login.php');
        login();
    }

    if (isset($_POST['new-item'])) {
        include_once('./src/items/new-item.php');
        newItem();
    }

    if (isset($_POST['cart-add'])) {
        include_once('./src/shop/cart-shopping.php');
        addToCart();
    }
?>