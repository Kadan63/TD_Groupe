<?php
require_once 'controller/instanceProduit.php';
// Ajout produit via l'api
header ('Content-Type: application/json');

$product->addProduct(2, $_POST['title'], $_POST['description'], $_POST['price']);
echo 'Ok c\'est ajouté';
?>
