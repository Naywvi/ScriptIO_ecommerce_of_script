<?php
    $uri = $_SERVER['REQUEST_URI'];
    $query = $_SERVER['QUERY_STRING'];
    $uri = str_replace($query,"","$uri");
    $uri = str_replace("?","","$uri");
    $uri = str_replace("/","","$uri");
?>