<?php
require_once 'controller/instanceProduit.php';
header ('Content-Type: application/json');

$product->addProduct(2, $_POST['nom'], $_POST['description'], $_POST['prix']);
echo 'Ok c\'est ajouté';
?>