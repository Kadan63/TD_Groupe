<?php include ("model/product.php"); ?>

<?php 
$product = new Produit;
$getProducts = $product->listProduct(); ?>