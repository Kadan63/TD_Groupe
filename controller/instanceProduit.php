<?php include ("model/product.php"); ?>

<?php

$product = new Produit;
$getProducts = $product->listProduct();
if (!empty($aParam[3])) {
    $getDetail = $product->detailProduct($aParam[3]);
}
?>
