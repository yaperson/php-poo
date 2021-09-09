<?php

include "Personnage.php";

print("<h1>JEU DE CASTAGNE</h1>");

// $perso = new Personnage();
// $perso->parler();
// $perso->gagnerExperience();
// print("<div>XP = " . $perso->afficheExperience() . "</div>");

$perso1 = new Personnage();
$perso1->definirForce(20);
$perso1->definirExperience(12);

$perso2 = new Personnage();
$perso2->definirForce(21);
$perso2->definirExperience(15);

print("Perso1 = ");
print($perso1->parler());
$perso1->frapper($perso2);
$perso2->frapper($perso1);

print("<div>XP p1 = " . $perso1->afficheExperience() . " degats = " . $perso1->afficheDegats() ."</div>");
print("<div>XP p2 = " . $perso2->afficheExperience() . " degats = " . $perso2->afficheDegats() ."</div>");