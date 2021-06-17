<?php

$serveur = $_SERVER['REQUEST_URI'];

switch ($serveur) {
    case '/TD_Groupe/product':
        include 'view/productList.php';
        break;

    default:
        include 'view/404.php';
        break;
}
?>