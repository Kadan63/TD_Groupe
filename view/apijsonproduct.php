<?php
require_once 'controller/instanceProduit.php';
// On créer un JSON avec le contenu de getProducts qui contient la liste de tout les produits
header ('Content-Type: application/json');
echo json_encode($getProducts, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);


?>
