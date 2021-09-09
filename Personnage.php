<?php

class Personnage
{
    private $_nom = 'Inconnu';
    private $_force = 50;
    private $_experience = 1;
    private $_degats = 0;

    public function __construct($nom, $force = 50, $degats = 0){
        $this->setNom($nom);
        $this->setForce($force);
        $this->setDegats($degats);
        $this->setExperience(1);
    }

    public function __toString(){
        return $this->getNom() . "(". $this->getDegats() .")";
    }

    public function setNom($nom){
        if (!is_string($nom)){
            trigger_error('Le nom d\'un personnage doit être un texte', E_USER_ERROR);
            return;
        }
        $this->_nom = $nom;
    }

    
    public function getNom(){
        return $this->_nom;
    }

    public function setForce($force){
        if (!is_int($force)){
            trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_ERROR);
            return;
        }
        if ($force > 100){
            trigger_error('La force d\'un personnage ne doit pas dépasser 100', E_USER_ERROR);
            return;
        }
        $this->_force = $force;
    }

    public function getforce(){
        
    }

    public function setExperience($_experience){
        $this->_experience = $_experience;
    }

    public function gagnerExperience(){
        $this->_experience++;
    }

    public function afficheExperience(){
        return $this->_experience;
    }

    public function setDegats($degats){
        if (!is_int($degats)){
            trigger_error('Les dégats d\'un personnage doit être un nombre entier', E_USER_ERROR);
            return;
        }
        $this->_degats = $degats;
    }

    public function getDegats(){
        return $this->_degats;
    }

    public function parler(){
        print("Omae wa mō shindeiru.");
    }

    public function frapper(Personnage $adversaire){
        // $adversaire->_degats += $this->_force; idem a :
            $adversaire->_degats = $adversaire->_degats + $this->_force;
            $this->gagnerExperience();
            print('<div>'. $adversaire .'c\'est pris une mandale par ' . $this .' ==> Dégats de '. $adversaire . ' = '. $adversaire .'</div>');
    }
}
