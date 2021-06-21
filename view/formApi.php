<?php include 'controller/instanceProduit.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='post' action="<?php echo $url ?>api/products">
    <input type="hidden" name="idProduct">
        <p>
            <label for="name">Nom</label>
            <input type="text" name="nom" id="name"/>
        </p>
        <p>
            <label for="description">Description</label>
            <textarea name="description" id="description"></textarea>
        </p>
        <p>
            <label for="price">Prix</label>
            <input type="text" name="prix" id="price"/>
        </p>
        <p>
            <label for="selectProduct">Produit n° :</label>
            <select id="selectProduct" name="product">
            <option value="ajout" selected>Ajout</option>
            <?php foreach ($getProducts as $value) : ?>
            <option value="<?php echo $value->title; ?>"><?php echo $value->title; ?></option>
            <?php endforeach; ?>
            </select>
        </p>
        <p><input type="submit" value="Valider" name ="Ajouter">
        </p>
    </form>
</body>
</html>