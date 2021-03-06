<?php include ("controller/instanceProduit.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste </title>
</head>
<body>
    <h1>Liste des produits</h1>
    <a href="<?php echo $url?>form" title="Ajouter">Ajouter un nouveau produit</a>
    <table style="border:1px solid black;width:100%;">
        <tr >
            <th style="text-align:left;">Nom</th>
            <th style="text-align:left;">Prix</th>
            <th colspan="2" style="text-align:left;">Action</th>
        </tr>
        <!-- foreach pour explorer l'objet qui contient tous le sproduits de la BDD obtenue via la premiere requete -->
        <?php foreach($getProducts as $key => $info):?>
        <tr>
            <td><?php echo $info->title;?></td>
            <td><?php echo $info->price;?></td>
            <!-- on affiche les infos de chaque objet via la variables info du foreach -->
            <td><a href="<?php echo $url ?>detail/<?php echo $info->idProduct ?>">En savoir plus</a></td>
            <td><a href="<?php echo $url ?>form/<?php echo $info->idProduct ?>" title="Modifier">Modifier</a></td>
            <td><a href="<?php echo $url ?>product/<?php echo $info->idProduct ?>/delete" title="Supprimer">Supprimer</a></td>
        </tr>
        <?php endforeach; ?>
    </table>


</body>
</html>
