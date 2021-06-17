<?php include ("model/product.php"); 

$url = '/TD_Groupe/';
$product = new Produit;
if(!empty($aParam[4])AND($aParam[4]=='oskoure')) :
    $product->modifyProduct($_POST['idProduct'], $_POST['nom'], $_POST['description'], $_POST['prix']);
    header("Location: {$url}product");
endif;
$getProducts = $product->listProduct();
if (!empty($aParam[3])) {
    $getDetail = $product->detailProduct($aParam[3]);
}
?>
