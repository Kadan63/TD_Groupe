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

    <h1><?php echo $getDetail[0]->title;?></h1>
    <p><?php echo $getDetail[0]->description;?></p>
    <p><?php echo $getDetail[0]->price;?></p>
    <a href="<?php echo $url ?>product"><button>Retourner à l'accueil</button></a>
</body>
</html>
