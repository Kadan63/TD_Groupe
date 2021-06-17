<?php include 'controller/instanceProduit.php';
var_dump($_POST);
$product->modifyProduct($_POST['idProduct'], $_POST['nom'], $_POST['description'], $_POST['prix']);

?>
