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

    case 'form':
        include 'view/formProduct.php';
        break;

    case 'traitement':
        include 'view/traitement.php';
        break;
    
    case 'api':
    if (!empty ($aparam[2]) AND $aParam[3]=='products') : 
        include'view/apijsonproduct.php';
        echo 'Bon tu marches ?';
        endif;
        break;
   

    default:
    include 'view/404.php';
    break;
}
?>
