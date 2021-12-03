<?php include ("model/product.php");

$url = '/TD_Groupe/';
$product = new Produit;
// $product->modifyProduct(1, "test", "desc", 1.56);
// On test l'url pour voir si on trouve un param 3 qui contient l'id et un param 4 "oskoure" qui veut dire qu'on a utilsé le formulaire
// Si c'est deux condition sont reunis alors on appel la methode pour modifier le produit en récuperant l'id et toute les autres info depuis le tableau $_POST généré par le formulaire
if(!empty($aParam[4])AND($aParam[4]=='oskoure')) :
    $product->modifyProduct($_POST['idProduct'], $_POST['nom'], $_POST['description'], $_POST['prix']);
    header("Location: {$url}product");
endif;
// Même principe qu'au dessus "oskoure" signifie formulaire utilisé mais cette fois pas d'id donc on appelle la méthode pour ajouter et on passe la tableau $_POST en param
if (!empty($aParam[3]) AND ($aParam[3]=='oskoure')) :
    $product->addProduct(2, $_POST['nom'], $_POST['description'], $_POST['prix']);
    header("Location: {$url}product");
endif;
// On fait les verif !empty habituelle et on verif si il y a un id en param 3 et le mot "delete" en param 4
// Si les deux conditions sont reunis alors on appelle la methode pous suprimmer un produits
// On lui passe l'id du produit récupéré depuis l'url en parametre
if (!empty($aParam[4])) :
    if(!empty($aParam[3])AND($aParam[4]=='delete')) :
        $product->deleteProduct($aParam[3]);
        header("Location: {$url}product");
    endif;
endif;
// Var qui contient tous les produits
$getProducts = $product->listProduct();
// Si il y a un id dans l'url et pas autre chose
// On appelle la méthiode pour avoir un produit précis et on lui passe en param l'id du produit récup depuis l'url
if (!empty($aParam[3]) AND ($aParam[3]!='oskoure') AND ($aParam[3]!='products')) :
    $getDetail = $product->detailProduct($aParam[3]);
endif;
// Même chose qu'au dessus mais pour l'api cette fois
// Vu que l'url de l'api est différente les param aussi donc on adapte
// Ici on verif s'il y a un id et si il y a "products" dans l'url ce qui correspond à l'url de l'api
// Alors on appelle la méthode qui recupere un produit
if (!empty($aParam[3]) AND ($aParam[3]=='products') AND !empty($aParam[4])) :
    $getDetail = $product->detailProduct($aParam[4]);
endif;
?>
