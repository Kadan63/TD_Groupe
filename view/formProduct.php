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
    <form method='post' action="<?php echo $url ?>product/<?php if (!empty($aParam[3])): echo $getDetail->idProduct."/"; endif; ?>oskoure">
    <input type="hidden" value="<?php if (!empty($aParam[3])): echo $getDetail->idProduct; endif; ?>" name="idProduct">
        <p>
            <label for="name">Nom</label>
            <input type="text" name="nom" id="name" <?php if (!empty($aParam[3])): ?> value="<?php echo $getDetail->title; ?>"<?php endif; ?>/>
        </p>
        <p>
            <label for="description">Description</label>
            <textarea name="description" id="description"><?php if (!empty($aParam[3])): echo $getDetail->description; endif; ?></textarea>
        </p>
        <p>
            <label for="price">Prix</label>
            <input type="text" name="prix" id="price" <?php if (!empty($aParam[3])): ?> value="<?php echo $getDetail->price; ?>"<?php endif; ?>/>
        </p>
        <p><input type="submit" value="Valider">
        </p>
    </form>
</body>
</html>
