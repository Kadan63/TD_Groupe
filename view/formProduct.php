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
<body><?php if (empty($aParam[3])): ?>
    <form method='post' action="<?php echo $url ?>product/<?php echo $getDetail->idProduct?>/oskoure">
    <input type="hidden" value="<?php echo $getDetail->idProduct; ?>" name="idProduct">
        <p>
            <label for="name">Nom</label>
            <input type="text" name="nom" id="name" value="<?php echo $getDetail->title; ?>"/> 
        </p>
        <p>
            <label for="description">Description</label>
            <textarea name="description" id="description"><?php echo $getDetail->description; ?></textarea>
        </p>
        <p>
            <label for="price">Prix</label>
            <input type="text" name="prix" id="price" value="<?php echo $getDetail->price; ?>"/> 
        </p>
        <p><input type="submit" value="Valider">
        </p>
    </form>
    <?php else :?>
    <form method='post' action="<?php echo $url ?>product/oskoure">
        <p>
            <label for="name">Nom</label>
            <input type="text" name="nom" id="name" value="<?php echo $getDetail->title; ?>"/> 
        </p>
        <p>
            <label for="description">Description</label>
            <textarea name="description" id="description"><?php echo $getDetail->description; ?></textarea>
        </p>
        <p>
            <label for="price">Prix</label>
            <input type="text" name="prix" id="price" value="<?php echo $getDetail->price; ?>"/> 
        </p>
        <p><input type="submit" value="Valider">
        </p>
    </form> 
    <?php endif; ?>
</body>
</html>