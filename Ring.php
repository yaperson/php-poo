<?php

class Ring {
    public function lancerCombat(Personnage $perso1, Personnage $perso2){
        $perso1->frapper($perso2);
    }

}