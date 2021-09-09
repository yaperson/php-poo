<?php

include "Personnage.php";

print("<h1>JEU DE CASTAGNE</h1>");

$perso = new Personnage();
$perso->parler();
$perso->gagnerExperience();
print("<div>XP = " . $perso->afficheExperience() . "</div>");
