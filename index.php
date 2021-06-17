<?php

$serveur = $_SERVER['REQUEST_URI'];
$aParam = explode("/", $serveur);

var_dump($aParam);

switch ($aParam[2]) {

    case 'product':
    include 'view/productList.php';
    break;

    case 'detail':
    include 'view/detail.php';
    break;

    default:
    include 'view/404.php';
    break;
}
?>
