<?php

    // function debug_to_console($data) {
    //     $output = $data;
    //     if (is_array($output))
    //         $output = implode(',', $output);

    //     echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    // }
    // debug_to_console("Test");

    //request
    include_once('./src/request_post.php');
    include_once('./src/request_get.php');

    // put these AFTER the login and register functions so that the cookie is set before the page loads IMPORTANT !!!!!
    include_once('./src/uri.php');
    include_once('./public/_header.php');

    //request page
    include_once('./src/request.php');

    //else{include_once('./public/home.php');};
    include_once('./public/management-website-page/cookie.php');
    include_once('./public/_footer.php');
    include_once('./public/_script.php');
    include_once('./public/_end-page.php');
    
    //https://bootsnipp.com/snippets/A3p9E
    
    ?>
