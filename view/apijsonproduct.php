<?php 
require_once 'controller/instanceProduit.php';
echo 'Bonjour non.';
header ('Content-Type: application/json');
echo json_encode($getProducts, JSON_PRETTY_PRINT);


?>