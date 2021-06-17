<?php include ("model/product.php"); ?>

<?php 

$product = new Produit;
$getProducts = $product->listProduct(); 
$getDetail = $product->detailProduct($aParam[3]);

?>