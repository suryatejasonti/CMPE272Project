<?php

    $cookieproducts = array();

    if (isset($_COOKIE["cookieproducts"])) {
        $cookieproducts = unserialize($_COOKIE['cookieproducts']);
    }
    echo $cookieproducts;
?>