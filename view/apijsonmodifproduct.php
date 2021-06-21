<?php
require_once 'controller/instanceProduit.php';
header ('Content-Type: application/json');

$product->modifyProduct($_POST['product'], $_POST['nom'], $_POST['description'], $_POST['prix']);
echo 'Ok c\'est modifier';

?>
