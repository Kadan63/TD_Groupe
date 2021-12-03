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
        if (!empty ($aParam[2]) AND $aParam[3]=='products' AND $_SERVER['REQUEST_METHOD']=="PUT" AND !empty($aParam[4])) :
            include 'view/apijsonmodifproduct.php';
            elseif (!empty ($aParam[2]) AND $aParam[3]=='products' AND $_SERVER['REQUEST_METHOD']=="POST"):
                include 'view/apijsonaddproduct.php';
                elseif (!empty ($aParam[2]) AND $aParam[3]=='products' AND !empty($aParam[4])) :
                    include 'view/apijsonproductdetail.php';
                    elseif (!empty ($aParam[2]) AND $aParam[3]=='products' AND empty($aParam[4])) :
                        include 'view/apijsonproduct.php';
                    endif;
                    break;
                    case 'formapi' :
                        include 'view/formApi.php';
                        break;
                        default:
                        include 'view/404.php';
                        break;
                    }
                    ?>
