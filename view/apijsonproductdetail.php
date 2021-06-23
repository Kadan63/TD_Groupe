<?php
require_once 'controller/instanceProduit.php';
// On créer un JSON avec le contenu de getDetail qui contient le detail d'un produit
header ('Content-Type: application/json');
echo json_encode($getDetail, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>
