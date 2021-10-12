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

try {
    $db = new PDO($dsn, $user, $pwd);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
    $personnageManager = new PersonnageManager($db);
    $personnages = $personnageManager->getList();

    $perso1 = new Archer([
        'class' => 2,
        'id' => 9,
        'nom' => 'Akim',
        'force' => 25,
        'poche' => 50
    ]);
    $perso2 = new Guerrier([
        'class' => 4,
        'id' => 10,
        'nom' => 'JP',
        'force' => 27, 
        'poche' => 52
    ]);
    $perso3 = new Mama([
        'class' => 5,
        'id' => 11,
        'nom' => 'Malika',
        'force' => 99,
        'poche' => 30
    ]);
    $perso4 = new GitanVoleur([
        'class' => "Gitan",
        'id' => 12,
        'nom' => 'Lopez',
        'force' => 29
    ]);
    $perso5 = new BruteVoleur([
        'class' => "Brute",
        'id' => 13,
        'nom' => 'Jacky',
        'force' => 39
    ]);

    print('</br>Liste des personnages : </br>');

    $combat = new Ring();
    $combat->lancerCombat($perso1, $perso2);
    $combat->lancerCombat($perso3, $perso2);
    $combat->lancerCombat($perso2, $perso4);
    $combat->lancerCombat($perso5, $perso4);
    
    // foreach ($personnages as $personnage){
    //     // print('</br>' . $personnage->getNom());
    //     print('<h3> <a href="personnage_view.php?id='. $personnage->getId() .'">' . $personnage->getNom() . ' : </a></h3>');
    //     $combat = new Ring();
    //     $combat->lancerCombat($personnage, $personnage);
    // }
    // $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // if ($db){
    //     print('Lecture de la base de donnée :');
    //     $request = $db->query('SELECT id, nom, `force`, degats, niveau, experience FROM perso;');
    //     while ($ligne = $request->fetch(PDO::FETCH_ASSOC)) {
    //         $perso = new Personnage($ligne);
    //         print('<h3>' . $perso->getNom() . '</h3> ça force est de : ' . $perso->getForce() . '<br> ses dégats sont : ' . $perso->getDegats() . '<br> son XP est :' . $perso->getExperience() . '<br> Il est niveau : ' . $perso->getNiveau());
    //     }
    // }
    // <p class="exp"> ça force est de : ' . $personnage->getForce() . '<br> ses dégats sont : ' . $personnage->getDegats() . '<br> son XP est :' . $personnage->getExperience() . '<br> Il est niveau : ' . $personnage->getNiveau() .'</p>');
} catch (PDOException $e){
    print($e->getMessage());
}

?>
