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
$perso2 = new Personnage("vilain méchant pas gentil");

print("<div>".$perso1->setExperience(999999)->frapper($perso2)->getDegats() ."</div>");
$perso2->setExperience(15);

print("ken dit = ");
print($perso1->parler());
$perso1->frapper($perso2);
$perso2->frapper($perso1);

print("<div class='exp'> Stat de ".$perso1->getNom()." : 
            <p>XP = " . $perso1->afficheExperience() ."
            <br>FORCE = ". $perso1->getforce() ."
            <br>DEGATS = ". $perso1->getDegats()."</p>
        </div>");
        print("<div class='exp'> Stat de ".$perso2->getNom()." : 
            <p>XP = " . $perso2->afficheExperience() ."
            <br>FORCE = ". $perso2->getforce() ."
            <br>DEGATS = ". $perso2->getDegats()."</p>
       </div>");