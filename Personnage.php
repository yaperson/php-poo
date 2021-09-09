<?php

class Personnage
{
    private $_nom = 'Inconnu';
    private $_force = 50;
    private $_experience = 1;
    private $_degats = 0;

    public function definirForce($force){
        $this->_force = $force;
    }

    public function frapper($adversaire){
        // $adversaire->_degats += $this->_force; idem a :
            $adversaire->_degats = $adversaire->_degats + $this->_force;
    }

    public function definirExperience($_experience){
        $this->_experience = $_experience;
    }

    public function gagnerExperience(){
        $this->_experience++;
    }

    public function afficheExperience(){
        return $this->_experience;
    }

    public function afficheDegats(){
        return $this->_degats;
    }

    public function parler(){
        print("Hé TOI JVAI MANGER T MORT !");
    }

}
