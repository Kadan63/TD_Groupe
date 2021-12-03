<?php
require_once 'controller/instanceProduit.php';
// Modif produit via l'api
header ('Content-Type: application/json');
echo $aParam[4];
var_dump($_POST);
$product->modifyProduct($aParam[4], $_POST['title'], $_POST['description'], $_POST['price']);
echo 'Ok c\'est modifier';

?>
