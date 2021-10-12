<?php

class Ring {
    public function lancerCombat(Personnage $perso1, Personnage $perso2){
        $perso1->attaquer($perso2);
        $perso2->attaquer($perso1);
        print('</br></br>'.$perso1); $perso1->insulter();
        print('</br></br>'.$perso2 ); $perso2->insulter();
        print('<br>--------------------------------------------');
    }
}