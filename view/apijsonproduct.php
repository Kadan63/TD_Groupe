<?php 
require_once 'controller/instanceProduit.php';
header ('Content-Type: application/json');
echo json_encode($getProducts, JSON_PRETTY_PRINT);


?>