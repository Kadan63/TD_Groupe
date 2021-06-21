<?php

$serveur = $_SERVER['REQUEST_URI'];
$aParam = explode("/", $serveur);


switch ($aParam[2]) {

    case 'product':
    include 'view/productList.php';
    break;

    case 'detail':
    include 'view/detail.php';
    break;

    case 'form':
        include 'view/formProduct.php';
        break;

    case 'traitement':
        include 'view/traitement.php';
        break;
    
    case 'api':
    if (!empty ($aParam[2]) AND $aParam[3]=='products') : 
        include'view/apijsonproduct.php';
        endif;
        break;
   

    default:
    include 'view/404.php';
    break;
}
?>
