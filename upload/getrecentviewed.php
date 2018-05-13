<?php

    $cookieproducts = array();

    if (isset($_COOKIE["cookiemarket"])) {
        $cookieproducts = unserialize($_COOKIE['cookiemarket']);
    }
    echo json_encode($cookieproducts);
?>