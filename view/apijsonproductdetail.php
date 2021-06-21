<?php
require_once 'controller/instanceProduit.php';
header ('Content-Type: application/json');
echo json_encode($getDetail, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>
