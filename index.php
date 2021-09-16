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

function chargerClasse(string $classe){
    include $classe . ".php";
}

spl_autoload_register('chargerClasse');

include "conf.php";

try {
    $db = new PDO($dsn, $user, $pwd);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    if ($db){
        print('Lecture de la base de donnée :');
        $request = $db->query('SELECT id, nom, `force`, degats, niveau, experience FROM perso;');
        while ($ligne = $request->fetch(PDO::FETCH_ASSOC)) {
            $perso = new Personnage($ligne);
            print('<h3>' . $perso->getNom() . '</h3> ça force est de : ' . $perso->getForce() . '<br> ses dégats sont : ' . $perso->getDegats() . '<br> son XP est :' . $perso->getExperience() . '<br> Il est niveau : ' . $perso->getNiveau());
        }
    }
} catch (PDOException $e){
    print($e->getMessage());
}

?>
