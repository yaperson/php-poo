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

include "Personnage.php";

// $perso = new Personnage();
// $perso->parler();
// $perso->gagnerExperience();
// print("<div>XP = " . $perso->afficheExperience() . "</div>");

$perso1 = new Personnage("ken", 100, 0);
// $perso1->definirForce(200000000000);
$perso1->setExperience(999999999999);

$perso2 = new Personnage("vilain méchant pas gentil");
// $perso2->definirForce(21);
$perso2->setExperience(15);

print("ken = ");
print($perso1->parler());
$perso1->frapper($perso2);
$perso2->frapper($perso1);

print("<div> XP de ken = " . $perso1->afficheExperience() ."</div>");
print("<div>XP du vilain méchant pas gentil = " . $perso2->afficheExperience() ."</div>");