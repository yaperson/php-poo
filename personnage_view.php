<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LA CASTAGNE</title>
</head>
<body>
<h1>JEU DE LA CASTAGNE</h1>
</body>
</html>
<?php

// include "Personnage.php";

include "header.php";
$id = $_GET['id'];

try {
    $db = new PDO($dsn, $user, $pwd);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
    $personnageManager = new PersonnageManager($db);
    $personnage = $personnageManager->getOne($id);

    print('</br>Stats de ' . $personnage . ' : ');

    print('<p class="exp"> ça force est de : ' . $personnage->getForce() . '<br> ses dégats sont : ' . $personnage->getDegats() . '<br> son XP est :' . $personnage->getExperience() . '<br> Il est niveau : ' . $personnage->getNiveau() .'</p>');

}catch (PDOException $e){
    print($e->getMessage());
}

?>
</body>
</html>