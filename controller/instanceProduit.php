<?php include ("model/product.php"); 

$url = '/TD_Groupe/';
$product = new Produit;
if(!empty($aParam[4])AND($aParam[4]=='oskoure')) :
    $product->modifyProduct($_POST['idProduct'], $_POST['nom'], $_POST['description'], $_POST['prix']);
    header("Location: {$url}product");
endif;
if (!empty($aParam[3])) : 
    if($aParam[3]=='oskoure') :
        $product->addProduct(2, $_POST['nom'], $_POST['description'], $_POST['prix']); 
    endif;
endif;
$getProducts = $product->listProduct();
if (!empty($aParam[3])AND($aParam[3]!='oskoure')) {
    $getDetail = $product->detailProduct($aParam[3]);
}
?>
