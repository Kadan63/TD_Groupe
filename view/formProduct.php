<?php include 'controller/instanceProduit.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- dans l'action du formulaire on verifie si le param 3 est vide ou non s'il n'est pas vide (cela veut dire qu'il contient un id de produit et donc qu'on et sur la modification) alors on ecrire l'id du produit dans l'url -->
    <form method='post' action="<?php echo $url ?>product/<?php if (!empty($aParam[3])): echo $getDetail[0]->idProduct."/"; endif; ?>oskoure">
        <!-- Pour cahque champ on attribue une valeur si il y a un id dans l'url, cette valeur sera les données du produit correspondant -->
    <input type="hidden" value="<?php if (!empty($aParam[3])): echo $getDetail[0]->idProduct; endif; ?>" name="idProduct">
        <p>
            <label for="name">Nom</label>
            <input type="text" name="nom" id="name" <?php if (!empty($aParam[3])): ?> value="<?php echo $getDetail[0]->title; ?>"<?php endif; ?>/>
        </p>
        <p>
            <label for="description">Description</label>
            <textarea name="description" id="description"><?php if (!empty($aParam[3])): echo $getDetail[0]->description; endif; ?></textarea>
        </p>
        <p>
            <label for="price">Prix</label>
            <input type="text" name="prix" id="price" <?php if (!empty($aParam[3])): ?> value="<?php echo $getDetail[0]->price; ?>"<?php endif; ?>/>
        </p>
        <p><input type="submit" value="Valider">
        </p>
    </form>
</body>
</html>
